@extends('layouts.app')

@section('content')
    <x-header></x-header>

    <main>
        
        <div class="hero-container container-width">

        <div class="hero">
            <div class="hero-img">
                <img src="{{asset('images/img1.jpg')}}" alt="hero-image">
            </div>

            <div class="hero-text">
                <h1>A few words about this blog platform, Ghost, and how this site was made</h1>
                <p>
                    Why Ghost (& Figma) instead of Medium, WordPress or other options?
                </p>
            </div>
        </div>
        <hr>

    </div>

    <div class="articles-container">
        <div class="articles">

            <h1 class="articles__heading">
                All articles
            </h1>

        </div>
    </div>
   

    </main>


@endsection



