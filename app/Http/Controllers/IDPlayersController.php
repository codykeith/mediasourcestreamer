<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IDPlayersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('interactivedisplay.index');
    }
    public function edit()
    {
        return view('interactivedisplay.edit');
    }
    public function launch()
    {
        return view('interactivedisplay.launch');
    }
    public function device()
    {
        return view('interactivedisplay.device');
    }
}
