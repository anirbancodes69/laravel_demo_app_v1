@extends('layouts.main')

@section('content')


<!-- Page Header Area Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-7 offset-xl-1">
                <h1>About Fatima</h1>
                <p>Hello Guys! Welcome to My Writing World, Where Are You Where Words Matter.</p>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Area End -->

<!-- Page Banner Area Start -->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('/') }}assets/img/banner/about-banner.jpg" alt="About Banner">
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- About Content Area Start -->
<div class="about-content-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="about-content-top">
                    <h4>There are many variations of passages of Lorem Ipsumn available but the majority
                        have suffered alteration.</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form, by injected humour, or randomised words which
                        don't look even slightly believable. If you are going to use a passage of Lorem
                        Ipsum. You need to be sure there isn't anything embarrassing hidden in the middle of
                        text. All the Lorem Ipsum generators on the Internet tend toitrrepeat predefined
                        chunks.</p>
                    <p>Necessary, making this the first true generator on the Internet. It re are many
                        variations of passages of Lo rem Ipsum available, but the majority have suffered
                        alteration in some form, by injectedeed eedhumour, or randomised words which don't
                        look even slightly believable.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="mb--14">Ordered & Unordered Lists.</h5>
                        <ul class="about-list">
                            <li>Yet this above sewed flirted opened ouch</li>
                            <li>Goldfinch realistic sporadic ingenuous</li>
                            <li>Abominable this abidin far successfully </li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="mb--14">Ordered & Unordered Lists.</h5>
                        <ul class="about-list">
                            <li>Yet this above sewed flirted opened ouch</li>
                            <li>Goldfinch realistic sporadic ingenuous</li>
                            <li>Abominable this abidin far successfully </li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing</li>
                        </ul>
                    </div>
                </div>
                <div class="about-content-bottom">
                    <h5 class="mb--24">Ordered & Unordered Lists.</h5>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form, by injected humour, or randomised words which
                        don't look even slightly believable. If you are going to use a passage of Lorem
                        Ipsum. You need to be sure there isn't anything embarrassing hidden in the middle of
                        text. All the Lorem Ipsum generators on the Internet tend toitrrepeat predefined
                        chunks.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Content Area End -->

<!-- Instagram Area Start -->
<section class="instagram-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="instagram-title"><i data-feather="instagram"></i> <span>Me On Instagram</span>
                </h5>
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