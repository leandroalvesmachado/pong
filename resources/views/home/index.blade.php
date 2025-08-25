<x-home-layout>
  <div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2">
      <div class="col mb-4">
        <a href="{{ route('admin.home.index') }}" class="text-decoration-none text-reset">
          <div class="card h-100">
            <img
              src="{{ Vite::asset('resources/images/home/setting.gif') }}"
              class="card-img-top img-fluid"
              alt="..."
              style="object-fit: contain; height: 200px;"
            >
            <div class="card-body">
              <h5 class="card-title">{{ __('views.home.administration_title') }}</h5>
              <p class="card-text">{{ __('views.home.administration_subtitle') }}</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <div class="card h-100">
          <img
            src="{{ Vite::asset('resources/images/home/table-tennis.gif') }}"
            class="card-img-top"
            alt="..."
            style="object-fit: contain; height: 200px;"
          >
          <div class="card-body">
            <h5 class="card-title">{{ __('views.home.player_title') }}</h5>
            <p class="card-text">{{ __('views.home.player_subtitle') }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-home-layout>