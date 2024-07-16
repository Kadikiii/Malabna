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

    public function home(){
        return Inertia::render('User/home');
    }
}
