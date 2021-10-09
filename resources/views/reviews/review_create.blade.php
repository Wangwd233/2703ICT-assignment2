@extends('layouts.master')

@section('title')
   Create a review
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm">
      
      </div>
      <div class="col-sm">
        <h1>Create a review</h1>
     
        <form method="POST" action="{{url("review")}}">
         {{csrf_field()}}
       
         @if (count($errors) > 0)
           <input type="hidden" name="item_id" value="{{old('item_id')}}"> 
           <p><label>Review:</label><br><input type="text" name="review" value="{{old('review')}}"> 
           <nobr class="text-danger">{{$errors->first('review')}}</nobr></p>
           <p><label>Rating(number from 1 to 5):</label><br><input type="text" name="rating" value="{{old('rating')}}"> 
           <nobr class="text-danger">{{$errors->first('rating')}}</nobr></p>
           <input type="hidden" name="like" value="0">
           <input type="hidden" name="dislike" value="0">
         @else   
           <input type="hidden" name="item_id" value="{{$item_id}}">  
           <p><label>Review:</label><br><input type="text" name="review"></p>
           <p><label>Rating(number from 1 to 5):</label><br><input type="text" name="rating"></p>
           <input type="hidden" name="like" value="0">
           <input type="hidden" name="dislike" value="0">
         @endif
         <input type="submit" value="Create review" class="btn btn-light">
        </form>

        <a class="btn btn-light" href="{{url("item/$item_id")}}">Go back</a>
      </div>
      <div class="col-sm">
      
      </div>
    </div>
  </div>
@endsection