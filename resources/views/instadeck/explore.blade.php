@extends('/instadeck/app')

@section('title', 'InstaDeck || Explore')

@section('content')
    <div class="container">
        <div class="input-group" id="dhs_search-bar-responsive">
            <input name="search" type="text" class="form-control rounded-left dhs_search-input" value="{{ old('search') }}" autocomplete="search" placeholder="Search..." onkeyup="searchBar()">
            <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-fw fa-search"></i></span>
            </div>
        </div>
        <div class="row pt-4">
                @foreach($posts as $post)
                    <div class="col-4 pb-4">
                        <a href="/instadeck/post/{{ $post->id }}">
                            <img src="/storage/{{ $post->image }}" class="w-100 h-100">
                        </a>
                    </div>
                @endforeach
        </div>
    </div>
@endsection