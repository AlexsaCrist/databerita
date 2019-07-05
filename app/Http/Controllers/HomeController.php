<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis;
use App\Redaksi;
use App\Indexberita;
use App\ViewIndexBerita;
use Auth;


class HomeController extends Controller
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
      $jenis  = Jenis::get();
      $redaksi = Redaksi::get();
      $indexberita = Indexberita::get();

        $datas = ViewIndexBerita::get();
        return view('home', compact( 'datas','jenis','redaksi','indexberita'));
    }
}
