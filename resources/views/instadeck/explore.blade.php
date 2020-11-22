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
        <div class="row pt-4">
            @for($a = 0; $a < count($unsplashApi); $a++)
                @foreach($unsplashApi as $unsplash)
                    @if(isset($unsplash[$a]))
                        <div class="col-4 pb-4">
                            <a href="{{ $unsplash[$a]['urls']['small'] }}">
                                <img src="{{ $unsplash[$a]['urls']['small'] }}" class="w-100 h-100">
                            </a>
                        </div>
                    @endif
                @endforeach
            @endfor
        </div>
    </div>
@endsection