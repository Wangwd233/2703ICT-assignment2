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
               <nobr class="text-danger">{{$errors->first('review')}}</nobr></p>
               <p><label>Rating(number from 1 to 5):</label><br><input type="text" name="rating" value="{{old('rating')}}"> 
               <nobr class="text-danger">{{$errors->first('rating')}}</nobr></p>
             @else
               <p><label>Review:</label><br><input type="text"  name="review" value="{{$review->review}}"></p>
               <p><label>Rating(number from 1 to 5):</label><br><input type="text"  name="rating" value="{{$review->rating}}"></p>
            @endif
               <input type="submit" value="Update review" class="btn btn-light">
          </form>
          <a class="btn btn-light" href="{{url("item/$review->item_id")}}">Go back</a>
        </div>
        <div class="col-sm">
    
        </div>
    </div>
  </div>
   
@endsection