<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- jika pakai CSS --}}
</head>
<body>
@include('partials.navbar')

<div class="container mt-4">
    @yield('content')
</div>

@include('partials.footer')
</body>
</html>
