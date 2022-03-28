<!DOCTYPE html>
<html  lang="en">

<head>
    @include('admin-layouts.head')
</head>

<body dir="rtl" style="text-align: right"  class="home-page home-01 ">
    <div class="wrapper">
    @include('admin-layouts.navbar')
    @include('admin-layouts.sidebar')
  
        @yield('content')
    
    @include('admin-layouts.footer')
    @include('admin-layouts.scripts')
</div>
</body>

</html>
