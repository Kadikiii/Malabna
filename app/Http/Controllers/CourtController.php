<?php

namespace App\Http\Controllers;

use App\Models\Court;
use App\Models\CourtImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourtController extends Controller
{
    public function index()
    {
        $courts = court::with('court_images')->get();
        return inertia('Admin/Courts/index', ['courts' => $courts]);
    }

    public function store(Request $request)
    {
        $court = new Court;
        $court->name = $request->name;
        $court->description = $request->description;
        $court->address = $request->address;
        $court->price_per_hour = $request->price_per_hour;
        $court->save();

        //check if court have images
        if ($request->hasFile('court_images')) {
            $courtImages = $request->file('court_images');
            foreach ($courtImages as $image) {
                //Generate a unique name for the image
                $uniqueName = time() . '-' . Str::random(10) . '.' . $image->getClientOriginalExtension();

                //Store the image in a public folder
                $image->move('court_images' . $uniqueName);

                //Create a new court image record with the court_id and unique name
                CourtImage::create([
                    'court_id' => $court->id,
                    'image' => 'court_images/' . $uniqueName,
                ]);
            }
        }
        return redirect()->route('admin.courts')->with('success', 'Court created successfully.');
    }
}
