@extends('layouts.master')

@section('title')
  {{$item->name}}
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm">
      
    </div>
    <div class="col-sm">
      <h1>Item name: {{$item->name}}</h1>
      <p>Manufacturer: {{$item->manufacturer}}</p>
      <p>Description: {{$item->description}}</p>
      <p>Recommended retail price: {{$item->price}}</p>
      <p>Url: <a href="{{$item->url}}">{{$item->url}}</a></p>
      <p>Create date: {{$item->created_at}}</p><br>
      
    
       <h3>Reviews for {{$item->name}}</h3>
       @foreach ($reviews as $review)
          <p><a href="{{url("review/$review->id")}}">Review from {{$review->user->name}}</a></p>
       @endforeach

        {{$reviews->links()}}

       @if(Auth::check())
         @if($isReviewed)
           <p>Your have already create a review for {{$item->name}}</p>
         @else 
           <h2><button class="btn btn-dark"><a href="{{url("review/create/$item->id")}}">Create a review with {{$item->name}}</a></button></h2>
        @endif
       @endif
    </div>
    <div class="col-sm">
       @if(Auth::check())
         @if(Auth::user()->type == "Moderator")
             <h2><button class="btn btn-dark"><a href="{{url("item/$item->id/edit")}}">Edit item</a></button></h2>
             <h2><button class="btn btn-dark"><a href="{{url("item/delete/$item->id")}}">Delete item</a></button></h2>
         @endif
       @endif
    </div>
  </div>
</div>
  
  
@endsection