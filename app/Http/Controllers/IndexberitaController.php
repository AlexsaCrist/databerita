<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis;
use App\Redaksi;
use App\ViewIndexBerita;
use App\Indexberita;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class IndexberitaController extends Controller
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
        if(Auth::user()->level == 'user')
        {
          Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
          return redirect()->to('/');
        }


        $datas = Indexberita::get();
        $viewberita = ViewIndexBerita::get();
        return view('indexberita.index', compact('datas','viewberita'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $jenis = Jenis::get();
        $jenis1 = Jenis::get();
        $jenis2 = Jenis::get();
        $jenis3 = Jenis::get();
        $redaktur = Redaksi::get();
        $penuliss = Redaksi::get();
        $viewberita = ViewIndexBerita::get();
        return view('indexberita.create', compact('jenis','jenis1', 'jenis2' , 'jenis3' ,'redaktur', 'penuliss', 'viewberita'));
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
            'judul_berita' => 'required',
            'tanggal_berita' => 'required',
            'jenis_1' => 'required',
            'jenis_2' => 'required',
            'jenis_3' => 'required',
            'keterangan_jenis' => 'required',
            'katakunci' => 'required',
            'penulis_1' => 'required',
            'penulis_2' => 'required',
            'penulis_3' => 'required',
            'penulis_4' => 'required',
            'penulis_5' => 'required',
            'penulis_6' => 'required',
            'penulis_7' => 'required',
            'penulis_8' => 'required',
            'penulis_9' => 'required',
            'penulis_10' => 'required',
            'edisi' => 'required',
            'halaman_terbit' => 'required',
            'kolom_halaman' => 'required',
            'jenis_berita' => 'required',

        ]);

        $indexberita = Indexberita::create([
                'judul_berita' => $request->get('judul_berita'),
                'tanggal_berita' => $request->get('tanggal_berita'),
                'jenis_1' => $request->get('jenis_1'),
                'jenis_2' => $request->get('jenis_2'),
                'jenis_3' => $request->get('jenis_3'),
                'keterangan_jenis' => $request->get('keterangan_jenis'),
                'katakunci' => $request->get('katakunci'),
                'penulis_1' => $request->get('penulis_1'),
                'penulis_2' => $request->get('penulis_2'),
                'penulis_3' => $request->get('penulis_3'),
                'penulis_4' => $request->get('penulis_4'),
                'penulis_5' => $request->get('penulis_5'),
                'penulis_6' => $request->get('penulis_6'),
                'penulis_7' => $request->get('penulis_7'),
                'penulis_8' => $request->get('penulis_8'),
                'penulis_9' => $request->get('penulis_9'),
                'penulis_10' => $request->get('penulis_10'),
                'edisi' => $request->get('edisi'),
                'halaman_terbit' => $request->get('halaman_terbit'),
                'kolom_halaman' => $request->get('kolom_halaman'),
                'jenis_berita' => $request->get('jenis_berita'),

            ]);
        alert()->success('Berhasil.','Data telah ditambahkan!');
        return redirect()->route('indexberita.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = Indexberita::findOrFail($id);


        if((Auth::user()->level == 'user') && (Auth::user()->anggota->id != $data->anggota_id)) {
                Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
                return redirect()->to('/');
        }


        return view('indexberita.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $jenis1 = Jenis::get();
        $jenis2 = Jenis::get();
        $jenis3 = Jenis::get();
        $penuliss = Redaksi::get();
        $data = Indexberita::findOrFail($id);
        $viewberita = ViewIndexBerita::get();

        if((Auth::user()->level == 'user') && (Auth::user()->anggota->id != $data->anggota_id)) {
                Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
                return redirect()->to('/');
        }

        return view('indexberita.edit', compact('data', 'jenis1', 'jenis2' , 'jenis3' , 'penuliss', 'viewberita'));
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
        $indexberita = Indexberita::find($id)->update($request->all());

        alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('indexberita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Indexberita::find($id)->delete();
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('indexberita.index');
    }
}
