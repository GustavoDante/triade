@extends('layouts.app')

@section('content')
    
    <header class="hero-section ">
        <img class="img-header" src="{{asset('img/banner-home.jpg')}}" alt="">
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
                item.scrollLeft += (containerWidth/1.3);
            })

            preBtn[i].addEventListener('click', () => {
                item.scrollLeft -= (containerWidth/1.3);
            })
        })
    </script>
@endpush