@extends('layouts.main')
@section('body')
    <section class="generic-banner relative">

        <div class="container">
            <div class="row height align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="generic-banner-content">
                        <h2 class="text-white">შესვლა</h2>
                        {{--<p class="text-white">It won’t be a bigger problem to find one video game lover in your <br> neighbor. Since the introduction of Virtual Game.</p>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Are	a -->

    <!-- About Generic Start -->
    <div class="main-wrapper">
        <!-- Start Generic Area -->
        <section class="about-generic-area section-gap">
            <div class="container">
                {{--<div class="row d-flex justify-content-center">--}}
                    {{--<div class="menu-content pb-60 col-lg-8">--}}
                        {{--<div class="title text-center">--}}
                            {{--<h1 class="mb-10">Some Features that Made us Unique</h1>--}}
                            {{--<p>Who are in extremely love with eco friendly system.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="row">
                    @foreach($records as $record)
                        <div class="col-lg-3">
                            <div class="single-offered">
                                <img class="img-fluid" src="/storage/images/{{ $record->image }}" alt="">
                                <a href="{{ route('posts.show', $record->id) }}"><h4 class="pt-20">{{ $record->title }}</h4><h6 style="color: grey;" class="pb-20">{{ $record->created_at->format('d.m.Y') }}</h6></a>
                                <p>
                                    {{ substr($record->description, 0, 100) }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                    {{--<div class="col-lg-3">--}}
                        {{--<div class="single-offered">--}}
                            {{--<img class="img-fluid" src="img/s2.png" alt="">--}}
                            {{--<a href="#"><h4 class="pt-20 pb-20">Brake Repairs &amp; Services</h4></a>--}}
                            {{--<p>--}}
                                {{--Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-3">--}}
                        {{--<div class="single-offered">--}}
                            {{--<img class="img-fluid" src="img/s3.png" alt="">--}}
                            {{--<a href="#"><h4 class="pt-20 pb-20">Preventive Maintenance</h4></a>--}}
                            {{--<p>--}}
                                {{--Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-3">--}}
                        {{--<div class="single-offered">--}}
                            {{--<img class="img-fluid" src="img/s3.png" alt="">--}}
                            {{--<a href="#"><h4 class="pt-20 pb-20">Preventive Maintenance</h4></a>--}}
                            {{--<p>--}}
                                {{--Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </section>
@stop
