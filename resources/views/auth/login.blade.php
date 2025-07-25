<x-guest-layout>
  <p class="login-box-msg">{{ __('views.login.login-box-msg') }}</p>
  
  <x-auth-session-status class="mb-4" :status="session('status')" />
  
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="input-group">
      <input
        type="email"
        id="email"
        name="email"
        class="form-control @error('email') is-invalid @enderror"
        placeholder="{{ __('views.login.email_placeholder') }}"
        value="{{ old('email') }}"
      >
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-envelope"></span>
        </div>
      </div>
    </div>
    <span class="text-danger">{{ $errors->first('email') }}</span>
    <div class="input-group mt-3">
      <input
        type="password"
        id="password"
        name="password"
        class="form-control @error('password') is-invalid @enderror"
        placeholder="{{ __('views.login.password_placeholder') }}"
      >
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
    </div>
    <span class="text-danger">{{ $errors->first('password') }}</span>
    <div class="row mt-3">
      <div class="col">
        <button type="submit" class="btn btn-primary btn-block">{{ __('views.login.submit') }}</button>
      </div>
    </div>
  </form>
</x-guest-layout>