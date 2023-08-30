<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div id="app">
        <!----  Top Bar      ----->
        <header class="row">
            @include('includes.header')
        </header>
        
        <!----  main content  class="py-4" ----->
        <main class="row">
            @yield('content')
        </main>

        <!----  Footr     -------->
        <footer class="row">
            @include('includes.footer')
        </footer>
    </div>
</body>
</html>
