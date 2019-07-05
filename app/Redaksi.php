<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redaksi extends Model
{
	protected $table = 'tbl_penulis';
    protected $fillable = ['namalengkap_penulis', 'namapanggilan_penulis', 'namainisial_penulis', 'status_penulis', 'jeniskelamin_penulis'];

    /**
     * Method One To Many
     */
    public function indexberita()
    {
    	return $this->hasMany(Indexberita::class);
    }
}
