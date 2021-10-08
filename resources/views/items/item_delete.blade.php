@extends('layouts.master')

@section('title')
   Item delete
@endsection

@section('content')
   <p class="alert">Are you sure to delete this item? (all the reviews with this item will gone)</p>
   <form method="POST" action="{{url("item/$item_id")}}">
     {{csrf_field()}}
     {{method_field('DELETE')}}
      <input type="submit" value="Delete now">
    </form>
@endsection