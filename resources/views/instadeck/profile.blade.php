@extends('/instadeck/app')

@section('title', 'InstaDeck || Profile')

@section('content')
    <div class="container">
        <div class="pt-3 pb-4" id="dhs_row-default">
            <div class="col-3 pl-5 pr-5 text-center">
                <img src="{{ $user->profile->profileImage() }}" class="rounded-circle" id="dhs_profile-picture">
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-start align-items-center">
                    <h5 class="dhs_h5">{{ $user->username }}</h5>
                    @if ($user->id != auth()->user()->id)
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    @endif
                </div>
                <div class="d-flex pt-2">
                    <div class="mr-5"><strong>{{ $postsCount }}</strong> Posts</div>
                    <div class="mr-5"><strong>{{ $followersCount }}</strong> Followers</div>
                    <div class="mr-5"><strong>{{ $followingCount }}</strong> Following</div>
                </div>
                <div class="pt-2 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="https://{{ $user->profile->url }}" class="dhs_link">{{ $user->profile->url }}</a></div>
            </div>
            <div class="col-3">
                @can ('update', $user->profile)
                    <div class="d-flex justify-content-end align-items-center">
                        <a href="/instadeck/post/create" class="btn btn-sm btn-primary mr-3">Create New Post</a>
                        <a href="/instadeck/profile/{{ $user->id }}/edit" class="btn btn-sm btn-success">Edit Profile</a>
                    </div>
                @endcan
            </div>
        </div>
        <div class="pt-3 pb-4" id="dhs_row-responsive">
            <div class="text-center" id="dhs_pp-div-responsive">
                <img src="{{ $user->profile->profileImage() }}" class="rounded-circle" id="dhs_profile-picture">
            </div>
            <div id="dhs_profile-detail-responsive">
                <div class="d-flex justify-content-start align-items-center">
                    <h5 class="dhs_h5">{{ $user->username }}</h5>
                    @if ($user->id != auth()->user()->id)
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    @endif
                </div>
                <div class="d-flex pt-2">
                    <div class="mr-5"><strong>{{ $postsCount }}</strong> Posts</div>
                    <div class="mr-5"><strong>{{ $followersCount }}</strong> Followers</div>
                    <div class="mr-5"><strong>{{ $followingCount }}</strong> Following</div>
                </div>
                <div id="dhs_profile1">
                    <div class="pt-2 font-weight-bold">{{ $user->profile->title }}</div>
                    <div>{{ $user->profile->description }}</div>
                    <div><a href="https://{{ $user->profile->url }}" class="dhs_link">{{ $user->profile->url }}</a></div>
                </div>
            </div>
        </div>
        <div class="pb-4" id="dhs_profile2">
            <div class="pt-2 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="https://{{ $user->profile->url }}" class="dhs_link">{{ $user->profile->url }}</a></div>
        </div>
        <div class="row" id="dhs_bottom-btn">
            @can ('update', $user->profile)
                <div class="col">
                    <a href="/instadeck/profile/{{ $user->id }}/edit" class="form-control btn btn-success">Edit Profile</a>
                </div>
            @endcan
        </div>
        <div class="row pt-4">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/instadeck/post/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
