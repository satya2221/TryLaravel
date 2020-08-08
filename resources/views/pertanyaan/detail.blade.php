@extends('Layout.master')

@section('konten')
    <div class="card card-default">
          <div class="card-header">
            <h1 class="card-title"><strong>{{$perlihatkan->judul}}</strong></h1>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body" style="display: block;">
            <div class="row">
                 <div class="form-group">
                  <label>Pertanyaan</label>
                     <input type="text" readonly class="form-control-plaintext" value=" {{$perlihatkan->isi}}">
                </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tanggal Dibuat</label>
                  <input type="text" readonly class="form-control-plaintext" value=" {{$perlihatkan->tanggal_buat}}">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Tanggal Diperbarui</label>
                    <input type="text" readonly class="form-control-plaintext" value=" {{$perlihatkan->tanggal_perbarui}}">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Penanya</label>
                    <input type="text" readonly class="form-control-plaintext" value=" {{$perlihatkan->profil_id}}">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Best Answer</label>
                    <input type="text" readonly class="form-control-plaintext" value=" {{$perlihatkan->best_jawaban}}">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer" style="display: block;">
              <a href="/pertanyaan/{{$perlihatkan->id}}/edit" class="btn btn-info">Edit info</a>
              <a href="/pertanyaan" class="btn btn-primary">Daftar Pertanyaan</a>
          </div>
        </div>
@endsection
