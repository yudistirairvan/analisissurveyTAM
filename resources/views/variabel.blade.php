@extends('themplate.master')

@section('title', 'Variabel')
@section('logo', '../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Variabel')

@section('content')
@if (session('status'))
<div class="col-md-12">
    <div class="alert alert-success">
        {{ session('status') }}
    </div>

    </div>
@endif
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/variabel/store" role="form">
                {{ csrf_field() }}

                <div class="card-body">
                    <div class="form-group">
                    <label for="kodevariabel">Kode Variabel</label>
                    <input type="text" class="form-control" id="kodevariabel" name="kodevariabel" placeholder="Kode Variabel" required="true">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="namavariabel">Nama Variabel</label>
                    <input type="text" class="form-control" id="namavariabel" name="namavariabel" placeholder="Nama Variabel" required="true">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan Variabel</button>
                  <button type="button" class="btn btn-primary" onclick="document.getElementById('kodevariabel').value = '';document.getElementById('namavariabel').value = ''" >Batal</button>
                  <button type="button" class="btn btn-primary" onclick="history.back()">Kembali</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



</div>
<div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Variabel</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="data" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Variabel</th>
                    <th>Nama Variabel</th>
                    <th>OPSI</th>
                </tr>
                </thead>
                <tbody>

                <?php $no = 1; ?>
                @foreach($variabel as $variabeldata)

                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $variabeldata->kodevariabel}}</td>
                    <td>{{ $variabeldata->namavariabel}}</td>
                    <td>
                        <a href="/variabel/edit/{{ $variabeldata->id }}" data-toggle="tooltip" title="Edit Variabel" > <i class="far fa-edit"></i></a>
                        <a href="/variabel/delete/{{ $variabeldata->id }}"> <i class="far fa-trash-alt" data-toggle="tooltip" title="Hapus Variabel"></i></a>

                    </td>
                </tr>
                <?php $no++; ?>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Kode Variabel</th>
                    <th>Nama Variabel</th>
                    <th>OPSI</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
</div>
<!-- /.col -->
@endsection


@section('js')
  <!-- DataTables -->
  <link rel="stylesheet" href="{!! asset('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') !!}">

@stop

@section('js2')

  <!-- DataTables -->
  <script src="{!! asset('assets/adminlte/plugins/datatables/jquery.dataTables.js') !!}"></script>
  <script src="{!! asset('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') !!}"></script>
    <!-- page script -->
  <script>
    $(function () {

      $('#data').DataTable();
      // $('#data').DataTable({
      //   "paging": true,
      //   "lengthChange": false,
      //   "searching": false,
      //   "ordering": true,
      //   "info": true,
      //   "autoWidth": false,
      // });
    });
@stop
