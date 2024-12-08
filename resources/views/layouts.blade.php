<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PENDAFTARAN MAHASISWA - @yield('title')</title><!--begin::Primary Meta Tags-->
    @include('partials.style')
</head> <!--end::Head--> <!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper"> <!--begin::Header-->
    @include('partials.navbar') <!--end::Header--> <!--begin::Sidebar-->
        @include('partials.aside') <!--end::Sidebar--> <!--begin::App Main-->
        @yield('content') <!--end::App Main--> <!--begin::Footer-->
         <!--end::Footer-->
         @include('partials.footer')
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    @include('partials.script') <!--end::Script-->
</body><!--end::Body-->

</html>