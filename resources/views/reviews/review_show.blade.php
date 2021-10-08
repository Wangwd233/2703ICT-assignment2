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
                   <h2><button class="btn btn-dark"><a href="{{url("review/$review->id/edit")}}">Edit review</a></button></h2>
                   <h2><button class="btn btn-dark"><a href="{{url("review/delete/$review->id")}}">Delete review</a></button></h2>
                @endif
             @endif
          </div>
          <div class="col-sm">
   
          </div>
        </div>
      </div>
   
@endsection