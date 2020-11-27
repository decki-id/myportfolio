@extends('/instadeck/app')

@section('title', 'InstaDeck || Explore')

@section('content')
    <div class="container">
        <div class="input-group dhs_search-bar-responsive">
            <input id="mobile-search" name="search" type="text" spellcheck="false" class="form-control dhs_search-input" placeholder="Search Users...">
            <i class="fas fa-fw fa-search dhs_pixel-right-12 dhs_search-icon"></i>
        </div>
        @if(isset($user))
            <div class="row pt-4">
                @foreach($user as $users)
                    <div class="col-4 offset-4 d-flex align-items-center bg-white rounded pt-2 pb-2 mb-2" id="dhs_result">
                        <div class="pr-3">
                            <a href="/instadeck/profile/{{ $users->username }}" class="dhs_link-dark">
                                <img src="/storage/{{ $users->user->profile->profileImage() ? $users->user->profile->profileImage() : 'profile/default_user.png' }}" class="rounded-circle dhs_pp-post-detail">
                            </a>
                        </div>
                        <div>
                            <div class="font-weight-bold d-flex">
                                <a href="/instadeck/profile/{{ $users->username }}" class="dhs_link-dark mr-1">{{ $users->username }}</a>
                            </div>
                            <div>{{ $users->fullname }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="row pt-4">
                @foreach($posts as $post)
                    <div class="col-4 pb-4">
                        <a href="/instadeck/post/{{ $post->id }}">
                            <img src="/storage/{{ $post->image }}" class="w-100 h-100">
                        </a>
                    </div>
                @endforeach
            </div>            
        @endif
    </div>
@endsection