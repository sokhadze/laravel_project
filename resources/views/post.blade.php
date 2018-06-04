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
        <div class="about-generic-area section-gap">
            <div class="row">
                <div class="offset-1 col-sm-4" style="display:flex;align-items:flex-start;justify-content:center;overflow: hidden;">
                    <img style="max-width:100%;" src="/storage/images/{{ $post->image }}">
                </div>
                <div class="col-sm-7">
                    <h2>{{ $post->title }}</h2>
                    <h5 style="color: grey;" class="mb-10">{{ $post->created_at->format('d.m.Y') }} {{ $post->avgRating() }} ({{ count($post->post_reviews) }})</h5>
                    {{ $post->description }}
                </div>
            </div>
            @if(auth()->check())
                <div class="row" style="margin-top: 100px;">
                    <form method="POST" class="offset-4 col-sm-5" action="{{ route('reviews.store', $post->id) }}">
                        {{ csrf_field() }}
                        <h4>Write A Review as: {{ auth()->user()->name }} {{ auth()->user()->lastname }}</h4>
                        <select name="rating" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <textarea name="review" class="form-control"></textarea>
                        <input type="submit" class="btn btn-primary" value="დამატება">
                    </form>
                </div>
            @endif
            <div class="row">
                <div class="reviews offset-2 col-sm-10">
                    @foreach($post->post_reviews as $review)
                        <div class="review">
                            <h3>{{ $review->user->name }} {{ $review->user->lastname }} {{ $review->rating }}</h3>
                            <p>{{ $review->review }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
