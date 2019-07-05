<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Siharjo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('tbl_jenisBerita', function (Blueprint $table) {
          $table->increments('id');
          $table->string('jenis_berita');
          $table->text('keterangan_jenis')->nullable();
          $table->timestamps();
      });

      Schema::create('tbl_penulis', function (Blueprint $table) {
          $table->increments('id');
          $table->string('namalengkap_penulis');
          $table->string('namapanggilan_penulis')->nullable();
          $table->string('namainisial_penulis')->nullable();
          $table->string('status_penulis')->nullable();
          $table->enum('jeniskelamin_penulis', ['-', 'Laki', 'Perempuan']);
          $table->timestamps();
      });


      Schema::create('tbl_index_berita', function (Blueprint $table) {
          $table->increments('id');
          $table->string('kode_kodeberita');
          $table->string('judul_berita');
          $table->date('tanggal_berita');
          $table->integer('jenis_1')->unsigned();
          $table->foreign('jenis_1')->references('id')->on('tbl_jenisBerita')->onDelete('cascade');
          $table->integer('jenis_2')->unsigned();
          $table->foreign('jenis_2')->references('id')->on('tbl_jenisBerita')->onDelete('cascade');
          $table->integer('jenis_3')->unsigned();
          $table->foreign('jenis_3')->references('id')->on('tbl_jenisBerita')->onDelete('cascade');
          $table->text('keterangan_jenis');
          $table->text('katakunci');
          $table->integer('penulis_1')->unsigned();
          $table->foreign('penulis_1')->references('id')->on('tbl_penulis')->onDelete('cascade');
          $table->integer('penulis_2')->unsigned();
          $table->foreign('penulis_2')->references('id')->on('tbl_penulis')->onDelete('cascade');
          $table->integer('penulis_3')->unsigned();
          $table->foreign('penulis_3')->references('id')->on('tbl_penulis')->onDelete('cascade');
          $table->integer('penulis_4')->unsigned();
          $table->foreign('penulis_4')->references('id')->on('tbl_penulis')->onDelete('cascade');
          $table->integer('penulis_5')->unsigned();
          $table->foreign('penulis_5')->references('id')->on('tbl_penulis')->onDelete('cascade');
          $table->integer('penulis_6')->unsigned();
          $table->foreign('penulis_6')->references('id')->on('tbl_penulis')->onDelete('cascade');
          $table->integer('penulis_7')->unsigned();
          $table->foreign('penulis_7')->references('id')->on('tbl_penulis')->onDelete('cascade');
          $table->integer('penulis_8')->unsigned();
          $table->foreign('penulis_8')->references('id')->on('tbl_penulis')->onDelete('cascade');
          $table->integer('penulis_9')->unsigned();
          $table->foreign('penulis_9')->references('id')->on('tbl_penulis')->onDelete('cascade');
          $table->integer('penulis_10')->unsigned();
          $table->foreign('penulis_10')->references('id')->on('tbl_penulis')->onDelete('cascade');
          $table->integer('edisi');
          $table->string('halaman_terbit');
          $table->enum('kolom_halaman', ['Kolom 1 Atas', 'Kolom 2 Atas', 'Kolom 3 Atas', 'Kolom 4 Atas', 'Kolom 5 Atas', 'Kolom 6 Atas', 'Kolom 1 Bawah', 'Kolom 2 Bawah', 'Kolom 3 Bawah', 'Kolom 4 Bawah', 'Kolom 5 Bawah', 'Kolom 6 Bawah' ]);
          $table->enum('jenis_berita', ['Tertulis', 'Grafik']);
          $table->timestamps();
      });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('tbl_index_berita');
      Schema::dropIfExists('tbl_jenisBerita');
      Schema::dropIfExists('tbl_penulis');
    }
}
