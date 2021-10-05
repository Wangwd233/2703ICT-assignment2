<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
//use App\Models\Review;

class ItemController extends Controller
{
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
        //dd($item);
        return view('items.item_show')->with('item', $item);

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
        //
    }
}
