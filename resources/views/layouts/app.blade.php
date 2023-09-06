<!doctype html>
<html>
<head>
    @include('includes.head') 
</head>
<body>
    <!-- Alert Toastr Message  -->
        @include('includes.toastr') 

    <div id="app">
        <!----  Top Bar      ----->
        <!-- <header class="row">
          
        </header> -->
        
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
