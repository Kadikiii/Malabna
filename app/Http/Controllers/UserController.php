<?php

namespace App\Http\Controllers;

use App\Models\Court;
use App\Models\CourtImage;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        $courts = Court::with('court_images')->limit(4)->get();
         //dd($courts);
        return Inertia::render('User/index',  [
            'courts' => $courts,
            'canLogin' => app('router')->has('login'),
            'canRegister' => app('router')->has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }


    public function contact()
    {
        return inertia::render('User/Components/ContactForm');
    }

    public function home()
    {
        return inertia::render('User/home');

    }

    public function about(){
        return inertia::render('User/Components/About');
    }

    public function terms(){
        return inertia::render('User/Components/Terms');
    }
}