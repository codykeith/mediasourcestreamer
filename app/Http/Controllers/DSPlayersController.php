<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DSPlayersController extends Controller
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
        return view('digitalsignage.index');
    }
    public function edit()
    {
        return view('digitalsignage.edit');
    }
    public function launch()
    {
        return view('digitalsignage.launch');
    }
    public function device()
    {
        return view('digitalsignage.device');
    }
    public function contenteditor()
    {
        return view('digitalsignage.contenteditor');
    }
}
