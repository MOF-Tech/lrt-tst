@extends('layouts.master')

@section('styles')
<style>
    *{
    margin:auto;
}

.post-holder{
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.post-one{
    margin: auto;
    background-color: grey;
    color: blue;
    margin: 10px;
}

</style>
@endsection


@section('content')
<h1>This is posts part</h1>
<p>This is where the content goes</p>
<a href="/posts/create">Create New</a>
@if (count($posts)>1)
@foreach ($posts as $blog )

  <div class="post-holder">
    <div   class="post-one">
      <h3>{{$blog ->title}}</h3>
      <small>written on {{$blog ->created_at}}</small>
      <p>{{$blog ->body}}</p>
      <a href="/posts/{{$blog ->id}}">view</a>
    </div>
  </div>

      
@endforeach
@else
<p>no post Found</p>

    
@endif
@endsection