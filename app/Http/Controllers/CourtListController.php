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
        $filteresCourts = $courts->filtered()->paginate(15)->withQueryString();
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

    public function search(Request $request)
    {
        $searchQuery = $request->input('searchQuery');

        $courts = Court::with('court_images')
            ->where('name', 'like', '%' . $searchQuery . '%')
            ->orWhere('address', 'like', '%' . $searchQuery . '%')
            ->paginate(9)
            ->appends($request->query());

        return Inertia::render('User/CourtList', [
            'courts' => CourtResource::collection($courts)
        ]);
    }
}
