@extends('layouts.master')

@section('title')
   Show review
@endsection

@section('content')
      <div class="container">
        <div class="row">
          <div class="col-sm">
           <div>
          @if(Auth::check())
           @if($user_id == Auth::user()->id)
              <input type="submit" value="like" class="btn btn-success btn-block" disabled="true">
              <input type="submit" value="dislike" class="btn btn-danger btn-block" disabled="true">
              <h2>You have already voted for the review</h2>
           @else
             <form method="POST" action="{{url("reviewclick")}}">
               {{csrf_field()}}
               <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
               <input type="hidden" name="review_id" value="{{$review->id}}">
               <input type="hidden" name="prefer" value="like">
               <input type="submit" value="like" class="btn btn-success btn-block">
             </form>
             <form method="POST" action="{{url("reviewclick")}}">
               {{csrf_field()}}
               <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
               <input type="hidden" name="review_id" value="{{$review->id}}">
               <input type="hidden" name="prefer" value="dislike">
               <input type="submit" value="dislike" class="btn btn-danger btn-block">
             </form>
           @endif
          @endif
            </div>
          </div>
          <div class="col-sm">
             <h2>Review from {{$review->user->name}}</h2>
             <p>Item: {{$review->item->name}}</p>
             <p>Rating: {{$review->rating}}</p>
             <p>Review content: {{$review->review}}</p>
             @if($review->updated_at)
                <p>Updated at: {{$review->updated_at}}</p>
             @else
                <p>Created at: {{$review->created_at}}</p>
             @endif
             @if(Auth::guest())
             @else
                @if(Auth::user()->name == $review->user->name || Auth::user()->type == "Moderator")
                   <a class="btn btn-light" href="{{url("review/$review->id/edit")}}">Edit review</a>
                   <a class="btn btn-light" href="{{url("review/delete/$review->id")}}">Delete review</a>
                @endif
             @endif
             <a class="btn btn-light" href="{{url("item/$review->item_id")}}">Go back</a>
          </div>
          <div class="col-sm">
           @if(Auth::check())
            @if(Auth::user()->id == $review->user_id || $isFollowed == true)
              <input type="submit" value="Follow the user" class="btn btn-secondary btn-block" disabled="true">
            @else
             <form method="POST" action="{{url("follow")}}">
               {{csrf_field()}}
               <input type="hidden" name="review_id" value="{{$review->id}}">
               <input type="hidden" name="reviewer_id" value="{{$review->user_id}}">
               <input type="submit" value="Follow the user" class="btn btn-secondary btn-block">
              </form>
            @endif
           @endif
          </div>
        </div>
      </div>
   
@endsection