@section('js')

<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>
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
                                <input id="kode_kodeberita" type="text" class="form-control" name="kode_kodeberita" value="{{ old('kode_kodeberita') }}" required  >
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
                                <input id="jenis_1" type=" text" name="jenis_1" value="{{ old('jenis_1') }}" required  >
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
                                <input id="jenis_2" type=" text" name="jenis_2" value="{{ old('jenis_2') }}" required  >
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
                                <input id="jenis_3" type=" text" name="jenis_3" value="{{ old('jenis_3') }}" required  >
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
                                <input id="redaksi_1" type=" text" name="redaksi_1" value="{{ old('redaksi_1') }}" required  >
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
                                <input id="redaksi_2" type=" text" name="redaksi_2" value="{{ old('redaksi_2') }} " required  >
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
                                <input id="redaksi_3" type=" text" name="redaksi_3" value="{{ old('redaksi_3') }} " required  >
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
                                <input id="redaksi_4" type=" text" name="redaksi_4" value="{{ old('redaksi_4') }} " required  >
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
                                <input id="redaksi_5" type=" text" name="redaksi_5" value="{{ old('redaksi_5') }} "  required  >
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
                                <input id="redaksi_6" type=" text" name="redaksi_6" value="{{ old('redaksi_6') }} " required  >
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
                                <input id="redaksi_7" type=" text" name="redaksi_7" value="{{ old('redaksi_7') }} " required  >
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
                                <input id="redaksi_8" type=" text" name="redaksi_8" value="{{ old('redaksi_8') }} " required  >
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
                                <input id="redaksi_9" type=" text" name="redaksi_9" value="{{ old('redaksi_9') }} " required  >
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
                                <input id="redaksi_10" type=" text" name="redaksi_10" value="{{ old('redaksi_10') }} " required  >
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
@endsection
