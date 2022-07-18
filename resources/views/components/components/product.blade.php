<div class="card text-center">
   <a href="/product/{{ $product->id }}" class="text-decoration-none text-dark">
    <div>
        <img src="{{ asset($product->image) }}" alt="" class="img-fluid" style="height:250px">
    </div>
    <div>
        <h5>{{ $product->name }}</h5>
        <p>@if ($product->discount_percent > 0)
            <span class="text-danger text-decoration-line-through">Rs.{{ $product->price }}</span>
        @endif Rs.{{ $product->selling_price }} <span>per {{ $product->unit->name }}</span></p>
    </div>
   </a>
</div>
