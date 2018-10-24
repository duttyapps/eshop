@extends('layout.template')
@section('title', 'Productos')
@section('content')
    <div class="products">
        <h1>Productos</h1>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-4">
                    <div class="product-box">
                        <div class="product-box--img">
                            <img src="/img/products/{{ $product->ID }}.jpg" alt="">
                        </div>
                        <div class="product-box--name">
                            <a href="/products/view/{{ $product->ID }}">
                                {{ $product->NOMBRE }}
                            </a>
                        </div>
                        <div class="product-box--price">
                            S/ {{ $product->PRECIO }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12 text-right">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection