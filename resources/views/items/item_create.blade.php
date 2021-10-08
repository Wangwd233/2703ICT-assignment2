@extends('layouts.master')

@section('title')
  Create Item
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm">
    <h2>Create new item</h2>
    </div>
    <div class="col-sm">
    <form method="POST" action="{{url("item")}}">
     {{csrf_field()}}
     <p><label>Name:</label><br><input type="text" name="name" value="{{old('name')}}"> <nobr class="alert">{{$errors->first('name')}}</nobr></p>
     <p><label>Manufacturer:</label><br><input type="text" name="manufacturer" value="{{old('manufacturer')}}"> <nobr class="alert">{{$errors->first('manufacturer')}}</nobr></p>
     <p><label>Description:</label><br><input type="text" name="description" value="{{old('description')}}"> <nobr class="alert">{{$errors->first('description')}}</nobr></p>
     <p><label>Price:</label><br><input type="text" name="price" value="{{old('price')}}"> <nobr class="alert">{{$errors->first('price')}}</nobr></p>
     <p><label>Url(Option):</label><br><input type="text" name="url" value="{{old('url')}}"> <nobr class="alert">{{$errors->first('url')}}</nobr></p>
     <input type="submit" value="Create Item">
  </form>
    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>
  
  
@endsection