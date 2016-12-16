<!DOCTYPE html>
<html>
    <head>
       @include('partials.head')
    </head>
    <body>
        <header>
            @include('partials.header') 
        </header>
        <main>
        @yield('content')
        <div class="sidebar">
            this is the sidebar
        </div>
        </main>
        <footer>
          @include('partials.footer')
        </footer>
    </body>
</html>