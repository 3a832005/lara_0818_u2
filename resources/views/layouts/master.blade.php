<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | My Blog</title>
</head>
<body>
    @include('layouts.partials.navigation')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
