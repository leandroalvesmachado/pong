<x-guest-layout>
  <p class="login-box-msg">{{ __('views.login.login-box-msg') }}</p>
  <x-auth-session-status class="mb-4" :status="session('status')" />
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="input-group mb-3">
      <input type="email" class="form-control" placeholder="Email">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-envelope"></span>
        </div>
      </div>
    </div>
  </form>
</x-guest-layout>