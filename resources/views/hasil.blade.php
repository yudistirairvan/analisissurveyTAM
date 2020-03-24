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
                    <th>Sangat Setuju</th>
                    <th>Setuju</th>

                    <th>Tidak Setuju</th>
                    <th>Sangat Tidak Setuju</th>

                </tr>
                </thead>
                <tbody>

                @php
                        $no = 1;
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
                        <td>{{ $sangat_setuju=$transactiondata->sangat_setuju }} ( {{ round($psangat_setuju=$transactiondata->sangat_setuju/$transactiondata->jumlah_data*100, 0) }}% )</td>
                        <td>{{ $setuju=$transactiondata->setuju }} ( {{ round($psetuju=$transactiondata->setuju/$transactiondata->jumlah_data*100, 0)}}% )</td>
                        <td>{{ $tidak_setuju=$transactiondata->tidak_setuju}} ( {{ round($ptidak_setuju=$transactiondata->tidak_setuju/$transactiondata->jumlah_data*100, 0)}}% )</td>
                        <td>{{ $sangat_tidak_setuju=$transactiondata->sangat_tidak_setuju}} ( {{ round($psangat_tidak_setuju=$transactiondata->sangat_tidak_setuju/$transactiondata->jumlah_data*100, 0)}}% )</td>


                    </tr>
                        @php

                        $total_sangat_setuju=$total_sangat_setuju+$sangat_setuju;
                        $total_setuju=$total_setuju+$setuju;
                        $total_tidak_setuju=$total_tidak_setuju+$tidak_setuju;
                        $total_sangat_tidak_setuju=$total_sangat_tidak_setuju+$sangat_tidak_setuju;
                        $total_responden=$total_sangat_setuju+$total_setuju+$total_tidak_setuju+$total_sangat_tidak_setuju;
                        @endphp

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

                    <th>{{ round($persen_sangat_setuju=$total_sangat_setuju/$total_responden*100, 0) }}%</th>
                    <th>{{ round($persen_setuju=$total_setuju/$total_responden*100, 0)}}% </th>
                    <th>{{ round($persen_tidak_setuju=$total_tidak_setuju/$total_responden*100, 0) }}%</th>
                    <th>{{ round($persen_sangat_tidak_setuju=$total_sangat_tidak_setuju/$total_responden*100, 0) }}%</th>


                </tr>
                </tfoot>
              </table>
            </div>

</div>
</div>

<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-text-width"></i>
                  Kesimpulan
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <blockquote>
                  <p>Berdasarkan tabel diatas.</p>
                  <small>Responden yang menjawab :

                  <ol>
                    <li>
                          Sangat Setuju : {{ round($persen_sangat_setuju=$total_sangat_setuju/$total_responden*100, 0) }}%
                    </li>
                    <li>
                          Setuju : {{ round($persen_setuju=$total_setuju/$total_responden*100, 0)}}%
                    </li>
                    <li>
                          Tidak Setuju : {{ round($persen_tidak_setuju=$total_tidak_setuju/$total_responden*100, 0) }}%
                    </li>
                    <li>
                          Sangat Tidak Setuju : {{ round($persen_sangat_tidak_setuju=$total_sangat_tidak_setuju/$total_responden*100, 0) }}%
                    </li>
                  </ol>
                  </small>
                  <small>Dapat disimpulkan bahwa :

                          <br>
                          {{ round($total_yang_setuju=$persen_sangat_setuju+$persen_setuju, 1) }}% Responden Setuju atas {{ $variabeldata->namavariabel }}
                          <br>
                          {{ round($total_yang_tidak_setuju=$persen_tidak_setuju+$persen_sangat_tidak_setuju, 1) }}% Responden Tidak Setuju atas {{ $variabeldata->namavariabel }}
                  </small>
                </blockquote>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

