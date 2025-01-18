<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShiftsController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('shifts/manager'); 
   }

}
