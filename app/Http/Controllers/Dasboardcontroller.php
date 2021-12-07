<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Dasboardcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $inbox = DB::table('inboxes')->count();
        $tiket = DB::table('tikets')->count();
        $user = DB::table('users')->count();
        return view('v_dasboard', compact('tiket','inbox','user'));
        // return view('dasboard');
        
    }
}
