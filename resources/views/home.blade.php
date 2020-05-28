@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fist4-1.fna.fbcdn.net/v/t51.2885-19/s320x320/42652628_670907949961680_2987956344931221504_n.jpg?_nc_ht=instagram.fist4-1.fna.fbcdn.net&_nc_ohc=pRT4NKfxgAIAX8LtQqp&oh=4c2784e95780cdd69eb94a54e54e5943&oe=5EFA1F0E" class="rounded-circle" width="150" height="150">
        </div>

        <div class="col-9 pt-5">
            <div><h2>{{ $user->username }}</h2></div>
            <div class="d-flex" >
                <div class="pr-4"><strong>15</strong> posts</div>
                <div class="pr-4"><strong>655</strong> followers</div>
                <div class="pr-4"><strong>703</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">Semih Arslanoğlu</div>
            <div>Hey there! I'm not using Instagram. Please contact me via other platforms</div>
            <div><a href="#">https://github.com/sarslanoglu</a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.fist4-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c55.0.969.969a/s640x640/66645033_104370810817547_8701499162627471864_n.jpg?_nc_ht=instagram.fist4-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=iOvJN44EsxYAX_O-Q7h&oh=c32d52f6cb585f05ba09bcd120777ffe&oe=5EF8E9F8" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fist4-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c55.0.969.969a/s640x640/66645033_104370810817547_8701499162627471864_n.jpg?_nc_ht=instagram.fist4-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=iOvJN44EsxYAX_O-Q7h&oh=c32d52f6cb585f05ba09bcd120777ffe&oe=5EF8E9F8" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fist4-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c55.0.969.969a/s640x640/66645033_104370810817547_8701499162627471864_n.jpg?_nc_ht=instagram.fist4-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=iOvJN44EsxYAX_O-Q7h&oh=c32d52f6cb585f05ba09bcd120777ffe&oe=5EF8E9F8" class="w-100">
        </div>
    </div>
</div>
@endsection
