<!DOCTYPE html>
<html lang="en">

<head>
    @include('component.head')
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../css/landing.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&family=Merienda:wght@400;500&family=Special+Elite&display=swap" rel="stylesheet">
</head>

<body>

    @yield('come')

    @include('component.footer')
    @include('component.script')

</body>

</html>
