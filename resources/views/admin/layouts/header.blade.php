<meta name="description" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="http://archivehis.bums.ac.ir/new/his-main/modules/backend/assets/images/favicon.png">
<!-- Icons -->
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}">
<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css">
<link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css">
<link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/rtl.css') }}">
<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/toastr/toastr.css') }}">
@yield('vendor-css')
<!-- Page CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}">
@yield('page-css')
<!-- Helpers -->
<script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
<script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>
<script src="{{ asset('assets/js/config.js') }}"></script>
