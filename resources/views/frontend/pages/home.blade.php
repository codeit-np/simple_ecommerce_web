<x-layout.template>
    <x-slot name="title">Home</x-slot>


    <!-- Slot Data Goes Here -->
    <!-- Fresh Chicken -->
    <div class="py-5">
        <div class="container">
            <h1>Fresh Meat</h1>
            <div class="row">
                @foreach ($freshMeat as $item)
                    <div class="col-md-3">
                        <x-components.product :product=$item />
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <x-components.ads />

    <!-- Vegetables -->
    <div class="py-5">
        <div class="container">
            <h1>Fresh Vegetables</h1>
            <div class="row g-2">
                @foreach ($freshVeg as $item)
                    <div class="col-md-3">
                        <x-components.product :product=$item />
                    </div>
                @endforeach

            </div>
        </div>
    </div>


     <!-- Vegetables -->
    <div class="py-5">
        <div class="container">
            <h1>Fresh Drinks</h1>
            <div class="row g-2">
                @foreach ($freshVeg as $item)
                    <div class="col-md-3">
                        <x-components.product :product=$item />
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    <!-- Footer -->
    <x-components.footer />
</x-layout.template>
