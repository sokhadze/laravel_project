@extends('layouts.main')
@section('body')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="img/header-bg.jpg">
        <div class="overlay-bg overlay"></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-8 col-md-12">
                    <h4 class="text-white text-uppercase">Discover the Colorful World</h4>
                    <h1 class="text-uppercase">
                        Build Your Dream
                    </h1>
                    <p class="text-white">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br> or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
                    </p>
                    <a href="#" class="primary-btn header-btn text-uppercase">Discover Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start features Area -->
    <section class="features-area pt-100" id="feature">
        <div class="container"><div class="feature-section">
                <div class="row">
                    <div class="single-feature col-lg-4">
                        <img src="img/f1.png" alt="">
                        <h4 class="pt-20 pb-20">Building Drawings</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consecteturadipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="single-feature col-lg-4">
                        <img src="img/f2.png" alt="">
                        <h4 class="pt-20 pb-20">Building Drawings</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consecteturadipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="single-feature col-lg-4">
                        <img src="img/f3.png" alt="">
                        <h4 class="pt-20 pb-20">Building Drawings</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consecteturadipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End features Area -->

    <!-- Start offered Area -->
    <section class="offered-area section-gap" id="offered">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">უახლესი პოსტები</h1>
                        {{--<p>Who are in extremely love with eco friendly system.</p>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4">
                        <div class="single-offered">
                            <img class="img-fluid" src="/storage/images/{{ $post->image }}" alt="">
                            <a href="{{ route('posts.show', $post->id) }}"><h4 class="pt-20">{{ $post->title }}</h4><h6 style="color: grey;" class="pb-20">{{ $post->created_at->format('d.m.Y') }}</h6> <span style="color: lightgrey;">{{ $post->avgRating() }}</span></a>
                            <p>
                                {{ substr($post->description, 0, 100) }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End offered Area -->

    <!-- Start projects Area -->
    <section class="projects-area pb-100" id="project">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">ყველაზე მაღალ რეიტინგიანი პოსტები</h1>
                        {{--<p>Who are in extremely love with eco friendly system.</p>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-project-carusel col-lg-12">
                    @foreach ($top_rated as $top)
                        <div class="item" style="position: relative">
                            <a href="{{ route('posts.show', $top->id) }}" style="z-index:9999;top: 0; left: 0; position: absolute;height:100%;width:100%;display:block;"></a>
                            <div class="single-project" style="background: url('/storage/images/{{ $top->image }}');">
                                <div class="overlay overlay -content">
                                    <h1>{{ $top->title }} <span style="color: grey">{{ $top->average_rating }}</span></h1>
                                    <p>
                                        {{ $top->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{--<div class="item">--}}
                        {{--<div class="single-project" style="background: url(img/p2.jpg);">--}}
                            {{--<div class="overlay overlay-content">--}}
                                {{--<h1>Alex Complex for <br> esidence</h1>--}}
                                {{--<p>--}}
                                    {{--LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer, more portable technology than we’ve ever had access to before. From your wrist watch to your laptop, a lot of the on the go electronics that we tote from place to place are only possible because of their thin, light LCD display screens. Liquid crystal display.--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<div class="single-project" style="background: url(img/p3.jpg);">--}}
                            {{--<div class="overlay overlay-content">--}}
                                {{--<h1>Alex Complex for <br> esidence</h1>--}}
                                {{--<p>--}}
                                    {{--LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer, more portable technology than we’ve ever had access to before. From your wrist watch to your laptop, a lot of the on the go electronics that we tote from place to place are only possible because of their thin, light LCD display screens. Liquid crystal display.--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<div class="single-project" style="background: url(img/p4.jpg);">--}}
                            {{--<div class="overlay overlay-content">--}}
                                {{--<h1>Alex Complex for <br> esidence</h1>--}}
                                {{--<p>--}}
                                    {{--LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer, more portable technology than we’ve ever had access to before. From your wrist watch to your laptop, a lot of the on the go electronics that we tote from place to place are only possible because of their thin, light LCD display screens. Liquid crystal display.--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<div class="single-project" style="background: url(img/p1.jpg);">--}}
                            {{--<div class="overlay overlay-content">--}}
                                {{--<h1>Alex Complex for <br> esidence</h1>--}}
                                {{--<p>--}}
                                    {{--LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer, more portable technology than we’ve ever had access to before. From your wrist watch to your laptop, a lot of the on the go electronics that we tote from place to place are only possible because of their thin, light LCD display screens. Liquid crystal display.--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<div class="single-project" style="background: url(img/p2.jpg);">--}}
                            {{--<div class="overlay overlay-content">--}}
                                {{--<h1>Alex Complex for <br> esidence</h1>--}}
                                {{--<p>--}}
                                    {{--LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer, more portable technology than we’ve ever had access to before. From your wrist watch to your laptop, a lot of the on the go electronics that we tote from place to place are only possible because of their thin, light LCD display screens. Liquid crystal display.--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<div class="single-project" style="background: url(img/p3.jpg);">--}}
                            {{--<div class="overlay overlay-content">--}}
                                {{--<h1>Alex Complex for <br> esidence</h1>--}}
                                {{--<p>--}}
                                    {{--LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer, more portable technology than we’ve ever had access to before. From your wrist watch to your laptop, a lot of the on the go electronics that we tote from place to place are only possible because of their thin, light LCD display screens. Liquid crystal display.--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<div class="single-project" style="background: url(img/p4.jpg);">--}}
                            {{--<div class="overlay overlay-content">--}}
                                {{--<h1>Alex Complex for <br> esidence</h1>--}}
                                {{--<p>--}}
                                    {{--LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer, more portable technology than we’ve ever had access to before. From your wrist watch to your laptop, a lot of the on the go electronics that we tote from place to place are only possible because of their thin, light LCD display screens. Liquid crystal display.--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                </div>
            </div>
        </div>
    </section>
    <!-- End projects Area -->

    <!-- Start fact Area -->
    <section class="facts-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col single-fact">
                    <h1 class="counter">2536</h1>
                    <p>Projects Completed</p>
                </div>
                <div class="col single-fact">
                    <h1 class="counter">6784</h1>
                    <p>Really Happy Clients</p>
                </div>
                <div class="col single-fact">
                    <h1 class="counter">1059</h1>
                    <p>Total Tasks Completed</p>
                </div>
                <div class="col single-fact">
                    <h1 class="counter">2239</h1>
                    <p>Cups of Coffee Taken</p>
                </div>
                <div class="col single-fact">
                    <h1 class="counter">435</h1>
                    <p>In House Professionals</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end fact Area -->


    <!-- Start service Area -->
    <section class="service-area section-gap" id="service">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 pb-40 header-text">
                    <h1>Why we are the best</h1>
                    <p>
                        Who are in extremely love with eco friendly system.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 pb-30">
                    <div class="single-service">
                        <h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-30">
                    <div class="single-service">
                        <h4><span class="lnr lnr-license"></span>Professional Service</h4>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-30">
                    <div class="single-service">
                        <h4><span class="lnr lnr-phone"></span>Great Support</h4>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service Area -->


    <!-- Start testimonial Area -->
    <section class="testimonial-area relative section-gap">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="active-testimonial">
                    {{--<div class="single-testimonial item d-flex flex-row">--}}
                        {{--<div class="thumb">--}}
                            {{--<img class="img-fluid" src="img/user1.png" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="desc">--}}
                            {{--<p>--}}
                                {{--Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.--}}
                            {{--</p>--}}
                            {{--<h4 mt-30>Mark Alviro Wiens</h4>--}}
                            {{--<p>CEO at Google</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    @foreach($reviews as $review)
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            {{--<img class="img-fluid" src="img/user2.png" alt="">--}}
                        </div>
                        <div class="desc">
                            <p>
                                {{ substr($review->review, 0, 120) }}
                            </p>
                            <a href="{{ route('posts.show', $review->post->id) }}" class="mt-30">{{ $review->post->title }} {{ $review->rating }}</a>
                            <p>{{ $review->user->name }}  {{ $review->user->lastname }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial Area -->

    <!-- Start latest-blog Area -->
    <section class="latest-blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Latest From Blog</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-left col-lg-4 col-md-6">
                    <div class="single-blog">
                        <img class="mx-auto d-block img-fluid" src="img/b1.jpg" alt="">
                        <div class="desc">
                            <a href="#"><h5>We do Believe in Quality</h5></a>
                            <p>
                                inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards.
                            </p>
                            <a class="read-more text-uppercase" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="blog-left col-lg-4 col-md-6">
                    <div class="single-blog">
                        <img class="mx-auto d-block img-fluid" src="img/b2.jpg" alt="">
                        <div class="desc">
                            <a href="#"><h5>We do Believe in Quality</h5></a>
                            <p>
                                inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards.
                            </p>
                            <a class="read-more text-uppercase" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="blog-right col-lg-4 col-md-6">
                    <div class="single-list justify-content-start d-flex">
                        <div class="thumb">
                            <img src="img/b3.jpg" alt="">
                        </div>
                        <div class="details">
                            <a href="#"><h6>We Believe in Quality</h6></a>
                            <p>21st Dec  04 Comments</p>
                        </div>
                    </div>
                    <div class="single-list justify-content-start d-flex">
                        <div class="thumb">
                            <img src="img/b4.jpg" alt="">
                        </div>
                        <div class="details">
                            <a href="#"><h6>We Believe in Quality</h6></a>
                            <p>21st Dec  04 Comments</p>
                        </div>
                    </div>
                    <div class="single-list justify-content-start d-flex">
                        <div class="thumb">
                            <img src="img/b5.jpg" alt="">
                        </div>
                        <div class="details">
                            <a href="#"><h6>We Believe in Quality</h6></a>
                            <p>21st Dec  04 Comments</p>
                        </div>
                    </div>
                    <div class="single-list justify-content-start d-flex">
                        <div class="thumb">
                            <img src="img/b6.jpg" alt="">
                        </div>
                        <div class="details">
                            <a href="#"><h6>We Believe in Quality</h6></a>
                            <p>21st Dec  04 Comments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End latest-blog Area -->

    <!-- Start brand Area -->
    <section class="brand-area">
        <div class="container">
            <div class="row logo-wrap">
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="img/l1.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="img/l2.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="img/l3.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="img/l4.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="d-block mx-auto" src="img/l5.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <!-- End brand Area -->

    <!-- start contact Area -->
    <section class="contact-area section-gap" id="contact">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-30 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">If you need, Just drop us a line</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <form class="form-area mt-60" id="myForm" action="mail.php" method="post" class="contact-form text-right">
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                        <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                        <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
                    </div>
                    <div class="col-lg-6 form-group">
                        <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                        <button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
                        <div class="mt-10 alert-msg">
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </section>
    <!-- end contact Area -->

@stop
