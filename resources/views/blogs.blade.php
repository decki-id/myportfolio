@extends('main')

@section('title', 'Deckiherdiawans - Blogs')

@section('section')
    <section class="section blogs">
        <div class="container">
            <div class="row">
                <div class="section-title padd-15">
                    <h2>Blogs</h2>
                </div>
            </div>
            <div class="row">
                <div class="blog-item padd-15">
                    <div class="blog-item-inner shadow-dark">
                        <div class="blog-image">
                            <a href="https://deckiherdiawans.blogspot.com" target="_blank">
                                <img src="{{ url('/assets/images/Blogspot.jpg') }}">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h4 class="blog-title">My Diary</h4>
                            <p class="blog-description">
                                Articles about me, my lifetime experiences, my thoughts about everything I've been through.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection