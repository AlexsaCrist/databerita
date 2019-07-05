<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
	protected $table = 'tbl_jenisBerita';
    protected $fillable = ['jenis_berita', 'keterangan_jenis'];

    /**
     * Method One To Many
     */
		 public function indexberita()
     {
     	return $this->hasMany(Indexberita::class);
     }
}
