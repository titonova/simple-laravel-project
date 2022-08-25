<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Titonova\XLivewire\Facades\XLivewire;

class XLivewireController extends Controller
{

    public function index()
    {
        return view('x-livewire-test');
    }

}
