<header class="sidenav" id="sidenav">
    {{-- Search --}}
    <div class="sidenav__search-mobile">
        <form method="get" class="sidenav__search-mobile-form">
            <input type="search" class="sidenav__search-mobile-input" placeholder="Search..." aria-label="Search input">
            <button type="submit" class="sidenav__search-mobile-submit" aria-label="Submit search">
                <i class="ui-search"></i>
            </button>
        </form>
    </div>

    <nav>
        <ul class="sidenav__menu" role="menubar">
            <li>
                <a href="/" class="sidenav__menu-link">Home</a>
            </li>

            <li>
                <a href="/categories" class="sidenav__menu-link">Categories</a>
                <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                <ul class="sidenav__menu-dropdown">
                    <li><a href="index.html" class="sidenav__menu-link">Technology</a></li>
                    <li><a href="index-2.html" class="sidenav__menu-link">Science</a></li>
                    <li><a href="index-3.html" class="sidenav__menu-link">Lifestyle</a></li>
                    <li><a href="index-3.html" class="sidenav__menu-link">Mobile</a></li>
                </ul>
            </li>

            <li>
                <a href="/contact" class="sidenav__menu-link">Contact</a>
            </li>

            <li>
                <a href="/about" class="sidenav__menu-link">About</a>
            </li>
        </ul>
    </nav>

    <div class="socials sidenav__socials ">
        <a class="social-facebook" href="#" target="_blank" aria-label="facebook">
            <i class="ui-facebook"></i>
        </a>
        <a class="social-twitter" href="#" target="_blank" aria-label="twitter">
            <i class="ui-twitter"></i>
        </a>
        <a class="social-youtube" href="#" target="_blank" aria-label="youtube">
            <i class="ui-youtube"></i>
        </a>
    </div>
</header>
