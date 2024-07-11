<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'price_per_hour',
        'image',
    ];

    public function court_images()
    {
        return $this->hasMany(CourtImage::class);
    }
}
