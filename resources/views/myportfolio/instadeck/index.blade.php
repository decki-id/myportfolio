@extends('/myportfolio/instadeck/app')

@section('title', 'InstaDeck || Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5 text-center">
            <img src="{{ url('/assets/images/user.jpg') }}" class="dhs_profile-picture">
        </div>
        <div class="col-9 pt-5">
            @if (Route::currentRouteName() == 'profile.show')
                <div><h2>{{ $user->username }}</h2></div>
            @elseif (Route::currentRouteName() == 'instadeck')
                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ Auth::user()->username }}</h2>
                    <a href="/myportfolio/instadeck/post/create" class="btn dhs_post-btn">Create New Post</a>
                </div>
            @endif
            <div class="d-flex">
                <div class="pr-5"><strong>365</strong> posts</div>
                <div class="pr-5"><strong>341</strong> followers</div>
                <div class="pr-5"><strong>208</strong> following</div>
            </div>
            @if (Route::currentRouteName() == 'profile.show')
                <div class="pt-2 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="https://{{ $user->profile->url }}" class="dhs_link">{{ $user->profile->url }}</a></div>
            @elseif (Route::currentRouteName() == 'instadeck')
                <div class="pt-2 font-weight-bold">{{ Auth::user()->profile->title }}</div>
                <div>{{ Auth::user()->profile->description }}</div>
                <div><a href="https://{{ Auth::user()->profile->url }}" class="dhs_link">{{ Auth::user()->profile->url }}</a></div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="{{ url('/assets/images/BestFormalPhoto.jpg') }}" class="w-100">
        </div>
        <div class="col-4">
            <img src="{{ url('/assets/images/DeckiRevota.jpg') }}" class="w-100">
        </div>
        <div class="col-4">
            <img src="{{ url('/assets/images/decki-revota.jpg') }}" class="w-100">
        </div>
    </div>
</div>
@endsection
