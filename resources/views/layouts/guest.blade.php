<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }} | Login</title>
  @vite(['resources/css/login.css', 'resources/js/login.js'])
</head>
<body class="hold-transition vh-100">
  <div class="container-fluid">
    <div class="row bg-primary">
      <div class="col text-center">
        <img src="{{ Vite::asset('resources/images/logo-login.png') }}" alt="Ping Pong Logo" class="w-25" style="object-fit: contain;">
      </div>
    </div>
    <div class="row">
      <div class="col text-center">2</div>
    </div>
    <div class="row bg-danger">
      <div class="col text-center">3</div>
    </div>
  </div>
  {{-- <div class="login-box">
    <div class="login-logo">
      <a href="#">
        <img src="{{ Vite::asset('resources/images/logo-login.png') }}" alt="Ping Pong Logo" class="w-75">
      </a>
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        {{ $slot }}
      </div>
    </div>
  </div> --}}
</body>
</html>