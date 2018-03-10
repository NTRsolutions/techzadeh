<!DOCTYPE html>
<html lang="en">
<head>
    @include('.front.partials.head-script')


</head>

<body>

{{-- Preloader --}}
<div class="loader-mask">
    <div class="loader">
        <div></div>
    </div>
</div>

{{-- Bg Overlay --}}
<div class="content-overlay"></div>

{{-- Subscribe Modal --}}
{{--@include('.front.partials.subscribe-modal')--}}
{{-- end subscribe modal --}}

{{-- Mobile Sidenav --}}
@include('.front.partials.mobile-sidenav')
{{-- end mobile sidenav --}}


<main class="main oh" id="main">

    {{-- Navigation --}}
    @include('.front.partials.navigation')
    {{-- end navigation --}}

    <div class="main-container" id="main-container">
        @yield('content')

        {{-- Footer --}}
        @include('.front.partials.footer')
        {{-- end footer --}}

    </div>
    {{-- end main container --}}

    <div id="back-to-top">
        <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

</main> 
{{-- end main-wrapper --}}

{{-- jQuery Scripts --}}
@include('.front.partials.foot-script')

</body>
</html>