@extends('layouts.master')

@section('title')
    Review delete
@endsection

@section('content')
  <h2 class="alert alert-danger">Are you sure to delete this review?</h2>
  <form method="POST" action="{{url("review/$review_id")}}">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <input type="submit" value="Delete now" class="btn btn-danger">
  </form>
  <a class="btn btn-light" href="{{url("/")}}">Go back</a>
@endsection