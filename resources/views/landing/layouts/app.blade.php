<!DOCTYPE html>
<html>

<head>
    @include('landing.component.head')
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('landing.component.header')
        <!-- end header section -->

        <!-- slider section -->
        @hasSection('slider')
            @yield('slider')
        @endif
        <!-- end slider section -->
    </div>
    <!-- end hero area -->

    @yield('content')

    <!-- info section -->
    @include('landing.component.footer')
    <!-- end info section -->

    @include('landing.component.script')
</body>

</html>
