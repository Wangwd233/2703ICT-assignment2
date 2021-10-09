<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Review;
use App\Models\Reviewclick;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    function __construct(){
        $this->middleware('auth', ['except'=>['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::all();
        return view('items.items_list')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //dd('create route');
        return view('items.item_create');
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
           'name' => 'required|max:255',
           'manufacturer' => 'required|max:255',
           'description' => 'required|max:255',
           'price' => 'required|numeric|gte:1',
           'url' => 'url|nullable',
        ]);

        $item = new Item();
        $item->name = $request->name;
        $item->manufacturer = $request->manufacturer;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->url = $request->url;
        $item->save();
        return redirect("item/$item->id");
        //
        //dd("store route");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $item = Item::find($id);
        $reviews = Item::find($id)->reviews;
        $images = Item::find($id)->images;
        $isReviewed = false;
        $isUploaded = false;
        if (Auth::check()){
            $user_id = Auth::user()->id;
            for ($i=0; $i < count($reviews); $i++) { 
               if ($reviews[$i]->user_id == $user_id){
                   $isReviewed = true;
               }
            }; 
        }
        if (count($images) > 0){
            $isUploaded = true;
        }
        
        $reviews = Review::where('item_id', '=', $id)->paginate(5);
         
        //dd($item);
        return view('items.item_show')->with('item', $item)->with('reviews', $reviews)->with('images', $images)->with('isReviewed', $isReviewed)->with('isUploaded', $isUploaded);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = item::find($id);
        return view('items.item_edit')->with('item', $item);
        //
        //dd("In edit");
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
            'name' => 'required|max:255',
            'manufacturer' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric|gte:1',
            'url' => 'url|nullable',
        ]);
        
        $item = Item::find($id);
        $item->name = $request->name;
        $item->manufacturer = $request->manufacturer;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->url = $request->url;
        $item->save();
        return redirect("item/$item->id");
        //
        //dd('In update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reviews = Item::find($id)->reviews;
        for($i=0;$i<count($reviews);$i++){
            $review = Review::find($reviews[$i]->id);
            $reviewclicks = Review::find($reviews[$i]->id)->reviewclicks;
            for($j=0;$j<count($reviewclicks);$j++){
              $reviewclick = Reviewclick::find($reviewclicks[$j]->id);
              $reviewclick->delete();
            }
            $review->delete();
        };
        $item = Item::find($id);
        $item->delete();
        return redirect('item');
        //
        //dd('in item delete');
    }
}
