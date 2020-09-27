@extends('/myportfolio/instadeck/app')

@section('title', 'InstaDeck || Create')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <form action="/myportfolio/instadeck/post" enctype="multipart/form-data" method="post">
                @csrf
                <div class="text-center"><h2>{{ __('New Post') }}</h2></div>
                <div class="form-group row">
                    <label for="image" class="col-form-label">{{ __('Post Image') }}</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" autofocus>
                    @error('image')<strong>{{ $message }}</strong>@enderror
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-form-label">{{ __('Post Caption') }}</label>
                    <textarea
                        id="caption"
                        type="text"
                        class="form-control @error('caption') is-invalid @enderror"
                        name="caption"
                        value="{{ old('caption') }}"
                        autocomplete="caption"
                        autofocus>
                    </textarea>
                    @error('caption')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="form-group row pt-3">
                    <button class="btn btn-primary mr-2">Post</button>
                    <a href="/myportfolio/instadeck" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection