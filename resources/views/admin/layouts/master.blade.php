<!DOCTYPE html>
<html lang="fa" class="light-style layout-navbar-fixed layout-menu-fixed" dir="rtl" data-theme="theme-default"
    data-assets-path="{{ asset('assets/') . '/' }}" data-template="vertical-menu-template-starter">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>@yield('title')</title>

    @include('admin.layouts.header')
</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('admin.layouts.menu')
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Header -->
                @include('admin.layouts.Navbar')
                <!-- / Header -->
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                    <!-- / Content -->
                    <!-- Footer -->
                    @include('admin.layouts.footer')
                    <!-- / Footer -->
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>


    <!-- / Layout wrapper -->
    @include('admin.layouts.script')




</body>

</html>
