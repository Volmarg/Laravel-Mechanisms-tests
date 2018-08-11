<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title> test </title>

</head>


<body>

    <div class="content">
        @yield('content')
    </div>
    <footer>
    @yield('footer_scripts')
    </footer>
</body>
</html>