@endforeach
<div class="col-12">
<div class="card">
            <div class="card-header">
              <h3 class="card-title">Rekapitulasi Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="rekap" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>

                    <th>Variabel</th>
                    <th>Sangat Setuju</th>
                    <th>Setuju</th>

                    <th>Tidak Setuju</th>
                    <th>Sangat Tidak Setuju</th>

                </tr>
                </thead>
                <tbody>
                  @php
                  $urut=1;
                  $total_sangat_setuju=0;
                  $total_setuju=0;
                  $total_tidak_setuju=0;
                  $total_sangat_tidak_setuju=0;
                  $total_persen_sangat_setuju=0;
                  $total_persen_setuju=0;
                  $total_persen_tidak_setuju=0;
                  $total_persen_sangat_tidak_setuju=0;
                  @endphp
                @foreach($variabel as $variabeldata)
                        @foreach($transaction as $transactiondata)
                              @if($variabeldata->id==$transactiondata->id_variabel)
                                  @php
                                    $sangat_setuju=$transactiondata->sangat_setuju;
                                    $setuju=$transactiondata->setuju;
                                    $tidak_setuju=$transactiondata->tidak_setuju;
                                    $sangat_tidak_setuju=$transactiondata->sangat_tidak_setuju;

                                    $total_sangat_setuju=$total_sangat_setuju+$sangat_setuju;
                                    $total_setuju=$total_setuju+$setuju;
                                    $total_tidak_setuju=$total_tidak_setuju+$tidak_setuju;
                                    $total_sangat_tidak_setuju=$total_sangat_tidak_setuju+$sangat_tidak_setuju;
                                    $total_responden=$total_sangat_setuju+$total_setuju+$total_tidak_setuju+$total_sangat_tidak_setuju;

                                  @endphp
                              @else
                                @continue
                              @endif

                        @endforeach
                <tr>
                  <td>{{ $urut }}</td>
                  <td>{{ $variabeldata->namavariabel }}</td>
                  <td>{{ round($persen_sangat_setuju=$total_sangat_setuju/$total_responden*100, 0) }}%</td>
                  <td>{{ round($persen_setuju=$total_setuju/$total_responden*100, 0) }}%</td>
                  <td>{{ round($persen_tidak_setuju=$total_tidak_setuju/$total_responden*100, 0) }}%</td>
                  <td>{{ round($persen_sangat_tidak_setuju=$total_sangat_tidak_setuju/$total_responden*100, 0) }}%</td>
                </tr>


                @php
                  $urut++;
                  $total_persen_sangat_setuju=$total_persen_sangat_setuju+$persen_sangat_setuju;
                  $total_persen_setuju=$total_persen_setuju+$persen_setuju;
                  $total_persen_tidak_setuju=$total_persen_tidak_setuju+$persen_tidak_setuju;
                  $total_persen_sangat_tidak_setuju=$total_persen_sangat_tidak_setuju+$persen_sangat_tidak_setuju;

                  $total_persen=$total_persen_sangat_setuju+$total_persen_setuju+$total_persen_tidak_setuju+$total_persen_sangat_tidak_setuju;

                  $total_sangat_setuju=0;
                  $total_setuju=0;
                  $total_tidak_setuju=0;
                  $total_sangat_tidak_setuju=0;
                @endphp
                @endforeach
                </tbody>
                <tfoot>
                <tr>

                <th colspan="2">Total</th>

                    <th>{{ round($total_persen_sangat_setuju, 0)}}</th>
                    <th>{{ round($total_persen_setuju, 0)}} </th>
                    <th>{{ round($total_persen_tidak_setuju, 0)}}</th>
                    <th>{{ round($total_persen_sangat_tidak_setuju, 0)}}</th>


                </tr>
                <tr>

                <th colspan="2">Persentase Desimal </th>

                    <th>{{ round($persen_ss=$total_persen_sangat_setuju/$total_persen*1, 4)}}</th>
                    <th>{{ round($persen_s=$total_persen_setuju/$total_persen*1, 4)}} </th>
                    <th>{{ round($persen_ts=$total_persen_tidak_setuju/$total_persen*1, 4)}}</th>
                    <th>{{ round($persen_sts=$total_persen_sangat_tidak_setuju/$total_persen*1, 4)}}</th>


                </tr>
                </tfoot>
              </table>
            </div>

</div>
</div>
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
        $('#rekap').DataTable();
    });
@stop
