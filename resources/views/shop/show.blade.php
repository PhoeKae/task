<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Buy: {{ $product->name }}</h2>
    </x-slot>

    @if (session('error'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <div class="py-6">
        <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
          <p><strong>Your Balance:</strong> ${{ number_format(Auth::user()->balance, 2) }}</p>
          <p><strong>{{ $product->name }}</strong></p>
            <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
            <p><strong>Available:</strong> {{ $product->quantity_available }}</p>

            <form method="POST" action="{{ route('shop.buy', $product) }}" class="mt-4">
                @csrf
                <label class="block mb-2">Quantity</label>
                <input type="number" name="quantity_available" min="1" max="{{ $product->quantity_available }}"
                       class="border rounded w-full p-2" required>

                <button type="submit"
                        class="mt-4 bg-green-500 hover:bg-green-700 text-white px-4 py-2 rounded">
                    Confirm Purchase
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
