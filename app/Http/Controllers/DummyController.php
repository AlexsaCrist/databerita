<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dummy;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class DummyController extends Controller
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

    public function index()
    {
        if(Auth::user()->level == 'user') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }

        $datas = Dummy::get();
        return view('dummy.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->level == 'user') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }

        return view('dummy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'dkode_kodeberita' => 'required|string|max:255',
          'djudul_berita' => 'required',
          'dtanggal_berita' => 'required',
          'djenis_1' => 'required',
          'djenis_2' => 'required',
          'djenis_3' => 'required',
          'dketerangan_jenis' => 'required',
          'dkatakunci' => 'required',
          'dpenulis_1' => 'required',
          'dpenulis_2' => 'required',
          'dpenulis_3' => 'required',
          'dpenulis_4' => 'required',
          'dpenulis_5' => 'required',
          'dpenulis_6' => 'required',
          'dpenulis_7' => 'required',
          'dpenulis_8' => 'required',
          'dpenulis_9' => 'required',
          'dpenulis_10' => 'required',
          'dedisi' => 'required',
          'dhalaman_terbit' => 'required',
          'dkolom_halaman' => 'required',
          'djenis_berita' => 'required',
        ]);

        Dummy::create($request->all());

        alert()->success('Berhasil.','Data telah ditambahkan!');
        return redirect()->route('dummy.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if((Auth::user()->level == 'user') && (Auth::user()->id != $id)) {
                Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
                return redirect()->to('/');
        }

        $data = Dummy::findOrFail($id);

        return view('dummy.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if((Auth::user()->level == 'user') && (Auth::user()->id != $id)) {
                Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
                return redirect()->to('/');
        }

        $data = Dummy::findOrFail($id);
        return view('dummy.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Dummy::find($id)->update($request->all());

        alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->to('dummy');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dummy::find($id)->delete();
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('dummy.index');
    }
}
