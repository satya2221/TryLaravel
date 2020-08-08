@extends('Layout.master')

@section('konten')
    <div class="card card-primary my-2 ml-2">
              <div class="card-header">
                <h3 class="card-title">Buat Pertanyaanmu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="/pertanyaan">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{old('judul','')}}" id="exampleInputEmail1" placeholder="Judul.." required>
                    @error('judul')
                      <div class="alert alert-danger"><?php echo $message?></div>
                    @enderror
                  </div>
{{--                  <div class="form-group">--}}
{{--                    <label for="exampleInputPassword1">Password</label>--}}
{{--                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
{{--                  </div>--}}
                  <div class="form-group">
                      <label for="tanya">Pertanyaan</label>
                    <textarea class="form-control" id="tanya" name="isi" rows="3" placeholder="Enter ..." required>
                        {{old('isi','')}}
                    </textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
    </div>
@endsection
