<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    @include('partials.site_header')
    
    <main>
        @yield('content')
    </main>
    
    @include('partials.site_footer')
</body>

</html>