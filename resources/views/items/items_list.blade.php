@extends('layouts.master')

@section('title')
  Items List
@endsection

@section('content')
<div class="container">
  <div class="row align-items-start">
    <div class="col">
      <ul>
        @foreach ($items as $item)
          <h2><a href="item/{{$item->id}}"><li>{{$item->name}}</li></a></h2>
        @endforeach
      </ul>
      @if(Auth::guest())
      @else
        <h3><a href = "{{url('item/create')}}" class="btn btn-dark">Create Item</a></h3>
      @endif
    </div>
    <div class="col">
    <div class="row align-items-start">
    <div class="col">
      @if(Auth::check())
       <h2>Followed list: </h2>
       @foreach ($reviewers as $reviewer)
         <div><h3 class="text-primary">{{$reviewer->name}} 
         <form method="POST" action="{{url("follow/$reviewer->id")}}">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <input type="submit" value="Unfollowed" class="btn btn-primary">
          </form>
         </div>
       @endforeach
      @endif
    </div>
  </div>
       
       
    </div>
    <div class="col">
       @if(Auth::check())
        @foreach($reviews as $review)
          @foreach($review as $sreview)
          <div class="panel-heading"><a class="btn btn-primary" href="{{url("review/$sreview->id")}}">Review for {{$sreview->item->name}} by {{$sreview->user->name}}</a></div>
          <div class="panel-body">
            <p>Content: {{$sreview->review}}</p>
             <p>rating: {{$sreview->rating}}</p>
          </div>
          @endforeach
        @endforeach
       @endif
    </div>
  </div>
</div>
@endsection