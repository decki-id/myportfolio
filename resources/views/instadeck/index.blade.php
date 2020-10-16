@extends('/instadeck/app')

@section('title', 'InstaDeck || Home')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-6 offset-3 d-flex align-items-center pb-2">
                    <div class="pr-4">
                        <a href="/instadeck/profile/{{ $post->user->id }}" class="dhs_link-dark">
                            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle dhs_pp-post-detail">
                        </a>
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/instadeck/profile/{{ $post->user->id }}" class="dhs_link-dark">{{ $post->user->username }}</a>
                            |
                            <a href="#" class="dhs_link">Follow</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 offset-3">
                    <a href="/instadeck/post/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-6 offset-3 pt-2 pb-4">
                    <div>
                        <p>
                            <span class="font-weight-bold">
                                <a href="/instadeck/profile/{{ $post->user->id }}" class="dhs_link-dark">{{ $post->user->username }}</a>
                            </span> {{ $post->caption }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links("pagination::bootstrap-4") }}
            </div>
        </div>
    </div>
@endsection
