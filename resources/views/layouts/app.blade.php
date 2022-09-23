<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.header')

<body>
    @include('layouts.partials.navbar')

    @yield('main-content')

    @include('layouts.partials.footer')
</body>

</html>
