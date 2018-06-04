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
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

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




@stop
