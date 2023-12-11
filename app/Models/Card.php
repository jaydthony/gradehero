<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('series', 'like', '%' . request('search') . '%')
                ->orWhere('service', 'like', '%' . request('search') . '%')
                ->orWhere('email', 'like', '%' . request('search') . '%');
        }
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
