@extends('/myportfolio/instadeck/app')

@section('title', 'InstaDeck || Home')

@section('content')
<div class="container">
    @if (Route::currentRouteName() == 'profile.show')
        <div class="row pt-3 pb-3">
            <div class="col-3 pl-5 pr-5 text-center">
                <img src="{{ url('/assets/images/user.jpg') }}" class="dhs_profile-picture">
            </div>
            <div class="col-9">
                <div><h2>{{ $user->username }}</h2></div>
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                    <div class="pr-5"><strong>341</strong> followers</div>
                    <div class="pr-5"><strong>208</strong> following</div>
                </div>
                <div class="pt-2 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="https://{{ $user->profile->url }}" class="dhs_link">{{ $user->profile->url }}</a></div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </div>
            @endforeach
        </div>
    @elseif (Route::currentRouteName() == 'instadeck.home')
        <div class="row pt-3 pb-3">
            <div class="col-3 pl-5 pr-5 text-center">
                <img src="{{ url('/assets/images/user.jpg') }}" class="dhs_profile-picture">
            </div>
            <div class="col-9">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ Auth::user()->username }}</h2>
                    <div>
                        <a href="/myportfolio/instadeck/post/create" class="btn btn-sm btn-primary">Create New Post</a>
                        <a href="/myportfolio/instadeck/profile/{{ Auth::user()->id }}/edit" class="btn btn-sm btn-success">Edit Profile</a>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="mr-5"><strong>{{ Auth::user()->posts->count() }}</strong> posts</div>
                    <div class="mr-5"><strong>341</strong> followers</div>
                    <div class="mr-5"><strong>208</strong> following</div>
                </div>
                <div class="pt-2 font-weight-bold">{{ Auth::user()->profile->title }}</div>
                <div>{{ Auth::user()->profile->description }}</div>
                <div><a href="https://{{ Auth::user()->profile->url }}" class="dhs_link">{{ Auth::user()->profile->url }}</a></div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach(Auth::user()->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/myportfolio/instadeck/post/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
