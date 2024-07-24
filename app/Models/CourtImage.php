<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourtImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'court_id',
        'image',
    ];
    function Court()
    {
        return $this->belongsTo(Court::class);
    }

    public function index()
    {
        $images = CourtImage::all();
        return inertia('CourtImages/Index', ['images' => $images]);
    }
}
