<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../../">
    @include('component.head')
    <title>E-Book | @yield('title')</title>
    <link rel="stylesheet" href="../css/nav-side-bar.css">
    <link rel="stylesheet" href="../css/pages.css">
    <!-- <link rel="stylesheet" href="../css/datatables.css"> -->
</head>

<body class="sidebar-is-reduced sidebar-is-expanded">
    @if (Auth::user()->info == true)
        @if (Auth::user()->role != 0)
            <div class="sidebar-is-reduced">
                @include('component.admin.sidebar')
                @include('component.admin.navbar')
            </div>
        @else
            <div class="sidebar-is-reduced">
                @include('component.siswa.sidebar')
                @include('component.siswa.navbar')
            </div>
        @endif
    @endif

    <main class="l-main">
        <div class="content-wrapper content-wrapper--with-bg">

            <div class="page-title-content">
                <h1 style="margin-bottom: 0; font-weight: 600;">@yield('title')</h1>
            </div>

            @yield('content')
        </div>
        @include('component.footer')

    </main>

    @include('component.script')

</body>

</html>
