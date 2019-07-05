@section('js')
 <script type="text/javascript">
   $(document).on('click', '.pilihj1', function (e) {

     var jenisValue1 = $("input[name='jenis1']:checked").val();
     if(jenisValue1){
       document.getElementById("jenis_1").value = jenisValue1;
       document.getElementById("jenis_berita1").value = $(this).attr('data-jenis_nama1');
   }
   $('#myModalJenis1').modal('hide');
            });

   $(document).on('click', '.pilihj2', function (e) {
     var jenisValue2 = $("input[name='jenis2']:checked").val();
              if(jenisValue2){
                document.getElementById("jenis_2").value = jenisValue2;
                document.getElementById("jenis_berita2").value = $(this).attr('data-jenis_nama2');

              }
            $('#myModalJenis2').modal('hide');
 });

  $(document).on('click', '.pilihj3', function (e) {
    var jenisValue3 = $("input[name='jenis3']:checked").val();
              if(jenisValue3){
                  document.getElementById("jenis_3").value = jenisValue3;
                  document.getElementById("jenis_berita3").value = $(this).attr('data-jenis_nama3');
              }
            $('#myModalJenis3').modal('hide');
 });

 $(document).on('click', '.pilih_redaksi1', function (e) {
   var redaksiValue1 = $("input[name='redaksi1']:checked").val();
             if(redaksiValue1){
                 document.getElementById("redaksi_1").value = redaksiValue1;
                 document.getElementById("redaksi_nama1").value = $(this).attr('data-redaksi_nama1');
             }
           $('#myModalRedaksi1').modal('hide');
});
$(document).on('click', '.pilih_redaksi2', function (e) {
  var redaksiValue2 = $("input[name='redaksi2']:checked").val();
            if(redaksiValue2){
                document.getElementById("redaksi_2").value = redaksiValue2;
                document.getElementById("redaksi_nama2").value = $(this).attr('data-redaksi_nama2');
            }
          $('#myModalRedaksi2').modal('hide');
});
$(document).on('click', '.pilih_redaksi3', function (e) {
  var redaksiValue3 = $("input[name='redaksi3']:checked").val();
            if(redaksiValue3){
                document.getElementById("redaksi_3").value = redaksiValue3;
                document.getElementById("redaksi_nama3").value = $(this).attr('data-redaksi_nama3');
            }
          $('#myModalRedaksi3').modal('hide');
});
$(document).on('click', '.pilih_redaksi4', function (e) {
  var redaksiValue4 = $("input[name='redaksi4']:checked").val();
            if(redaksiValue4){
                document.getElementById("redaksi_4").value = redaksiValue4;
                document.getElementById("redaksi_nama4").value = $(this).attr('data-redaksi_nama4');
            }
          $('#myModalRedaksi4').modal('hide');
});
$(document).on('click', '.pilih_redaksi4', function (e) {
  var redaksiValue4 = $("input[name='redaksi4']:checked").val();
            if(redaksiValue4){
                document.getElementById("redaksi_4").value = redaksiValue4;
                document.getElementById("redaksi_nama4").value = $(this).attr('data-redaksi_nama4');
            }
          $('#myModalRedaksi4').modal('hide');
});
$(document).on('click', '.pilih_redaksi5', function (e) {
  var redaksiValue5 = $("input[name='redaksi5']:checked").val();
            if(redaksiValue5){
                document.getElementById("redaksi_5").value = redaksiValue5;
                document.getElementById("redaksi_nama5").value = $(this).attr('data-redaksi_nama5');
            }
          $('#myModalRedaksi5').modal('hide');
});
$(document).on('click', '.pilih_redaksi6', function (e) {
  var redaksiValue6 = $("input[name='redaksi6']:checked").val();
            if(redaksiValue6){
                document.getElementById("redaksi_6").value = redaksiValue6;
                document.getElementById("redaksi_nama6").value = $(this).attr('data-redaksi_nama6');
            }
          $('#myModalRedaksi6').modal('hide');
});
$(document).on('click', '.pilih_redaksi7', function (e) {
  var redaksiValue7 = $("input[name='redaksi7']:checked").val();
            if(redaksiValue7){
                document.getElementById("redaksi_7").value = redaksiValue7;
                document.getElementById("redaksi_nama7").value = $(this).attr('data-redaksi_nama7');
            }
          $('#myModalRedaksi7').modal('hide');
});
$(document).on('click', '.pilih_redaksi8', function (e) {
  var redaksiValue8 = $("input[name='redaksi8']:checked").val();
            if(redaksiValue8){
                document.getElementById("redaksi_8").value = redaksiValue8;
                document.getElementById("redaksi_nama8").value = $(this).attr('data-redaksi_nama8');
            }
          $('#myModalRedaksi8').modal('hide');
});
$(document).on('click', '.pilih_redaksi9', function (e) {
  var redaksiValue9 = $("input[name='redaksi9']:checked").val();
            if(redaksiValue9){
                document.getElementById("redaksi_9").value = redaksiValue9;
                document.getElementById("redaksi_nama9").value = $(this).attr('data-redaksi_nama9');
            }
          $('#myModalRedaksi9').modal('hide');
});
$(document).on('click', '.pilih_redaksi10', function (e) {
  var redaksiValue10 = $("input[name='redaksi10']:checked").val();
            if(redaksiValue10){
                document.getElementById("redaksi_10").value = redaksiValue10;
                document.getElementById("redaksi_nama10").value = $(this).attr('data-redaksi_nama10');
            }
          $('#myModalRedaksi10').modal('hide');
});

             $(function () {
                $("#lookupR1,#lookupR2,#lookupR3,#lookupR4,#lookupR5,#lookupR6,#lookupR7,#lookupR8,#lookupR9,#lookupR10, #lookup2, #lookupj1, #lookupj2, #lookupj3").dataTable();
            });

        </script>

