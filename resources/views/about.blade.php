@extends('components.index')
{{-- @extends('components.nav') --}}

@section("content")
{{-- Welcome --}}
    <div>
        <p class="text-center poppins dark-color mt-5" style="font-weight:500; font-size: 36px; margin-left:480px; margin-right: 480px;">Woody Inc</p>
        <p class="text-center poppins fw-normal dark-color mt-4" style="font-size: 14px; margin-left:480px; margin-right: 480px;">{{ __('msg.welcome-desc') }}</p>
    </div>

    {{-- Benefits --}}
    <p class="text-center poppins dark-color" style="font-weight:500; font-size: 36px; margin-top:150px; margin-left:480px; margin-right: 480px;">{{ __('msg.offer-welcome') }}</p>
    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col-3">
                <div class="card search-radius mx-3" style="width: 18rem; background-color: #f1f1f1; height:250px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
                    <div class="card-body">
                    <h6 class="card-title poppins">
                        <img src="./images/Wood-icon.png" alt="" height="50px" width="50px"> <span class="ms-2">{{ __('msg.offer1-title') }}</span>
                    </h6>
                    <p class="card-text poppins mt-4">{{ __('msg.offer1-desc') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card search-radius mx-3" style="width: 18rem; background-color: #f1f1f1; height:250px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
                    <div class="card-body">
                    <h6 class="card-title poppins">
                        <img src="./images/discount-icon.png" alt="" height="50px" width="50px"> <span class="ms-2">{{ __('msg.offer2-title') }}</span>
                    </h6>
                    <p class="card-text poppins mt-4">{{ __('msg.offer2-desc') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card search-radius mx-3" style="width: 18rem; background-color: #f1f1f1; height:250px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
                    <div class="card-body">
                    <h6 class="card-title poppins">
                        <img src="./images/infinite-icon.png" alt="" height="50px" width="50px"> <span class="ms-2">{{ __('msg.offer3-title') }}</span>
                    </h6>
                    <p class="card-text poppins mt-4">{{ __('msg.offer3-desc') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card search-radius mx-3" style="width: 18rem; background-color: #f1f1f1; height:250px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
                    <div class="card-body">
                    <h6 class="card-title poppins">
                        <img src="./images/send-icon.png" alt="" height="50px" width="50px"> <span class="ms-2">{{ __('msg.offer4-title') }}</span>
                    </h6>
                    <p class="card-text poppins mt-4">{{ __('msg.offer4-desc') }}</p>
                    </div>
                </div>
            </div>
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