<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Titonova\ShockComponents\Facades\ShockComponents;

class ShockComponentsController extends Controller
{

    public function index()
    {
        dump(new ShockComponents);
        return view('shock-components-example');
    }
}
