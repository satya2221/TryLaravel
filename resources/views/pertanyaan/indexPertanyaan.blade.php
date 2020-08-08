@extends('Layout.master')

@section('konten')
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Judul</th>
                      <th>Tanggal Buat</th>
                      <th>Tanggal update</th>
                      <th>Isi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    @foreach($pertanyaan as $key => $value)
                        <tr>
                            <td><?php echo $value->id ?></td>
                            <td><?php echo $value->judul ?></td>
                            <td><?php echo $value->tanggal_buat?></td>
                            <td><?php echo $value->tanggal_perbarui ?></td>
                            <td><?php echo $value->isi?></td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
    </div>
@endsection
