<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arunai Academy</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />
    @include('frontend.layouts.header-link')

</head>
<body>

    @include('frontend.layouts.header')

    <main class="container-wrapper">
        @yield('content')
    </main>

    @include('frontend.layouts.footer')
</body>
</html>
