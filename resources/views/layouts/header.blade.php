<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="{{ route('index') }}">მთავარი</a></li>
                    @if(!\Auth::check())
                        <li class="menu-active"><a href="{{ route('auth.register') }}">რეგისტრაცია</a></li>
                        <li class="menu-active"><a href="{{ route('auth.login') }}">ექაუნთზე შესვლა</a></li>
                    @else
                        <li class="menu-active"><a href="{{ route('auth.logout') }}">გასვლა</a></li>
                        <li class="menu-active"><a href="{{ route('posts.create') }}">პოსტის დამატება</a></li>
                    @endif
                    <li class="menu-active"><a href="{{ route('posts') }}">პოსტები</a></li>
                    {{--<li><a href="#feature">Feature</a></li>--}}
                    {{--<li><a href="#project">Project</a></li>--}}
                    {{--<li><a href="#service">Service</a></li>--}}
                    {{--<li><a href="#blog">Blog</a></li>--}}
                    {{--<li><a href="#contact">Contact</a></li>--}}
                    {{--<li class="menu-has-children"><a href="">Pages</a>--}}
                        {{--<ul>--}}
                            {{--<li><a href="generic.html">Generic</a></li>--}}
                            {{--<li><a href="elements.html">Elements</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->