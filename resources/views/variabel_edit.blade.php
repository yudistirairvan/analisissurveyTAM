@extends('themplate.master')

@section('title', 'Edit Variabel')
@section('logo', '../../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Edit Variabel')


@section('content')

<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/variabel/update/{{ $variabel->id }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card-body">
                    <div class="form-group">
                    <label for="kodevariabel">Kode Variabel</label>
                    <input type="text" class="form-control" id="kodevariabel" name="kodevariabel" placeholder="Kode Variabel" required="true" value="{{ $variabel->kodevariabel }}">
                  </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="namavariabel">Nama Variabel</label>
                    <input type="text" class="form-control" id="namavariabel" name="namavariabel" placeholder="Nama Variabel" required="true" value="{{ $variabel->namavariabel }}">
                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit Variabel</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



</div>
@endsection
