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
                <div class="col-lg-8 col-md-8 offset-2">
                    <h3 class="mb-30">პოსტის დამატება</h3>
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mt-10">
                            <input type="text" name="title" placeholder="სათაური" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="profession" placeholder="პროფესია" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="file" name="image" placeholder="სურათი" class="single-input">
                        </div>
                        <div class="mt-10">
                            <textarea name="description" placeholder="აღწერა" class="single-input"></textarea>
                        </div>
                        <button type="submit" class="genric-btn primary circle arrow">დამატება<span class="lnr lnr-arrow-right"></span></button>
                    </form>
                </div>
        </section>
@stop
