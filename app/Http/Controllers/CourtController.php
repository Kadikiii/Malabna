<?php

namespace App\Http\Controllers;

use App\Models\Court;
use Illuminate\Http\Request;

class CourtController extends Controller
{
    public function index()
    {
        $courts = court::get();
        return inertia('Admin/Courts/index', ['courts' => $courts]);
    }
}
