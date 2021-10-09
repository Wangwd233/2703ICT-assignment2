@extends('layouts.master')

@section('title')
  Items List
@endsection

@section('content')
  <ul>
      @foreach ($items as $item)
        <h2><a href="item/{{$item->id}}"><li>{{$item->name}}</li></a></h2>
      @endforeach
  </ul>
  @if(Auth::guest())
  @else
    <h3><a href = "{{url('item/create')}}" class="btn btn-dark">Create Item</a></h3>
  @endif
@endsection