<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function show($id)
    {
        $location = Location::findOrFail($id);
        return view('locations.show', ['location' => $location]);
    }

    public function create()
    {
        return view('locations.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'rating' => 'required',
            'image_1' => 'required',
            'image_2' => 'required',
            'image_3' => 'required',
            'x_coordinate' => 'required',
            'y_coordinate' => 'required',
            'category_id' => 'required'
        ]);

        Location::create($data);
        dd(request()->all());
    }
}
