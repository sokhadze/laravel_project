@extends('layouts.main')
@section('body')
    <section class="generic-banner relative">

        <div class="container">
            <div class="row height align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="generic-banner-content">
                        <h2 class="text-white">პოსტის დამატება</h2>
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
            <div class="row">
                <div class="offset-1 col-sm-4" style="display:flex;align-items:flex-start;justify-content:center;overflow: hidden;">
                    <img style="max-width:100%;" src="/storage/images/{{ $post->image }}">
                </div>
                <div class="col-sm-7">
                    <h2>{{ $post->title }}</h2>
                    <h5 style="color: grey;" class="mb-10">{{ $post->created_at->format('d.m.Y') }}</h5>
                    {{ $post->description }}
                </div>
            </div>
            @if(auth()->check())
                <form >

                </form>

            @endif


        </section>
@stop
