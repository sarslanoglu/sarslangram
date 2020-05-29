@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fist4-1.fna.fbcdn.net/v/t51.2885-19/s320x320/42652628_670907949961680_2987956344931221504_n.jpg?_nc_ht=instagram.fist4-1.fna.fbcdn.net&_nc_ohc=pRT4NKfxgAIAX8LtQqp&oh=4c2784e95780cdd69eb94a54e54e5943&oe=5EFA1F0E" class="rounded-circle" width="150" height="150">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between ">
                <h2>{{ $user->username }}</h2>
                @can('update', $user->profile)
                    <a href="/posts/create">Add new post</a>
                @endcan
            </div>

            @can('update', $user->profile)
                <a href="/profile/{{ $user-> id }}/edit">Edit profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-4"><strong>655</strong> followers</div>
                <div class="pr-4"><strong>703</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/posts/{{ $post->id }}">
                    <img src="/storage/{{ $post->image}}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
