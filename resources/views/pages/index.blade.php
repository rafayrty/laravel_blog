@extends('layouts.app')

@section('content')
<x-header></x-header>

<main>

    <div class="hero-container">

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

            <div class="articles__list">

                <div class="articles__list-article">
                    <div class="articles__list-image">
                        <a href="{{route('article.index',"how-modern-remote")}}">
                            <img src="{{asset("images/article1.jpg")}}" alt="article-img">
                        </a>
                    </div>
                    <h1 class="articles__list-heading">
                        <a href="{{route('article.index',"how-modern-remote")}}">
                            Granny gives everyone the finger, and other tips from OFFF Barcelona
                        </a>
                    </h1>

                </div>

                
                <div class="articles__list-article">
                    <div class="articles__list-image">
                        <a href="{{route('article.index',"how-modern-remote")}}">
                            <img src="{{asset("images/article2.jpg")}}" alt="article-img">
                        </a>
                    </div>
                    <h1 class="articles__list-heading">
                        <a href="{{route('article.index',"how-modern-remote")}}">
                            Hello world, or, in other words, why this blog exists
                        </a>
                    </h1>

                </div>

                
                <div class="articles__list-article">
                    <div class="articles__list-image">
                        <a href="{{route('article.index',"how-modern-remote")}}">
                            <img src="{{asset("images/article3.jpg")}}" alt="article-img">
                        </a>
                    </div>
                    <h1 class="articles__list-heading">
                        <a href="{{route('article.index',"how-modern-remote")}}">
                            Here are some things you should know regarding how we work 
                        </a>
                    </h1>

                </div>

                
                <div class="articles__list-article">
                    <div class="articles__list-image">
                        <a href="{{route('article.index',"how-modern-remote")}}">
                            <img src="{{asset("images/article4.jpg")}}" alt="article-img">
                        </a>
                    </div>
                    <h1 class="articles__list-heading">
                        <a href="{{route('article.index',"how-modern-remote")}}">
                            Updating list of 50+ sources on distributed teams, remote work, and how to make it all work better
                        </a>
                    </h1>

                </div>

                
                <div class="articles__list-article">
                    <div class="articles__list-image">
                        <a href="{{route('article.index',"how-modern-remote")}}">
                            <img src="{{asset("images/article5.jpg")}}" alt="article-img">
                        </a>
                    </div>
                    <h1 class="articles__list-heading">
                        <a href="{{route('article.index',"how-modern-remote")}}">
                            A few words about this blog platform, Ghost, and how this site was made
                        </a>
                    </h1>


                </div>

                
                <div class="articles__list-article">
                    <div class="articles__list-image">
                        <a href="{{route('article.index',"how-modern-remote")}}">
                            <img src="{{asset("images/article6.jpg")}}" alt="article-img">
                        </a>
                    </div>
                    <h1 class="articles__list-heading">
                        <a href="{{route('article.index',"how-modern-remote")}}">
                        How modern remote working tools get along with Old School Cowboy's methods
                        </a>
                    </h1>

                </div>

            </div>

        </div>
    </div>


</main>

<x-footer></x-footer>
@endsection
