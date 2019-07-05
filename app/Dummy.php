<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Dummy extends Model
{
    protected $table = 'tbl_index_berita';
    protected $fillable = ['djudul_berita', 'dtanggal_berita', 'djenis_1', 'djenis_2', 'djenis_3', 'dketerangan_jenis', 'dkatakunci', 'dpenulis_1', 'dpenulis_2', 'dpenulis_3', 'dpenulis_4',  'penulis_5', 'dpenulis_6', 'dpenulis_7', 'dpenulis_8', 'dpenulis_9', 'dpenulis_10', 'dedisi','halaman_terbit', 'dkolom_halaman', 'djenis_berita'];
}
