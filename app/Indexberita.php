<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Indexberita extends Model
{
    protected $table = 'tbl_index_berita';
    #biar mudah di baca saat PrintScreen
    protected $fillable = ['judul_berita', 'tanggal_berita', 'jenis_1', 'jenis_2', 'jenis_3','keterangan_jenis', 'katakunci', 'penulis_1', 'penulis_2', 'penulis_3', 'penulis_4','penulis_5', 'penulis_6', 'penulis_7', 'penulis_8', 'penulis_9', 'penulis_10', 'edisi','halaman_terbit', 'kolom_halaman', 'jenis_berita'];

    public function jenis()
    {
    	return $this->belongsTo(Jenis::class);
    }

    public function redaksi()
    {
      return $this->belongsTo(Redaksi::class);
    }

}
