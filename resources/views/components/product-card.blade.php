<div class="product-card">
    <div class="product-image">
        @if($product->discount)
            <span class="discount-tag">{{$product->discount * 100}}% off</span>
        @endif
        <a href="{{route('products.index', ['id' => $product->id])}}">
            <img src="{{asset($product->image)}}" class="product-thumb" alt="">
        </a>
        <button class="card-btn">adicionar ao carrinho</button>
    </div>
    <div class="product-info">
        <a href="{{route('products.index', ['id' => $product->id])}}">
            <h2 class="product-brand">{{$product->title}}</h2>
            <p class="product-short-description">{{$product->short_description}}</p>
            <span class="price">R${{number_format($product->discount ? $product->price * (1 - $product->discount) : $product->price, 2, ',', ' ')}}</span>
            @if($product->discount)
                <span class="actual-price">R${{number_format($product->price, 2, ',', ' ')}}</span>
            @endif
        </a>
    </div>
</div>