@extends('themplate.master')

@section('title', 'Transaction')
@section('logo', '../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Transaction')

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
              <form method="post" action="/transaction/store" role="form">
                {{ csrf_field() }}
                <div class="card-body">
                <div class="form-group">
                    <label for="variabel">Variabel</label>

                    <select name="variabel" class="form-control" required="true">
                    @foreach($variabel as $variabeldata)
                      <option value="{{ $variabeldata->id }}">{{ $variabeldata->namavariabel }}</option>
                    @endforeach
                     <select>
                  </div>
                </div>
                  <div class="card-body">
                  <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>

                    <select name="pertanyaan" class="form-control" required="true">
                    @foreach($pertanyaan as $pertanyaandata)
                      <option value="{{ $pertanyaandata->id }}">{{ $pertanyaandata->pertanyaan }}</option>
                    @endforeach
                     <select>
                  </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                    <label for="jumlahdata">Sangat Setuju</label>
                    <input type="text" class="form-control" id="jumlahdata" name="jumlahdata" placeholder="Jumlah data" required="true" >
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="sangatsetuju">Sangat Setuju</label>
                    <input type="text" class="form-control" id="sangatsetuju" name="sangatsetuju" placeholder="Jumlah yang sangat setuju" >
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="setuju">Setuju</label>
                    <input type="text" class="form-control" id="setuju" name="setuju" placeholder="Jumlah yang setuju" >
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="tidaksetuju">Tidak Setuju</label>
                    <input type="text" class="form-control" id="tidaksetuju" name="tidaksetuju" placeholder="Jumlah yang tidak setuju" >
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="sangattidaksetuju">Sangaat Tidak Setuju</label>
                    <input type="text" class="form-control" id="sangattidaksetuju" name="sangattidaksetuju" placeholder="Jumlah yang sangat tidak setuju" >
                  </div>

                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan Transaction </button>
                  <button type="button" class="btn btn-primary" onclick="document.getElementById('setuju').value = '';document.getElementById('sangatsetuju').value = '';document.getElementById('tidaksetuju').value = '';document.getElementById('sangattidaksetuju').value = ''" >Batal</button>
                  <button type="button" class="btn btn-primary" onclick="history.back()">Kembali</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



</div>
<div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Transaction</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="data" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Variabel</th>
                    <th>Pertanyaan</th>
                    <th>Jumlah Data</th>
                    <th>Setuju</th>
                    <th>Sangat Setuju</th>
                    <th>Tidak Setuju</th>
                    <th>Sangat Tidak Setuju</th>
                    <th>OPSI</th>
                </tr>
                </thead>
                <tbody>

                <?php $no = 1;
                $jumlahdata=count($transaction);
                ?>
                @foreach($transaction as $transactiondata)

                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $transactiondata->namavariabel}}</td>
                    <td>{{ $transactiondata->pertanyaan}}</td>
                    <td>{{ $jumlahdata }}</td>
                    <td>{{ $transactiondata->sangat_setuju}}</td>
                    <td>{{ $transactiondata->setuju}}</td>
                    <td>{{ $transactiondata->tidak_setuju}}</td>
                    <td>{{ $transactiondata->sangat_tidak_setuju}}</td>

                    <td>
                        <a href="/transaction/edit/{{ $transactiondata->id }}" data-toggle="tooltip" title="Edit Transaction Data" > <i class="far fa-edit"></i></a>
                        <a href="/transaction/delete/{{ $transactiondata->id }}"> <i class="far fa-trash-alt" data-toggle="tooltip" title="Hapus Transaction Data"></i></a>

                    </td>
                </tr>
                <?php $no++; ?>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>No</th>
                    <th>Variabel</th>
                    <th>Pertanyaan</th>
                    <th>Jumlah Data</th>
                    <th>Setuju</th>
                    <th>Sangat Setuju</th>
                    <th>Tidak Setuju</th>
                    <th>Sangat Tidak Setuju</th>
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
