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
 <!-- Page Content -->
 <div class="container mt-4 min-vh-100">

    <h1>Products</h1>
    <hr />

    <div class="row">

      <div class="col-lg-3">

        <ul class="list-group">
			@php
				$i = 1;
			@endphp
			@foreach ($data['categories'] as $category )
				<li class="list-group-item">
					<input type="checkbox" name="options" id="opt{{ $i }}" /> {{ $category->name }}
				</li>
				@php
					$i++;
				@endphp
			@endforeach
        </ul>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row">
			@foreach ($data['products'] as $product)
				@include('components.shopping-card', ['description' => false])
			@endforeach
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

    
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection