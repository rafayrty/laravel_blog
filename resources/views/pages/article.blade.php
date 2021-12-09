@extends('layouts.app')

@section('content')
        <x-header></x-header>


        <main>

        {{-- <h1>The Slug is {{$slug}}</h1> --}}

            <div class="article-container">

                <div class="article-hero">
                    <div class="hero-text">
                        <h1>A few words about this blog platform, Ghost, and how this site was made</h1>
                        <p>
                            Why Ghost (& Figma) instead of Medium, WordPress or other options?
                        </p>
                    </div>

                    <div class="hero-img">
                        <img src="{{asset('images/img1.jpg')}}" alt="hero-image">
                    </div>
        
                    <hr>
                </div>

                <div class="article-author">
                    <div class="avatar">
                        <img src="{{asset('images/avatar.jpg')}}" alt="MIKA">
                    </div>
                    <div class="author-info">
                        <p class="name">MIKA MATIKAINEN</p>
                        
                        <div class="read">
                            Apr 15, 2020 · 4 min read
                        </div>
                    </div>
                </div>

            </div>

        </main>



        <x-footer></x-footer>

@endsection
