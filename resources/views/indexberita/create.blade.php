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

 $(document).on('click', '.pilih_penulis1', function (e) {
   var penulisValue1 = $("input[name='penulis1']:checked").val();
             if(penulisValue1){
                 document.getElementById("penulis_1").value = penulisValue1;
                 document.getElementById("penulis_nama1").value = $(this).attr('data-penulis_nama1');
             }
           $('#myModalpenulis1').modal('hide');
});
$(document).on('click', '.pilih_penulis2', function (e) {
  var penulisValue2 = $("input[name='penulis2']:checked").val();
            if(penulisValue2){
                document.getElementById("penulis_2").value = penulisValue2;
                document.getElementById("penulis_nama2").value = $(this).attr('data-penulis_nama2');
            }
          $('#myModalpenulis2').modal('hide');
});
$(document).on('click', '.pilih_penulis3', function (e) {
  var penulisValue3 = $("input[name='penulis3']:checked").val();
            if(penulisValue3){
                document.getElementById("penulis_3").value = penulisValue3;
                document.getElementById("penulis_nama3").value = $(this).attr('data-penulis_nama3');
            }
          $('#myModalpenulis3').modal('hide');
});
$(document).on('click', '.pilih_penulis4', function (e) {
  var penulisValue4 = $("input[name='penulis4']:checked").val();
            if(penulisValue4){
                document.getElementById("penulis_4").value = penulisValue4;
                document.getElementById("penulis_nama4").value = $(this).attr('data-penulis_nama4');
            }
          $('#myModalpenulis4').modal('hide');
});
$(document).on('click', '.pilih_penulis4', function (e) {
  var penulisValue4 = $("input[name='penulis4']:checked").val();
            if(penulisValue4){
                document.getElementById("penulis_4").value = penulisValue4;
                document.getElementById("penulis_nama4").value = $(this).attr('data-penulis_nama4');
            }
          $('#myModalpenulis4').modal('hide');
});
$(document).on('click', '.pilih_penulis5', function (e) {
  var penulisValue5 = $("input[name='penulis5']:checked").val();
            if(penulisValue5){
                document.getElementById("penulis_5").value = penulisValue5;
                document.getElementById("penulis_nama5").value = $(this).attr('data-penulis_nama5');
            }
          $('#myModalpenulis5').modal('hide');
});
$(document).on('click', '.pilih_penulis6', function (e) {
  var penulisValue6 = $("input[name='penulis6']:checked").val();
            if(penulisValue6){
                document.getElementById("penulis_6").value = penulisValue6;
                document.getElementById("penulis_nama6").value = $(this).attr('data-penulis_nama6');
            }
          $('#myModalpenulis6').modal('hide');
});
$(document).on('click', '.pilih_penulis7', function (e) {
  var penulisValue7 = $("input[name='penulis7']:checked").val();
            if(penulisValue7){
                document.getElementById("penulis_7").value = penulisValue7;
                document.getElementById("penulis_nama7").value = $(this).attr('data-penulis_nama7');
            }
          $('#myModalpenulis7').modal('hide');
});
$(document).on('click', '.pilih_penulis8', function (e) {
  var penulisValue8 = $("input[name='penulis8']:checked").val();
            if(penulisValue8){
                document.getElementById("penulis_8").value = penulisValue8;
                document.getElementById("penulis_nama8").value = $(this).attr('data-penulis_nama8');
            }
          $('#myModalpenulis8').modal('hide');
});
$(document).on('click', '.pilih_penulis9', function (e) {
  var penulisValue9 = $("input[name='penulis9']:checked").val();
            if(penulisValue9){
                document.getElementById("penulis_9").value = penulisValue9;
                document.getElementById("penulis_nama9").value = $(this).attr('data-penulis_nama9');
            }
          $('#myModalpenulis9').modal('hide');
});
$(document).on('click', '.pilih_penulis10', function (e) {
  var penulisValue10 = $("input[name='penulis10']:checked").val();
            if(penulisValue10){
                document.getElementById("penulis_10").value = penulisValue10;
                document.getElementById("penulis_nama10").value = $(this).attr('data-penulis_nama10');
            }
          $('#myModalpenulis10').modal('hide');
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
                                <input id="jenis_berita1" type="text" class="form-control" value="Wajib Di Isi"  required readonly="">
                                <input id="jenis_1" type="hidden" name="jenis_1" value="{{ old('jenis_1') }}" required  readonly="">
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
                                <input id="jenis_berita2" type="text" class="form-control"  value="-" readonly="">
                                <input id="jenis_2" type="hidden" name="jenis_2" value="{{ old('jenis_2') }}4" required readonly="" >
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
                                <input id="jenis_berita3" type="text" class="form-control" value="-" readonly=""  >
                                <input id="jenis_3" type="hidden" name="jenis_3" value="{{ old('jenis_3') }}4" required readonly="" >
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
                                <input id="keterangan_jenis" type="text" class="form-control" name="keterangan_jenis" value="{{  old('keterangan_jenis') }} -" required>
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
                                <input id="katakunci" type="text" class="form-control" name="katakunci" value="{{  old('katakunci') }} -" required>
                                @if ($errors->has('katakunci'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('katakunci') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('penulis_1') ? ' has-error' : '' }}">
                            <label for="penulis_1" class="col-md-4 control-label">Penulis 1</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="penulis_nama1" type="text" class="form-control" value="Wajib Di Isi"  required readonly="">
                                <input id="penulis_1" type="hidden" name="penulis_1" value="{{ old('penulis_1') }}" required  readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalpenulis1"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('penulis_1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penulis_1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('penulis_2') ? ' has-error' : '' }}">
                            <label for="penulis_2" class="col-md-4 control-label">Penulis 2</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="penulis_nama2" type="text" class="form-control" value="-" readonly="" >
                                <input id="penulis_2" type="hidden" name="penulis_2" value="{{ old('penulis_2') }}5 " required  readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalpenulis2"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('penulis_2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penulis_2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('penulis_3') ? ' has-error' : '' }}">
                            <label for="penulis_3" class="col-md-4 control-label">Penulis 3</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="penulis_nama3" type="text" class="form-control" value="-" readonly=""  >
                                <input id="penulis_3" type="hidden" name="penulis_3" value="{{ old('penulis_3') }}5 " required  readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalpenulis3"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('penulis_3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penulis_3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('penulis_4') ? ' has-error' : '' }}">
                            <label for="penulis_4" class="col-md-4 control-label">Penulis 4</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="penulis_nama4" type="text" class="form-control" value="-" readonly=""  >
                                <input id="penulis_4" type="hidden" name="penulis_4" value="{{ old('penulis_4') }} 5" required readonly="" >
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalpenulis4"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('penulis_4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penulis_4') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('penulis_5') ? ' has-error' : '' }}">
                            <label for="penulis_5" class="col-md-4 control-label">Penulis 5</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="penulis_nama5" type="text" class="form-control" value="-" readonly=""  >
                                <input id="penulis_5" type="hidden" name="penulis_5" value="{{ old('penulis_5') }} 5"  required readonly="" >
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalpenulis5"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('penulis_5'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penulis_5') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('penulis_6') ? ' has-error' : '' }}">
                            <label for="penulis_6" class="col-md-4 control-label">Penulis 6</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="penulis_nama6" type="text" class="form-control" value="-" readonly=""  >
                                <input id="penulis_6" type="hidden" name="penulis_6" value="{{ old('penulis_6') }} 5" required readonly=""  >
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalpenulis6"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('penulis_6'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penulis_6') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('penulis_7') ? ' has-error' : '' }}">
                            <label for="penulis_7" class="col-md-4 control-label">Penulis 7</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="penulis_nama7" type="text" class="form-control" value="-" readonly=""  >
                                <input id="penulis_7" type="hidden" name="penulis_7" value="{{ old('penulis_7') }} 5" required  readonly="">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalpenulis7"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('penulis_7'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penulis_7') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('penulis_8') ? ' has-error' : '' }}">
                            <label for="penulis_8" class="col-md-4 control-label">Penulis 8</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="penulis_nama8" type="text" class="form-control" value="-" readonly=""  >
                                <input id="penulis_8" type="hidden" name="penulis_8" value="{{ old('penulis_8') }} 5 " required readonly="" >
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalpenulis8"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('penulis_8'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penulis_8') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('penulis_9') ? ' has-error' : '' }}">
                            <label for="penulis_9" class="col-md-4 control-label">Penulis 9</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="penulis_nama9" type="text" class="form-control" value="-" readonly=""  >
                                <input id="penulis_9" type="hidden" name="penulis_9" value="{{ old('penulis_9') }} 5" required readonly="" >
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalpenulis9"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('penulis_9'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penulis_9') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('penulis_10') ? ' has-error' : '' }}">
                            <label for="penulis_10" class="col-md-4 control-label">Penulis 10</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="penulis_nama10" type="text" class="form-control" value="-" readonly=""  >
                                <input id="penulis_10" type="hidden" name="penulis_10" value="{{ old('penulis_10') }} 5 " required readonly="" >
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModalpenulis10"><b>Cari Penulis</b> <span class="fa fa-search"></span></button>
                                </span>
                                </div>
                                @if ($errors->has('penulis_10'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penulis_10') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('edisi') ? ' has-error' : '' }}">
                            <label for="edisi" class="col-md-4 control-label">Edisi Berita</label>
                            <div class="col-md-6">
                                <input id="edisi" type="text" class="form-control" name="edisi" label='Harus Di Isi' value="{{  old('edisi') }}" required > 
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

<!-- Modal Tambah Jenis -->

<!-- Modal Tambah Jenis -->
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="myModalpenulis1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" style="background: #fff;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cari penulis 1</h5>
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
                          <th> penulis 1 </th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($penuliss as $data)
                          <tr class="pilih_penulis1"
                              data-penulis_id="<?php echo $data->id; ?>"
                              data-penulis_nama1="<?php echo $data->namalengkap_penulis; ?>" >
                            <td> {{$data->namalengkap_penulis}} </td>
                            <td> {{$data->namapanggilan_penulis}} </td>
                            <td> {{$data->namainisial_penulis}} </td>
                            <td> <input type="radio" name="penulis1"  id="penulis_1"   value="{{$data->id}}"> </td>
                          </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" id="myModalpenulis2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
          <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content" style="background: #fff;">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cari penulis 2</h5>
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
                                  <th> penulis 2 </th>
                                </tr>
                              </thead>

                              <tbody>
                                @foreach($penuliss as $data)
                                  <tr class="pilih_penulis2"
                                      data-penulis_id="<?php echo $data->id; ?>"
                                      data-penulis_nama2="<?php echo $data->namalengkap_penulis; ?>" >
                                    <td> {{$data->namalengkap_penulis}} </td>
                                    <td> {{$data->namapanggilan_penulis}} </td>
                                    <td> {{$data->namainisial_penulis}} </td>
                                    <td> <input type="radio" name="penulis2"  id="penulis_2"   value="{{$data->id}}"> </td>
                                  </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade bd-example-modal-lg" id="myModalpenulis3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                  <div class="modal-dialog modal-lg" role="document" >
                    <div class="modal-content" style="background: #fff;">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cari penulis 3</h5>
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
                                          <th> penulis 3 </th>
                                        </tr>
                                      </thead>

                                      <tbody>
                                        @foreach($penuliss as $data)
                                          <tr class="pilih_penulis3"
                                              data-penulis_id="<?php echo $data->id; ?>"
                                              data-penulis_nama3="<?php echo $data->namalengkap_penulis; ?>" >
                                            <td> {{$data->namalengkap_penulis}} </td>
                                            <td> {{$data->namapanggilan_penulis}} </td>
                                            <td> {{$data->namainisial_penulis}} </td>
                                            <td> <input type="radio" name="penulis3"  id="penulis_3"   value="{{$data->id}}"> </td>
                                          </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade bd-example-modal-lg" id="myModalpenulis4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                          <div class="modal-dialog modal-lg" role="document" >
                            <div class="modal-content" style="background: #fff;">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cari penulis 4</h5>
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
                                                  <th> penulis 4 </th>
                                                </tr>
                                              </thead>

                                              <tbody>
                                                @foreach($penuliss as $data)
                                                  <tr class="pilih_penulis4"
                                                      data-penulis_id="<?php echo $data->id; ?>"
                                                      data-penulis_nama4="<?php echo $data->namalengkap_penulis; ?>" >
                                                    <td> {{$data->namalengkap_penulis}} </td>
                                                    <td> {{$data->namapanggilan_penulis}} </td>
                                                    <td> {{$data->namainisial_penulis}} </td>
                                                    <td> <input type="radio" name="penulis4"  id="penulis_4"   value="{{$data->id}}"> </td>
                                                  </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bd-example-modal-lg" id="myModalpenulis5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                                  <div class="modal-dialog modal-lg" role="document" >
                                    <div class="modal-content" style="background: #fff;">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Cari penulis 5</h5>
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
                                                          <th> penulis 5 </th>
                                                        </tr>
                                                      </thead>

                                                      <tbody>
                                                        @foreach($penuliss as $data)
                                                          <tr class="pilih_penulis5"
                                                              data-penulis_id="<?php echo $data->id; ?>"
                                                              data-penulis_nama5="<?php echo $data->namalengkap_penulis; ?>" >
                                                            <td> {{$data->namalengkap_penulis}} </td>
                                                            <td> {{$data->namapanggilan_penulis}} </td>
                                                            <td> {{$data->namainisial_penulis}} </td>
                                                            <td> <input type="radio" name="penulis5"  id="penulis_5"   value="{{$data->id}}"> </td>
                                                          </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade bd-example-modal-lg" id="myModalpenulis6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                                          <div class="modal-dialog modal-lg" role="document" >
                                            <div class="modal-content" style="background: #fff;">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Cari penulis 6</h5>
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
                                                                  <th> penulis 6 </th>
                                                                </tr>
                                                              </thead>

                                                              <tbody>
                                                                @foreach($penuliss as $data)
                                                                  <tr class="pilih_penulis6"
                                                                      data-penulis_id="<?php echo $data->id; ?>"
                                                                      data-penulis_nama6="<?php echo $data->namalengkap_penulis; ?>" >
                                                                    <td> {{$data->namalengkap_penulis}} </td>
                                                                    <td> {{$data->namapanggilan_penulis}} </td>
                                                                    <td> {{$data->namainisial_penulis}} </td>
                                                                    <td> <input type="radio" name="penulis6"  id="penulis_6"   value="{{$data->id}}"> </td>
                                                                  </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade bd-example-modal-lg" id="myModalpenulis7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                                                  <div class="modal-dialog modal-lg" role="document" >
                                                    <div class="modal-content" style="background: #fff;">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Cari penulis 7</h5>
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
                                                                          <th> penulis 7 </th>
                                                                        </tr>
                                                                      </thead>

                                                                      <tbody>
                                                                        @foreach($penuliss as $data)
                                                                          <tr class="pilih_penulis7"
                                                                              data-penulis_id="<?php echo $data->id; ?>"
                                                                              data-penulis_nama7="<?php echo $data->namalengkap_penulis; ?>" >
                                                                            <td> {{$data->namalengkap_penulis}} </td>
                                                                            <td> {{$data->namapanggilan_penulis}} </td>
                                                                            <td> {{$data->namainisial_penulis}} </td>
                                                                            <td> <input type="radio" name="penulis7"  id="penulis_7"   value="{{$data->id}}"> </td>
                                                                          </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal fade bd-example-modal-lg" id="myModalpenulis8" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                                                          <div class="modal-dialog modal-lg" role="document" >
                                                            <div class="modal-content" style="background: #fff;">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Cari penulis 8</h5>
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
                                                                                  <th> penulis 8 </th>
                                                                                </tr>
                                                                              </thead>

                                                                              <tbody>
                                                                                @foreach($penuliss as $data)
                                                                                  <tr class="pilih_penulis8"
                                                                                      data-penulis_id="<?php echo $data->id; ?>"
                                                                                      data-penulis_nama8="<?php echo $data->namalengkap_penulis; ?>" >
                                                                                    <td> {{$data->namalengkap_penulis}} </td>
                                                                                    <td> {{$data->namapanggilan_penulis}} </td>
                                                                                    <td> {{$data->namainisial_penulis}} </td>
                                                                                    <td> <input type="radio" name="penulis8"  id="penulis_8"   value="{{$data->id}}"> </td>
                                                                                  </tr>
                                                                                        @endforeach
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal fade bd-example-modal-lg" id="myModalpenulis9" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                                                                  <div class="modal-dialog modal-lg" role="document" >
                                                                    <div class="modal-content" style="background: #fff;">
                                                                      <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Cari penulis 9</h5>
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
                                                                                          <th> penulis 9 </th>
                                                                                        </tr>
                                                                                      </thead>

                                                                                      <tbody>
                                                                                        @foreach($penuliss as $data)
                                                                                          <tr class="pilih_penulis9"
                                                                                              data-penulis_id="<?php echo $data->id; ?>"
                                                                                              data-penulis_nama9="<?php echo $data->namalengkap_penulis; ?>" >
                                                                                            <td> {{$data->namalengkap_penulis}} </td>
                                                                                            <td> {{$data->namapanggilan_penulis}} </td>
                                                                                            <td> {{$data->namainisial_penulis}} </td>
                                                                                            <td> <input type="radio" name="penulis9"  id="penulis_9"   value="{{$data->id}}"> </td>
                                                                                          </tr>
                                                                                                @endforeach
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="modal fade bd-example-modal-lg" id="myModalpenulis10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                                                                          <div class="modal-dialog modal-lg" role="document" >
                                                                            <div class="modal-content" style="background: #fff;">
                                                                              <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Cari penulis 10</h5>
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
                                                                                                  <th> penulis 10 </th>
                                                                                                </tr>
                                                                                              </thead>

                                                                                              <tbody>
                                                                                                @foreach($penuliss as $data)
                                                                                                  <tr class="pilih_penulis10"
                                                                                                      data-penulis_id="<?php echo $data->id; ?>"
                                                                                                      data-penulis_nama10="<?php echo $data->namalengkap_penulis; ?>" >
                                                                                                    <td> {{$data->namalengkap_penulis}} </td>
                                                                                                    <td> {{$data->namapanggilan_penulis}} </td>
                                                                                                    <td> {{$data->namainisial_penulis}} </td>
                                                                                                    <td> <input type="radio" name="penulis10"  id="penulis_10"   value="{{$data->id}}"> </td>
                                                                                                  </tr>
                                                                                                        @endforeach
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
@endsection
