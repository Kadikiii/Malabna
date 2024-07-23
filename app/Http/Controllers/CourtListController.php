<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class CourtListController extends Controller
{
    public function index() {
        return inertia::render('User/CourtList');
    }
}
