<x-app-layout>
    <div class="container mx-auto px-4 py-8">

        <form action="{{ route('receipt.store') }}" method="POST"
              class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
            @csrf

            <h1 class="text-3xl font-bold text-center  mb-8">Create Receipt</h1>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Customer Name</label>
                <input type="text" name="customer_name" required class="w-full px-3 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Customer Email</label>
                <input type="email" name="customer_email" required class="w-full px-3 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Customer Address</label>
                <textarea name="customer_address" required class="w-full px-3 py-2 border rounded-lg"
                          rows="3"></textarea>
            </div>

            <div class="mb-6">
                <h3 class="text-xl font-semibold mb-4">Items</h3>
                <div id="items-container">
                    <div class="item mb-4 p-4 border rounded-lg">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-2">
                            <div>
                                <label class="block text-gray-700 mb-2">Item Name</label>
                                <input type="text" name="items[0][name]" required
                                       class="w-full px-3 py-2 border rounded-lg">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Quantity</label>
                                <input type="number" name="items[0][quantity]" required min="1"
                                       class="w-full px-3 py-2 border rounded-lg">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Price</label>
                                <input type="number" name="items[0][price]" required min="0" step="0.01"
                                       class="w-full px-3 py-2 border rounded-lg">
                            </div>
                        </div>
                        <button type="button" class="remove-item bg-red-500 text-white px-3 py-1 rounded-lg text-sm">
                            Remove
                        </button>
                    </div>
                </div>
                <button type="button" id="add-item" class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2">Add Item
                </button>
            </div>

            <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-lg w-full">Generate Receipt</button>
        </form>
    </div>
</x-app-layout>
