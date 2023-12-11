<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\User;
use App\Models\Grade;
use App\Models\Image;
use App\Models\Contact;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CardController extends Controller
{
    public function index()
    {
        return view('uploadcard');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'series' => 'required',
            'service' => 'required',
            'speed' => 'required',
            'desc' => 'required',
            'qty' => 'required',
            'worn_edges' => 'required',
            'creases' => 'required',
            'scratches' => 'required',
            'worn_corners' => 'required',
            'comment' => 'nullable|string'
        ]);

        if ($request->hasFile('cert_img')) {
            $imageName = $data['email'] . '-certificate-image-' . time() . rand(1, 1000) . '.' . $request->cert_img->extension();
            $request->cert_img->move(public_path('certificate_images'), $imageName);
            $data['cert_img'] = $imageName;
        }

        $new_card = Card::create($data);
        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = $data['email'] . '-image-' . time() . rand(1, 1000) . '.' . $image->extension();
                $image->move(public_path('card_images'), $imageName);
                Image::create([
                    'card_id' => $new_card->id,
                    'image' => $imageName
                ]);
            }
        }

        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $cardname = $data['series'] . " " . "card grading";
        if ($data["service"] == "Basic") {
            $totalprice = 199;
        } elseif ($data["service"] == "Premium") {
            $totalprice = 245;
        } elseif ($data["service"] == "Basic Above 10 Cards") {
            if ($data["qty"] > 10) {
            $totalprice = 149;
            }
            $totalprice = 199;
        } elseif ($data["service"] == "Premium Above 10 Cards") {
            if ($data["qty"] > 10) {
            $totalprice = 199;
            }
            $totalprice = 245;
        } else {
            $totalprice = 199;
        }

        $total = "$totalprice";

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'EUR',
                        'product_data' => [
                            "name" => $cardname,
                        ],
                        'unit_amount' => $total,
                    ],
                    'quantity' => $data["qty"],
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('upload-card'),
        ]);
        return redirect()->away($session->url);
    }

    public function success()
    {
        return view("success-payment");
    }

    public function dashboard()
    {
        return view('admin.dashboard', [
            'cards' => Card::latest()->get(),
            'graded' => Grade::latest()->get(),
            'certificates' => Certificate::latest()->get()
        ])->with("message", "Welcome Admin!");
    }

    public function cards()
    {
        return view('admin.cards', [
            'cards' => Card::latest()->get(),
            'graded' => Grade::latest()->get(),
            'certificates' => Certificate::latest()->get()
        ]);
    }

    public function grade($card)
    {
        return view('admin.grade', [
            'cards' => Card::latest()->get(),
            'graded' => Grade::latest()->get(),
            'certificates' => Certificate::latest()->get(),
            'card' => Card::find($card)
        ]);
    }

    public function editGraded($grade)
    {
        return view('admin.edit-graded', [
            'cards' => Card::latest()->get(),
            'graded' => Grade::latest()->get(),
            'certificates' => Certificate::latest()->get(),
            'grade' => Grade::find($grade)
        ]);
    }

    public function updateGraded(Request $request, Grade $grade)
    {
        $data = $request->validate([
            'rating' => 'required',
            'admin_desc' => 'required'
        ]);

        $grade->update($data);

        return redirect("/admin/graded-cards")->with('message', 'Grading updated successfully!');
    }

    public function editCertificate($certificate)
    {
        return view('admin.edit-certificate', [
            'cards' => Card::latest()->get(),
            'graded' => Grade::latest()->get(),
            'certificates' => Certificate::latest()->get(),
            'certificate' => Certificate::find($certificate)
        ]);
    }

    public function profile($id)
    {
        return view('admin.profile', [
            'cards' => Card::latest()->get(),
            'graded' => Grade::latest()->get(),
            'certificates' => Certificate::latest()->get(),
            'user' => User::find($id)
        ]);
    }

    public function updateCertificate(Request $request, Certificate $certificate)
    {
        $data = $request->validate([
            'type' => 'required',
            'name' => 'required',
            'edition' => 'required',
            'serial' => 'required',
            'grade' => 'required',
            'note' => 'required'
        ]);

        $certificate->update($data);

        return redirect("/admin/issued-certificates")->with('message', 'Certificate updated successfully!');
    }

    public function updateProfile(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $data['password'] = bcrypt($data['password']);

        $user->update($data);

        return redirect("/admin/dashboard")->with('message', 'Profile updated successfully!');
    }

    public function issue($grade)
    {
        return view('admin.issue-certificate', [
            'cards' => Card::latest()->get(),
            'graded' => Grade::latest()->get(),
            'certificates' => Certificate::latest()->get(),
            'grade' => Grade::find($grade),
            'random_number' => Certificate::random_number()
        ]);
    }

    public function storeCertificate(Request $request)
    {
        $data = $request->validate([
            'grade_id' => 'required',
            'type' => 'required',
            'name' => 'required',
            'edition' => 'required',
            'serial' => 'required',
            'grade' => 'required',
            'note' => 'required'
        ]);
        Certificate::create([
            'grade_id' => $data['grade_id'],
            'type' => $data['type'],
            'name' => $data['name'],
            'edition' => $data['edition'],
            'serial' => $data['serial'],
            'grade' => $data['grade'],
            'note' => $data['note']
        ]);
        return redirect('/admin/issued-certificates')->with("message", "Certificate generated successfully!");
    }

    public function save(Request $request)
    {
        $data = $request->validate([
            'card_id' => 'required',
            'rating' => 'required',
            'admin_desc' => 'required'
        ]);
        Grade::create([
            'card_id' => $data['card_id'],
            'rating' => $data['rating'],
            'admin_desc' => $data['admin_desc']
        ]);
        return redirect('/admin/graded-cards')->with("message", "Card graded successfully!");
    }

    public function graded()
    {
        return view('admin.graded-cards', [
            'cards' => Card::latest()->get(),
            'graded' => Grade::latest()->get(),
            'certificates' => Certificate::latest()->get(),
        ]);
    }

    public function contacts()
    {
        return view('admin.contacts', [
            'cards' => Card::latest()->get(),
            'graded' => Grade::latest()->get(),
            'certificates' => Certificate::latest()->get()
        ]);
    }

    public function messages()
    {
        return view('admin.messages', [
            'cards' => Card::latest()->get(),
            'graded' => Grade::latest()->get(),
            'certificates' => Certificate::latest()->get(),
            'messages' => Contact::latest()->get()
        ]);
    }

    public function certificates()
    {
        return view('admin.certificates', [
            'cards' => Card::latest()->get(),
            'graded' => Grade::latest()->get(),
            'certificates' => Certificate::latest()->get()
        ]);
    }

    public function image($serial)
    {
        return view('admin.certificate-image', [
            'cards' => Card::latest()->get(),
            'graded' => Grade::latest()->get(),
            'certificates' => Certificate::latest()->get(),
            'certificate' => Certificate::where('serial', $serial)->first()
        ]);
    }
}
