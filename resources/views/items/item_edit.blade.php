@extends('layouts.master')

@section('title')
   Edit item
@endsection

@section('content')
      <div class="container">
         <div class="row">
           <div class="col-sm">
      
           </div>
          <div class="col-sm">
             <h1>Edit item: {{$item->name}}</h1>
             <form method="POST" action="{{url("item/$item->id")}}">
             {{csrf_field()}}
             {{method_field('PUT')}}
              @if (count($errors) > 0)
               <p><label>Name:</label><br><input type="text" name="name" value="{{old('name')}}"> 
               <nobr class="text-danger">{{$errors->first('name')}}</nobr></p>
               <p><label>Manufacturer:</label><br><input type="text" name="manufacturer" value="{{old('manufacturer')}}"> 
               <nobr class="text-danger">{{$errors->first('manufacturer')}}</nobr></p>
               <p><label>Description:</label><br><input type="text" name="description" value="{{old('description')}}"> 
               <nobr class="text-danger">{{$errors->first('description')}}</nobr></p>
               <p><label>Price:</label><br><input type="text" name="price" value="{{old('price')}}"> 
               <nobr class="text-danger">{{$errors->first('price')}}</nobr></p>
               <p><label>Url(Option):</label><br><input type="text" name="url" value="{{old('url')}}"> 
               <nobr class="text-danger">{{$errors->first('url')}}</nobr></p>
              @else
               <p><label>Name:</label><br><input type="text"  name="name" value="{{$item->name}}"></p>
               <p><label>Manufacturer:</label><br><input type="text"  name="manufacturer" value="{{$item->manufacturer}}"></p>
               <p><label>Description:</label><br><input type="text"  name="description" value="{{$item->description}}"></p>
               <p><label>Price:</label><br><input type="text"  name="price" value="{{$item->price}}"></p>
               <p><label>Url(Option):</label><br><input type="text"  name="url" value="{{$item->url}}"></p>
              @endif
                <input type="submit" value="Update item" class="btn btn-dark">
             </form>
             <br>
             <a  class="btn btn-dark" href="{{url("item/$item->id")}}">go back</a>
          </div>
          <div class="col-sm">
      
          </div>
  </div>
</div>
@endsection