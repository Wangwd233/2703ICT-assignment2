@extends('layouts.master')

@section('title')
   Edit review
@endsection

@section('content')
   <div class="container">
     <div class="row">
        <div class="col-sm">
   
        </div>
        <div class="col-sm">
          <form method="POST" action="{{url("review/$review->id")}}">
          {{csrf_field()}}
          {{method_field('PUT')}}
             @if (count($errors) > 0)
               <p><label>Review:</label><br><input type="text" name="review" value="{{old('review')}}"> 
               <nobr class="alert">{{$errors->first('review')}}</nobr></p>
               <p><label>Rating(number from 1 to 5):</label><br><input type="text" name="rating" value="{{old('rating')}}"> 
               <nobr class="alert">{{$errors->first('rating')}}</nobr></p>
             @else
               <p><label>Review:</label><br><input type="text"  name="review" value="{{$review->review}}"></p>
               <p><label>Rating(number from 1 to 5):</label><br><input type="text"  name="rating" value="{{$review->rating}}"></p>
            @endif
               <input type="submit" value="Update review">
          </form>
        </div>
        <div class="col-sm">
    
        </div>
    </div>
  </div>
   
@endsection