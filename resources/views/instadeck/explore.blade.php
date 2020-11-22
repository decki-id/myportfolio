@extends('/instadeck/app')

@section('title', 'InstaDeck || Explore')

@section('content')
    @if(isset($posts))
        <div class="container">
            <div class="input-group" id="dhs_search-bar-responsive">
                <input type="text" class="form-control rounded-left">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-fw fa-search"></i></span>
                </div>
            </div>
            <div class="row pt-4">
                @foreach($posts as $post)
                    <div class="col-4 pb-4">
                        @if(isset($post))
                            <a href="/instadeck/post/{{ $post->id }}">
                                <img src="/storage/{{ $post->image }}" class="w-100">
                            </a>
                        @else
                            @for($a = 0; $a < count($unsplashApi); $a++)
                                @foreach($unsplashApi as $unsplash)
                                {{ dd($unsplash) }}
                                    <a href="#">
                                        <img src="{{ $unsplash[$a]['urls']['raw'] . '&w=800&h=800' }}" class="w-100">
                                    </a>
                                @endforeach
                            @endfor
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="container">
            <div class="row pt-4">
                @for($a = 0; $a < count($media["data"]); $a++)
                    @foreach($media as $posts)
                        @if(isset($posts[$a]))
                            <div class="col-4 pb-4 dhs_posts-item">
                                <div class="dhs_posts-item-inner w-100 h-100">
                                    @if($posts[$a]['media_type'] == 'CAROUSEL_ALBUM')
                                        <div class="dhs_carousel-icon">
                                            <i class="fas fa-fw fa-images text-white"></i>
                                        </div>
                                    @endif
                                    @if($posts[$a]['media_type'] == 'IMAGE' || $posts[$a]['media_type'] == 'CAROUSEL_ALBUM')
                                        <div class="dhs_posts w-100 h-100">
                                            <img src="{{ $posts[$a]['media_url'] }}" class="w-100 h-100">
                                        </div>
                                        <div class="dhs_posts-info text-white d-flex justify-content-center align-items-center">
                                            <div class="mr-3"><i class="fas fa-fw fa-heart mr-1"></i>{{ $posts[$a]['like_count'] }}</div>
                                            <div class="ml-3"><i class="fas fa-fw fa-comment mr-1"></i>{{ $posts[$a]['comments_count'] }}</div>
                                        </div>
                                    @else
                                        <div class="dhs_posts w-100 h-100">
                                            <video class="w-100 h-100" preload="auto" autobuffer playsinline controls>
                                                <source src="{{ $posts[$a]['media_url'] }}">
                                            </video>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endfor
            </div>
        </div>
    @endif
@endsection