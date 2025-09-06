<!DOCTYPE html>
<html lang="en">

@include('layouts.head.head')

<body>
    <div class="page-wrapper">
        @include('layouts.preloader.preloader')

        @include('layouts.topbar.topbar')

        @include('layouts.header.header')
        @include('layouts.mobile-menu.mobile-menu')
        @include('layouts.search-popup.search-popup')
        @include('layouts.sidebar-cart.sidebar-cart')
        @yield('content')
        @include('layouts.footer.footer')
        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner"></div>

        @include('layouts.progress-wrap.progress-wrap')
    </div>
    @include('layouts.spt.spt')
</body>

</html>
