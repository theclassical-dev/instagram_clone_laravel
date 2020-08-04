@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4 p-5">
            <img src="https://instagram.flos1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/50270433_589650631448112_5678183430894911488_n.jpg?_nc_ht=instagram.flos1-1.fna.fbcdn.net&_nc_ohc=QdTd75_nOrkAX_sMLdU&oh=99fe5680cd5c00982d5c39ddf556c8a1&oe=5F3948DD" class="rounded-circle">
        </div>
        <div class="col-4 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>
            <a href="/p/create">Add New Post</a>
        </div>
            <div class="d-flex">
                <div class="pr-3"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-3"><strong>149</strong> follower</div>
                <div class="pr-3"><strong>174</strong> following</div>
            </div>
            <div class="pt-2 font-weight-bold">{{ $user->profile->title }}</div>
            <div class="pt-2 font-weight-bold">{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row justify-content-center pt-4">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                     <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
        
    </div>
</div>
@endsection
