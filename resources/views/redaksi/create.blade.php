@section('js')

<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>
@stop

@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('redaksi.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Redaksi baru</h4>

                        <div class="form-group{{ $errors->has('namalengkap_penulis') ? ' has-error' : '' }}">
                            <label for="namalengkap_penulis" class="col-md-4 control-label">Nama Lengkap</label>
                            <div class="col-md-6">
                                <input id="namalengkap_penulis" type="text" class="form-control" name="namalengkap_penulis" value="{{ old('namalengkap_penulis') }}" required>
                                @if ($errors->has('namalengkap_penulis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namalengkap_penulis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('namapanggilan_penulis') ? ' has-error' : '' }}">
                            <label for="namapanggilan_penulis" class="col-md-4 control-label">Nama Panggilan</label>
                            <div class="col-md-6">
                                <input id="namapanggilan_penulis" type="text" class="form-control" name="namapanggilan_penulis" value="{{ old('namapanggilan_penulis') }} -" required>
                                @if ($errors->has('namapanggilan_penulis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namapanggilan_penulis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('namainisial_penulis') ? ' has-error' : '' }}">
                            <label for="namainisial_penulis" class="col-md-4 control-label">Inisial</label>
                            <div class="col-md-6">
                                <input id="namainisial_penulis" type="text" class="form-control" name="namainisial_penulis" value="{{ old('namainisial_penulis') }} -" required>
                                @if ($errors->has('namainisial_penulis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namainisial_penulis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status_penulis') ? ' has-error' : '' }}">
                            <label for="status_penulis" class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                                <input id="status_penulis" type="text" class="form-control" name="status_penulis" value="{{ old('status_penulis') }} -" required>
                                @if ($errors->has('status_penulis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status_penulis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                            <label for="level" class="col-md-4 control-label">Jenis Kelamin</label>
                            <div class="col-md-6">
                            <select class="form-control" name="jeniskelamin_penulis" required="">
                                <option value="-"> - </option>
                                <option value="Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary" id="submit">
                                    Submit
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>
                        <a href="{{route('redaksi.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>
@endsection
