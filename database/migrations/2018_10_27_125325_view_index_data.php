<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ViewIndexData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      DB::statement("CREATE VIEW index_berita AS
            SELECT
              tbl_index_berita.id,
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
            ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ViewIndexData');
    }
}
