@extends('main')

@section('title', 'Deckiherdiawans - Portfolios')

@section('section')
    <section class="section portfolios">
        <div class="container">
            <div class="row">
                <div class="section-title padd-15">
                    <h2>Portfolios</h2>
                </div>
            </div>
            <div class="row">
                <div class="portfolio-item padd-15">
                    <div class="portfolio-item-inner shadow-dark">
                        <div class="portfolio-image">
                            <a href="/students" target="_blank"><img src="{{ url('/assets/images/Students.jpg') }}"></a>
                        </div>
                        <div class="portfolio-info">
                            <h4 class="portfolio-title">Students</h4>
                            <p class="portfolio-description">A fundamental Students CRUD system with Laravel framework.</p>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item padd-15">
                    <div class="portfolio-item-inner shadow-dark">
                        <div class="portfolio-image">
                            <a href="/instadeck" target="_blank"><img src="{{ url('/assets/images/InstaDeck.jpg') }}"></a>
                        </div>
                        <div class="portfolio-info">
                            <h4 class="portfolio-title">InstaDeck</h4>
                            <p class="portfolio-description">An Instagram clone website, build with Laravel framework & Vue.js Example Component.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection