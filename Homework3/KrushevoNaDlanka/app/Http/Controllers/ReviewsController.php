<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    //

    public function store()
    {
        request()->validate([
            'rating' => 'required',
            'body' => 'required',
        ]);
        //$user = Auth::user();

        $review = new Review();
        $review->location_id = request()->location_id;
        $review->user_id = auth()->user()->id;
        $review->body = request()->body;
        $review->rating = request()->rating;
        $review->save();

        return redirect('/locations/'.$review->location_id);
    }
}
