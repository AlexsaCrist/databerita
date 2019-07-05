
@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@extends('layouts.app')

@section('content')
<div class="row">

  <div class="col-lg-2">
    <a href="{{ route('dummy.create') }}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Berita</a>
  </div>
    <div class="col-lg-12">
                  @if (Session::has('message'))
                  <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
                  @endif
                  </div>
</div>
<div class="row" style="margin-top: 20px;">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                  <h4 class="card-title">Data Berita</h4>

                  <div class="table-responsive">
                    <table class="table table-striped" id="table">
                      <thead>
                        <tr>
                          <th>
                            Kode
                          </th>
                          <th>
                            Judul Berita
                          </th>
                          <th>
                            Tanggal
                          </th>
                          <th>
                            Jenis Berita 1
                          </th>
                          <th>
                            Jenis Berita 2
                          </th>
                          <th>
                            Jenis Berita 3
                          </th>
                          <th>
                            Keterangan Jenis Berita
                          </th>
                          <th>
                            Kata Kunci
                          </th>
                          <th>
                            Penulis 1
                          </th>
                          <th>
                            Penulis 2
                          </th>
                          <th>
                            Penulis 3
                          </th>
                          <th>
                            Penulis 4
                          </th>
                          <th>
                            Penulis 5
                          </th>
                          <th>
                            Penulis 6
                          </th>
                          <th>
                            Penulis 7
                          </th>
                          <th>
                            Penulis 8
                          </th>
                          <th>
                            Penulis 9
                          </th>
                          <th>
                            Penulis 10
                          </th>
                          <th>
                            Edisi
                          </th>
                          <th>
                            Halaman Terbit
                          </th>
                          <th>
                            Kolom Halaman
                          </th>
                          <th>
                            Bentuk Berita
                          </th>
                          @if(Auth::user()->level == 'admin')
                          <th>
                            Action
                          </th>
                          @endif

                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr>
                          <td class="py-1">
                            {{$data->kode_kodeberita}}
                          </td>
                          <td >
                            {{$data->judul_berita}}
                          </td>
                          <td >
                            {{date('d/m/y', strtotime($data->tanggal_berita))}}
                          </td>

                          <td>
                            {{$data->jenis_1}}
                          </td>
                          <td>
                            {{$data->jenis_2}}
                          </td>
                          <td>
                            {{$data->jenis_3}}
                          </td>

                          <td >
                            {{$data->keterangan_jenis}}
                          </td>

                          <td >
                            {{$data->katakunci}}
                          </td>

                          <td>
                            {{$data->penulis_1}}
                          </td>
                          <td>
                            {{$data->penulis_2}}
                          </td>
                          <td>
                            {{$data->penulis_3}}
                          </td>
                          <td>
                            {{$data->penulis_4}}
                          </td>
                          <td>
                            {{$data->penulis_5}}
                          </td>
                          <td>
                            {{$data->penulis_6}}
                          </td>
                          <td>
                            {{$data->penulis_7}}
                          </td>
                          <td>
                            {{$data->penulis_8}}
                          </td>
                          <td>
                            {{$data->penulis_9}}
                          </td>
                          <td>
                            {{$data->penulis_10}}
                          </td>

                          <td >
                            {{$data->edisi}}
                          </td>
                          <td >
                            {{$data->halaman_terbit}}
                          </td>
                          <td >
                            {{$data->kolom_halaman}}
                          </td>

                          <td>
                          @if($data->jenis_berita == 'Tertulis')
                            <label class="badge badge-success">Tertulis</label>
                          @else
                            <label class="badge badge-warning">Grafik</label>
                          @endif
                          </td>

                          <td>
                            <div class="btn-group dropdown">
                           <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Action
                           </button>
                           <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                             <a class="dropdown-item" href="{{route('dummy.edit', $data->id)}}"> Edit </a>
                                 <form action="{{ route('dummy.destroy', $data->id) }}" class="pull-left"  method="post">
                                 {{ csrf_field() }}
                                 {{ method_field('delete') }}
                                 <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                                 </button>
                                 </form>
                           </div>
                         </div>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
               {{--  {!! $datas->links() !!} --}}
                </div>
              </div>
            </div>
          </div>
@endsection
