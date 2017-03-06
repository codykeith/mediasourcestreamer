<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicPlayersController extends Controller
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
        return view('musicplayers.index');
    }
    public function edit()
    {
        return view('musicplayers.edit');
    }
    public function launch()
    {
        return view('musicplayers.launch');
    }
    public function device()
    {
        return view('musicplayers.device');
    }
}
