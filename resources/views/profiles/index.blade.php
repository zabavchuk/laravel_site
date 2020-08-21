@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fiev1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/34565799_438171569943658_196224265341632512_n.jpg?_nc_ht=instagram.fiev1-1.fna.fbcdn.net&_nc_ohc=p6pOrtMcKlUAX9euqFy&oh=c3b4121d1fd7f30e1840b2bcd99e7718&oe=5F67768F" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>998m</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div class="">{{$user->profile->description}}</div>
            <div><a href="{{$user->profile->url}}">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" alt="" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
