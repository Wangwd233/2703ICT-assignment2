@extends('layouts.master')

@section('title')
   Show review
@endsection

@section('content')
      <div class="container">
        <div class="row">
          <div class="col-sm">
      
          </div>
          <div class="col-sm">
             <h2>Review from {{$review->user->name}}</h2>
             <p>Item: {{$review->item->name}}</p>
             <p>Rating: {{$review->rating}}</p>
             <p>Review content: {{$review->review}}</p>
             @if($review->updated_at)
                <p>Updated at: {{$review->updated_at}}</p>
             @else
                <p>Created at: {{$review->created_at}}</p>
             @endif
             @if(Auth::guest())
             @else
                @if(Auth::user()->name == $review->user->name || Auth::user()->type == "Moderator")
                   <a class="btn btn-light" href="{{url("review/$review->id/edit")}}">Edit review</a>
                   <a class="btn btn-light" href="{{url("review/delete/$review->id")}}">Delete review</a>
                @endif
             @endif
             <a class="btn btn-light" href="{{url("item/$review->item_id")}}">Go back</a>
          </div>
          <div class="col-sm">
   
          </div>
        </div>
      </div>
   
@endsection