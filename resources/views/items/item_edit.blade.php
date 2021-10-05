@extends('layouts.master')

@section('title')
   Edit item
@endsection

@section('content')
   <h1>Edit item: {{$item->name}}</h1>
   <form method="POST" action="{{url("item/$item->id")}}">
    {{csrf_field()}}
    {{method_field('PUT')}}
    @if (count($errors) > 0)
       <p><label>Name:</label><br><input type="text" name="name" value="{{old('name')}}"> 
       <nobr class="alert">{{$errors->first('name')}}</nobr></p>
       <p><label>Manufacturer:</label><br><input type="text" name="manufacturer" value="{{old('manufacturer')}}"> 
       <nobr class="alert">{{$errors->first('manufacturer')}}</nobr></p>
       <p><label>Description:</label><br><input type="text" name="description" value="{{old('description')}}"> 
       <nobr class="alert">{{$errors->first('description')}}</nobr></p>
       <p><label>Price:</label><br><input type="text" name="price" value="{{old('price')}}"> 
       <nobr class="alert">{{$errors->first('price')}}</nobr></p>
       <p><label>Url(Option):</label><br><input type="text" name="url" value="{{old('url')}}"> 
       <nobr class="alert">{{$errors->first('url')}}</nobr></p>
    @else
       <p><label>Name:</label><br><input type="text"  name="name" value="{{$item->name}}"></p>
       <p><label>Manufacturer:</label><br><input type="text"  name="manufacturer" value="{{$item->manufacturer}}"></p>
       <p><label>Description:</label><br><input type="text"  name="description" value="{{$item->description}}"></p>
       <p><label>Price:</label><br><input type="text"  name="price" value="{{$item->price}}"></p>
       <p><label>Url(Option):</label><br><input type="text"  name="url" value="{{$item->url}}"></p>
    @endif
    <input type="submit" value="Update item">
   </form>
@endsection