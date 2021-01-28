<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

/**
 * Class LocationsApiController - Controller for the Microservice
 * @package App\Http\Controllers
 */
class LocationsApiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Location::all(), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $location = Location::create($request->only('name',
            'description',
            'rating',
            'image_1',
            'image_2',
            'image_3',
            'x_coordinate',
            'y_coordinate',
            'category_id'));

        return response($location, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response(Location::query()->findOrFail($id), Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $location = Location::query()->findOrFail($id);

        $location->update($request->only('name',
            'description',
            'rating',
            'image_1',
            'image_2',
            'image_3',
            'x_coordinate',
            'y_coordinate',
            'category_id'));

        return response($location, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Location::destroy($id);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
