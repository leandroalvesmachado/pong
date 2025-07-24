<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }} | Login</title>
  @vite(['resources/css/login.css', 'resources/js/login.js'])
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html">
        <img src="{{ Vite::asset('resources/images/logo-login.png') }}" alt="Ping Pong Logo" class="w-50">
      </a>
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        {{ $slot }}
      </div>
    </div>
  </div>
</body>
</html>