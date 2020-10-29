@extends('/instadeck/app')

@section('title', 'InstaDeck || Create')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-6">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <a href="/instadeck/profile/{{ $post->user->id }}" class="dhs_link-dark">
                            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle dhs_pp-post-detail">
                        </a>
                    </div>
                    <div>
                        <div class="font-weight-bold d-flex">
                            <a href="/instadeck/profile/{{ $post->user->id }}" class="dhs_link-dark mr-1">{{ $post->user->id }}</a>
                            @if ($post->user->id != auth()->user()->id)
                                |
                                <follow-link user-id="{{ $post->user->id }}" follows="{{ $follows }}"></follow-link>
                            @endif
                        </div>
                    </div>
                </div>
                <hr>
                <p>
                    <span class="font-weight-bold">
                        <a href="/instadeck/profile/{{ $post->user->id }}" class="dhs_link-dark">{{ $post->user->id }}</a>
                    </span> {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection