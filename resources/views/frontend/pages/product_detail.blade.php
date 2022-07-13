<x-layout.template>
    <x-slot name="title">Product Details</x-slot>
    <!-- Navbar -->
    <x-components.navbar />

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://marijimat.com/image/cache/catalog/ayam%20bulat-500x500.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-8">
                   <form action="" method="post">
                    @csrf
                    <h1>Whole Chicken</h1>
                    <span class="text-danger text-decoration-line-through">Rs.500</span>
                    <span>Rs.400</span>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, maxime eligendi velit repellat veniam reprehenderit voluptates animi optio accusamus! Vel consectetur maxime possimus, animi aliquam nulla sint impedit repellendus voluptates.</p>
                    <input type="number" min="1" value="1" max="10">
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
