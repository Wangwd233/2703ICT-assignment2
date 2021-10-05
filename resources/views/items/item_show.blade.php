@extends('layouts.master')

@section('title')
  {{$item->name}}
@endsection

@section('content')
  <h3>Item name: {{$item->name}}</h3>
  <p>Manufacturer: {{$item->manufacturer}}</p>
  <p>Description: {{$item->description}}</p>
  <p>Recommended retail price: {{$item->price}}</p>
  <p>Url: <a href="{{$item->url}}">{{$item->url}}</a></p>
  <p>Create date: {{$item->created_at}}</p>

  <h2><button><a href="{{url("item/$item->id/edit")}}">Edit item</a></button></h2>
@endsection