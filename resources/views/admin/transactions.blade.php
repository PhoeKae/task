<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">All Transactions</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left font-medium">User</th>
                            <th class="px-6 py-3 text-left font-medium">Product</th>
                            <th class="px-6 py-3 text-left font-medium">Quantity Purchased</th>
                            <th class="px-6 py-3 text-left font-medium">Total Amount</th>
                            <th class="px-6 py-3 text-left font-medium">Date</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($transactions as $txn)
                            <tr>
                                <td class="px-6 py-4">{{ $txn->user->name }}</td>
                                <td class="px-6 py-4">{{ $txn->product->name }}</td>
                                <td class="px-6 py-4">{{ $txn->quantity_purchased }}</td>
                                <td class="px-6 py-4">{{ $txn->total_amount }}</td>
                                <td class="px-6 py-4">{{ $txn->created_at->format('Y-m-d H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="p-4">
                    {{ $transactions->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
