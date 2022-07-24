<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('includes.dashboard.meta')

        <title>@yield('title') | STEMATEL</title>

        @stack('before-style')

        @include('includes.dashboard.style')

        @stack('after-style')
    </head>

    <body>
        @include('components.dashboard.preloader')

        @include('components.dashboard.sidebar')
    
        @include('components.dashboard.header')

            @yield('content')


        @stack('before-script')

        @include('includes.dashboard.script')
    
        @stack('after-script')
    </body>

</html>