<!DOCTYPE html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets/') }}" data-template="vertical-menu-template-free">

<head>
    @include('backend.templates.head')
</head>

<body>
    @yield('content')

    @include('backend.templates.javascript')
</body>

</html>
