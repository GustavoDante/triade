@extends('layouts.app')

@section('content')
    <section class="product-details row">
        <div class="col-6 col-sm-8 col-md-8 col-lg-8 col-xl-6 ">
            <div class="image-slider" id="image-slider">
                <div class="product-images">
                    <img src="{{asset($product->image_2)}}" class="product-img" alt="">
                    <img src="{{asset($product->image_3)}}" class="product-img" alt="">
                    <img src="{{asset($product->image_4)}}" class="product-img" alt="">
                    <img src="{{asset($product->image_5)}}" class="product-img" alt="">
                </div>
                <img src="{{asset($product->image)}}" id="main-product-img" class="main-product-img">
            </div>
        </div>
        <div class="details col-4 col-sm-4 col-md-4 col-lg-4 col-xl-6">
            <h2 class="product-brand">{{$product->title}}</h2>
            <p class="product-short-description">{{$product->short_description}}</p>
            <span class="product-price">R${{number_format($product->discount ? $product->price * (1 - $product->discount) : $product->price, 2, ',', ' ')}}</span>
            @if($product->discount)
                <span class="product-actual-price">R${{number_format($product->price, 2, ',', ' ')}}</span>
                <span class="product-discount-tag">({{$product->discount * 100}}% off)</span>
            @endif
            <p class="product-sub-heading">Tamanho:</p>

            <input type="radio" name="size" value="PP" id="PP-size" hidden checked>
            <label for="PP-size" class="size-label-btn checked">PP</label>
            <input type="radio" name="size" value="P" hidden id="P-size">
            <label for="P-size" class="size-label-btn">P</label>
            <input type="radio" name="size" value="M" hidden id="M-size">
            <label for="M-size" class="size-label-btn">M</label>
            <input type="radio" name="size" value="G" hidden id="G-size">
            <label for="G-size" class="size-label-btn">G</label>
            <input type="radio" name="size" value="GG" hidden id="GG-size">
            <label for="GG-size" class="size-label-btn">GG</label>

            <button class="btn-product cart-btn">adicionar ao carrinho</button>
            <button class="btn-product">Comprar agora</button>
        </div>
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
                item.scrollLeft += containerWidth;
            })

            preBtn[i].addEventListener('click', () => {
                item.scrollLeft -= containerWidth;
            })
        });

        $(document).ready(function () {
            $('.link').removeClass('active-link');
            console.log( );
            // $('.link').eq(2).addClass('active-link');
        });

        $('.product-img').hover(function () {
                let mainImg = $('#main-product-img').attr('src');
                $('#main-product-img').attr('src', $(this).attr('src'));
                $(this).attr('src', mainImg);
            }, function () {
                // out
            }
        );

        $('.size-label-btn').click(function () {
            $('.size-label-btn').removeClass('checked');
            $(this).addClass('checked');
            $(this).attr('checked', true);
        });

        $('#PP-size').change(function (){
            console.log($(this).attr('value'));
        })


    </script>    
@endpush