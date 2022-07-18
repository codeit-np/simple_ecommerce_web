<x-layout.template>
    <x-slot name="title">Product Details</x-slot>

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

                @foreach ($cartItems as $item)
                    <tr>
                        <td>
                           <form action="/cart/{{ $item->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn"> <i class="fa-solid fa-circle-xmark text-danger"></i></button>
                        </form>
                        </td>
                        <form action="/cart/{{ $item->id }}" method="post">
                            <td>{{ $item->product->name }}</td>
                            <td>
                                <input type="number" name="qty" id="" min="1" max="10" value="{{ $item->qty }}">
                                <input type="text" name="selling_price" value="{{ $item->product->selling_price }}" hidden>
                            </td>
                            <td>{{ $item->product->selling_price }}</td>
                            <td>{{ $item->amount }}</td>
                            <td>

                                    @csrf
                                    @method('put')
                                    <button type="submit" class="btn"> <i class="fa-solid fa-sync text-danger"></i></button>

                            </td>
                        </form>
                    </tr>
                @endforeach

                <tr>
                    <td colspan="4" class="text-end"><h5>Grand Total</h5></td>
                    <td colspan="2"><h5>{{ $totalAmount }}</h5></td>
                </tr>
            </table>
        </div>
    </div>
    <!-- Footer -->
    <x-components.footer />
</x-layout.template>
