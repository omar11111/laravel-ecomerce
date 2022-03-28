<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body class="home-page home-01 ">

    @include('layouts.navbar')
    <main id="main">
        @yield('content')
    </main>
    @include('layouts.footer')
    @include('layouts.scripts')

</body>

</html>
