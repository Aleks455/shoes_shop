<div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
        <a href="#"><img class="card-img-top" src="assets/img/700x400.png" alt="Placeholder"></a>
        <div class="card-body">
            <h4 class="card-title">
            <a href="#">{{ $product->name }}</a>
            </h4>
            <h5>${{ $product->price }}</h5>
            @if ($description)
                <p class="card-text">{{ $product->description }}</p>
            @endif
        </div>
    </div>
</div>


 