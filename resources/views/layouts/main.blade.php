<!DOCTYPE html>
<html>
    <head>
       @include('partials.head')
       @include('partials.styles')
     
    </head>
    <body>
       
            @include('partials.header') 
     
        <main class="container">
        @yield('content')
        </main>
        <footer>
          @include('partials.footer')
        </footer>
        @include('partials.scripts')
    </body>
</html>