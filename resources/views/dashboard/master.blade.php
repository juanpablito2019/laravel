<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Panel de Control</title>
</head>
<body>
    @include('dashboard.partials.nav-header-menu')
    <div class="container">
        @include('dashboard.partials.session-status')
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>