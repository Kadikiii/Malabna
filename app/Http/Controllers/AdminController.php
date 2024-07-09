<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
class AdminController extends Controller
{
    public function index()
    {
        return inertia::render('Admin/dashboard');
    }

    public function courts()
    {
        return 'ok';
    }
}
 