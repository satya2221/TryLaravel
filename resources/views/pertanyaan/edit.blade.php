@extends('Layout.master')

@section('konten')
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">General Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" method="post" action="/pertanyaan/{{$edit->id}}">
                    @csrf
                    @method('PUT')
                      <!-- text input -->
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" value="{{$edit->judul}}">
                          @error('judul')
                              <div class="alert alert-danger"><?php echo $message?></div>
                          @enderror
                      </div>
                      <!-- textarea -->
                      <div class="form-group">
                        <label>isi</label>
                        <textarea class="form-control" name="isi" rows="3" >{{$edit->isi}}</textarea>
                      </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/pertanyaan" class="btn btn-outline-danger">Cancel</a>
                </form>
              </div>
              <!-- /.card-body -->
    </div>
@endsection
