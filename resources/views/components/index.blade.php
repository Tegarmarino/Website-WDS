<html>
  <head>
    

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <link href="./style.css" rel="stylesheet"/>
    {{-- CDN Email JS --}}
    <script type="text/javascript"src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
      (function(){
          emailjs.init("ZVpb4xxfG70LoUODY");
      })();

      function SendMail() {
        var params = {
          from_name : document.getElementById("fullName").value,
          email_id : document.getElementById("email_id").value,
          message : document.getElemntById("message").value
        }
        emailjs.send("service_51weoe5", "template_pqorcu8", params).then(function(res){
          alert("Succes !" + res.status);
        })
      }
    </script>

    <title>Woody</title>
  </head>
  <body class="white-background">

    {{-- Navbar --}}

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
          <a class="nav-link poppins size-20 mx-5"  href="/about=id">{{ __('msg.about-nav') }}</a>
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
    <form action="https://formspree.io/f/mzbwkrbg" method="POST">
      <input type="text" name="Name" placeholder="{{ __('msg.contact-name') }}" class="form-control mt-3 mb-3" id="fullName" aria-describedby="emailHelp" style="border-radius: 10px;">
      <input type="email" name="Email" placeholder="{{ __('msg.contact-email') }}" class="form-control mb-3" id="email_id" aria-describedby="emailHelp" style="border-radius: 10px;">
      <textarea name="Message" class="form-control" placeholder="{{ __('msg.contact-message') }}" id="message" rows="3" style="border-radius: 10px; "></textarea>
      
      <div class="d-flex justify-content-center my-4">
        <button type="submit" class="btn mx-2" style="border-radius: 7px;background-color: #FFD500;">{{ __('msg.send-message') }}</button>
      </div>
    </form>
      <p class="poppins text-center">{{ __('msg.second-contact') }}</p>
      <div class="d-flex justify-content-center my-4">
        <a href="https://wa.me/6285785159740" type="button" class="btn mx-2" style="border-radius: 7px; background-color: #F1F1F1;" target="_blank">
          <img class="m-1" src="./images/whatsapp.png" width="20px" height="20px" alt=""> Whatsapp</a>
      </div>
      <div class="d-flex justify-content-center my-4">
        <button type="button" class="btn mx-2" style="border-radius: 7px; background-color: #F1F1F1;" data-bs-dismiss="modal">{{ __('msg.close-btn') }}</button>
      </div>
    </div>
    {{-- <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('msg.close-btn') }}</button>
      <button type="button" class="btn" style="border-radius: 7px;background-color: #FFD500;">{{ __('msg.send-message') }}</button>
    </div> --}}
  </div>
</div>
</div>

<!-- Modal Maps -->
<div class="modal fade" id="mapsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content search-radius">
      <div class="modal-body">
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=universitas ciputra surabaya&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <a href="https://piratebay-proxys.com/">Piratebay</a>
          </div>
          <style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #F1F1F1;">{{ __('msg.close-btn') }}</button>
        <a href="https://www.google.com/maps/place/Universitas+Ciputra+Surabaya/@-7.285587,112.631602,14z/data=!4m5!3m4!1s0x0:0xd7e2611ae591f046!8m2!3d-7.2855872!4d112.6316016?hl=en" type="button" target="_blank" class="btn" style="border-radius:7px; background-color: #FFD500;">{{ __('msg.shop-route') }}</a>
      </div>
    </div>
  </div>
  </div>





    
      
    @yield("content")

    {{-- Footer --}}
    {{-- @yield('footer') --}}
    <footer class="mt-5 py-4 card-background text-dark poppins">
      <div class="container row">
        <small class="ms-5 col-7">Copyright &copy; Woody</small>
        <a href="" class="text-end col-2 nav-link text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ __('msg.contact-us') }}</a>
        <a href="" class="text-end col-2 nav-link text-dark" data-bs-toggle="modal" data-bs-target="#mapsModal">{{ __('msg.shop-route') }}</a>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"></script>

  </body>
</html>