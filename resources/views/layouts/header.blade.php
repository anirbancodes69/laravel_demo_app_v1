<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fatima - Creative Personal Blog Bootstrap 4 Template </title>
    <meta name="description" content="A Creative React Gatsby Blog Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('/') }}assets/img/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="{{ asset('/') }}assets/css/css2?family=Marck+Script&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- ************************* CSS Files ************************* -->

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/plugins.css">

    <!-- Fonts CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/fonts/fonts.css">

    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/main.css">
</head>

<body>


    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Start -->
        <header class="header">
            <div class="container">
                <div class="header__main">
                    <div class="header__col header__col--left">

                        <div class="header__element header__element--logo">
                            <div class="logo">
                                <a href="{{ route('home') }}" class="d-block">
                                    <img src="{{ asset('/') }}assets/img/logo/logo.png" alt="Logo" class="logo--dark">
                                    <img src="{{ asset('/') }}assets/img/logo/white-logo.png" alt="Logo"
                                        class="logo--white">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header__col header__col--center">
                        <nav class="header__element d-none d-lg-block">
                            <ul class="mainmenu">
                                <li class="mainmenu__item">
                                    <a href="{{ route('home') }}" class="mainmenu__link active">
                                        Home
                                    </a>
                                </li>
                                <li class="mainmenu__item">
                                    <a href="{{ route('about') }}" class="mainmenu__link">
                                        About Me
                                    </a>
                                </li>
                                <li class="mainmenu__item">
                                    <a href="{{ route('contact') }}" class="mainmenu__link">
                                        Contact
                                    </a>
                                </li>
                                <li class="mainmenu__item">
                                    <a href="{{ route('blog-detail') }}" class="mainmenu__link">
                                        Blog Detail
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__col header__col--right">
                        <div class="header__element d-none d-lg-block">
                            <div class="social social--white social--space-23">
                                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"
                                    class="social__link" aria-label="Facebook account link">
                                    <i data-feather="facebook"></i>
                                </a>
                                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer"
                                    class="social__link" aria-label="Facebook account link">
                                    <i data-feather="instagram"></i>
                                </a>
                                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer"
                                    class="social__link" aria-label="Facebook account link">
                                    <i data-feather="linkedin"></i>
                                </a>
                                <a href="https://twitter.com" target="_blank" rel="noopener noreferrer"
                                    class="social__link" aria-label="Facebook account link">
                                    <i data-feather="twitter"></i>
                                </a>
                                <a href="https://youtube.com" target="_blank" rel="noopener noreferrer"
                                    class="social__link" aria-label="Facebook account link">
                                    <i data-feather="youtube"></i>
                                </a>
                            </div>
                        </div>
                        <div class="header__element header__element--mobile-btn d-block d-lg-none">
                            <button class="hamburger js-toolbar-btn" data-target="#mobile-offcanvas" type="button"
                                aria-label="click here to open menu offcanvas">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">