@extends('layouts.master')

@section('title')
   Image Upload
@endsection

@section('content')
   <div class="container">
     <div class="row align-items-center">
       <div class="col-sm">
      <h1>Choose a image for the item</h1>
       </div>
       <div class="col-sm">
         <br><br>
         <form method="POST" action="{{url("image")}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <p><input type="hidden" name="item_id" value="{{$item_id}}"></p>
            <p><input type="hidden" name="user_id" value="{{Auth::user()->id}}"></p>
            <p><input type="file" name="image" class="btn btn-info" value="{{old('image')}}"></p>
            <nobr class="text-danger">{{$errors->first('image')}}</nobr>
            <input type="submit" value="Upload" class="btn btn-light">
          </form>
          <br><br>
          <a class="btn btn-light" href="{{url("item/$item_id")}}">Go back</a>
       </div>
       <div class="col-sm">
      
       </div>
     </div>
   </div>
@endsection