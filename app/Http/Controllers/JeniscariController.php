<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class JeniscariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $count = Jenis::where('jenis_berita',$request->input('jenis_berita'))->count();

        if($count>0){
            Session::flash('message', 'Already exist!');
            Session::flash('message_type', 'danger');
            return redirect()->to('jenis');
        }

        $this->validate($request, [
            'jenis_berita' => 'required|string|max:255',
        ]);

        Jenis::create($request->all());
        alert()->success('Berhasil.','Data telah ditambahkan!');

    }

}
