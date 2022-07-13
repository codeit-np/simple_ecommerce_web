<x-layout.template>
    <x-slot name="title">Product Details</x-slot>
    <!-- Navbar -->
    <x-components.navbar />

    <div class="py-5">
        <div class="container">
            <table class="table">
                <tr>

                    <th></th>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Rate</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td><a href=""><i class="fa-solid fa-circle-xmark text-danger"></i></a></td>
                    <td>Whole Chicken</td>
                    <td><input type="number" name="qty" id="" min="1" max="10" value="1"></td>
                    <td>500</td>
                    <td>500</td>
                    <td>
                        <a href="" class="badge bg-primary">Update</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- Footer -->
    <x-components.footer />
</x-layout.template>
