@section('js')

<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>
@stop

@extends('layouts.app')

@section('content')

<form action="{{ route('jenis.update', $data->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Edit Jenis</h4>

                      <div class="form-group{{ $errors->has('jenis_berita') ? ' has-error' : '' }}">
                          <label for="jenis_berita" class="col-md-4 control-label">Jenis Berita</label>
                          <div class="col-md-6">
                              <input id="jenis_berita" type="text" class="form-control" name="jenis_berita" value="{{$data->jenis_berita}}" required>
                              @if ($errors->has('jenis_berita'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('jenis_berita') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('keterangan_jenis') ? ' has-error' : '' }}">
                          <label for="keterangan_jenis" class="col-md-4 control-label">Keterangan Jenis</label>
                          <div class="col-md-6">
                              <input id="keterangan_jenis" type="text" class="form-control" name="keterangan_jenis" value="{{ $data->keterangan_jenis }}" required>
                              @if ($errors->has('keterangan_jenis'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('keterangan_jenis') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                        <button type="submit" class="btn btn-primary" id="submit">
                                    Ubah
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>
                        <a href="{{route('jenis.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>
@endsection
