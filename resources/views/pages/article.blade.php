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
                                        <path d="M10.0001 0.041748C4.47724 0.041748 0 4.51898 0 10.0418C0 14.9951 3.60522 19.0973 8.33225 19.8917V12.1281H5.91994V9.33429H8.33225V7.27425C8.33225 4.88402 9.79213 3.58147 11.9247 3.58147C12.9461 3.58147 13.8238 3.65758 14.0786 3.6911V6.18954L12.5995 6.19025C11.44 6.19025 11.2165 6.74114 11.2165 7.54982V9.33286H13.9832L13.6223 12.1267H11.2165V19.9585C16.1642 19.3563 20 15.1496 20 10.0389C20 4.51898 15.5228 0.041748 10.0001 0.041748Z" fill="currentColor"/>
                                    </svg>
                                </a>
                    </div>
                    <div class="social-link">
                        <a href="#">

                            <svg width="20" height="20" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 0.00896646C19.1294 0.611275 18.1656 1.07195 17.1455 1.37324C16.5979 0.755757 15.8703 0.318104 15.0609 0.119469C14.2516 -0.0791667 13.3995 -0.0292013 12.6201 0.262607C11.8406 0.554416 11.1713 1.07399 10.7027 1.75105C10.2341 2.42812 9.98882 3.23001 10 4.04827V4.93995C8.40239 4.98058 6.81934 4.63305 5.39183 3.92829C3.96431 3.22354 2.73665 2.18345 1.81818 0.900645C1.81818 0.900645 -1.81818 8.92575 6.36364 12.4925C4.49139 13.739 2.26105 14.364 0 14.2758C8.18182 18.7342 18.1818 14.2758 18.1818 4.02152C18.181 3.77315 18.1566 3.52539 18.1091 3.28143C19.0369 2.38395 19.6917 1.25082 20 0.00896646Z" fill="currentColor"/>
                                </svg>
                                
                        </a>
                    </div>
                    
    
                    </div>
                </div>

                </div>

                <div class="article-content">

                        <p>
                            This lovely web is full of everything which is created I don't know what in mind, considering that sometimes totally bonkers stuff might be highly relevant if it has the right kind of thinking behind it. 
                        </p>

                        <h2>Next on the pipeline</h2>
                        
                        <p>
                            This lovely web is full of everything which is created I don't know what in mind, considering that sometimes totally bonkers stuff might be highly relevant if it has the right kind of thinking behind it. 
                        </p>

                        <div class="article-content__img">
                            <img src="{{asset('images/article_img.jpg')}}" alt="article_img">
                            
                            <p class="caption">
                                Image caption centered this way and I’ll make this a bit longer to indicate the amount of line-height.
                            </p>
                        </div>

                        <p>
                            This lovely web is full of everything which is created I don't know what in mind, considering that sometimes totally bonkers stuff might be highly relevant if it has the right kind of thinking behind it. 
                        </p>

                        <p>
                            This lovely web is full of everything which is created I don't know what in mind, considering that sometimes totally bonkers stuff might be highly relevant if it has the right kind of thinking behind it. 
                        </p>
                        <p>
                            Thanks for reading,<br/> Mika
                        </p>
                </div>

                <div class="shareables">
                    <p id="share-text">Share:</p>
                    <div class="shareables-container">

                        <div class="shareable-link">
    
                                    <a href="#">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.0001 0.041748C4.47724 0.041748 0 4.51898 0 10.0418C0 14.9951 3.60522 19.0973 8.33225 19.8917V12.1281H5.91994V9.33429H8.33225V7.27425C8.33225 4.88402 9.79213 3.58147 11.9247 3.58147C12.9461 3.58147 13.8238 3.65758 14.0786 3.6911V6.18954L12.5995 6.19025C11.44 6.19025 11.2165 6.74114 11.2165 7.54982V9.33286H13.9832L13.6223 12.1267H11.2165V19.9585C16.1642 19.3563 20 15.1496 20 10.0389C20 4.51898 15.5228 0.041748 10.0001 0.041748Z" fill="currentColor"/>
                                        </svg>
                                        <span>Share On Facebook</span>
                                    </a>
                        </div>
                        <div class="shareable-link">
                            <a href="#">
    
                                <svg width="20" height="20" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 0.00896646C19.1294 0.611275 18.1656 1.07195 17.1455 1.37324C16.5979 0.755757 15.8703 0.318104 15.0609 0.119469C14.2516 -0.0791667 13.3995 -0.0292013 12.6201 0.262607C11.8406 0.554416 11.1713 1.07399 10.7027 1.75105C10.2341 2.42812 9.98882 3.23001 10 4.04827V4.93995C8.40239 4.98058 6.81934 4.63305 5.39183 3.92829C3.96431 3.22354 2.73665 2.18345 1.81818 0.900645C1.81818 0.900645 -1.81818 8.92575 6.36364 12.4925C4.49139 13.739 2.26105 14.364 0 14.2758C8.18182 18.7342 18.1818 14.2758 18.1818 4.02152C18.181 3.77315 18.1566 3.52539 18.1091 3.28143C19.0369 2.38395 19.6917 1.25082 20 0.00896646Z" fill="currentColor"/>
                                    </svg>
                                    <span>Share On Twitter</span>

                            </a>
                        </div>
                    </div>

                </div>

                <div class="article-tags">

                    <p class="tags">Tags:</p>
                    <div class="tags-list">
                        <a href="#">product design</a>
                        <span>,</span>
                        <a href="#">culture</a>
                    </div>

                </div>

                <div class="author-description">
                    <div class="left">
                        <div class="avatar">
                            <img src="{{asset('images/avatar.jpg')}}" alt="MIKA">
                        </div>
                    </div>
                    <div class="right">
                        <p>
                            <strong>Mika Matikainen</strong> is a Design Founder & Advisor, Berlin School of Creative Leadership Executive MBA participant, Zippie advisor, Wolt co-founder, and Nordic Rose stakeholder.
                        </p>
                    </div>
                </div>

            </div>

            <div class="eyes-border">
                <hr>
                <div class="eyes-svg">

                    <svg width="82" height="65" viewBox="0 0 82 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M43.2857 32.8572C43.2857 41.3545 40.8575 49.0049 36.9827 54.5046C33.106 60.007 27.8445 63.2857 22.1429 63.2857C16.4412 63.2857 11.1797 60.007 7.30297 54.5046C3.4282 49.0049 1 41.3545 1 32.8572C1 24.3598 3.4282 16.7094 7.30297 11.2098C11.1797 5.70734 16.4412 2.42859 22.1429 2.42859C27.8445 2.42859 33.106 5.70734 36.9827 11.2098C40.8575 16.7094 43.2857 24.3598 43.2857 32.8572Z" fill="white" stroke="black" stroke-width="2"/>
                        <path d="M81 31.4286C81 39.9259 78.5718 47.5763 74.697 53.076C70.8203 58.5784 65.5588 61.8571 59.8572 61.8571C54.1555 61.8571 48.894 58.5784 45.0173 53.076C41.1425 47.5763 38.7143 39.9259 38.7143 31.4286C38.7143 22.9312 41.1425 15.2808 45.0173 9.78117C48.894 4.27875 54.1555 1 59.8572 1C65.5588 1 70.8203 4.27875 74.697 9.78117C78.5718 15.2808 81 22.9312 81 31.4286Z" fill="white" stroke="black" stroke-width="2"/>
                        <ellipse cx="25.5714" cy="45.1429" rx="8.57143" ry="12.1429" fill="black"/>
                        <ellipse cx="63.2857" cy="45.1429" rx="8.57143" ry="12.1429" fill="black"/>
                        </svg>
                </div>
        
            </div>


            <div class="read-next-container">

                <div class="read-next">

                    <h1 class="heading">What to read next</h1>

                </div>


                <div class="articles-container read-container">
                    <div class="articles">
            
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

            </div>


            <div class="news-letter-container">


                <x-news-letter></x-news-letter>

            </div>


        </main>



        <x-footer></x-footer>

@endsection
