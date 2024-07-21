<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'description',
        'address',
        'price_per_hour',
    ];

    public function court_images()
    {
        return $this->hasMany(CourtImage::class);
    }
}
