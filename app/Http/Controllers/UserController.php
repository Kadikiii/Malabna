<?php

namespace App\Http\Controllers;

use App\Models\Court;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        $courts = Court::with('court_images')->limit(8)->get();
        return Inertia::render('User/index', [
            'courts' => $courts,
            'canLogin' => app('router')->has('login'),
            'canRegister' => app('router')->has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }

<<<<<<< HEAD
    public function contact() {
        return inertia::render('User/Components/ContactForm');
    }

    public function home(){
        return inertia::render('User/home');
=======
    public function home(){
        return Inertia::render('User/home');
>>>>>>> 3d1a59e0c2ac81c038b74251df6fdaa1168c4aef
    }
}