@stop
@section('css')

@stop
@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('indexberita.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Berita baru</h4>

                        <div class="form-group{{ $errors->has('kode_kodeberita') ? ' has-error' : '' }}">
                            <label for="kode_kodeberita" class="col-md-4 control-label">Kode Berita</label>
                            <div class="col-md-6">
                                <input id="kode_kodeberita" type="text" class="form-control" name="kode_kodeberita" value="{{ $kode }}" required readonly="">
                                @if ($errors->has('kode_kodeberita'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_kodeberita') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('judul_berita') ? ' has-error' : '' }}">
                            <label for="judul_berita" class="col-md-4 control-label">Judul Berita</label>
                            <div class="col-md-6">
                                <input id="judul_berita" type="text" class="form-control" name="judul_berita" value="{{  old('judul_berita') }}" required >
                                @if ($errors->has('judul_berita'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul_berita') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group{{ $errors->has('tanggal_berita') ? ' has-error' : '' }}">
                            <label for="tanggal_berita" class="col-md-4 control-label">Tanggal Berita</label>
                            <div class="col-md-3">
                                <input id="tanggal_berita" type="date" class="form-control" name="tanggal_berita" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->addDays(-1)->toDateString())) }}" required >
                                @if ($errors->has('tanggal_berita'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tanggal_berita') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('jenis_1') ? ' has-error' : '' }}">
                            <label for="jenis_1" class="col-md-4 control-label">Jenis 1</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="jenis_berita1" type="text" class="form-control" readonly="" required>
                                <input id="jenis_1" type="hidden" name="jenis_1" value="{{ old('jenis_1') }}" required readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-secondary" data-toggle="modal" data-target="#myModalJenis1"><b>Cari Jenis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('jenis_1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenis_1') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jenis_2') ? ' has-error' : '' }}">
                            <label for="jenis_2" class="col-md-4 control-label">Jenis 2</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="jenis_berita2" type="text" class="form-control" readonly="" >
                                <input id="jenis_2" type="hidden" name="jenis_2" value="{{ old('jenis_2') }}" required readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-secondary" data-toggle="modal" data-target="#myModalJenis2"><b>Cari Jenis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('jenis_2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenis_2') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jenis_3') ? ' has-error' : '' }}">
                            <label for="jenis_3" class="col-md-4 control-label">Jenis 3</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="jenis_berita3" type="text" class="form-control" readonly="" >
                                <input id="jenis_3" type="hidden" name="jenis_3" value="{{ old('jenis_3') }}" required readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-secondary" data-toggle="modal" data-target="#myModalJenis3"><b>Cari Jenis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('jenis_3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenis_3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('keterangan_jenis') ? ' has-error' : '' }}">
                            <label for="keterangan_jenis" class="col-md-4 control-label">Keterangan Jenis</label>
                            <div class="col-md-6">
                                <input id="keterangan_jenis" type="text" class="form-control" name="keterangan_jenis" value="{{  old('keterangan_jenis') }}" required>
                                @if ($errors->has('keterangan_jenis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('keterangan_jenis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('katakunci') ? ' has-error' : '' }}">
                            <label for="katakunci" class="col-md-4 control-label">Kata Kunci</label>
                            <div class="col-md-6">
                                <input id="katakunci" type="text" class="form-control" name="katakunci" value="{{  old('katakunci') }}" required>
                                @if ($errors->has('katakunci'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('katakunci') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('redaksi_1') ? ' has-error' : '' }}">
                            <label for="redaksi_1" class="col-md-4 control-label">Penulis 1</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="redaksi_nama1" type="text" class="form-control" readonly="" required>
                                <input id="redaksi_1" type="hidden" name="redaksi_1" value="{{ old('redaksi_1') }}" required readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalRedaksi1"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('redaksi_1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('redaksi_1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('redaksi_2') ? ' has-error' : '' }}">
                            <label for="redaksi_2" class="col-md-4 control-label">Penulis 2</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="redaksi_nama2" type="text" class="form-control" readonly="" >
                                <input id="redaksi_2" type="hidden" name="redaksi_2" value="{{ old('redaksi_2') }} " required readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalRedaksi2"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('redaksi_2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('redaksi_2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('redaksi_3') ? ' has-error' : '' }}">
                            <label for="redaksi_3" class="col-md-4 control-label">Penulis 3</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="redaksi_nama3" type="text" class="form-control" readonly="" >
                                <input id="redaksi_3" type="hidden" name="redaksi_3" value="{{ old('redaksi_3') }} " required readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalRedaksi3"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('redaksi_3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('redaksi_3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('redaksi_4') ? ' has-error' : '' }}">
                            <label for="redaksi_4" class="col-md-4 control-label">Penulis 4</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="redaksi_nama4" type="text" class="form-control" readonly="" >
                                <input id="redaksi_4" type="hidden" name="redaksi_4" value="{{ old('redaksi_4') }} " required readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalRedaksi4"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('redaksi_4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('redaksi_4') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('redaksi_5') ? ' has-error' : '' }}">
                            <label for="redaksi_5" class="col-md-4 control-label">Penulis 5</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="redaksi_nama5" type="text" class="form-control" readonly="" >
                                <input id="redaksi_5" type="hidden" name="redaksi_5" value="{{ old('redaksi_5') }} "  required readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalRedaksi5"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('redaksi_5'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('redaksi_5') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('redaksi_6') ? ' has-error' : '' }}">
                            <label for="redaksi_6" class="col-md-4 control-label">Penulis 6</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="redaksi_nama6" type="text" class="form-control" readonly="" >
                                <input id="redaksi_6" type="hidden" name="redaksi_6" value="{{ old('redaksi_6') }} " required readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalRedaksi6"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('redaksi_6'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('redaksi_6') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('redaksi_7') ? ' has-error' : '' }}">
                            <label for="redaksi_7" class="col-md-4 control-label">Penulis 7</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="redaksi_nama7" type="text" class="form-control" readonly="" >
                                <input id="redaksi_7" type="hidden" name="redaksi_7" value="{{ old('redaksi_7') }} " required readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalRedaksi7"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('redaksi_7'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('redaksi_7') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('redaksi_8') ? ' has-error' : '' }}">
                            <label for="redaksi_8" class="col-md-4 control-label">Penulis 8</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="redaksi_nama8" type="text" class="form-control" readonly="" >
                                <input id="redaksi_8" type="hidden" name="redaksi_8" value="{{ old('redaksi_8') }} " required readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalRedaksi8"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('redaksi_8'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('redaksi_8') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('redaksi_9') ? ' has-error' : '' }}">
                            <label for="redaksi_9" class="col-md-4 control-label">Penulis 9</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="redaksi_nama9" type="text" class="form-control" readonly="" >
                                <input id="redaksi_9" type="hidden" name="redaksi_9" value="{{ old('redaksi_9') }} " required readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalRedaksi9"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('redaksi_9'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('redaksi_9') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('redaksi_10') ? ' has-error' : '' }}">
                            <label for="redaksi_10" class="col-md-4 control-label">Penulis 10</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="redaksi_nama10" type="text" class="form-control" readonly="" >
                                <input id="redaksi_10" type="hidden" name="redaksi_10" value="{{ old('redaksi_10') }} " required readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalRedaksi10"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('redaksi_10'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('redaksi_10') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('edisi') ? ' has-error' : '' }}">
                            <label for="edisi" class="col-md-4 control-label">Edisi Berita</label>
                            <div class="col-md-6">
                                <input id="edisi" type="text" class="form-control" name="edisi" value="{{  old('edisi') }}" required >
                                @if ($errors->has('edisi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('edisi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('halaman_terbit') ? ' has-error' : '' }}">
                            <label for="halaman_terbit" class="col-md-4 control-label">Halaman Terbit</label>
                            <div class="col-md-6">
                                <input id="halaman_terbit" type="text" class="form-control" name="halaman_terbit" value="{{  old('halaman_terbit') }}" required>
                                @if ($errors->has('halaman_terbit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('halaman_terbit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kolom_halaman') ? ' has-error' : '' }}">
                            <label for="kolhal" class="col-md-4 control-label">Kolom Halaman</label>
                            <div class="col-md-6">
                            <select class="form-control" name="kolom_halaman" required="">
                                <option value="Kolom 1 Atas">Kolom 1 Atas</option>
                                <option value="Kolom 2 Atas">Kolom 2 Atas</option>
                                <option value="Kolom 3 Atas">Kolom 3 Atas</option>
                                <option value="Kolom 4 Atas">Kolom 4 Atas</option>
                                <option value="Kolom 5 Atas">Kolom 5 Atas</option>
                                <option value="Kolom 6 Atas">Kolom 6 Atas</option>
                                <option value="Kolom 1 bawah">Kolom 1 bawah</option>
                                <option value="Kolom 2 bawah">Kolom 2 bawah</option>
                                <option value="Kolom 3 bawah">Kolom 3 bawah</option>
                                <option value="Kolom 4 bawah">Kolom 4 bawah</option>
                                <option value="Kolom 5 bawah">Kolom 5 bawah</option>
                                <option value="Kolom 6 bawah">Kolom 6 bawah</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jenis_berita') ? ' has-error' : '' }}">
                            <label for="jenber" class="col-md-4 control-label">Jenis Berita</label>
                            <div class="col-md-6">
                            <select class="form-control" name="jenis_berita" required="">
                                <option value="Tertulis">Tertulis</option>
                                <option value="Grafik">Grafik</option>
                            </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" id="submit">
                                    Submit
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>
                        <a href="{{route('indexberita.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>


  <!-- Modal jenis-->
<div class="modal fade bd-example-modal-lg" id="myModalJenis1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" style="background: #fff;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cari Jenis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                        <table id="lookupj1" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Jenis</th>
                                    <th>Keterangan</th>
                                    <th>Jenis 1</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jenis1 as $data1)
                                <tr class="pilihj1"
                                    data-jenis_id1="<?php echo $data1->id; ?>"
                                    data-jenis_nama1="<?php echo $data1->jenis_berita; ?>"
                                    >
                                    <td>{{$data1->jenis_berita}}</td>
                                    <td>{{$data1->keterangan_jenis}}</td>
                                    <td> <input type="radio" name="jenis1"  id="jenis_1"   value="{{$data1->id}}"> </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<!-- Modal Jenis -->

<!-- Modal jenis-->
<div class="modal fade bd-example-modal-lg" id="myModalJenis2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
<div class="modal-dialog modal-lg" role="document" >
  <div class="modal-content" style="background: #fff;">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Cari Jenis 2</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
                      <table id="lookupj2" class="table table-bordered table-hover table-striped">
                          <thead>
                              <tr>
                                  <th>Nama Jenis</th>
                                  <th>Keterangan</th>
                                  <th>Jenis 2</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($jenis1 as $data2)
                              <tr class="pilihj2"  data-jenis_id3="<?php echo $data2->id; ?>"
                                  data-jenis_nama2="<?php echo $data2->jenis_berita; ?>"
                                  >
                                  <td>{{$data2->jenis_berita}}</td>
                                  <td>{{$data2->keterangan_jenis}}</td>
                                  <td> <input type="radio" name="jenis2"  id="jenis_2"   value="{{$data2->id}}"> </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
<!-- Modal Jenis -->

<!-- Modal jenis-->
<div class="modal fade bd-example-modal-lg" id="myModalJenis3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
<div class="modal-dialog modal-lg" role="document" >
  <div class="modal-content" style="background: #fff;">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Cari Jenis 3</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
                      <table id="lookupj3" class="table table-bordered table-hover table-striped">
                          <thead>
                              <tr>
                                  <th>Nama Jenis</th>
                                  <th>Keterangan</th>
                                  <th>Jenis 3</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($jenis1 as $data3)
                              <tr class="pilihj3"
                                  data-jenis_id3="<?php echo $data3->id; ?>"
                                  data-jenis_nama3="<?php echo $data3->jenis_berita; ?>"
                                  >
                                  <td>{{$data3->jenis_berita}}</td>
                                  <td>{{$data3->keterangan_jenis}}</td>
                                  <td> <input type="radio" name="jenis3"  id="jenis_3"   value="{{$data3->id}}"> </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
<!-- Modal Jenis -->


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="myModalRedaksi1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" style="background: #fff;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cari Redaksi 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <table id="lookupR1" class="table table-bordered table-hover table-striped">
                      <thead>
                        <tr>
                          <th> Nama Lengkap </th>
                          <th> Nama Panggilan </th>
                          <th> Nama Inisial </th>
                          <th> Redaksi 1 </th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($redaksis as $data)
                          <tr class="pilih_redaksi1"
                              data-penulis_id="<?php echo $data->id; ?>"
                              data-redaksi_nama1="<?php echo $data->namalengkap_penulis; ?>" >
                            <td> {{$data->namalengkap_penulis}} </td>
                            <td> {{$data->namapanggilan_penulis}} </td>
                            <td> {{$data->namainisial_penulis}} </td>
                            <td> <input type="radio" name="redaksi1"  id="redaksi_1"   value="{{$data->id}}"> </td>
                          </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" id="myModalRedaksi2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
          <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content" style="background: #fff;">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cari Redaksi 2</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                      <table id="lookupR2" class="table table-bordered table-hover table-striped">
                              <thead>
                                <tr>
                                  <th> Nama Lengkap </th>
                                  <th> Nama Panggilan </th>
                                  <th> Nama Inisial </th>
                                  <th> Redaksi 2 </th>
                                </tr>
                              </thead>

                              <tbody>
                                @foreach($redaksis as $data)
                                  <tr class="pilih_redaksi2"
                                      data-penulis_id="<?php echo $data->id; ?>"
                                      data-redaksi_nama2="<?php echo $data->namalengkap_penulis; ?>" >
                                    <td> {{$data->namalengkap_penulis}} </td>
                                    <td> {{$data->namapanggilan_penulis}} </td>
                                    <td> {{$data->namainisial_penulis}} </td>
                                    <td> <input type="radio" name="redaksi2"  id="redaksi_2"   value="{{$data->id}}"> </td>
                                  </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade bd-example-modal-lg" id="myModalRedaksi3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                  <div class="modal-dialog modal-lg" role="document" >
                    <div class="modal-content" style="background: #fff;">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cari Redaksi 3</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                              <table id="lookupR3" class="table table-bordered table-hover table-striped">
                                      <thead>
                                        <tr>
                                          <th> Nama Lengkap </th>
                                          <th> Nama Panggilan </th>
                                          <th> Nama Inisial </th>
                                          <th> Redaksi 3 </th>
                                        </tr>
                                      </thead>

                                      <tbody>
                                        @foreach($redaksis as $data)
                                          <tr class="pilih_redaksi3"
                                              data-penulis_id="<?php echo $data->id; ?>"
                                              data-redaksi_nama3="<?php echo $data->namalengkap_penulis; ?>" >
                                            <td> {{$data->namalengkap_penulis}} </td>
                                            <td> {{$data->namapanggilan_penulis}} </td>
                                            <td> {{$data->namainisial_penulis}} </td>
                                            <td> <input type="radio" name="redaksi3"  id="redaksi_3"   value="{{$data->id}}"> </td>
                                          </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade bd-example-modal-lg" id="myModalRedaksi4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                          <div class="modal-dialog modal-lg" role="document" >
                            <div class="modal-content" style="background: #fff;">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cari Redaksi 4</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                      <table id="lookupR4" class="table table-bordered table-hover table-striped">
                                              <thead>
                                                <tr>
                                                  <th> Nama Lengkap </th>
                                                  <th> Nama Panggilan </th>
                                                  <th> Nama Inisial </th>
                                                  <th> Redaksi 4 </th>
                                                </tr>
                                              </thead>

                                              <tbody>
                                                @foreach($redaksis as $data)
                                                  <tr class="pilih_redaksi4"
                                                      data-penulis_id="<?php echo $data->id; ?>"
                                                      data-redaksi_nama4="<?php echo $data->namalengkap_penulis; ?>" >
                                                    <td> {{$data->namalengkap_penulis}} </td>
                                                    <td> {{$data->namapanggilan_penulis}} </td>
                                                    <td> {{$data->namainisial_penulis}} </td>
                                                    <td> <input type="radio" name="redaksi4"  id="redaksi_4"   value="{{$data->id}}"> </td>
                                                  </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bd-example-modal-lg" id="myModalRedaksi5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                                  <div class="modal-dialog modal-lg" role="document" >
                                    <div class="modal-content" style="background: #fff;">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Cari Redaksi 5</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                              <table id="lookupR5" class="table table-bordered table-hover table-striped">
                                                      <thead>
                                                        <tr>
                                                          <th> Nama Lengkap </th>
                                                          <th> Nama Panggilan </th>
                                                          <th> Nama Inisial </th>
                                                          <th> Redaksi 5 </th>
                                                        </tr>
                                                      </thead>

                                                      <tbody>
                                                        @foreach($redaksis as $data)
                                                          <tr class="pilih_redaksi5"
                                                              data-penulis_id="<?php echo $data->id; ?>"
                                                              data-redaksi_nama5="<?php echo $data->namalengkap_penulis; ?>" >
                                                            <td> {{$data->namalengkap_penulis}} </td>
                                                            <td> {{$data->namapanggilan_penulis}} </td>
                                                            <td> {{$data->namainisial_penulis}} </td>
                                                            <td> <input type="radio" name="redaksi5"  id="redaksi_5"   value="{{$data->id}}"> </td>
                                                          </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade bd-example-modal-lg" id="myModalRedaksi6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                                          <div class="modal-dialog modal-lg" role="document" >
                                            <div class="modal-content" style="background: #fff;">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Cari Redaksi 6</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                      <table id="lookupR6" class="table table-bordered table-hover table-striped">
                                                              <thead>
                                                                <tr>
                                                                  <th> Nama Lengkap </th>
                                                                  <th> Nama Panggilan </th>
                                                                  <th> Nama Inisial </th>
                                                                  <th> Redaksi 6 </th>
                                                                </tr>
                                                              </thead>

                                                              <tbody>
                                                                @foreach($redaksis as $data)
                                                                  <tr class="pilih_redaksi6"
                                                                      data-penulis_id="<?php echo $data->id; ?>"
                                                                      data-redaksi_nama6="<?php echo $data->namalengkap_penulis; ?>" >
                                                                    <td> {{$data->namalengkap_penulis}} </td>
                                                                    <td> {{$data->namapanggilan_penulis}} </td>
                                                                    <td> {{$data->namainisial_penulis}} </td>
                                                                    <td> <input type="radio" name="redaksi6"  id="redaksi_6"   value="{{$data->id}}"> </td>
                                                                  </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade bd-example-modal-lg" id="myModalRedaksi7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                                                  <div class="modal-dialog modal-lg" role="document" >
                                                    <div class="modal-content" style="background: #fff;">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Cari Redaksi 7</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">
                                                              <table id="lookupR7" class="table table-bordered table-hover table-striped">
                                                                      <thead>
                                                                        <tr>
                                                                          <th> Nama Lengkap </th>
                                                                          <th> Nama Panggilan </th>
                                                                          <th> Nama Inisial </th>
                                                                          <th> Redaksi 7 </th>
                                                                        </tr>
                                                                      </thead>

                                                                      <tbody>
                                                                        @foreach($redaksis as $data)
                                                                          <tr class="pilih_redaksi7"
                                                                              data-penulis_id="<?php echo $data->id; ?>"
                                                                              data-redaksi_nama7="<?php echo $data->namalengkap_penulis; ?>" >
                                                                            <td> {{$data->namalengkap_penulis}} </td>
                                                                            <td> {{$data->namapanggilan_penulis}} </td>
                                                                            <td> {{$data->namainisial_penulis}} </td>
                                                                            <td> <input type="radio" name="redaksi7"  id="redaksi_7"   value="{{$data->id}}"> </td>
                                                                          </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal fade bd-example-modal-lg" id="myModalRedaksi8" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                                                          <div class="modal-dialog modal-lg" role="document" >
                                                            <div class="modal-content" style="background: #fff;">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Cari Redaksi 8</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                      <table id="lookupR8" class="table table-bordered table-hover table-striped">
                                                                              <thead>
                                                                                <tr>
                                                                                  <th> Nama Lengkap </th>
                                                                                  <th> Nama Panggilan </th>
                                                                                  <th> Nama Inisial </th>
                                                                                  <th> Redaksi 8 </th>
                                                                                </tr>
                                                                              </thead>

                                                                              <tbody>
                                                                                @foreach($redaksis as $data)
                                                                                  <tr class="pilih_redaksi8"
                                                                                      data-penulis_id="<?php echo $data->id; ?>"
                                                                                      data-redaksi_nama8="<?php echo $data->namalengkap_penulis; ?>" >
                                                                                    <td> {{$data->namalengkap_penulis}} </td>
                                                                                    <td> {{$data->namapanggilan_penulis}} </td>
                                                                                    <td> {{$data->namainisial_penulis}} </td>
                                                                                    <td> <input type="radio" name="redaksi8"  id="redaksi_8"   value="{{$data->id}}"> </td>
                                                                                  </tr>
                                                                                        @endforeach
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal fade bd-example-modal-lg" id="myModalRedaksi9" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                                                                  <div class="modal-dialog modal-lg" role="document" >
                                                                    <div class="modal-content" style="background: #fff;">
                                                                      <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Cari Redaksi 9</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                          <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                              <table id="lookupR9" class="table table-bordered table-hover table-striped">
                                                                                      <thead>
                                                                                        <tr>
                                                                                          <th> Nama Lengkap </th>
                                                                                          <th> Nama Panggilan </th>
                                                                                          <th> Nama Inisial </th>
                                                                                          <th> Redaksi 9 </th>
                                                                                        </tr>
                                                                                      </thead>

                                                                                      <tbody>
                                                                                        @foreach($redaksis as $data)
                                                                                          <tr class="pilih_redaksi9"
                                                                                              data-penulis_id="<?php echo $data->id; ?>"
                                                                                              data-redaksi_nama9="<?php echo $data->namalengkap_penulis; ?>" >
                                                                                            <td> {{$data->namalengkap_penulis}} </td>
                                                                                            <td> {{$data->namapanggilan_penulis}} </td>
                                                                                            <td> {{$data->namainisial_penulis}} </td>
                                                                                            <td> <input type="radio" name="redaksi9"  id="redaksi_9"   value="{{$data->id}}"> </td>
                                                                                          </tr>
                                                                                                @endforeach
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="modal fade bd-example-modal-lg" id="myModalRedaksi10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                                                                          <div class="modal-dialog modal-lg" role="document" >
                                                                            <div class="modal-content" style="background: #fff;">
                                                                              <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Cari Redaksi 10</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                  <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                              </div>
                                                                              <div class="modal-body">
                                                                                      <table id="lookupR10" class="table table-bordered table-hover table-striped">
                                                                                              <thead>
                                                                                                <tr>
                                                                                                  <th> Nama Lengkap </th>
                                                                                                  <th> Nama Panggilan </th>
                                                                                                  <th> Nama Inisial </th>
                                                                                                  <th> Redaksi 10 </th>
                                                                                                </tr>
                                                                                              </thead>

                                                                                              <tbody>
                                                                                                @foreach($redaksis as $data)
                                                                                                  <tr class="pilih_redaksi10"
                                                                                                      data-penulis_id="<?php echo $data->id; ?>"
                                                                                                      data-redaksi_nama10="<?php echo $data->namalengkap_penulis; ?>" >
                                                                                                    <td> {{$data->namalengkap_penulis}} </td>
                                                                                                    <td> {{$data->namapanggilan_penulis}} </td>
                                                                                                    <td> {{$data->namainisial_penulis}} </td>
                                                                                                    <td> <input type="radio" name="redaksi10"  id="redaksi_10"   value="{{$data->id}}"> </td>
                                                                                                  </tr>
                                                                                                        @endforeach
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
@endsection
