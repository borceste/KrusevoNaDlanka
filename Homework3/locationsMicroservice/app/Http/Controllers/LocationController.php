<?php

namespace App\Http\Controllers;


use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    public function showAllLocations()
    {
        return response()->json(Location::all());
    }

    public function showOneLocation($id)
    {
        return response()->json(Location::find($id));
    }

    public function create(Request $request)
    {
        $location = Location::create($request->all());

        return response()->json($location, 201);
    }

    public function update($id, Request $request)
    {
        $location = Location::findOrFail($id);
        $location->update($request->all());

        return response()->json($location, 200);
    }

    public function delete($id)
    {
        Location::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
