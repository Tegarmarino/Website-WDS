
{{-- Ini adalah kondisi jika id Home --}}
@if (Request::url() === 'http://wds-tegar-miranda.test/=id' && Request::url()!=='http://wds-tegar-miranda.test/=en')
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand ms-2" href="/"><img src="./images/woody_logo.png" alt="" width="120dp"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link poppins size-20 mx-5" aria-current="page" href="/=id">{{ __('msg.home-nav') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link poppins size-20 mx-5" href="/about=id">{{ __('msg.about-nav') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link poppins size-20 mx-5" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ __('msg.contact-nav') }}</a>
          </li>
        </ul>
      </div>
      <div class="d-flex justify-content-end">
        <ul class="navbar-nav">
            <li>
              <a class="nav-link poppins size-20 fw-light" name="en" id="en" aria-current="page" href="/=en">EN <span class="ms-2">|</span></a>
            </li>
            <li>
              <a class="nav-link poppins size-20 fw-light yellow-color fw-bold"  name="id" id="id" href="/=id">ID</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
@endif

{{-- Ini adalah kondisi jika id About --}}
@if (Request::url() === 'http://wds-tegar-miranda.test/about=id' && Request::url()!=='http://wds-tegar-miranda.test/about=en')
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand ms-2" href="/"><img src="./images/woody_logo.png" alt="" width="120dp"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link poppins size-20 mx-5" aria-current="page" href="/=id">{{ __('msg.home-nav') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link poppins size-20 mx-5" href="/about=id">{{ __('msg.about-nav') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link poppins size-20 mx-5" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ __('msg.contact-nav') }}</a>
          </li>
        </ul>
      </div>
      <div class="d-flex justify-content-end">
        <ul class="navbar-nav">
            <li>
              <a class="nav-link poppins size-20 fw-light" name="en" id="en" aria-current="page" href="/=en">EN <span class="ms-2">|</span></a>
            </li>
            <li>
              <a class="nav-link poppins size-20 fw-light yellow-color fw-bold"  name="id" id="id" href="/=id">ID</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
@endif

  {{-- Ini adalah kondisi jika en Home --}}
@if (Request::url() == 'http://wds-tegar-miranda.test/=en' && Request::url()!=='http://wds-tegar-miranda.test/=id')
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand ms-2" href="/"><img src="./images/woody_logo.png" alt="" width="120dp"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link poppins size-20 mx-5" aria-current="page" href="/=en">{{ __('msg.home-nav') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link poppins size-20 mx-5" href="/about=en">{{ __('msg.about-nav') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link poppins size-20 mx-5" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ __('msg.contact-nav') }}</a>
          </li>
        </ul>
      </div>
      <div class="d-flex justify-content-end">
        <ul class="navbar-nav">
            <li>
              <a class="nav-link poppins size-20 fw-light yellow-color fw-bold" name="en" id="en" aria-current="page" href="/=en">EN <span class="ms-2 fw-light">|</span> </a>
            </li>
            <li>
              <a class="nav-link poppins size-20 fw-light"  name="id" id="id" href="/=id">ID</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
@endif  

{{-- Ini adalah kondisi jika en About --}}
@if (Request::url() == 'http://wds-tegar-miranda.test/about=en' && Request::url()!=='http://wds-tegar-miranda.test/about=id')
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand ms-2" href="/"><img src="./images/woody_logo.png" alt="" width="120dp"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link poppins size-20 mx-5" aria-current="page" href="/=en">{{ __('msg.home-nav') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link poppins size-20 mx-5" href="/about=en">{{ __('msg.about-nav') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link poppins size-20 mx-5" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ __('msg.contact-nav') }}</a>
          </li>
        </ul>
      </div>
      <div class="d-flex justify-content-end">
        <ul class="navbar-nav">
            <li class="">
              <a class="nav-link poppins size-20 fw-light yellow-color fw-bold" name="en" id="en" aria-current="page" href="/=en">EN <span class="ms-2 fw-light">|</span> </a> 
            </li>
            <li>
              <a class="nav-link poppins size-20 fw-light col-6"  name="id" id="id" href="/=id">ID</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
@endif  



<!-- Modal Contact -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content search-radius">
      <div class="modal-body">
      <h5 class="poppins mb-4">{{ __('msg.contact-title') }}</h5>
      {{-- Form --}}
      <input type="text" placeholder="{{ __('msg.contact-name') }}" class="form-control mt-3 mb-3" id="exampleInputName1" aria-describedby="emailHelp" style="border-radius: 10px;">
      <input type="email" placeholder="{{ __('msg.contact-email') }}" class="form-control mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" style="border-radius: 10px;">
      <textarea class="form-control" placeholder="{{ __('msg.contact-message') }}" id="exampleFormControlTextarea1" rows="3" style="border-radius: 10px;"></textarea>
      <div class="mb-3">
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@yield('footer')

{{-- Footer --}}