@extends('layout.layout')

@section('title')
<title>Shop - Products</title>
@endsection

@section('keywords')
<meta name="keywords" content="shop, online, products" />
@endsection

@section('description')
<meta name="description" content="Website for an online shop." />
@endsection

@section('container')
    <div class="container vh-100">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 text-center">
                <div class="mt-3">     
                    <h1>{{ $product->name }}</h1>
                    <hr>
                </div>
               
                <div class="mt-4">
                    <img class="" src="{{ asset('assets/img/700x400.png') }}" alt="{{ $product->name }}">
                </div>

                <div class="mt-3">
                    <p>{{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection