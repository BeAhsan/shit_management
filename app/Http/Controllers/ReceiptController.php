<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;
use PDF;
use src\app\Http\Controllers\Controller;

class ReceiptController extends Controller
{
    public function index() {

        $receipts = Receipt::all();
        return view('receipts.list',compact('receipts'));
    }

    public function create()
    {
        return view('receipts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email',
            'customer_address' => 'required|string',
            'items' => 'required|array',
            'items.*.name' => 'required|string',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.price' => 'required|numeric|min:0',
        ]);

        // Calculate totals
        $subtotal = 0;
        foreach ($validated['items'] as $item) {
            $subtotal += $item['quantity'] * $item['price'];
        }

        $tax = $subtotal * 0.1; // 10% tax
        $total = $subtotal + $tax;

        // Create receipt
        $receipt = Receipt::create([
            'receipt_number' => 'RC' . now()->format('YmdHis'),
            'customer_name' => $validated['customer_name'],
            'customer_email' => $validated['customer_email'],
            'customer_address' => $validated['customer_address'],
            'subtotal' => $subtotal,
            'tax' => $tax,
            'total' => $total,
            'items' => json_encode($validated['items']),
        ]);

        return redirect()->route('receipt.show', $receipt->id);
    }

    public function show($id)
    {
        $receipt = Receipt::findOrFail($id);
        return view('receipts.show', compact('receipt'));
    }

    public function download($id)
    {
        $receipt = Receipt::findOrFail($id);
        $pdf = PDF::loadView('receipts.pdf', compact('receipt'));

        return $pdf->download('receipt-' . $receipt->receipt_number . '.pdf');
    }

    public function print($id)
    {
        $receipt = Receipt::findOrFail($id);
        $pdf = PDF::loadView('receipts.pdf', compact('receipt'));

        return $pdf->stream('receipt-' . $receipt->receipt_number . '.pdf');
    }
}
