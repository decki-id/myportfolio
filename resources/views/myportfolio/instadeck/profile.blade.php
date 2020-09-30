@extends('/myportfolio/instadeck/app')

@section('title', 'InstaDeck || Profile')

@section('content')
    <div class="container">
        <div class="row pt-3 pb-3">
            <div class="col-3 pl-5 pr-5 text-center">
                <img src="{{ $user->profile->profileImage() }}" class="dhs_profile-picture rounded-circle">
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-start align-items-center">
                    <h4>{{ $user->username }}</h4>
                    <follow-button></follow-button>
                </div>
                <div class="d-flex">
                    <div class="mr-5"><strong>{{ $user->posts->count() }}</strong> Posts</div>
                    <div class="mr-5"><strong>341</strong> Followers</div>
                    <div class="mr-5"><strong>208</strong> Following</div>
                </div>
                <div class="pt-2 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="https://{{ $user->profile->url }}" class="dhs_link">{{ $user->profile->url }}</a></div>
            </div>
            <div class="col-3">
                @can ('update', $user->profile)
                    <div class="d-flex justify-content-end align-items-center">
                        <a href="/myportfolio/instadeck/post/create" class="btn btn-sm btn-primary mr-3">Create New Post</a>
                        <a href="/myportfolio/instadeck/profile/{{ $user->id }}/edit" class="btn btn-sm btn-success">Edit Profile</a>
                    </div>
                @endcan
            </div>
        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/myportfolio/instadeck/post/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
