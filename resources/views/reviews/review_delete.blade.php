@extends('layouts.master')

@section('title')
    Review delete
@endsection

@section('content')
    <h2>Are you sure to delete this review?</h2>
    <form method="POST" action="{{url("review/$review_id")}}">
     {{csrf_field()}}
     {{method_field('DELETE')}}
      <input type="submit" value="Delete now">
    </form>
@endsection