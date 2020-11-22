@extends('/instadeck/app')

@section('title', 'InstaDeck || Explore')

@section('content')
    <div class="container">
        <div class="input-group" id="dhs_search-bar-responsive">
            <input type="text" class="form-control rounded-left">
            <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-fw fa-search"></i></span>
            </div>
        </div>
        @if(!empty($posts))
            <div class="row pt-4">
                @foreach($posts as $post)
                    <div class="col-4 pb-4">
                        <a href="/instadeck/post/{{ $post->id }}">
                            <img src="/storage/{{ $post->image }}" class="w-100 h-100">
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="row pt-4">
                <a href="{{ $unsplashApi[$a]['urls']['regular'] }}">
                    <img src="{{ $unsplashApi[$a]['urls']['regular'] }}" class="w-100 h-100">
                </a>
            </div>
        @endif
    </div>
@endsection