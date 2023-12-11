<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Grade;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

// Intervention Image Method

// // create Image from file
// $img = Image::make(asset('storage/' . $card->cert_img));

// // use callback to define details
// $img->text($certificate->type, 0, 0, function ($font) {
//     $font->file(public_path("developer.ttf"));
//     $font->size(24);
//     $font->color('#fdf6e3');
//     $font->align('center');
//     $font->valign('top');
//     $font->angle(45);
// });

// $img->save(asset('storage/' . $card->cert_img . '-new'));

// return $img->response("jpg");

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function archives(Request $request)
    {
        $serial = $request->serial ?? "";
        $certificate = Certificate::where('serial', $serial)->first();
        if (null !== $certificate) {
            $grade = Grade::find($certificate->grade_id);
            $card = Card::find($grade->card_id);

            $name_len = strlen($certificate->note);

            //designed certificate picture
            $image = public_path('certificate_images/' . $card->cert_img);

            $extension = strtolower(strrchr($image, '.'));

            switch ($extension) {
                case '.jpg':
                case '.jpeg':
                    $createimage = @imagecreatefromjpeg($image);
                    $createimage = imagescale($createimage, 500, 600);
                     //designed background picture
                     $black_bg = public_path("black-bg.png");
                     $background = @imagecreatefrompng($black_bg);
                     $black_bg = imagescale($background, 500, 800);
                     imagecopy($black_bg, $createimage, (imagesx($black_bg)) - (imagesx($createimage)), (imagesy($black_bg)) - (imagesy($createimage)), 0, 0, (imagesx($createimage)), (imagesy($createimage)));
                     //designed background picture
                    break;
                case '.gif':
                    $createimage = @imagecreatefromgif($image);
                    $createimage = imagescale($createimage, 500, 600);
                     //designed background picture
                     $black_bg = public_path("black-bg.png");
                     $background = @imagecreatefrompng($black_bg);
                     $black_bg = imagescale($background, 500, 800);
                     imagecopy($black_bg, $createimage, (imagesx($black_bg)) - (imagesx($createimage)), (imagesy($black_bg)) - (imagesy($createimage)), 0, 0, (imagesx($createimage)), (imagesy($createimage)));
                     //designed background picture
                    break;
                case '.png':
                    $createimage = @imagecreatefrompng($image);
                    $createimage = imagescale($createimage, 500, 600);
                    //designed background picture
                    $black_bg = public_path("black-bg.png");
                    $background = @imagecreatefrompng($black_bg);
                    $black_bg = imagescale($background, 500, 800);
                    imagecopy($black_bg, $createimage, (imagesx($black_bg)) - (imagesx($createimage)), (imagesy($black_bg)) - (imagesy($createimage)), 0, 0, (imagesx($createimage)), (imagesy($createimage)));
                    //designed background picture
                    break;
                default:
                    $createimage = false;
                    break;
            }

            //this is going to be created once the search button is clicked
            $output = "certificate.png";

            //then we make use of the imagecolorallocate inbuilt php function which i used to set color to the text we are displaying on the image in RGB format
            $white = imagecolorallocate($createimage, 205, 245, 255);
            $black = imagecolorallocate($createimage, 0, 0, 0);

            //Then we make use of the angle since we will also make use of it when calling the imagettftext function below
            $rotation = 0;

            //we then set the x and y axis to fix the position of our text type
            $origin_x = 20;
            $origin_y = 30;

            //we then set the x and y axis to fix the position of our text name
            $origin1_x = 20;
            $origin1_y = 80;

            //we then set the x and y axis to fix the position of our text edition
            $origin2_x = 20;
            $origin2_y = 130;

            //we then set the x and y axis to fix the position of our text grade
            $origin3_x = 280;
            $origin3_y = 80;

            //we then set the x and y axis to fix the position of our text serial
            $origin4_x = 280;
            $origin4_y = 130;

            //we then set the x and y axis to fix the position of our text note
            $origin5_x = 20;
            $origin5_y = 180;

            //we then set the differnet size range based on the lenght of the text which we have declared when we called values from the form
            $font_size = 15;

            if ($name_len <= 7) {
                $font_size1 = 25;
            } elseif ($name_len <= 12) {
                $font_size1 = 30;
            } elseif ($name_len <= 15) {
                $font_size1 = 26;
            } elseif ($name_len <= 20) {
                $font_size1 = 18;
            } elseif ($name_len <= 22) {
                $font_size1 = 15;
            } elseif ($name_len <= 33) {
                $font_size1 = 11;
            } else {
                $font_size1 = 10;
            }

            $certificate_text = $certificate->type;
            $certificate_text1 = $certificate->name;
            $certificate_text2 = $certificate->edition;
            $certificate_text3 = $certificate->grade;
            $certificate_text4 = $certificate->serial;
            $certificate_text5 = $certificate->note;

            //font directory for name
            $drFont = public_path("developer.ttf");

            // font directory for occupation name
            $drFont1 = public_path("Gotham-Black.otf");

            //function to display name on certificate picture
            $text = imagettftext($black_bg, $font_size, $rotation, $origin_x + 2, $origin_y, $white, $drFont1, $certificate_text);

            $text1 = imagettftext($black_bg, $font_size, $rotation, $origin1_x + 2, $origin1_y, $white, $drFont1, $certificate_text1);

            $text2 = imagettftext($black_bg, $font_size, $rotation, $origin2_x + 2, $origin2_y, $white, $drFont1, $certificate_text2);

            $text3 = imagettftext($black_bg, $font_size, $rotation, $origin3_x + 2, $origin3_y, $white, $drFont1, $certificate_text3);

            $text4 = imagettftext($black_bg, $font_size, $rotation, $origin4_x + 2, $origin4_y, $white, $drFont1, $certificate_text4);

            $text5 = imagettftext($black_bg, $font_size1, $rotation, $origin5_x + 2, $origin5_y, $white, $drFont1, $certificate_text5);

            imagepng($black_bg, $output, 3);

            return ' 
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Gradehero Certificate Image</title>
            </head>
            <body>
                <div style="text-align: center; padding: 10px;">
                    <img src="certificate.png" alt="certificate">
                </div>
                <div style="text-align: center; padding: 10px; background: green; max-width: 300px; margin: auto;">
                    <a href="certificate.png" style="text-align: center; padding: 10px; color: black; text-decoration: none;" download>Download Certificate</a>
                </div>
            </body>
            </html>
            ';
        } else {
            return "No certificate issued for card with that serial!";
        }
    }
}
