@extends('themplate.master')

@section('title', 'Transaction')
@section('logo', '../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Transaction')

@section('content')

@foreach($variabel as $variabeldata)
<div class="col-12">
<div class="card">
            <div class="card-header">
              <h3 class="card-title">{{ $variabeldata->namavariabel }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="{{ $variabeldata->id }}" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>

                    <th>Pertanyaan</th>
                    <th>Jumlah Data</th>
                    <th>Setuju</th>
                    <th>Sangat Setuju</th>
                    <th>Tidak Setuju</th>
                    <th>Sangat Tidak Setuju</th>

                </tr>
                </thead>
                <tbody>

                @php $no = 1;
                $total_sangat_setuju=0;
                        $total_setuju=0;
                        $total_tidak_setuju=0;
                        $total_sangat_tidak_setuju=0;
                @endphp
                @foreach($transaction as $transactiondata)
                    @if($variabeldata->id==$transactiondata->id_variabel)
                    @php
                        $sangat_setuju=$transactiondata->sangat_setuju;
                        $setuju=$transactiondata->setuju;
                        $tidak_setuju=$transactiondata->tidak_setuju;
                        $sangat_tidak_setuju=$transactiondata->sangat_tidak_setuju;
                    @endphp
                    <tr>

                        <td>{{ $no }}</td>
                        <!-- <td>{{ $transactiondata->namavariabel}}</td> -->
                        <td><p data-toggle="tooltip" title="{{ $transactiondata->pertanyaan}}">{{
                          Str::limit($transactiondata->pertanyaan, $limit =  65, $end = '...')}}</p></td>
                        <td>{{ $transactiondata->jumlah_data }}</td>
                        <td>{{ $sangat_setuju=$transactiondata->sangat_setuju }} ( {{ round($psangat_setuju=$transactiondata->sangat_setuju/$transactiondata->jumlah_data*100, 2) }}% )</td>
                        <td>{{ $setuju=$transactiondata->setuju }} ( {{ round($psetuju=$transactiondata->setuju/$transactiondata->jumlah_data*100, 2)}}% )</td>
                        <td>{{ $tidak_setuju=$transactiondata->tidak_setuju}} ( {{ round($ptidak_setuju=$transactiondata->tidak_setuju/$transactiondata->jumlah_data*100, 2)}}% )</td>
                        <td>{{ $sangat_tidak_setuju=$transactiondata->sangat_tidak_setuju}} ( {{ round($psangat_tidak_setuju=$transactiondata->sangat_tidak_setuju/$transactiondata->jumlah_data*100, 2)}}% )</td>


                    </tr>
                    @php
                        $total_sangat_setuju=$total_sangat_setuju+$sangat_setuju;
                        $total_setuju=$total_setuju+$setuju;
                        $total_tidak_setuju=$total_tidak_setuju+$tidak_setuju;
                        $total_sangat_tidak_setuju=$total_sangat_tidak_setuju+$sangat_tidak_setuju;
                        @endphp


                    <!-- <tr>

                        <td>{{ $no }}</td>
                        <td>{{ $transactiondata->namavariabel}}</td>
                        <td>{{ $transactiondata->pertanyaan}}</td>
                        <td>{{ $transactiondata->jumlah_data }}</td>
                        <td>{{ round($sangat_setuju=$transactiondata->sangat_setuju/$transactiondata->jumlah_data*100, 2) }}%</td>
                        <td>{{ round($setuju=$transactiondata->setuju/$transactiondata->jumlah_data*100, 2)}}% </td>
                        <td>{{ round($tidak_setuju=$transactiondata->tidak_setuju/$transactiondata->jumlah_data*100, 2)}}%</td>
                        <td>{{ round($sangat_tidak_setuju=$transactiondata->sangat_tidak_setuju/$transactiondata->jumlah_data*100, 2)}}%</td>


                    </tr> -->
                    @else
                    @continue
                    @endif
                <?php $no++; ?>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th colspan="3">Total Responden </th>


                    <th>{{ $total_sangat_setuju }}</th>
                    <th>{{ $total_setuju}} </th>
                    <th>{{ $total_tidak_setuju }}</th>
                    <th>{{ $total_sangat_tidak_setuju }}</th>

                </tr>
                <tr>

                <th colspan="3">Persentase Desimal </th>


                    <th>{{ round($persen_sangat_setuju=$total_sangat_setuju/$transactiondata->jumlah_data*100, 4) }}%</th>
                    <th>{{ round($persen_setuju=$total_setuju/$transactiondata->jumlah_data*100, 4)}}% </th>
                    <th>{{ round($persen_tidak_setuju=$total_tidak_setuju/$transactiondata->jumlah_data*100, 4) }}%</th>
                    <th>{{ round($persen_sangat_tidak_setuju=$total_sangat_tidak_setuju/$transactiondata->jumlah_data*100, 4) }}%</th>

                </tr>
                </tfoot>
              </table>
            </div>

</div>
</div>
@endforeach




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

        @foreach($variabel as $variabeldata)
        $('#{{ $variabeldata->id}}').DataTable();
        @endforeach
    //   $('#data').DataTable();
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
