<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }} | Administração</title>
  @vite(['resources/css/admin.css', 'resources/js/admin.js'])
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <x-preloader />
    <x-admin.navbar />
    <x-admin.sidebar />
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    </div>
    <!-- /.content-wrapper -->
    <x-admin.footer />
  </div>
</body>
</html>