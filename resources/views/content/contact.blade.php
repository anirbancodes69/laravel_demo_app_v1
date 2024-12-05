@extends('layouts.main')

@section('content')


<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-7 offset-xl-1">
                <h1>Contact</h1>
                <p>Hello Guys! Welcome to My Writing World, Where Are You Where Words Matter.</p>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Banner Area Start -->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('/') }}assets/img/banner/contact-banner.jpg" alt="Contact Banner">
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Contact Form Area Start -->
<section class="contact-form-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="section-title mb--40">
                    <h2 class="section-title__main">SEND US A MESSAGE</h2>
                </div>
                <form action="mail.php" class="contact-form" id="contact-form-active">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-form__group">
                                <input class="contact-form__input" type="text" name="name" id="name">
                                <label for="name" class="contact-form__label">Full Name</label>
                            </div>
                            <div class="contact-form__group">
                                <input class="contact-form__input" type="email" name="email" id="email">
                                <label for="email" class="contact-form__label">Enter Your Email</label>
                            </div>
                            <div class="contact-form__group">
                                <input class="contact-form__input" type="text" name="subject" id="subject">
                                <label for="subject" class="contact-form__label">Subject</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form__group">
                                <textarea name="message" id="message"
                                    class="contact-form__input contact-form__input--textarea"></textarea>
                                <label class="contact-form__label" for="message">Write Your Message Here</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit"
                                class="btn btn--primary btn--shape-rounded btn--icon btn--size-fullwidth">
                                <span class="btn-span">Submit Message<span class="icon"><i
                                            data-feather="chevron-right"></i></span></span>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="form-messege-active"></div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form Area End -->

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