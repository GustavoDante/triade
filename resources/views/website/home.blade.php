@extends('layouts.app')

@section('content')
    
    <header class="hero-section ">
        <div class="content">
            <img src="{{asset("img/light-logo.png")}}" class="logo" alt="">
            <p class="sub-heading">Preço baixo, qualidade e beleza em um só lugar</p>
        </div>
    </header>

    <section class="product">
        <h2 class="product-category">Mais vendidos</h2>
        <button class="pre-btn"><img src="{{asset('img/arrow.png')}}" alt=""></button>
        <button class="nxt-btn"><img src="{{asset('img/arrow.png')}}" alt=""></button>
        <div class="product-container">
            @forEach($products as $product)
                @component('components.product-card', ['product' => $product])	
                @endcomponent
            @endforeach
        </div>
    </section>

    <section class="collection-container">
        <a href="#" class="collection">
            <img src="{{asset('img/women-collection.png')}}" alt="">
            <p class="collection-title">Feminino</p>
        </a>
        <a href="#" class="collection">
            <img src="{{asset('img/men-collection.png')}}" alt="">
            <p class="collection-title">Masculino</p>
        </a>
        <a href="#" class="collection">
            <img src="{{asset('img/accessories-collection.png')}}" alt="">
            <p class="collection-title">Acessórios</p>
        </a>
    </section>

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    <section class="product">
        <h2 class="product-category">Sapatos</h2>
        <button class="pre-btn"><img src="{{asset('img/arrow.png')}}" alt=""></button>
        <button class="nxt-btn"><img src="{{asset('img/arrow.png')}}" alt=""></button>
        <div class="product-container">
            @forEach($shoes as $shoe)
                @component('components.product-card', ['product' => $shoe])
                @endcomponent
            @endforeach
        </div>
    </section>

    <section class="product">
        <h2 class="product-category">Camisas</h2>
        <button class="pre-btn"><img src="{{asset('img/arrow.png')}}" alt=""></button>
        <button class="nxt-btn"><img src="{{asset('img/arrow.png')}}" alt=""></button>
        <div class="product-container">
            @forEach($clothings as $clothing)
                @component('components.product-card', ['product' => $clothing])
                @endcomponent
            @endforeach
        </div>
    </section>

    

@endsection
@push('scripts')
    <script>
        const productContainers = [...document.querySelectorAll('.product-container')];
        const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
        const preBtn = [...document.querySelectorAll('.pre-btn')];


        productContainers.forEach((item, i) => {
            let containerDimenstions = item.getBoundingClientRect();
            let containerWidth = containerDimenstions.width;

            nxtBtn[i].addEventListener('click', () => {
                item.scrollLeft += containerWidth;
            })

            preBtn[i].addEventListener('click', () => {
                item.scrollLeft -= containerWidth;
            })
        })
    </script>
@endpush