@section('js')
<script type="text/javascript" src="{{ URL::asset('js/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/buttons.colVis.min.js') }}"> </script>
<script type="text/javascript" src="{{ URL::asset('js/buttons.print.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vfs_fonts.js') }}"></script>

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
@stop
@extends('layouts.app')

@section('content')
<?php $number = 1; ?>
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Jumlah Berita</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$indexberita->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total seluruh berita
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Tertulis</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$indexberita->where('jenis_berita', 'Tertulis')->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Berita berupa Text
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-book text-success icon-lg" style="width: 40px;height: 40px;"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Grafik</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$indexberita->where('jenis_berita', 'Grafik')->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-book mr-1" aria-hidden="true"></i> Berita berupa Grafik
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Redaksi</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$redaksi->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-account mr-1" aria-hidden="true"></i> Total seluruh redaksi
                  </p>
                </div>
              </div>
            </div>
</div>
<div class="row" >
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
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
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

                      </tr>

                      </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
