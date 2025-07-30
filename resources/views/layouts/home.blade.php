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
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="../../index3.html" class="navbar-brand">
          <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>
      </div>
    </nav>
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Bem vindo<small>, {{ auth()->user()->name }}</small></h1>
            </div>
          </div>
        </div>
      </div>
      <div class="content">
        {{ $slot }}
      </div>
    </div>
    <footer class="main-footer">
      <div class="float-right d-none d-sm-inline"></div>
      <strong>PONG &copy; 2025-{{ date('Y') }}. Sistema de Gestão de Tênis de Mesa.</strong>
    </footer>
  </div>
</body>
</html>