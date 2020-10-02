@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/profile/{{$post->user->id}}">
                    <img class="w-100" src="/storage/{{$post->image}}"></img>
                </a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
        
            <div class="col-6 offset-3">
                <!-- <div class="d-flex align-items-center"> -->
                    

                <p> <span class="font-weight-bold">
                <a href="/profile/{{$post->user->id}}">
                    <span class="text-dark mr-2">{{$post->user->username}}</span>
                    </a></span>{{$post->caption}}</p>
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
