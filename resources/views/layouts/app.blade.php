<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    <div id="app">
        <!----  Top Bar      ----->
        <header class="row">
            @include('includes.header')
        </header>
        
        <!----  main content ----->
        <main class="py-4">
            @yield('content')
        </main>

        <!----  Footr     -------->
        <footer class="row">
            @include('includes.footer')
        </footer>
    </div>
</body>
</html>
