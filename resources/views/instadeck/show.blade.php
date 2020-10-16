@extends('/instadeck/app')

@section('title', 'InstaDeck || Create')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-4">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle dhs_pp-post-detail">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/instadeck/profile/{{ $post->user->id }}" class="dhs_link-dark">{{ $post->user->username }}</a>
                            |
                            <a href="#" class="dhs_link">Follow</a>
                        </div>
                    </div>
                </div>
                <hr>
                <p>
                    <span class="font-weight-bold">
                        <a href="/instadeck/profile/{{ $post->user->id }}" class="dhs_link-dark">{{ $post->user->username }}</a>
                    </span> {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection