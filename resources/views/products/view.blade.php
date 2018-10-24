@extends('layout.template')
@section('title', $product->NOMBRE)
@section('content')
    <div class="row product-view">
        <div class="col-lg-5">
            <div class="product-view--img">
                <img src="/img/products/{{ $product->ID }}.jpg" alt="">
            </div>
        </div>
        <div class="col-lg-7">
            <h2>{{ $product->NOMBRE }}</h2>
            <div class="product-view--price">
                S/ {{ $product->PRECIO }}
            </div>
            <hr>
            <h5 class="mb-3">CARACTERÍSTICAS DEL PRODUCTO</h5>
            <div class="product-view--description">
                {!! $product->DESCRIPCION !!}
            </div>
            <hr>
            <form action="/cart/add" method="post">
                <input type="hidden" name="id" value="{{ $product->ID }}">
                <p>Cantidad:</p>
                <select name="quanty" id="quanty" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                <button class="btn btn-success product-view--button">
                    AGREGAR AL CARRITO DE COMPRAS
                </button>
            </form>
        </div>
    </div>
@endsection