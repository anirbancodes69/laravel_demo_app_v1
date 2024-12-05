@extends('layouts.main')

@section('content')
<!-- Hero area Start -->
<section class="hero-area home-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="hero-content__title">Hello</h1>
                    <p class="hero-content__desc">Welcome to my blog</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero area End -->

<!-- Feature Post area Start  -->
<div class="feature-post-area home-one" id="feature-posts">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="feature-post-slider">
                    <!-- Slider main container -->
                    <div class="feature-slider swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <article class="blog blog--one">
                                    <div class="blog__inner">
                                        <div class="blog__media">
                                            <figure class="blog__thumb">
                                                <img src="{{ asset('/') }}assets/img/blog/blog-11-510x560.jpg"
                                                    alt="blog thumb">
                                            </figure>
                                        </div>
                                        <div class="blog__content">
                                            <h2 class="blog__title">
                                                <a href="single-blog.html">Never Lose Your Technology
                                                    Again</a>
                                            </h2>
                                            <div class="blog__meta">
                                                <a href="archive.html" class="blog__date">April 21, 2020</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="blog blog--one blog--video">
                                    <div class="blog__inner">
                                        <div class="blog__media">
                                            <div class="blog__video">
                                                <figure class="blog__video-poster">
                                                    <img src="{{ asset('/') }}assets/img/blog/blog-2-510x560.jpg"
                                                        alt="Blog">
                                                </figure>
                                                <div class="blog__video-overlay">
                                                    <button type="button" class="blog__video-btn" data-toggle="modal"
                                                        data-target="#videoBlogModal">
                                                        <i data-feather="play"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog__content">
                                            <h2 class="blog__title">
                                                <a href="single-blog.html">Video format blog title</a>
                                            </h2>
                                            <div class="blog__meta">
                                                <a href="archive.html" class="blog__date">April 21, 2020</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="blog blog--one blog--gallery">
                                    <div class="blog__inner">
                                        <div class="blog__media">
                                            <div class="blog__gallery">
                                                <div class="post-slider swiper-container">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('/') }}assets/img/blog/blog-3-510x560.jpg"
                                                                alt="blog">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('/') }}assets/img/blog/blog-4-510x560.jpg"
                                                                alt="blog">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('/') }}assets/img/blog/blog-5-510x560.jpg"
                                                                alt="blog">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog__content">
                                            <h2 class="blog__title">
                                                <a href="">Gallery format blog title</a>
                                            </h2>
                                            <div class="blog__meta">
                                                <a href="archive.html" class="blog__date">April 21, 2020</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="blog blog--one">
                                    <div class="blog__inner">
                                        <div class="blog__media">
                                            <figure class="blog__thumb">
                                                <img src="{{ asset('/') }}assets/img/blog/blog-6-510x560.jpg"
                                                    alt="blog thumb">
                                            </figure>
                                        </div>
                                        <div class="blog__content">
                                            <h2 class="blog__title">
                                                <a href="single-blog.html">I wish to ask important eagerness
                                                    to follow or never</a>
                                            </h2>
                                            <div class="blog__meta">
                                                <a href="archive.html" class="blog__date">April 21, 2020</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="blog blog--one">
                                    <div class="blog__inner">
                                        <div class="blog__media">
                                            <figure class="blog__thumb">
                                                <img src="{{ asset('/') }}assets/img/blog/blog-7-510x560.jpg"
                                                    alt="blog thumb">
                                            </figure>
                                        </div>
                                        <div class="blog__content">
                                            <h2 class="blog__title">
                                                <a href="single-blog.html">the great times that we can
                                                    choose the other choices</a>
                                            </h2>
                                            <div class="blog__meta">
                                                <a href="archive.html" class="blog__date">April 21, 2020</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <!-- If we need navigation buttons -->
                        <button type="button" aria-label="go prev" class="swiper-button swiper-button-prev">
                            <i data-feather="arrow-left"></i>
                        </button>
                        <button type="button" aria-label="go next" class="swiper-button swiper-button-next">
                            <i data-feather="arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature Post area End -->

<!-- Main area Start -->
<main class="main-area home-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="recent-post-area">
                    <div class="section-title mb--46">
                        <h2 class="section-title__main">MOST RECENT POST</h2>
                    </div>
                    <div class="recent-post-content">
                        <article class="blog blog--two mb--50">
                            <div class="blog__inner">
                                <div class="blog__media">
                                    <div class="blog__link">
                                        <i data-feather="external-link"></i>
                                        <a href="https://themeforest.net/user/rainbow-themes/portfolio" target="_blank"
                                            rel="noopener noreferrer">https://themeforest.net/user/rainbow-themes/portfolio</a>
                                    </div>
                                </div>
                                <div class="blog__content">
                                    <header class="blog__header">
                                        <a class="blog__category" href="archive.html">THEMEFOREST</a>
                                        <h3 class="blog__title">
                                            <a href="single-blog.html">Linked format blog title</a>
                                        </h3>
                                        <div class="blog__meta">
                                            <div class="blog__meta-item">
                                                <a href="archive.html">MARCH 26, 2020</a>
                                            </div>
                                            <div class="blog__meta-item">
                                                <a href="single-blog.html" class="blog__comment">2
                                                    Comments</a>
                                            </div>
                                        </div>
                                    </header>
                                    <p class="blog__excerpt">
                                        This is useful, because plants require pollen of the same species to
                                        propagate. While other bees may introduce pollen from different
                                        plant species, the honeybee gu…
                                    </p>
                                    <footer class="blog__footer">
                                        <a href="single-blog.html" class="blog__btn"><span>Read More <i
                                                    data-feather="chevron-right"></i></span> </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        <article class="blog blog--two mb--50">
                            <div class="blog__inner">
                                <div class="blog__media">
                                    <blockquote class="blog__quote">
                                        <i data-feather="paperclip"></i>
                                        <h3>Courage is the first of human qualities because it is the
                                            quality which gurantees the others</h3>
                                        <footer>-Aristotle</footer>
                                    </blockquote>
                                </div>
                                <div class="blog__content">
                                    <header class="blog__header">
                                        <a class="blog__category" href="archive.html">THEMEFOREST</a>
                                        <h3 class="blog__title">
                                            <a href="single-blog.html">Quote format blog title</a>
                                        </h3>
                                        <div class="blog__meta">
                                            <div class="blog__meta-item">
                                                <a href="archive.html">MARCH 26, 2020</a>
                                            </div>
                                            <div class="blog__meta-item">
                                                <a href="single-blog.html" class="blog__comment">2
                                                    Comments</a>
                                            </div>
                                        </div>
                                    </header>
                                    <p class="blog__excerpt">
                                        This is useful, because plants require pollen of the same species to
                                        propagate. While other bees may introduce pollen from different
                                        plant species, the honeybee gu…
                                    </p>
                                    <footer class="blog__footer">
                                        <a href="single-blog.html" class="blog__btn"><span>Read More <i
                                                    data-feather="chevron-right"></i></span> </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        <article class="blog blog--two mb--50">
                            <div class="blog__inner">
                                <div class="blog__media">
                                    <figure class="blog__thumb">
                                        <img src="{{ asset('/') }}assets/img/blog/blog-9-510x350.jpg" alt="Blog">
                                        <a href="single-blog.html" class="overlay-link">Blog Title</a>
                                    </figure>
                                </div>
                                <div class="blog__content">
                                    <header class="blog__header">
                                        <a class="blog__category" href="archive.html">THEMEFOREST</a>
                                        <h3 class="blog__title">
                                            <a href="single-blog.html">Never Lose Your Technology Again</a>
                                        </h3>
                                        <div class="blog__meta">
                                            <div class="blog__meta-item">
                                                <a href="archive.html">MARCH 26, 2020</a>
                                            </div>
                                            <div class="blog__meta-item">
                                                <a href="single-blog.html" class="blog__comment">2
                                                    Comments</a>
                                            </div>
                                        </div>
                                    </header>
                                    <p class="blog__excerpt">
                                        This is useful, because plants require pollen of the same species to
                                        propagate. While other bees may introduce pollen from different
                                        plant species, the honeybee gu…
                                    </p>
                                    <footer class="blog__footer">
                                        <a href="single-blog.html" class="blog__btn"><span>Read More <i
                                                    data-feather="chevron-right"></i></span> </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        <article class="blog blog--two mb--50">
                            <div class="blog__inner">
                                <div class="blog__media">
                                    <div class="blog__video">
                                        <figure class="blog__video-poster">
                                            <img src="{{ asset('/') }}assets/img/blog/blog-2-510x350.jpg" alt="Blog">
                                        </figure>
                                        <div class="blog__video-overlay">
                                            <button type="button" class="blog__video-btn" data-toggle="modal"
                                                data-target="#videoBlogModal">
                                                <i data-feather="play"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__content">
                                    <header class="blog__header">
                                        <a class="blog__category" href="archive.html">THEMEFOREST</a>
                                        <h3 class="blog__title">
                                            <a href="single-blog.html">Video format blog title</a>
                                        </h3>
                                        <div class="blog__meta">
                                            <div class="blog__meta-item">
                                                <a href="archive.html">MARCH 26, 2020</a>
                                            </div>
                                            <div class="blog__meta-item">
                                                <a href="single-blog.html" class="blog__comment">2
                                                    Comments</a>
                                            </div>
                                        </div>
                                    </header>
                                    <p class="blog__excerpt">
                                        This is useful, because plants require pollen of the same species to
                                        propagate. While other bees may introduce pollen from different
                                        plant species, the honeybee gu…
                                    </p>
                                    <footer class="blog__footer">
                                        <a href="single-blog.html" class="blog__btn"><span>Read More <i
                                                    data-feather="chevron-right"></i></span> </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        <article class="blog blog--two mb--50">
                            <div class="blog__inner">
                                <div class="blog__media">
                                    <figure class="blog__thumb">
                                        <img src="{{ asset('/') }}assets/img/blog/blog-3-510x350.jpg" alt="Blog">
                                        <a href="single-blog.html" class="overlay-link">Blog Title</a>
                                    </figure>
                                </div>
                                <div class="blog__content">
                                    <header class="blog__header">
                                        <a class="blog__category" href="archive.html">THEMEFOREST</a>
                                        <h3 class="blog__title">
                                            <a href="single-blog.html">I wish to ask important eagerness to
                                                follow or never</a>
                                        </h3>
                                        <div class="blog__meta">
                                            <div class="blog__meta-item">
                                                <a href="archive.html">MARCH 26, 2020</a>
                                            </div>
                                            <div class="blog__meta-item">
                                                <a href="single-blog.html" class="blog__comment">2
                                                    Comments</a>
                                            </div>
                                        </div>
                                    </header>
                                    <p class="blog__excerpt">
                                        This is useful, because plants require pollen of the same species to
                                        propagate. While other bees may introduce pollen from different
                                        plant species, the honeybee gu…
                                    </p>
                                    <footer class="blog__footer">
                                        <a href="single-blog.html" class="blog__btn"><span>Read More <i
                                                    data-feather="chevron-right"></i></span> </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        <article class="blog blog--two mb--50">
                            <div class="blog__inner">
                                <div class="blog__media">
                                    <div class="blog__gallery">
                                        <div class="post-slider swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('/') }}assets/img/blog/blog-4-510x350.jpg"
                                                        alt="blog">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('/') }}assets/img/blog/blog-5-510x350.jpg"
                                                        alt="blog">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('/') }}assets/img/blog/blog-6-510x350.jpg"
                                                        alt="blog">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__content">
                                    <header class="blog__header">
                                        <a class="blog__category" href="archive.html">THEMEFOREST</a>
                                        <h3 class="blog__title">
                                            <a href="single-blog.html">Gallery format blog title</a>
                                        </h3>
                                        <div class="blog__meta">
                                            <div class="blog__meta-item">
                                                <a href="archive.html">MARCH 26, 2020</a>
                                            </div>
                                            <div class="blog__meta-item">
                                                <a href="single-blog.html" class="blog__comment">2
                                                    Comments</a>
                                            </div>
                                        </div>
                                    </header>
                                    <p class="blog__excerpt">
                                        This is useful, because plants require pollen of the same species to
                                        propagate. While other bees may introduce pollen from different
                                        plant species, the honeybee gu…
                                    </p>
                                    <footer class="blog__footer">
                                        <a href="single-blog.html" class="blog__btn"><span>Read More <i
                                                    data-feather="chevron-right"></i></span> </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        <article class="blog blog--two mb--50">
                            <div class="blog__inner">
                                <div class="blog__media">
                                    <figure class="blog__thumb">
                                        <img src="{{ asset('/') }}assets/img/blog/blog-7-510x350.jpg" alt="Blog">
                                        <a href="single-blog.html" class="overlay-link">Blog Title</a>
                                    </figure>
                                </div>
                                <div class="blog__content">
                                    <header class="blog__header">
                                        <a class="blog__category" href="archive.html">THEMEFOREST</a>
                                        <h3 class="blog__title">
                                            <a href="single-blog.html">Now all manufacturers to achieve
                                                because it is not a great film</a>
                                        </h3>
                                        <div class="blog__meta">
                                            <div class="blog__meta-item">
                                                <a href="archive.html">MARCH 26, 2020</a>
                                            </div>
                                            <div class="blog__meta-item">
                                                <a href="single-blog.html" class="blog__comment">2
                                                    Comments</a>
                                            </div>
                                        </div>
                                    </header>
                                    <p class="blog__excerpt">
                                        This is useful, because plants require pollen of the same species to
                                        propagate. While other bees may introduce pollen from different
                                        plant species, the honeybee gu…
                                    </p>
                                    <footer class="blog__footer">
                                        <a href="single-blog.html" class="blog__btn"><span>Read More <i
                                                    data-feather="chevron-right"></i></span> </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                    </div>
                    <nav class="pagination-wrap">
                        <ul class="pagination">
                            <li class="pagination__item disabled">
                                <a class="pagination__link pagination__link--prev" href="index.html">
                                    <i data-feather="chevron-left"></i>
                                    <span>prev</span>
                                </a>
                            </li>
                            <li class="pagination__item">
                                <a class="pagination__link active" href="index.html">
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="pagination__item">
                                <a class="pagination__link" href="index.html">
                                    <span>2</span>
                                </a>
                            </li>
                            <li class="pagination__item">
                                <a class="pagination__link" href="index.html">
                                    <span>3</span>
                                </a>
                            </li>
                            <li class="pagination__item">
                                <a class="pagination__link" href="index.html">
                                    <span>4</span>
                                </a>
                            </li>
                            <li class="pagination__item">
                                <a class="pagination__link pagination__link--next" href="index.html">
                                    <span>next</span>
                                    <i data-feather="chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-widget mt--md-12">
                    <div class="widget widget--primary mb--30">
                        <h3 class="widget__title">SEARCH</h3>
                        <form class="search-form">
                            <label class="sr-only" for="search">Search</label>
                            <input class="search-form__input" type="search" id="search" name="search"
                                placeholder="Search Here...">
                            <button type="submit" class="search-form__btn" aria-label="Submit">
                                <i data-feather="search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="widget mb--30">
                        <h3 class="widget__title">RECENT POSTS</h3>
                        <div class="recent-post">
                            <div class="recent-post__item">
                                <article class="blog blog--three">
                                    <div class="blog__inner">
                                        <div class="blog__content">
                                            <a href="archive.html" class="blog__date">MARCH 26, 2020</a>
                                            <h4 class="blog__title">
                                                <a href="single-blog.html">I wish to ask important eagerness
                                                    to follow or never</a>
                                            </h4>
                                        </div>
                                        <div class="blog__media">
                                            <figure class="blog__thumb">
                                                <img src="{{ asset('/') }}assets/img/blog/blog-1-78x78.jpg" alt="Blog">
                                                <a href="single-blog.html" class="overlay-link">Blog
                                                    Link</a>
                                            </figure>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="recent-post__item">
                                <article class="blog blog--three">
                                    <div class="blog__inner">
                                        <div class="blog__content">
                                            <a href="archive.html" class="blog__date">MARCH 26, 2020</a>
                                            <h4 class="blog__title">
                                                <a href="single-blog.html">Now all manufacturers to achieve
                                                    because it is not a great film</a>
                                            </h4>
                                        </div>
                                        <div class="blog__media">
                                            <figure class="blog__thumb">
                                                <img src="{{ asset('/') }}assets/img/blog/blog-2-78x78.jpg" alt="Blog">
                                                <a href="single-blog.html" class="overlay-link">Blog
                                                    Link</a>
                                            </figure>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="recent-post__item">
                                <article class="blog blog--three">
                                    <div class="blog__inner">
                                        <div class="blog__content">
                                            <a href="archive.html" class="blog__date">MARCH 26, 2020</a>
                                            <h4 class="blog__title">
                                                <a href="single-blog.html">the choice is easy blinded to the
                                                    needs of hardship</a>
                                            </h4>
                                        </div>
                                        <div class="blog__media">
                                            <figure class="blog__thumb">
                                                <img src="{{ asset('/') }}assets/img/blog/blog-3-78x78.jpg" alt="Blog">
                                                <a href="single-blog.html" class="overlay-link">Blog
                                                    Link</a>
                                            </figure>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="recent-post__item">
                                <article class="blog blog--three">
                                    <div class="blog__inner">
                                        <div class="blog__content">
                                            <a href="archive.html" class="blog__date">MARCH 26, 2020</a>
                                            <h4 class="blog__title">
                                                <a href="single-blog.html">those who reject the troubles
                                                    they exercise that is either</a>
                                            </h4>
                                        </div>
                                        <div class="blog__media">
                                            <figure class="blog__thumb">
                                                <img src="{{ asset('/') }}assets/img/blog/blog-4-78x78.jpg" alt="Blog">
                                                <a href="single-blog.html" class="overlay-link">Blog
                                                    Link</a>
                                            </figure>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget--primary mb--30">
                        <h3 class="widget__title">INSTAGRAM</h3>
                        <div id="instagram-feed"></div>
                    </div>
                    <div class="widget">
                        <h3 class="widget__title">CATEGORIES</h3>
                        <ul class="categories">
                            <li class="categories__item">
                                <a href="archive.html" class="categories__link">
                                    <span class="text">themeforest</span>
                                    <span class="number">2</span>
                                </a>
                            </li>
                            <li class="categories__item">
                                <a href="archive.html" class="categories__link">
                                    <span class="text">themeforest</span>
                                    <span class="number">2</span>
                                </a>
                            </li>
                            <li class="categories__item">
                                <a href="archive.html" class="categories__link">
                                    <span class="text">themeforest</span>
                                    <span class="number">2</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</main>
<!-- Main area End -->

<!-- Contact Us area Start -->
<div class="contact-area home-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mailchimp">
                    <div class="section-title mb--31">
                        <h2 class="section-title__main">CONTACT US</h2>
                    </div>
                    <p class="mailchimp__text">Leave your email here and stay informed about our promotions
                        and new arrivals.</p>
                    <form class="mailchimp-form mc-form mailchimp-form--2"
                        action="https://gmail.us19.list-manage.com/subscribe/post?u=9fac302a213ab56195e9125e7&amp;id=a30904c5f3"
                        method="post" name="mc-embedded-subscribe-form">
                        <label for="mailchimp-email" class="sr-only">Subscribe us</label>
                        <div class="mailchimp-form__group">
                            <input class="mailchimp-form__input" type="email" id="mailchimp-email"
                                name="mailchimp-email" placeholder="Your Email">
                            <button class="mailchimp-form__btn" type="submit">
                                <i data-feather="arrow-right"></i>
                            </button>
                        </div>
                    </form>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div>
                    <!-- mailchimp-alerts end -->
                </div>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="cta">
                    <div class="cta__content">
                        <h3 class="cta__heading">
                            Get in touch <span>with me...</span>
                        </h3>
                        <p class="cta__text">The standard chunk of Lorem Ipsum used since the 1500s is
                            reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de
                            Finibus Bonorum.</p>
                        <a href="contact.html" class="btn btn--light btn--shape-rounded btn--icon">
                            <span>Connect With me <span class="icon"><i data-feather="chevron-right"></i></span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us area End -->
@endsection