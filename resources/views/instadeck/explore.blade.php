@extends('/instadeck/app')

@section('title', 'InstaDeck || Explore')

@section('content')
    <div class="container">
        <form action="/instadeck/search" method="get">
            <div class="input-group dhs_search-bar-responsive">
                <input id="mobile-search" name="search" type="text" spellcheck="false" autocomplete="off" class="form-control dhs_search-input" placeholder="Search Users...">
                <i class="fas fa-fw fa-search dhs_search-icon"></i>
            </div>
        </form>
        @if(isset($user))
            <div class="row justify-content-center pt-4">
                @foreach($user as $users)
                    <div class="col-5 pt-2 pb-2 ml-1 mr-1 mb-2 dhs_search-result">
                        <div class="pr-3">
                            <a href="/instadeck/profile/{{ $users->username }}" class="dhs_link-dark">
                                <img src="/storage/{{ $users->profile->image ? $users->profile->image : 'profile/default_user.png' }}" class="rounded-circle dhs_pp-post-detail">
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
                @if(!$user)
                    <div class="col-5 pt-2 pb-2 ml-1 mr-1 mb-2 dhs_search-not-found">
                        User not found.
                    </div>
                @endif
            </div>
            <div class="row justify-content-center pt-5 pb-5">
                <div class="col-5 pt-2 pb-2 ml-1 mr-1 mb-2 dhs_search-not-found">
                    <a href="/instadeck/explore">Back to Explore page</a>
                </div>
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