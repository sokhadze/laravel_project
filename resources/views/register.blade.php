@extends('layouts.main')
@section('body')
    <section class="generic-banner relative">
        <header id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="index.html#home">Home</a></li>
                            <li><a href="#feature">Feature</a></li>
                            <li><a href="#project">Project</a></li>
                            <li><a href="#service">Service</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="menu-has-children"><a href="">Pages</a>
                                <ul>
                                    <li><a href="generic.html">Generic</a></li>
                                    <li><a href="elements.html">Elements</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </header><!-- #header -->

        <div class="container">
            <div class="row height align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="generic-banner-content">
                        <h2 class="text-white">სარეგისტრა</h2>
                        <p class="text-white">It won’t be a bigger problem to find one video game lover in your <br> neighbor. Since the introduction of Virtual Game.</p>
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
                        <div class="mt-10">
                            <input type="text" name="name" placeholder="სახელი" onfocus="this.placeholder = ''" onblur="this.placeholder = 'სახელი'" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="lastname" placeholder="გვარი" onfocus="this.placeholder = ''" onblur="this.placeholder = 'გვარი'"  class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="email" placeholder="ელექტრონული ფოსტა" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ელექტრონული ფოსტა'"  class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="password" placeholder="პაროლი" onfocus="this.placeholder = ''" onblur="this.placeholder = 'პაროლი'"  class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="date" name="birthdate" class="single-input">
                        </div>
                        <button type="submit" class="genric-btn primary circle arrow">რეგისტრაცია<span class="lnr lnr-arrow-right"></span></button>
            </form>
    </div>
        </section>
@stop
