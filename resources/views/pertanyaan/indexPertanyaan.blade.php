@extends('Layout.master')

@section('konten')
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar lengkp pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                  @if(session('sukses'))
                      <div class="alert alert-success">
                          <?php echo session('sukses')?>
                      </div>
                  @endif
                <a href="/pertanyaan/create" class="btn btn-outline-danger my-2 mx-2">Buat pertanyaan</a>
                <table class="table table-hover">
                  <thead>
                    <tr>
{{--                      <th>ID</th>--}}
                      <th>Judul</th>
{{--                      <th>Tanggal Buat</th>--}}
{{--                      <th>Tanggal update</th>--}}
                      <th>Isi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($tanya as $key => $value)
                        <tr>
{{--                            <td><?php echo $value->id ?></td>--}}
                            <td><?php echo $value->judul ?></td>
{{--                            <td><?php echo $value->tanggal_buat?></td>--}}
{{--                            <td><?php echo $value->tanggal_perbarui ?></td>--}}
                            <td><?php echo $value->isi?></td>
                            <td>
                                <a href="/pertanyaan/{{$value->id}}" class="btn btn-primary btn-sm my-1">detail</a>
                                <a href="/pertanyaan/{{$value->id}}/edit" class="btn btn-light btn-sm my-1">edit</a>
{{--                                <a href="" class="btn btn-danger btn-sm my-1">delete</a>--}}
                                <form action="/pertanyaan/{{$value->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger btn-sm my-1" value="delete">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" align="center">Pertanyaan Masih kosong</td>
                        </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
    </div>
@endsection
