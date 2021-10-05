@extends('layouts.master')

@section('title')
  {{$item->name}}
@endsection

@section('content')
  <h2>Item name: {{$item->name}}</h2>
  <p>Manufacturer: {{$item->manufacturer}}</p>
  <p>Description: {{$item->description}}</p>
  <p>Recommended retail price: {{$item->price}}</p>
  <p>Url: <a href="{{$item->url}}">{{$item->url}}</a></p>
  <p>Create date: {{$item->created_at}}</p><br>
  <h3>Reviews for {{$item->name}}</h3>
  @foreach ($reviews as $review)
     <a href="{{url("review/$review->id")}}">Review from {{$review->user->name}}</a>
  @endforeach

  @if(Auth::check())
     <h2><button><a href="{{url("item/$item->id/edit")}}">Edit item</a></button></h2>
  @else
  @endif
@endsection