@extends('/myportfolio/instadeck/app')

@section('title', 'InstaDeck || Edit Profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <form action="/myportfolio/instadeck/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')
                <div class="text-center"><h2>{{ __('Edit Profile') }}</h2></div>
                <div class="form-group row">
                    <label for="title" class="col-form-label">{{ __('Title') }}</label>
                    <input
                        id="title"
                        type="text"
                        class="form-control @error('title') is-invalid @enderror"
                        name="title"
                        value="{{ old('title') ?? $user->profile->title }}"
                        autocomplete="title"
                        autofocus>
                    @error('title')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="form-group row">
                    <label for="description" class="col-form-label">{{ __('Description') }}</label>
                    <textarea
                        id="description"
                        type="text"
                        class="form-control @error('description') is-invalid @enderror"
                        name="description"
                        autocomplete="description"
                        autofocus>{{ old('description') ?? $user->profile->description }}
                    </textarea>
                    @error('description')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="form-group row">
                    <label for="url" class="col-form-label">{{ __('URL') }}</label>
                    <input
                        id="url"
                        type="text"
                        class="form-control @error('url') is-invalid @enderror"
                        name="url"
                        value="{{ old('url') ?? $user->profile->url }}"
                        autocomplete="url"
                        autofocus>
                    @error('url')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="form-group row">
                    <label for="image" class="col-form-label">{{ __('Profile Image') }}</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" autofocus>
                    @error('image')<strong>{{ $message }}</strong>@enderror
                </div>
                <div class="form-group row pt-3">
                    <div class="col"><button class="form-control btn btn-primary">Save</button></div>
                    <div class="col"><a href="/myportfolio/instadeck/profile/{{ Auth::user()->id }}" class="form-control btn btn-danger">Cancel</a></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection