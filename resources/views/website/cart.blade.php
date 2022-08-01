@extends('layouts.app')

@section('content')
<div class="container container-cart">
    <div class="row">
        <div class="container-carts col-sm-12 col-md-12 col-lg-12 col-xl-8">
            <div class="card-cart">
                <div class="logo-product-cart">
                    <img class="img-product-cart" src="https://github.com/GustavoDante.png" alt="">
                </div>
                <div class="info-product-cart">
                    <h1 class="name-product-cart">titulo comum
                    </h1>
                    <span class="price">R$39,00</span>
                </div>
            </div>
            <div class="card-cart">
                <div class="logo-product-cart">
                    <img class="img-product-cart" src="https://github.com/GustavoDante.png" alt="">
                </div>
                <div class="info-product-cart">
                    <h1 class="name-product-cart">titulo comum
                    </h1>
                    <span class="price">R$39,00</span>
                </div>
            </div>
            <div class="card-cart">
                <div class="logo-product-cart">
                    <img class="img-product-cart" src="https://github.com/GustavoDante.png" alt="">
                </div>
                <div class="info-product-cart">
                    <h1 class="name-product-cart">titulo comum
                    </h1>
                    <span class="price">R$39,00</span>
                </div>
            </div>
            <div class="card-cart">
                <div class="logo-product-cart">
                    <img class="img-product-cart" src="https://github.com/GustavoDante.png" alt="">
                </div>
                <div class="info-product-cart">
                    <h1 class="name-product-cart">titulo comum
                    </h1>
                    <span class="price">R$39,00</span>
                </div>
            </div>
            <div class="card-cart">
                <div class="logo-product-cart">
                    <img class="img-product-cart" src="https://github.com/GustavoDante.png" alt="">
                </div>
                <div class="info-product-cart">
                    <h1 class="name-product-cart">titulo comum
                    </h1>
                    <span class="price">R$39,00</span>
                </div>
            </div>
        </div>
        <div class="container-price col-sm-12 col-md-12 col-lg-12 col-xl-4">
            <div class="card-total-price">
                <div class="financial-information">
                    <h1 class="name-product-cart">Total</h1>
                    <span class="total-price">R$39,00</span>
                </div>
                <button class="button-close-sale btn btn-primary"type="button" data-toggle="modal" data-target="#exampleModal">Continuar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('scripts')

@endpush