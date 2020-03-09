@extends('themplate.master')

@section('title', 'Edit Pertanyaan')
@section('logo', '../../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Edit Pertanyaan')


@section('content')

<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/pertanyaan/update/{{ $pertanyaan->id }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="card-body">
                    <div class="form-group">
                    <label for="pertanyaan">Pertanyaanl</label>
                    <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Pertanyaan" required="true" value="{{ $pertanyaan->pertanyaan }}">
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
