<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Product</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('products.update', $product) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input name="name" value="{{ $product->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Price</label>
                    <input name="price" type="number" step="0.01" value="{{ $product->price }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Quantity</label>
                    <input name="quantity_available" type="number" value="{{ $product->quantity_available }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
                </div>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
            </form>
        </div>
    </div>
</x-app-layout>
