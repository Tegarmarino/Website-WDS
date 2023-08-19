@extends('components.index')
{{-- @extends('components.nav') --}}
@section("content")

<hr class="mx-5">
    <p class="text-center poppins dark-color mt-5" style="font-weight:500; font-size: 36px; margin-left:480px; margin-right: 480px;">{{ __('msg.title-home') }}</p>
    <p class="text-center poppins fw-normal dark-color mt-4" style="font-size: 14px; margin-left:480px; margin-right: 480px;">{{ __('msg.title-desc') }}</p>

    {{-- Search bar --}}
    <div class="mt-5">
        <form action="" class="d-flex justify-content-center">
            <input class="form-control me-2" type="search" placeholder=" {{ __('msg.search-placeholder') }}" aria-label="Search" style="width: 600px; border-radius: 10px;">
            <button class="btn px-5" type="submit" style="border-radius: 10px; background-color: #FFD500;">
                Cari
            </button>
        </form>
    </div>

    <!-- Button trigger modal -->
    

    {{-- Carousel --}}
    <div class="d-flex justify-content-center">
      <div id="carouselExampleInterval" class="carousel-slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner search-radius">
          <div class="carousel-item active" data-bs-interval="5000">
            <img src="./images/pohon.jpg" class="d-block" alt="..." width="1200px" height="600px" style="filter: brightness(75%);">
            <div class="carousel-caption d-none d-md-block">
              <h5>{{ __('msg.slide1-title') }}</h5>
              <p>{{ __('msg.slide1-desc') }}</p>
            </div>
          </div>
          <div class="carousel-item " data-bs-interval="5000">
            <img src="./images/wood_2.png" class="d-block" alt="..." width="1200px" height="600px" style="filter: brightness(75%);">
            <div class="carousel-caption d-none d-md-block">
              <h5>{{ __('msg.slide2-title') }}</h5>
              <p>{{ __('msg.slide2-desc') }}</p>
            </div>
          </div>
          <div class="carousel-item " data-bs-interval="5000">
            <img src="./images/wood_3.webp" class="d-block" alt="..." width="1200px" height="600px" style="filter: brightness(75%);">
            <div class="carousel-caption d-none d-md-block">
              <h5>{{ __('msg.silde3-title') }}</h5>
              <p>{{ __('msg.slide3-desc') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Product --}}
    <div>
      <p class="text-center poppins dark-color mt-5" style="font-weight:500; font-size: 36px; margin-left:480px; margin-right: 480px;">{{ __('msg.product-welcome-title') }}</p>
      <p class="text-center poppins fw-normal dark-color mt-4" style="font-size: 14px; margin-left:480px; margin-right: 480px;">{{ __('msg.product-welcome-desc') }}</p>
    </div>

    @php($i = 0)
    <div class="d-flex justify-content-center">
    <div class="row" style="margin-left: 75px;">

    @if (Request::url() === 'http://wds-tegar-miranda.test/=id' && Request::url()!=='http://wds-tegar-miranda.test/=en')
      @foreach ($products_id as $product_id )
      {{-- <div class="d-flex justify-content-center"> --}}
        {{-- <div class="row"> --}}
          <div class="col-4 mt-5">
            <div class=" search-radius" style="width: 355px; background-color: #FAF9F9; height:400px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
              <div class="card-body">
                <img src="/images/{{ $product_id['product_image'] }}" class="search-radius" alt="" style="" width="325px" height="250px">
                <span class="poppins mt-3 fw-medium">{{ $product_id['name'] }}</span>
                <br>
                <br>
                <span class="mt-5 poppins" style="margin-top: 20px; color:#ADB5BD;">{{ __('msg.price') }}</span>
                <div class="row">
                  <span class="col-8 poppins" style=" font-size: 20px;">IDR {{ $product_id['price'] }}</span>
                  <a target="_blank" href=" https://wa.me/6285785159740?text=Saya%20ingin%20membeli%20kayu%20anda" type="button" class="col-3 btn" style="border-radius:7px; background-color: #FFD500;">{{ __('msg.buy-button') }}</a>
                </div>

              </div>
            </div>
          </div>
        {{-- </div> --}}
      {{-- </div> --}}
      
        
      
      {{-- <p>{{ $product['id'] }}</p>
      <p>{{ $product['name'] }}</p>
      <img src="/images/{{ $product['product_image'] }}" alt="" class="mx-auto rounded-3" width="125px" height="125px"> --}}
        
      @endforeach
    @endif

    @if (Request::url() === 'http://wds-tegar-miranda.test/=en' && Request::url()!=='http://wds-tegar-miranda.test/=id')
      @foreach ($products_en as $product_en )
      {{-- <div class="d-flex justify-content-center"> --}}
        {{-- <div class="row"> --}}
          <div class="col-4 mt-5">
            <div class=" search-radius" style="width: 355px; background-color: #FAF9F9; height:400px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
              <div class="card-body">
                <img src="/images/{{ $product_en['product_image'] }}" class="search-radius" alt="" style="" width="325px" height="250px">
                <span class="poppins mt-3 fw-medium">{{ $product_en['name'] }}</span>
                <br>
                <br>
                <span class="mt-5 poppins" style="margin-top: 20px; color:#ADB5BD;">{{ __('msg.price') }}</span>
                <div class="row">
                  <span class="col-8 poppins" style=" font-size: 20px;">USD {{ $product_en['price'] }}$</span>
                  <a target="_blank" href="https://wa.me/6285785159740?text=I%20want%20to%20buy%20your%20wood" type="button" class="col-3 btn" style="border-radius:7px; background-color: #FFD500;">{{ __('msg.buy-button') }}</a>
                </div>
                
              </div>
            </div>
          </div>
        {{-- </div> --}}
      {{-- </div> --}}
      
        
      
      {{-- <p>{{ $product['id'] }}</p>
      <p>{{ $product['name'] }}</p>
      <img src="/images/{{ $product['product_image'] }}" alt="" class="mx-auto rounded-3" width="125px" height="125px"> --}}
        
      @endforeach
    @endif
    
  </div>
</div>
{{-- Footer --}}
{{-- <footer class="mt-5 py-4 card-background text-dark poppins">
  <div class="container row">
    <small class="ms-5 col-7">Copyright &copy; Woody</small>
    <small class="text-end col-2">Hubungi kami</small>
    <small class="text-end col-2">Kunjungi toko</small>
  </div>
</footer> --}}


@endsection