<nav class="navbar navbar-expand-md">
    <div class="nav nav-content">
        <a href="{{route('website.home')}}">
            <img src="{{asset('img/dark-logo.png')}}" class="brand-logo" alt="">
        </a>
        <div class="">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#collapse_target" aria-controls="collapse_target" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse nav-menu" id="collapse_target">
            <a class="navbar-brand" href="#"><img src="" alt=""></a>
          

          <div class="nav-items">
              <div class="search">
                  <input type="text" class="search-box" placeholder="Pesquise um produto">
                  <button class="search-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="#FFF" viewBox="0 0 512 512"><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 
                      33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 
                      144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 
                      128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg></button>
              </div>
              <a href="#"><img src="{{asset('img/user.png')}}" alt=""></a>
              <a href="#" go data-target="#exampleModalCenter" id="test-button"><img src="{{asset('img/cart.png')}}" alt=""></a>
          </div>
        </div>
    </div>    
</nav>
<div  class="border-bot">
    <ul class="links-container">
        <li class="link-item"><a href="#" class="link active-link">Inicial</a></li>
        <li class="link-item"><a href="#" class="link">Mulher</a></li>
        <li class="link-item"><a href="#" class="link">Homem</a></li>
        <li class="link-item"><a href="#" class="link">Criança</a></li>
        <li class="link-item"><a href="#" class="link">acessórios</a></li>
      </ul>
</div>



@include('layouts.cart')
@push('scripts')
    <script>
        $(document).ready(function () {
            // $('#exampleModalCenter').modal('show')
        });
    </script>
@endpush

