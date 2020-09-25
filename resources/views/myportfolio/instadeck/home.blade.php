@extends('/myportfolio/instadeck/app')

@section('title', 'InstaDeck || Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5 text-center">
            <img src="{{ url('/assets/images/user.jpg') }}" class="dhs_profile-picture">
        </div>
        <div class="col-9 pt-5">
            <div><h2>deckiherdiawans</h2></div>
            <div class="d-flex">
                <div class="pr-5"><strong>365</strong> posts</div>
                <div class="pr-5"><strong>341</strong> followers</div>
                <div class="pr-5"><strong>208</strong> following</div>
            </div>
            <div class="pt-2 font-weight-bold">Decki Herdiawan Soepandi</div>
            <div>
                <a href="https://instagram.com/explore/tags/indonesia/">#Indonesia</a> ,
                <a href="https://instagram.com/explore/tags/padalarang/">#Padalarang</a> ,
                <a href="https://instagram.com/explore/tags/bandung/">#Bandung</a> .
                <br>
                <a href="https://instagram.com/explore/tags/customersupport/">#CustomerSupport</a>
                <a href="https://instagram.com/revotaindonesia/">@revotaindonesia</a>
                <br>
                <a href="https://instagram.com/explore/tags/programmer/">#Programmer</a> |
                <a href="https://instagram.com/explore/tags/moviebuff/">#MovieBuff</a>
                <br>
                <span>20/11/1993 | +6282216668131</span>
                <br>
                <a href="https://deckiherdiawans.com">deckiherdiawans.com</a>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="{{ url('/assets/images/BestFormalPhoto.jpg') }}" class="w-100">
        </div>
        <div class="col-4">
            <img src="{{ url('/assets/images/DeckiRevota.jpg') }}" class="w-100">
        </div>
        <div class="col-4">
            <img src="{{ url('/assets/images/decki-revota.jpg') }}" class="w-100">
        </div>
    </div>
</div>
@endsection
