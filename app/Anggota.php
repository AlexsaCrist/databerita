<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
	protected $table = 'anggota';
    protected $fillable = ['user_id', 'npk', 'nama', 'tempat_lahir', 'tgl_lahir', 'jk', 'posisi'];


    /**
     * Method One To One
     */
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
