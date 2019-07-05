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

        $view = DB::statement("  SELECT tbl_index_berita.id,
                tbl_index_berita.judul_berita,
                tbl_index_berita.tanggal_berita,
                j3.jenis_berita AS J1,
                j2.jenis_berita AS J2,
                j1.jenis_berita AS J3,
                tbl_index_berita.keterangan_jenis,
                tbl_index_berita.katakunci,
                p1.namalengkap_penulis AS P1,
                p2.namalengkap_penulis AS P2,
                p3.namalengkap_penulis AS P3,
                p4.namalengkap_penulis AS P4,
                p5.namalengkap_penulis AS P5,
                p6.namalengkap_penulis AS P6,
                p7.namalengkap_penulis AS P7,
                p8.namalengkap_penulis AS P8,
                p9.namalengkap_penulis AS P9,
                p10.namalengkap_penulis AS P10,
                tbl_index_berita.edisi,
                tbl_index_berita.halaman_terbit,
                tbl_index_berita.kolom_halaman,
                tbl_index_berita.jenis_berita
                FROM
                tbl_index_berita
                INNER JOIN tbl_jenisberita AS j1 ON tbl_index_berita.jenis_1 = j1.id
                INNER JOIN tbl_jenisberita AS j2 ON tbl_index_berita.jenis_2 = j2.id
                INNER JOIN tbl_jenisberita AS j3 ON tbl_index_berita.jenis_3 = j3.id
                INNER JOIN tbl_penulis AS p1 ON tbl_index_berita.penulis_1 = p1.id
                INNER JOIN tbl_penulis AS p2 ON tbl_index_berita.penulis_2 = p2.id
                INNER JOIN tbl_penulis AS p3 ON tbl_index_berita.penulis_3 = p3.id
                INNER JOIN tbl_penulis AS p4 ON tbl_index_berita.penulis_4 = p4.id
                INNER JOIN tbl_penulis AS p5 ON tbl_index_berita.penulis_5 = p5.id
                INNER JOIN tbl_penulis AS p6 ON tbl_index_berita.penulis_6 = p6.id
                INNER JOIN tbl_penulis AS p7 ON tbl_index_berita.penulis_7 = p7.id
                INNER JOIN tbl_penulis AS p8 ON tbl_index_berita.penulis_8 = p8.id
                INNER JOIN tbl_penulis AS p9 ON tbl_index_berita.penulis_9 = p9.id
                INNER JOIN tbl_penulis AS p10 ON tbl_index_berita.penulis_10 = p10.id
              ")::get();

        $datas = Indexberita::get();
        $viewberita = ViewIndexBerita::get();
        return view('indexberita.index', compact('datas','viewberita', 'view'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $jenis1 = Jenis::get();
        $jenis2 = Jenis::get();
        $jenis3 = Jenis::get();
        $penuliss = Redaksi::get();
        $viewberita = ViewIndexBerita::get();
        return view('indexberita.create', compact('jenis1', 'jenis2' , 'jenis3' , 'penuliss', 'viewberita'));
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

        $jenis = Jenis::get();
        $jenis2 = Jenis::get();
        $jenis3 = Jenis::get();
        $penuliss = Redaksi::get();
        $view = ViewIndexBerita::get();
        $data = Indexberita::findOrFail($id);

        if((Auth::user()->level == 'user') && (Auth::user()->anggota->id != $data->anggota_id)) {
                Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
                return redirect()->to('/');
        }

        return view('indexberita.edit', compact('data', 'jenis1', 'jenis2' , 'jenis3' , 'penuliss', 'view'));
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
