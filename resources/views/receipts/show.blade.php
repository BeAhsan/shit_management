<x-app-layout>
    <h1>Receipt {{ $receipt->receipt_number }}</h1>
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-center mb-6">Receipt Generated</h1>

        <div class="mb-6 text-center">
            <p class="text-lg">Receipt Number: <strong>{{ $receipt->receipt_number }}</strong></p>
            <p class="text-gray-600">Total Amount: ${{ number_format($receipt->total, 2) }}</p>
        </div>

        <div class="flex justify-center gap-4 mb-6">
            <a href="{{ route('receipt.download', $receipt->id) }}"
               class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
                Download PDF
            </a>
            <a href="{{ route('receipt.print', $receipt->id) }}"
               class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600">
                Print/View PDF
            </a>
            <a href="{{ route('receipt.create') }}"
               class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600">
                Create Another
            </a>
        </div>

        <div class="border-t pt-4">
            <h3 class="text-xl font-semibold mb-3">Receipt Details</h3>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p><strong>Customer:</strong> {{ $receipt->customer_name }}</p>
                    <p><strong>Email:</strong> {{ $receipt->customer_email }}</p>
                    <p><strong>Address:</strong> {{ $receipt->customer_address }}</p>
                </div>
                <div>
                    <p><strong>Subtotal:</strong> ${{ number_format($receipt->subtotal, 2) }}</p>
                    <p><strong>Tax (10%):</strong> ${{ number_format($receipt->tax, 2) }}</p>
                    <p><strong>Total:</strong> ${{ number_format($receipt->total, 2) }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
    </x-app-layout>
