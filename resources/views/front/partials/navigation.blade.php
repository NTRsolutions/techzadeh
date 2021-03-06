<header class="nav">

    <div class="nav__holder nav--sticky">
        <div class="container relative">

            <div class="flex-parent">

                {{-- Mobile Menu Button --}}
                <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open mobile menu">
                    <span class="nav-icon-toggle__box">
                        <span class="nav-icon-toggle__inner"></span>
                    </span>
                </button> {{-- end mobile menu button --}}

                {{-- Logo --}}
                <a href="/" class="logo">
                    <img class="logo__img" src="{{ asset('img/logo_light.png') }}" srcset="{{ asset('img/logo_light.png') }} 1x, {{ asset('img/logo_light@2x.png') }} 2x" alt="logo">
                </a>

                {{-- Nav-wrap --}}
                <nav class="flex-child nav__wrap d-none d-lg-block">
                    <ul class="nav__menu">

                        <li>
                            <a href="/">Home</a>
                        </li>

                        <li class="nav__dropdown">
                            <a href="/categories">Categories</a>
                            <ul class="nav__dropdown-menu">
                                @foreach($categories as $category)
                                <li><a href="/category/{{ $category->id }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <a href="/contact">Contact</a>
                        </li>

                        <li>
                            <a href="/about">About</a>
                        </li>


                    </ul> {{-- end menu --}}
                </nav> {{-- end nav-wrap --}}

                {{-- Nav Right --}}
                <div class="nav__right nav--align-right d-none d-lg-flex">

                    {{-- Socials --}}
                    <div class="nav__right-item socials socials--nobase nav__socials ">
                        <a class="social-facebook" href="#" target="_blank">
                            <i class="ui-facebook"></i>
                        </a>
                        <a class="social-twitter" href="#" target="_blank">
                            <i class="ui-twitter"></i>
                        </a>
                        <a class="social-youtube" href="#" target="_blank">
                            <i class="ui-youtube"></i>
                        </a>
                    </div>

                    {{-- Search --}}
                    <div class="nav__right-item nav__search">
                        <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                            <i class="ui-search nav__search-trigger-icon"></i>
                        </a>
                        <div class="nav__search-box" id="nav__search-box">
                            <form class="nav__search-form">
                                <input type="text" placeholder="Search an article" class="nav__search-input">
                                <button type="submit" class="nav__search-button btn btn-md btn-color btn-button">
                                    <i class="ui-search nav__search-icon"></i>
                                </button>
                            </form>
                        </div>

                    </div>

                </div> {{-- end nav right --}}

            </div> {{-- end flex-parent --}}
        </div> {{-- end container --}}

    </div>
</header>