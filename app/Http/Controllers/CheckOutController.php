<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CheckOutController extends Controller
{

    public function store()
    {
        return Inertia::render('User/CheckOut');
    }
}
