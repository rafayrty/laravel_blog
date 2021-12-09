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
                    <div class="left">

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

                <div class="right">
                    <div class="author-socials">
                    
                    <div class="social-link">

                                <a href="#">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.0001 0.041748C4.47724 0.041748 0 4.51898 0 10.0418C0 14.9951 3.60522 19.0973 8.33225 19.8917V12.1281H5.91994V9.33429H8.33225V7.27425C8.33225 4.88402 9.79213 3.58147 11.9247 3.58147C12.9461 3.58147 13.8238 3.65758 14.0786 3.6911V6.18954L12.5995 6.19025C11.44 6.19025 11.2165 6.74114 11.2165 7.54982V9.33286H13.9832L13.6223 12.1267H11.2165V19.9585C16.1642 19.3563 20 15.1496 20 10.0389C20 4.51898 15.5228 0.041748 10.0001 0.041748Z" fill="#010002"/>
                                    </svg>
                                </a>
                    </div>
                    <div class="social-link">
                        <a href="#">

                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 0.00896646C19.1294 0.611275 18.1656 1.07195 17.1455 1.37324C16.5979 0.755757 15.8703 0.318104 15.0609 0.119469C14.2516 -0.0791667 13.3995 -0.0292013 12.6201 0.262607C11.8406 0.554416 11.1713 1.07399 10.7027 1.75105C10.2341 2.42812 9.98882 3.23001 10 4.04827V4.93995C8.40239 4.98058 6.81934 4.63305 5.39183 3.92829C3.96431 3.22354 2.73665 2.18345 1.81818 0.900645C1.81818 0.900645 -1.81818 8.92575 6.36364 12.4925C4.49139 13.739 2.26105 14.364 0 14.2758C8.18182 18.7342 18.1818 14.2758 18.1818 4.02152C18.181 3.77315 18.1566 3.52539 18.1091 3.28143C19.0369 2.38395 19.6917 1.25082 20 0.00896646Z" fill="black"/>
                                </svg>
                                
                        </a>
                    </div>
                    
    
                    </div>
                </div>

                </div>

            </div>

        </main>



        <x-footer></x-footer>

@endsection
