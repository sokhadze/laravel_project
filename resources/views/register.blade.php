@extends('layouts.main')
@section('body')
        <section class="generic-banner relative">

        <div class="container">
            <div class="row height align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="generic-banner-content">
                        <h2 class="text-white">სარეგისტრაციო ფორმა</h2>
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
                    <h3 class="mb-30">სარეგისტრაციო ფორმა</h3>
                    <form action="{{ route('auth.register.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="mt-10 @if($errors->has('name')) has_error @endif">
                            <input type="text" name="name" placeholder="სახელი" onfocus="this.placeholder = ''" onblur="this.placeholder = 'სახელი'" class="single-input">
                        </div>
                        <div class="mt-10 @if($errors->has('lastname')) has_error @endif">
                            <input type="text" name="lastname" placeholder="გვარი" onfocus="this.placeholder = ''" onblur="this.placeholder = 'გვარი'"  class="single-input">
                        </div>
                        <div class="mt-10 @if($errors->has('email')) has_error @endif">
                            <input type="text" name="email" placeholder="ელექტრონული ფოსტა" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ელექტრონული ფოსტა'"  class="single-input">
                        </div>
                        <div class="mt-10 @if($errors->has('password')) has_error @endif">
                            <input type="password" name="password" placeholder="პაროლი" onfocus="this.placeholder = ''" onblur="this.placeholder = 'პაროლი'"  class="single-input">
                        </div>
                        <div class="mt-10 @if($errors->has('role')) has_error @endif">
                            {{--<input type="text" name="role" placeholder="პაროლი" onfocus="this.placeholder = ''" onblur="this.placeholder = 'პაროლი'"  class="single-input">--}}
                            <select class="single-input" name="role">
                                <option style="display:none;" selected="selected" value="user">მომხმარებლის ტიპი</option>
                                <option value="user">მომხმარებელი</option>
                                <option value="poster">პოსტერი</option>
                            </select>
                        </div>
                        <div class="mt-10 @if($errors->has('birthdate')) has_error @endif">
                            <input type="date" name="birthdate" class="single-input">
                        </div>
                        <button type="submit" class="genric-btn primary circle arrow">რეგისტრაცია<span class="lnr lnr-arrow-right"></span></button>
            </form>
    </div>
        </section>
@stop
