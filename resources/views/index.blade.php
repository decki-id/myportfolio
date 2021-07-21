@extends('main')

@section('title', 'Deckiherdiawans - Home')

@section('section')
    <section class="section home">
        <div class="container">
            <div class="intro">
                <img src="{{ url('/assets/images/DeckiRevota.jpg') }}" alt="profile" class="shadow-dark">
                <h1>Decki Herdiawan Soepandi</h1>
                <p>Customer Support | Full Stack Web Developer | Movie Buff</p>
                <div class="social-links">
                    <a href="https://wa.me/6282216668131" target="_blank" title="WhatsApp">
                        <i class="fab fa-fw fa-whatsapp"></i>
                    </a>
                    <a href="https://instagram.com/deckiherdiawans" target="_blank" title="Instagram">
                        <i class="fab fa-fw fa-instagram"></i>
                    </a>
                    <a href="https://facebook.com/deckiherdiawans" target="_blank" title="Facebook">
                        <i class="fab fa-fw fa-facebook"></i>
                    </a>
                    <a href="https://github.com/deckiherdiawans" target="_blank" title="GitHub">
                        <i class="fab fa-fw fa-github"></i>
                    </a>
                    <a href="https://linkedin.com/in/deckiherdiawans" target="_blank" title="LinkedIn">
                        <i class="fab fa-fw fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection