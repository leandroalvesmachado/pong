<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  @vite(['resources/css/home.css', 'resources/js/home.js'])
</head>
<body class="hold-transition layout-top-nav">
  <div class="wrapper">
    {{  $slot }}
    <footer class="main-footer">
      <div class="float-right d-none d-sm-inline">
      </div>
      <strong>PONG &copy; 2025-{{ date('Y') }}. Sistema de Gestão de Tênis de Mesa.</strong>
    </footer>
  </div>
</body>
</html>