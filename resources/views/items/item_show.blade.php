@extends('layouts.master')

@section('title')
  {{$item->name}}
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm">
        @if($isUploaded == false)
          @if(Auth::check())
             <a class="btn btn-light" href="{{url("image/create/$item->id")}}">Upload a image</a>
          @endif
        @else
           <h2>Image for {{$item->name}}</h2>
           @foreach ($images as $image)
             <img src="{{url($image->images)}}" alt="item image" style="width:300px;height:300px;">
             <h2>Uploaded by {{$image->user->name}} at {{$image->created_at}}</h2>
           @endforeach
        @endif
    </div>
    <div class="col-sm">
      <h1>Item name: {{$item->name}}</h1>
      <p>Manufacturer: {{$item->manufacturer}}</p>
      <p>Description: {{$item->description}}</p>
      <p>Recommended retail price: {{$item->price}}</p>
      <p>Url: <a href="{{$item->url}}" class="btn btn-light">{{$item->url}}</a></p>
      <p>Create date: {{$item->created_at}}</p><br>

      @if(Auth::check())
         @if($isReviewed)
           <p>Your have already create a review for {{$item->name}}</p>
         @else 
           <a class="btn btn-light" href="{{url("review/create/$item->id")}}">Create a review with {{$item->name}}</a>
        @endif
       @endif
      <div class="container">
        <div class="panel-group">
       <h2>Reviews history</h2>
        @foreach ($reviews as $review)
         <div class="panel panel-primary">
         @if ($review->like > $review->dislike)
           <div class="bg-success">
         @elseif ($review->like < $review->dislike)
           <div class="bg-danger">
         @else
           <div class="bg-light">
         @endif
          <div class="panel-heading"><a class="btn btn-primary" href="{{url("review/$review->id")}}">Review from {{$review->user->name}} </a></div>
          <div class="panel-body">
            <p>Content: {{$review->review}}</p>
             <p>rating: {{$review->rating}}</p>
          </div>
          </div>
          </div>
        @endforeach
        </div>
       </div>
        {{$reviews->links()}}
  
    </div>
    <div class="col-sm">
       @if(Auth::check())
         @if(Auth::user()->type == "Moderator")
             <a class="btn btn-light" href="{{url("item/$item->id/edit")}}">Edit item</a>
             <a class="btn btn-light" href="{{url("item/delete/$item->id")}}">Delete item</a>
         @endif
       @endif
    </div>
  </div>
</div>
  
  
@endsection