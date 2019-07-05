@section('js')
<script type="text/javascript" src="{{ URL::asset('js/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/buttons.colVis.min.js') }}"> </script>
<script type="text/javascript" src="{{ URL::asset('js/buttons.print.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vfs_fonts.js') }}"></script>
@if(Auth::user()->level == 'admin')
<script>
  $(function () {
    $('#tableViewIndex tfoot th').each( function ()
      {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search"/>' );
      }
    );

    $('#tableViewIndex').DataTable({
      'fixedHeader'   : {
        'header': true,
        'footer': true
      },
      'fixedColumns': true,
      'scrollY'        : "200px",
      'scrollX'        : true,
      'scrollCollapse' : true,

      'dom': 'Bfrtip',
      'lengthMenu': [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
      'buttons': [
            {
              extend: 'colvis',
              text: 'Data Table',
              collectionLayout: 'three-column',
            },
            {
              extend: 'pageLength'
            },
            {
              extend: 'excelHtml5',
              text:      '<i class="fa fa-file-excel-o"></i>',
              exportOptions:
                {
                  columns: ':visible'
                }
            },
            {
              extend: 'print',
              text:      '<i class="fa fa-print"></i>',
              exportOptions:
                {
                  columns: ':visible'
                }
            },
        ],

        "columnDefs": [
          { targets: 0, visible: true },
          { targets: 1, visible: true },
          { targets: 2, visible: true },
          { targets: 3, visible: false },
          { targets: 4, visible: false },
          { targets: 5, visible: false },
          { targets: 6, visible: false },
          { targets: 7, visible: false },
          { targets: 8, visible: false },
          { targets: 9, visible: false },
          { targets: 10, visible: false },
          { targets: 11, visible: false },
          { targets: 12, visible: false },
          { targets: 13, visible: false },
          { targets: 14, visible: false },
          { targets: 15, visible: false },
          { targets: 16, visible: false },
          { targets: 17, visible: false },
          { targets: 18, visible: false },
          { targets: 19, visible: false },
          { targets: 20, visible: false },
          { targets: 21, visible: false },
        ],

        'paging'         : true,
        'lengthChange'   : false,
        'ordering'       : true,
        'info'           : true,
        'AutoWidth'      : false,
        'iDisplayLength' : 50,
    });

    // datatable
    var table =$('#tableViewIndex').DataTable();


    // Apply the search
    table.columns().every( function () {
      var that = this;
      $( 'input', this.footer() ).on( 'keyup change', function () {
        if ( that.search() !== this.value ) {
          that
          .search( this.value )
          .draw();
          }
        });
      });

    table.buttons( 0, null ).container().prependTo(
        table.table().container()
    );
  })

</script>

@elseif(Auth::user()->level == 'madmin')
<script>
  $(function () {
    $('#tableViewIndex tfoot th').each( function ()
      {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search"/>' );
      }
    );

    $('#tableViewIndex').DataTable({
      'fixedHeader'   : {
        'header': true,
        'footer': true
      },
      'fixedColumns': true,
      'scrollY'        : "200px",
      'scrollX'        : true,
      'scrollCollapse' : true,

      'dom': 'Bfrtip',
      'lengthMenu': [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
      'buttons': [
            {
              extend: 'colvis',
              text: 'Data Table',
              collectionLayout: 'three-column',
            },
            {
              extend: 'pageLength'
            },
            {
              extend: 'excelHtml5',
              text:      '<i class="fa fa-file-excel-o"></i>',
              exportOptions:
                {
                  columns: ':visible'
                }
            },
            {
              extend: 'print',
              text:      '<i class="fa fa-print"></i>',
              exportOptions:
                {
                  columns: ':visible'
                }
            },
        ],

        "columnDefs": [
          { targets: 0, visible: true },
          { targets: 1, visible: true },
          { targets: 2, visible: true },
          { targets: 3, visible: false },
          { targets: 4, visible: false },
          { targets: 5, visible: false },
          { targets: 6, visible: false },
          { targets: 7, visible: false },
          { targets: 8, visible: false },
          { targets: 9, visible: false },
          { targets: 10, visible: false },
          { targets: 11, visible: false },
          { targets: 12, visible: false },
          { targets: 13, visible: false },
          { targets: 14, visible: false },
          { targets: 15, visible: false },
          { targets: 16, visible: false },
          { targets: 17, visible: false },
          { targets: 18, visible: false },
          { targets: 19, visible: false },
          { targets: 20, visible: false },
          { targets: 21, visible: false },
        ],

        'paging'         : true,
        'lengthChange'   : false,
        'ordering'       : true,
        'info'           : true,
        'AutoWidth'      : false,
        'iDisplayLength' : 50,
    });

    // datatable
    var table =$('#tableViewIndex').DataTable();


    // Apply the search
    table.columns().every( function () {
      var that = this;
      $( 'input', this.footer() ).on( 'keyup change', function () {
        if ( that.search() !== this.value ) {
          that
          .search( this.value )
          .draw();
          }
        });
      });

    table.buttons( 0, null ).container().prependTo(
        table.table().container()
    );
  })

</script>

@endif


@stop
@extends('layouts.app')

@section('content')
<?php $number = 1; ?>
<div class="row">

  <div class="col-lg-2">
    <a href="{{ route('indexberita.create') }}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Berita</a>
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
                    <table class="table table-striped" id="tableViewIndex">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Judul Berita</th>
                          <th>Tanggal</th>
                          <th>Jenis Berita 1</th>
                          <th>Jenis Berita 2</th>
                          <th>Jenis Berita 3</th>
                          <th>Keterangan Jenis Berita</th>
                          <th>Kata Kunci</th>
                          <th>Penulis 1</th>
                          <th>Penulis 2</th>
                          <th>Penulis 3</th>
                          <th>Penulis 4</th>
                          <th>Penulis 5</th>
                          <th>Penulis 6</th>
                          <th>Penulis 7</th>
                          <th>Penulis 8</th>
                          <th>Penulis 9</th>
                          <th>Penulis 10</th>
                          <th>Edisi</th>
                          <th>Halaman Terbit</th>
                          <th>Kolom Halaman</th>
                          <th>Bentuk Berita</th>
                          @if(Auth::user()->level == 'admin')
                          <th>Action</th>
                          @elseif(Auth::user()->level == 'madmin')
                          <th>Action</th>
                          @endif

                        </tr>
                      </thead>
                      <tbody>
                      @foreach($viewberita as $data)
                        <tr>
                          <td>
                            {{ $number }}
                            <?php $number++; ?>
                          </td>
                            <td >
                            {{$data->judul_berita}}
                          </td>
                          <td >
                            {{date('d/m/y', strtotime($data->tanggal_berita))}}
                          </td>

                          <td>
                            {{$data->J1}}
                          </td>
                          <td>
                            {{$data->J2}}

                          </td>
                          <td>
                            {{$data->J3}}
                          </td>

                          <td >
                            {{$data->keterangan_jenis}}
                          </td>

                          <td >
                            {{$data->katakunci}}
                          </td>

                          <td>
                            {{$data->P1}}
                          </td>
                          <td>
                            {{$data->P2}}
                          </td>
                          <td>
                            {{$data->P3}}
                          </td>
                          <td>
                            {{$data->P4}}
                          </td>
                          <td>
                            {{$data->P5}}
                          </td>
                          <td>
                            {{$data->P6}}
                          </td>
                          <td>
                            {{$data->P7}}
                          </td>
                          <td>
                            {{$data->P8}}
                          </td>
                          <td>
                            {{$data->P9}}
                          </td>
                          <td>
                            {{$data->P10}}
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
                          @if(Auth::user()->level == 'admin')
                          <td>
                            <div class="btn-group dropdown">
                           <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Action
                           </button>
                           <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                             <a class="dropdown-item" href="{{route('indexberita.edit', $data->id)}}"> Edit </a>
                                 <form action="{{ route('indexberita.destroy', $data->id) }}" class="pull-left"  method="post">
                                 {{ csrf_field() }}
                                 {{ method_field('delete') }}
                                 <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                                 </button>
                                 </form>
                           </div>
                         </div>
                          </td>
                          @elseif(Auth::user()->level == 'madmin')
                          <td>
                            <div class="btn-group dropdown">
                           <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Action
                           </button>
                           <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                             <a class="dropdown-item" href="{{route('indexberita.edit', $data->id)}}"> Edit </a>
                                 <form action="{{ route('indexberita.destroy', $data->id) }}" class="pull-left"  method="post">
                                 {{ csrf_field() }}
                                 {{ method_field('delete') }}
                                 <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                                 </button>
                                 </form>
                           </div>
                         </div>
                          </td>
                          @endif
                        </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                      <tr>

                        <th>
                          No
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
                        <th>Action</th>
                        @elseif(Auth::user()->level == 'madmin')
                        <th>Action</th>
                        @endif

                      </tr>

                      </tr>
                      </tfoot>
                    </table>
                  </div>
               {{--  {!! $datas->links() !!} --}}
                </div>
              </div>
            </div>
          </div>
@endsection
