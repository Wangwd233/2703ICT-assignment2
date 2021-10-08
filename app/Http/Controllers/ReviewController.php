<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'review' => 'required|max:255',
            'rating' => 'required|numeric|gte:1|lte:5',
        ]);
        $review = new Review();
        $review->item_id = $request->item_id;
        $review->user_id = Auth::user()->id;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->save();
        return redirect("item/$request->item_id");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::find($id);
        return view('reviews.review_show')->with('review', $review); 
        //
        //dd('in review.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id);
        return view('reviews.review_edit')->with('review', $review);
        //
        //dd("In review edit");
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
        $this->validate($request, [
            'review' => 'required|max:255',
            'rating' => 'required|numeric|gte:1|lte:5',
         ]);
        $review = Review::find($id);
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->save();
        return redirect("review/$review->id");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item = Review::find($id)->item;
        $review = Review::find($id);
        $review->delete();
        return redirect("item/{$item->id}");
    }
}
