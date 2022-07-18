<x-layout.template>
    <x-slot name="title">Product Details</x-slot>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset($product->image) }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-8">
                   <form action="/cart" method="post">
                    @csrf
                    <h1>{{ $product->name }}</h1>
                        @if ($product->discount_percent>0)
                        <span class="text-danger text-decoration-line-through">Rs.{{ $product->price }}</span> <span>
                        @endif
                        <span>Rs.{{ $product->selling_price }}</span> <span class="fw-bold text-danger">per {{ $product->unit->name }}</span>
                        <p>{{ $product->description }}</p>
                        <input type="text" name="product_id" value="{{ $product->id }}" hidden>
                        <input type="text" name="selling_price" value="{{ $product->selling_price }}" hidden>
                        <input type="number" min="1" value="1" max="10" name="qty">
                        @guest
                        <a href="/login" class="btn btn-primary btn-sm">Add to Cart</a>
                        @else
                        <button type="submit" class="btn btn-primary btn-sm">Add to Cart</button>
                        @endguest


                   </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <x-components.footer />
</x-layout.template>
