@extends('layouts.master')

@section('title')
   Item delete
@endsection

@section('content')
   <h1 class="alert alert-danger">Are you sure to delete this item? (all the reviews with this item will gone)</h1>
   <form method="POST" action="{{url("item/$item_id")}}">
     {{csrf_field()}}
     {{method_field('DELETE')}}
      <input type="submit" value="Delete now" class="btn btn-danger">
    </form>
    <br><br>
    <a class="btn btn-light" href="{{url("item/$item_id")}}">Go back</a>
@endsection