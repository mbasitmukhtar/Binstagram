@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img class="w-100" src="/storage/{{$post->image}}"></img>
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src="{{ $post->user->profile->profileImage() }}" alt="" style="max-width:40px" class="w-100 rounded-circle">
                </div>

                <div>
                    <div class="font-weight-bold">
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{$post->user->username}}</span>
                        </a>
                        <a href="#" class="pl-3">Follow</a>

                    </div>
                </div>
                
            </div>

            <hr>

            <p> <span class="font-weight-bold">
            <a href="/profile/{{$post->user->id}}">
                <span class="text-dark">{{$post->user->username}}</span>
                </a></span>{{$post->caption}}</p>
        </div>
    </div>
</div>
@endsection
