<x-home-layout>
  <div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2">
      <div class="col mb-4">
        <a href="{{ route('admin.home.index') }}" class="text-decoration-none text-reset">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ __('views.home.administration_title') }}</h5>
              <p class="card-text">{{ __('views.home.administration_subtitle') }}</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col mb-4">
        <div class="card h-100">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ __('views.home.player_title') }}</h5>
            <p class="card-text">{{ __('views.home.player_subtitle') }}</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card h-100">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in ttle bit longer.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-home-layout>