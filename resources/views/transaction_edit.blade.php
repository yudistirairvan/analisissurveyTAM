@extends('themplate.master')

@section('title', 'Edit Transaction')
@section('logo', '../../../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Edit Transaction')


@section('content')

<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/transaction/update/{{ $transaction->id }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card-body">
                <div class="form-group">
                    <label for="variabel">Variabel</label>

                    <select name="variabel" class="form-control" required="true">

                    @foreach($variabel as $variabeldata)
                      <option value="{{ $variabeldata->id }}"

                              @if($variabeldata->id==$transaction->id_variabel)
                          selected

                          @endif
                          >{{ $variabeldata->namavariabel }}</option>
                    @endforeach
                     <select>
                  </div>
                </div>
                  <div class="card-body">
                  <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>

                    <select name="pertanyaan" class="form-control" required="true">
                    @foreach($pertanyaan as $pertanyaandata)
                      <option value="{{ $pertanyaandata->id }}"

                      @if($pertanyaandata->id==$transaction->id_pertanyaan)
                          selected

                          @endif
                      >{{ $pertanyaandata->pertanyaan }}</option>
                    @endforeach
                     <select>
                  </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                    <label for="jumlahdata">Jumlah Data</label>
                    <input type="text" class="form-control" id="jumlahdata" name="jumlahdata" placeholder="Jumlah data" required="true" value="{{ $transaction->jumlah_data }}" >
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="sangatsetuju">Sangat Setuju</label>
                    <input type="text" class="form-control" id="sangatsetuju" name="sangatsetuju" placeholder="Jumlah yang sangat setuju" value="{{ $transaction->sangat_setuju }}">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="setuju">Setuju</label>
                    <input type="text" class="form-control" id="setuju" name="setuju" placeholder="Jumlah yang setuju" value="{{ $transaction->setuju }}" >
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="tidaksetuju">Tidak Setuju</label>
                    <input type="text" class="form-control" id="tidaksetuju" name="tidaksetuju" placeholder="Jumlah yang tidak setuju" value="{{ $transaction->tidak_setuju }}" >
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="sangattidaksetuju">Setuju</label>
                    <input type="text" class="form-control" id="sangattidaksetuju" name="sangattidaksetuju" placeholder="Jumlah yang sangat tidak setuju" value="{{ $transaction->sangat_tidak_setuju }}" >
                  </div>

                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit Pertanyaan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



</div>
@endsection
