<!DOCTYPE html>
<html>
    <head>
       @include('partials.head')
       @include('partials.styles')
     
    </head>
    <body>
        <header>
            @include('partials.header') 
        </header>
        <main>
        @yield('content')
        </main>
        <footer>
          @include('partials.footer')
        </footer>
        @include('partials.scripts')
    </body>
</html>