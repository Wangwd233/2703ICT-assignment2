@extends('layouts.master')

@section('title')
   Show review
@endsection

@section('content')
   <h2>Review from {{$review->user->name}}</h2>
   <p>Item: {{$review->item->name}}</p>
   <p>Rating: {{$review->rating}}</p>
   <p>Review content: {{$review->review}}</p>
   @if($review->updated_at)
     <p>Updated at: {{$review->updated_at}}</p>
   @else
     <p>Created at: {{$review->created_at}}</p>
   @endif

   @if($review->user->name == Auth::user()->name)
      <h2><button><a href="{{url("review/$review->id/edit")}}">Edit item</a></button></h2>
   @else
   @endif
@endsection