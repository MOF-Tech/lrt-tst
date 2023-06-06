@extends("layouts.master")

@section('styles')
<style>
    .all-holder{
    margin:auto;
    width:80%;
    height:fit-content;
    background-color: honeydew;
    
}
</style>
@endsection
@section('content')

<div class="all-holder">
   
    <h1>{{$blog->title}}</h1>
    <p>{{$blog ->body}}</p>
    <small>{{$blog ->created_at}}</small>
    <a href="/posts">back</a>
    <p>Content</p>
    <a href="/posts/{{$blog->id}}/edit">edit</a>
</div>

  


@endsection