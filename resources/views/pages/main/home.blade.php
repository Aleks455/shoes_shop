@extends('layout.layout')

@section('title')
<title>Shop - Home</title>
@endsection

@section('keywords')
<meta name="keywords" content="shop, online, products" />
@endsection

@section('description')
<meta name="description" content="Website for an online shop." />
@endsection

@section('container')
  <!-- Page Content -->
  <div class="container min-vh-100">

    <div class="row">

      <div class="col-lg-12">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">	
			@foreach ($slider_images as $image)
				<div class="carousel-item @if ($loop->index == 0) active @endif">
					<img class="d-block img-fluid" src="{{ asset('assets/img/slider/' . $image->name . '.png') }}" alt="{{ $image->alt }}">
			  	</div>
			@endforeach
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <h2>Best Sellers</h2>
        <hr />

        <div class="row">

			@foreach ($products as $product)
				@include('pages/components.shopping-card', ['description' => true])
			@endforeach
        
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection