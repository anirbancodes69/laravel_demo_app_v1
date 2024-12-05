@extends('layouts.main')

@section('content')

<!-- Main area Start -->
<main class="single-post-area without-sidebar">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <!-- Single Blog Start -->
                <article class="single-blog">
                    <div class="single-blog__media">
                        <!-- Image Post -->
                        <figure class="single-blog__thumb">
                            <img src="{{ asset('/') }}assets/img/blog/blog-1.jpg" alt="Single Blog">
                        </figure>
                    </div>
                    <header class="single-blog__header">
                        <a href="archive.html" class="single-blog__category">Themeforest</a>
                        <h2 class="single-blog__title">Blog Title</h2>
                        <div class="single-blog__meta">
                            <div class="single-blog__meta-item">
                                <a href="archive.html" class="single-blog__date">MARCH 26, 2020</a>
                            </div>
                            <div class="single-blog__meta-item">
                                <a href="archive.html" class="single-blog__author">FATIMA LIMA</a>
                            </div>
                            <div class="single-blog__meta-item">
                                <a href="archive.html" class="single-blog__comment-numb">3 Comments</a>
                            </div>
                        </div>
                    </header>
                    <div class="single-blog__content">
                        <p>One primary reason is that bees are vital pollinators, on which human agriculture depends.
                            Bees transfer pollen between plants allowing them to reproduce and grow. The Food and
                            Agriculture Organisation (FAO) of the UN has found that 35% of global agricultural land,
                            consisting of 87 major food crops, is dependent on pollination by bees</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum. You need to be
                            sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                            generators on the Internet tend toitrrepeat predefined chunks.</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum. You need to be
                            sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                            generators on the Internet tend toitrrepeat predefined chunks.</p>
                        <p>Necessary, making this the first true generator on the Internet. It re are many variations of
                            passages of Lo rem Ipsum available, but the majority have suffered alteration in some form,
                            by injectedeed eedhumour, or randomised words which don't look even slightly believable.</p>
                        <div class="row">
                            <div class="col-md-6 mb--30">
                                <figure>
                                    <img src="{{ asset('/') }}assets/img/blog/image-2.jpg" alt="single blog">
                                </figure>
                            </div>
                            <div class="col-md-6 mb--30">
                                <figure>
                                    <img src="{{ asset('/') }}assets/img/blog/image-3.jpg" alt="single blog">
                                </figure>
                            </div>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum. You need to be
                            sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                            generators on the Internet tend toitrrepeat predefined chunks.</p>
                        <blockquote>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.
                        </blockquote>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum. You need to be
                            sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                            generators on the Internet tend toitrrepeat predefined chunks. Necessary, making this the
                            first true generator on the Internet. It re are many variations of passages of Lorem Ipsum
                            available, but the majority have suffered alteration in some form, by injectedeed eedhumour,
                            or randomised words which don't look even slightly believable.</p>
                        <div class="row">
                            <div class="col-md-6 mb--30">
                                <figure>
                                    <img src="{{ asset('/') }}assets/img/blog/image-1.jpg" alt="single blog">
                                    <figcaption>Internet tend toitrrepeat predefined chunks.</figcaption>
                                </figure>
                            </div>
                            <div class="col-md-6 mb--30">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour.</p>
                                <h5 class="mb--15">Ordered & Unordered Lists.</h5>
                                <ul class="mb--30">
                                    <li>Yet this above sewed flirted opened ouch</li>
                                    <li>Goldfinch realistic sporadic ingenuous</li>
                                    <li>Abominable this abidin far successfully </li>
                                </ul>
                                <h5 class="mb--15">Ordered & Unordered Lists.</h5>
                                <ul>
                                    <li>Yet this above sewed flirted opened ouch</li>
                                    <li>Goldfinch realistic sporadic ingenuous</li>
                                    <li>Abominable this abidin far successfully </li>
                                </ul>
                            </div>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum. You need to be
                            sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                            generators on the Internet tend toitrrepeat predefined chunks. Necessary, making this the
                            first true generator on the Internet. It re are many variations of passages of Lorem Ipsum
                            available, but the majority have suffered alteration in some form, by injectedeed eedhumour,
                            or randomised words which don't look even slightly believable.</p>
                    </div>
                    <footer class="single-blog__footer">
                        <div class="single-blog__share">
                            <h4>Share This:</h4>
                            <div class="social layout-2">
                                <a href="" class="social__link">
                                    <i data-feather="facebook"></i>
                                </a>
                                <a href="" class="social__link">
                                    <i data-feather="linkedin"></i>
                                </a>
                                <a href="" class="social__link">
                                    <i data-feather="twitter"></i>
                                </a>
                            </div>
                        </div>
                        <div class="single-blog__tags">
                            <i data-feather="tag"></i>
                            <a href="archive.html">react,</a>
                            <a href="archive.html">markdown,</a>
                            <a href="archive.html">gatsby,</a>
                            <a href="archive.html">blog</a>
                        </div>
                    </footer>
                </article>
                <!-- Single Blog End -->

                <!-- Comments Area Start -->
                <div class="comments-area">
                    <h3 class="comments-area__title">3 Comments</h3>
                    <ul class="comments-list">
                        <li class="comments-list__item">
                            <div class="comment">
                                <div class="comment__left">
                                    <figure class="comment__author-img">
                                        <a href="archive.html" class="d-block">
                                            <img src="{{ asset('/') }}assets/img/others/author-1.jpg" alt="Author">
                                        </a>
                                    </figure>
                                </div>
                                <div class="comment__right">
                                    <div class="comment__top">
                                        <h5 class="comment__author-name">
                                            <a href="archive.html">John Doe</a>
                                        </h5>
                                        <p class="comment__date">October 24, 2020</p>
                                        <button type="button" class="comment__reply">Reply</button>
                                    </div>
                                    <p class="comment__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate,</p>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <div class="comment">
                                        <div class="comment__left">
                                            <figure class="comment__author-img">
                                                <a href="archive.html" class="d-block">
                                                    <img src="{{ asset('/') }}assets/img/others/author-1.jpg"
                                                        alt="Author">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="comment__right">
                                            <div class="comment__top">
                                                <h5 class="comment__author-name">
                                                    <a href="archive.html">John Doe</a>
                                                </h5>
                                                <p class="comment__date">October 24, 2020</p>
                                                <button type="button" class="comment__reply">Reply</button>
                                            </div>
                                            <p class="comment__desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut
                                                enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                                in voluptate,</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Comments Area End -->

                <!-- Related Posts Area start -->
                <div class="related-posts">
                    <h3 class="related-posts__title">Related Posts</h3>
                    <div class="row">
                        <div class="col-md-6 mb--30">
                            <article class="blog blog--five">
                                <div class="blog__inner">
                                    <div class="blog__media">
                                        <figure class="blog__thumb">
                                            <img src="{{ asset('/') }}assets/img/blog/blog-1.jpg" alt="Blog">
                                            <a href="single-blog.html" class="overlay-link">Blog Title</a>
                                        </figure>
                                        <a class="blog__category blog__category--media"
                                            href="archive.html">THEMEFOREST</a>
                                    </div>
                                    <div class="blog__content">
                                        <header class="blog__header">
                                            <h3 class="blog__title">
                                                <a href="single-blog.html">Blog Title</a>
                                            </h3>
                                        </header>
                                        <p class="blog__excerpt">This is useful, because plants require pollen of the
                                            same species to propagate…</p>
                                        <footer class="blog__footer">
                                            <div class="blog__meta">
                                                <div class="blog__meta-item">
                                                    <a class="blog__author" href="archive.html">Fatima Lima</a>
                                                </div>
                                                <div class="blog__meta-item">
                                                    <a class="blog__comment-number" href="single-blog.html">3
                                                        Comments</a>
                                                </div>
                                            </div>
                                            <a class="blog__btn" href="single-blog.html">Read More <i
                                                    data-feather="chevron-right"></i></a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 mb--30">
                            <article class="blog blog--five">
                                <div class="blog__inner">
                                    <div class="blog__media">
                                        <figure class="blog__thumb">
                                            <img src="{{ asset('/') }}assets/img/blog/blog-1.jpg" alt="Blog">
                                            <a href="single-blog.html" class="overlay-link">Blog Title</a>
                                        </figure>
                                        <a class="blog__category blog__category--media"
                                            href="archive.html">THEMEFOREST</a>
                                    </div>
                                    <div class="blog__content">
                                        <header class="blog__header">
                                            <h3 class="blog__title">
                                                <a href="single-blog.html">Blog Title</a>
                                            </h3>
                                        </header>
                                        <p class="blog__excerpt">This is useful, because plants require pollen of the
                                            same species to propagate…</p>
                                        <footer class="blog__footer">
                                            <div class="blog__meta">
                                                <div class="blog__meta-item">
                                                    <a class="blog__author" href="archive.html">Fatima Lima</a>
                                                </div>
                                                <div class="blog__meta-item">
                                                    <a class="blog__comment-number" href="single-blog.html">3
                                                        Comments</a>
                                                </div>
                                            </div>
                                            <a class="blog__btn" href="single-blog.html">Read More <i
                                                    data-feather="chevron-right"></i></a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <!-- Related Posts Area End -->
            </div>
        </div>
    </div>
</main>
<!-- Main area End -->

<!-- Instagram Area Start -->
<section class="instagram-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="instagram-title"><i data-feather="instagram"></i> <span>Me On Instagram</span></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="instagram-feed-2"></div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Area End -->

@endsection