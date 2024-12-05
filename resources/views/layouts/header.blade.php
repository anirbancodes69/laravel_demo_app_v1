<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edutics</title>
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">

    <!-- plugins & libraries css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/font-awesome/all.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/slim-select/slimselect.css">

    <!-- tailwind css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/output.css">

    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/style.css">
</head>

<body>
    <div class="ed-overlay group">
        <div
            class="fixed inset-0 z-[100] group-[.active]:bg-edblue/80 duration-[400ms] pointer-events-none group-[.active]:pointer-events-auto">
        </div>
    </div>

    <!-- cart -->
    <div class="ed-cart-bar group">
        <div
            class="w-[420px] max-w-full fixed z-[999] right-0 top-0 h-full bg-white flex flex-col translate-x-[100%] duration-[400ms] group-[.active]:translate-x-0">
            <!-- heading -->
            <div class="flex items-center justify-between px-[25px] border-b border-edgray/20 pb-[23px] pt-[22px]">
                <h5 class="text-[20px]">My Cart List</h5>
                <h6>(03 Items)</h6>
            </div>

            <!-- cart items -->
            <div>
                <!-- single cart item -->
                <div class="flex items-center gap-[20px] py-[30px] px-[25px] border-b border-edgray/20">
                    <img src="{{ asset('/') }}assets/img/cart-item-1.jpg" alt="Cart Item Image"
                        class="rounded-[10px] shrink-0">
                    <div class="grow">
                        <h6 class="font-medium text-[18px] text-edblue"><a href="course-details.html"
                                class="hover:text-edpurple">Web Development</a></h6>
                        <h6 class="font-medium text-edgray">$15.00</h6>
                    </div>
                    <button class="text-[20px] text-edgray shrink-0 hover:text-edpurple">x</button>
                </div>

                <!-- single cart item -->
                <div class="flex items-center gap-[20px] py-[30px] px-[25px] border-b border-edgray/20">
                    <img src="{{ asset('/') }}assets/img/cart-item-2.jpg" alt="Cart Item Image"
                        class="rounded-[10px] shrink-0">
                    <div class="grow">
                        <h6 class="font-medium text-[18px] text-edblue"><a href="course-details.html"
                                class="hover:text-edpurple">Digital Marketing</a></h6>
                        <h6 class="font-medium text-edgray">$15.00</h6>
                    </div>
                    <button class="text-[20px] text-edgray shrink-0 hover:text-edpurple">x</button>
                </div>

                <!-- single cart item -->
                <div class="flex items-center gap-[20px] py-[30px] px-[25px] border-b border-edgray/20">
                    <img src="{{ asset('/') }}assets/img/cart-item-3.jpg" alt="Cart Item Image"
                        class="rounded-[10px] shrink-0">
                    <div class="grow">
                        <h6 class="font-medium text-[18px] text-edblue"><a href="course-details.html"
                                class="hover:text-edpurple">WordPress Development</a></h6>
                        <h6 class="font-medium text-edgray">$15.00</h6>
                    </div>
                    <button class="text-[20px] text-edgray shrink-0 hover:text-edpurple">x</button>
                </div>
            </div>

            <!-- cart bottom -->
            <div class="mt-auto px-[25px] mb-[30px]">
                <div class="flex items-center justify-between font-medium text-[18px] text-edblue mb-[33px]">
                    <span>Total</span>
                    <span>$999</span>
                </div>
                <div class="space-y-[15px]">
                    <a href="#"
                        class="ed-btn w-full !rounded-[10px] !bg-transparent border border-edblue !text-edblue hover:!bg-edblue hover:!text-white">Proceed
                        to checkout</a>
                    <a href="#" class="ed-btn w-full !rounded-[10px]">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- search -->
    <div class="ed-search group">
        <form action="#"
            class="bg-white fixed z-[100] top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] h-[100px] md:h-[70px] xxs:h-[50px] w-[1224px] max-w-[95%] flex gap-[10px] rounded-full overflow-hidden px-[40px] xxs:px-[20px] pointer-events-none opacity-0 group-[.active]:pointer-events-auto group-[.active]:opacity-100 duration-[400ms]">
            <input type="search" name="ed-search" placeholder="Search Here..."
                class="bg-transparent w-full focus:outline-none">
            <button class="text-[25px] md:text-[22px] xxs:text-[20px]"><i
                    class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>

    <!-- sidebar -->
    <div class="ed-sidebar">
        <div
            class="translate-x-[100%] transition-transform ease-linear duration-300 fixed right-0 w-full max-w-[25%] xl:max-w-[30%] lg:max-w-[40%] md:max-w-[50%] sm:max-w-[60%] xxs:max-w-full bg-white h-full z-[999] overflow-auto">
            <!-- heading -->
            <div class="ed-sidebar-heading p-[20px] lg:p-[20px] border-b border-edgray/20">
                <div class="logo flex justify-between items-center">
                    <a href="index.html"><img src="{{ asset('/') }}assets/img/logo.png" alt="logo"></a>

                    <button type="button"
                        class="ed-sidebar-close-btn border border-edgray/20 w-[45px] aspect-square shrink-0 text-black text-[22px] rounded-full hover:text-edpurple"><i
                            class="fa-solid fa-xmark"></i></button>
                </div>
            </div>

            <!-- mobile menu -->
            <div class="ed-header-nav-in-mobile"></div>
        </div>
    </div>


    <!-- HEADER SECTION START -->
    <header
        class="bg-edblue ed-header--2 relative z-[2] px-[7.9%] xxxxl:px-[6.5%] xxxl:px-[1%] lg:px-[15px] py-[25px] xxs:py-[16px] flex items-center justify-between to-be-fixed">
        <div class="logo xxs:max-w-[40%]"><a href="index.html"><img src="{{ asset('/') }}assets/img/logo-light.png"
                    alt="logo" class="logo"></a></div>

        <div class="flex lg:items-center lg:gap-[30px]">
            <div class="flex lg:flex-col items-center gap-[60px] xxl:gap-[25px] xl:gap-[30px] md:gap-y-[15px]">
                <!-- search form -->
                <form action="#"
                    class="to-go-to-sidebar-in-mobile max-w-[455px] xxl:max-w-[395px] lg:max-w-[95%] lg:mx-auto border border-white/20 lg:border-black/20 rounded-[6px] overflow-hidden h-[60px] flex xl:hidden lg:flex lg:my-[10px]">
                    <select name="category" id="ed-2-search-category"
                        class="bg-transparent text-white lg:text-edblue pl-[50px] pr-[19px] lg:px-[10px] focus:outline-none before:absolute lg:before:hidden before:w-[17px] before:h-[12px] before:bg-[url(../assets/img/icon/hamburger.svg)] before:bg-no-repeat before:bg-center before:bg-contain before:top-[50%] before:-translate-y-[50%] before:left-[22px]">
                        <option value="none" class="bg-edblue" data-placeholder="true">Categories</option>
                        <option value="UI/UX Desgin" class="bg-edblue">UI/UX Desgin</option>
                        <option value="Web Development" class="bg-edblue">Web Development</option>
                        <option value="Video Editing" class="bg-edblue">Video Editing</option>
                        <option value="Content Writing" class="bg-edblue">Content Writing</option>
                    </select>
                    <input type="text" name="search" id="ed-2-header-search"
                        class="w-full bg-transparent px-[20px] text-white lg:text-black focus:outline-0 focus-visible:outline-none">
                    <button type="submit" class="text-white lg:text-black pr-[20px]"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                <!-- nav -->
                <ul
                    class="to-go-to-sidebar-in-mobile ed-header-nav flex lg:flex-col gap-x-[43px] xxl:gap-x-[33px] font-kanit text-[17px] font-normal">
                    <li class="has-sub-menu relative">
                        <a role="button">Home</a>

                        <ul class="ed-header-submenu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="index-2.html">Home 02</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About us</a></li>
                    <li class="has-sub-menu relative">
                        <a role="button">Courses</a>

                        <ul class="ed-header-submenu">
                            <li><a href="course-grid.html">Courses Grid</a></li>
                            <li><a href="course-filter.html">Courses Filter</a></li>
                            <li><a href="course-details.html">Course Details</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu relative">
                        <a role="button">Pages</a>

                        <ul class="ed-header-submenu">
                            <li><a href="teachers.html">Teachers</a></li>
                            <li><a href="teacher-details.html">Teacher Details</a></li>
                            <li><a href="events.html">Events</a></li>
                            <li><a href="events-2.html">Events V.2</a></li>
                            <li><a href="event-details.html">Event Details</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="coming-soon.html">Coming Soon Page</a></li>
                            <li><a href="404.html">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu relative">
                        <a role="button">News</a>

                        <ul class="ed-header-submenu">
                            <li><a href="news-grid.html">News Grid</a></li>
                            <li><a href="news-list.html">News List</a></li>
                            <li><a href="news-details.html">News Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact us</a></li>
                </ul>

                <!-- right actions -->
                <div class="flex items-center gap-x-[60px] xxl:gap-x-[25px] lg:gap-x-[20px]">
                    <button class="ed-cart-opener-btn group">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M12.9894 13.6354H6.93871C6.06616 13.6354 5.2925 13.0682 5.05637 12.2557L3.01122 5.38995C2.93856 5.14134 2.69705 4.97072 2.42122 4.97072H0.818742C0.446713 4.97072 0.145996 4.67212 0.145996 4.30421C0.145996 3.93629 0.446713 3.6377 0.818742 3.6377H2.42122C3.29377 3.6377 4.06676 4.2049 4.30289 5.01737L4.68568 6.30374H14.9753C15.3951 6.30374 15.7934 6.50169 16.0403 6.83361C16.2852 7.16287 16.3558 7.57477 16.234 7.96402L14.8462 12.3283C14.5744 13.1161 13.8296 13.6354 12.9894 13.6354Z"
                                    class="fill-white group-hover:fill-edyellow" />
                                <path
                                    d="M7.54617 16.9687C6.80414 16.9687 6.20068 16.3707 6.20068 15.6353C6.20068 14.9 6.80414 14.302 7.54617 14.302C8.28821 14.302 8.89167 14.9 8.89167 15.6353C8.89167 16.3707 8.28821 16.9687 7.54617 16.9687Z"
                                    class="fill-white group-hover:fill-edyellow" />
                                <path
                                    d="M12.2556 16.9687C11.5136 16.9687 10.9102 16.3707 10.9102 15.6353C10.9102 14.9 11.5136 14.302 12.2556 14.302C12.9977 14.302 13.6011 14.9 13.6011 15.6353C13.6011 16.3707 12.9977 16.9687 12.2556 16.9687Z"
                                    class="fill-white group-hover:fill-edyellow" />
                            </g>
                        </svg>
                    </button>
                    <a href="contact.html" class="ed-btn to-go-to-sidebar-in-mobile lg:m-[20px]">apply now</a>
                </div>
            </div>

            <!-- mobile menu button -->
            <button type="button"
                class="ed-mobile-menu-open-btn hidden lg:inline-block text-white text-[18px] hover:text-edyellow"><i
                    class="fa-solid fa-bars"></i></button>
        </div>
    </header>
    <!-- HEADER SECTION END -->

    <main>