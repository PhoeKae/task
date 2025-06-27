<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Shop</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($products as $product)
                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="text-xl font-bold">{{ $product->name }}</h3>
                        <p class="text-gray-700">Price: ${{ number_format($product->price, 2) }}</p>
                        <p class="text-gray-600">Available: {{ $product->quantity_available }}</p>

                        <a href="{{ route('shop.show', $product) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block mt-3"">
                             Buy
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
