<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DummyIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('dumy_index', function (Blueprint $table) {
          $table->increments('did');
          $table->string('dkode_kodeberita');
          $table->string('djudul_berita');
          $table->date('dtanggal_berita');
          $table->integer('djenis_1');
          $table->integer('djenis_2');
          $table->integer('djenis_3');
          $table->text('dketerangan_jenis');
          $table->text('dkatakunci');
          $table->integer('dpenulis_1');
          $table->integer('dpenulis_2');
          $table->integer('dpenulis_3');
          $table->integer('dpenulis_4');
          $table->integer('dpenulis_5');
          $table->integer('dpenulis_6');
          $table->integer('dpenulis_7');
          $table->integer('dpenulis_8');
          $table->integer('dpenulis_9');
          $table->integer('dpenulis_10');
          $table->integer('dedisi');
          $table->string('dhalaman_terbit');
          $table->enum('dkolom_halaman', ['Kolom 1 Atas', 'Kolom 2 Atas', 'Kolom 3 Atas', 'Kolom 4 Atas', 'Kolom 5 Atas', 'Kolom 6 Atas', 'Kolom 1 Bawah', 'Kolom 2 Bawah', 'Kolom 3 Bawah', 'Kolom 4 Bawah', 'Kolom 5 Bawah', 'Kolom 6 Bawah' ]);
          $table->enum('djenis_berita', ['Tertulis', 'Grafik']);
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
        Schema::dropIfExists('dumy_index');
    }
}
