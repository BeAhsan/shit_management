<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceiptsBaseController extends Controller
{
    public const RECEIPTS_MODULES = [
        ['text' => 'test 1', 'path' => 'receipt.list'],
    ];
}
