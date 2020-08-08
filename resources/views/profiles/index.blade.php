@extends('layouts.app')

@section('content')
<div class="container w-75">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://bit.ly/2Pzpqos" class="rounded-circle">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex  justify-content-between align-items-baseline">
                <h3>{{ $user->username }}</h3>
                <a href="/post/create">Add New Post</a>
            </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>153</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>
                <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
                <div>
                    <li>Dream BIG and dare to fail 🤙🏻</li>
                    <li>1.4 Million OP YouTube Family ❤</li>
                    <li>PUBG Mobile</li>
                    <li>Watch my streams at ⬇</li>
                    <li>{{ $user->profile->description }}</li>
                </div>
                <div><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
            <div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="https://bit.ly/3fzR7bn" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://bit.ly/3fzR7bn" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://bit.ly/3fzR7bn" class="w-100">
        </div>
    </div>
</div>
@endsection
