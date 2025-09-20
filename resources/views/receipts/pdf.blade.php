<!DOCTYPE html>
<html>
<head>
    <title>Receipt {{ $receipt->receipt_number }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        .header { text-align: center; margin-bottom: 20px; }
        .details { margin-bottom: 20px; }
        .table { width: 100%; border-collapse: collapse; }
        .table th, .table td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        .table th { background-color: #f2f2f2; }
        .totals { margin-top: 20px; text-align: right; }
        .footer { margin-top: 30px; text-align: center; font-size: 12px; color: #666; }
    </style>
</head>
<body>
<div class="header">
    <h1>OFFICIAL RECEIPT</h1>
    <p>Receipt Number: {{ $receipt->receipt_number }}</p>
    <p>Date: {{ $receipt->created_at->format('M d, Y H:i') }}</p>
</div>

<div class="details">
    <p><strong>Customer:</strong> {{ $receipt->customer_name }}</p>
    <p><strong>Email:</strong> {{ $receipt->customer_email }}</p>
    <p><strong>Address:</strong> {{ $receipt->customer_address }}</p>
</div>

<table class="table">
    <thead>
    <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    @php
        $items = json_decode($receipt->items, true);
    @endphp
    @foreach($items as $item)
        <tr>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['quantity'] }}</td>
            <td>${{ number_format($item['price'], 2) }}</td>
            <td>${{ number_format($item['quantity'] * $item['price'], 2) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="totals">
    <p><strong>Subtotal:</strong> ${{ number_format($receipt->subtotal, 2) }}</p>
    <p><strong>Tax (10%):</strong> ${{ number_format($receipt->tax, 2) }}</p>
    <p><strong>Total Amount:</strong> ${{ number_format($receipt->total, 2) }}</p>
</div>

<div class="footer">
    <p>Thank you for your business!</p>
    <p>Generated on {{ now()->format('M d, Y H:i:s') }}</p>
</div>
</body>
</html>
