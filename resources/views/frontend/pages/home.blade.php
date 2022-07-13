<x-layout.template>
    <x-slot name="title">Home</x-slot>
    <!-- Navbar -->
    <x-components.navbar />

    <!-- Slot Data Goes Here -->
    <!-- Fresh Chicken -->
    <div class="py-5">
        <div class="container">
            <h1>Fresh Meat</h1>
            <div class="row">
                <div class="col-md-3">
                    <x-components.product />
                </div>
                <div class="col-md-3">
                    <x-components.product />
                </div>
                <div class="col-md-3">
                    <x-components.product />
                </div>
                <div class="col-md-3">
                    <x-components.product />
                </div>
            </div>
        </div>
    </div>

    <x-components.ads />

     <!-- Vegetables -->
     <div class="py-5">
        <div class="container">
            <h1>Fresh Vegetables</h1>
            <div class="row g-2">
                <div class="col-md-2">
                    <x-components.product />
                </div>
                <div class="col-md-2">
                    <x-components.product />
                </div>
                <div class="col-md-2">
                    <x-components.product />
                </div>
                <div class="col-md-2">
                    <x-components.product />
                </div>
                <div class="col-md-2">
                    <x-components.product />
                </div>
                <div class="col-md-2">
                    <x-components.product />
                </div>
                <div class="col-md-2">
                    <x-components.product />
                </div>
                <div class="col-md-2">
                    <x-components.product />
                </div>
                <div class="col-md-2">
                    <x-components.product />
                </div>
                <div class="col-md-2">
                    <x-components.product />
                </div>
                <div class="col-md-2">
                    <x-components.product />
                </div>
                <div class="col-md-2">
                    <x-components.product />
                </div>
            </div>
        </div>
    </div>

    <!-- Drinks -->
    <div class="py-5">
        <div class="container">
            <h1>Drinks</h1>
            <p>Have a right choice baby</p>
            <div class="row">
                <div class="col-md-3">
                    <x-components.product />
                </div>
                <div class="col-md-3">
                    <x-components.product />
                </div>
                <div class="col-md-3">
                    <x-components.product />
                </div>
                <div class="col-md-3">
                    <x-components.product />
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <x-components.footer />
</x-layout.template>
