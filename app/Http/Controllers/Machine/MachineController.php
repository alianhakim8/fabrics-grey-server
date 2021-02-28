<?php

namespace App\Http\Controllers\Machine;
use App\Http\Controllers\Controller;

class MachineController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
        return response()->json('machine');
    }

    //
}
