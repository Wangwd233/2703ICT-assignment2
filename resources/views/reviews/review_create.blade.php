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
           <nobr class="alert">{{$errors->first('review')}}</nobr></p>
           <p><label>Rating(number from 1 to 5):</label><br><input type="text" name="rating" value="{{old('rating')}}"> 
           <nobr class="alert">{{$errors->first('rating')}}</nobr></p>
         @else   
           <input type="hidden" name="item_id" value="{{$item_id}}">  
           <p><label>Review:</label><br><input type="text" name="review"></p>
           <p><label>Rating(number from 1 to 5):</label><br><input type="text" name="rating"></p>
         @endif
         <input type="submit" value="Create review">
        </form>
      </div>
      <div class="col-sm">
      
      </div>
    </div>
  </div>
@endsection