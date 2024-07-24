<?php

namespace App\Http\Controllers;

use App\Http\Resources\courtResource;
use App\Models\Court;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CourtListController extends Controller
{
    public function index()
    {
        $courts = Court::with('court_images');
        $filteresCourts = $courts->filtered()->paginate(9)->withQueryString();
        return inertia::render(
            'User/CourtList',
            [
                'courts' => courtResource::collection($filteresCourts)
            ]
        );
    }
    public function show(Court $court)
    {
        return inertia::render('User/Court', [
            'court' => $court->load('court_images'),
        ]);
    }
}
