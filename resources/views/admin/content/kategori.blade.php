@extends('admin.partials.layout')
@section('content')
<section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                           @if ( count( $errors ) > 0 )
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br>        
                                @endforeach
                            </div>
                            @endif
                            <h2>
                                Kelola Kategori Berita
                            </h2>
                            <br>

                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Tambah Kategori Berita</button>
                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Tambah Kategori Berita</h4>
                                  </div>
                                  <div class="modal-body">
                                      <form action="{{route('kategori.store')}}" method="post">
                                          {{csrf_field()}}
                                          <div class="form-group">
                                              <label>Nama Kategori</label>
                                              <input type="text" name="nama" placeholder="Masukkan nama kategori..." required class="form-control" style="border-bottom:1px solid #777777;">
                                          </div>
                                  </div>
                                  <div class="modal-footer">
                                        <input type="submit" name="submit" value="Simpan" class="btn btn-success">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Kategori</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kategoris as $kategori)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kategori->nama }}</td>
                                            <td>
                                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal{{$kategori->id}}">Edit</button>
                                              <!-- Modal -->
                                              <div id="myModal{{$kategori->id}}" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                  <!-- Modal content-->
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Edit Kategori</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('kategori.update',['id'=>$kategori->id])}}" method="post">
                                                            {{csrf_field()}}
                                                            {{method_field('PUT')}}
                                                            <div class="form-group">
                                                                <label>Nama Kategori</label>
                                                                <input type="text" name="nama" value="{{$kategori->nama}}" required class="form-control" style="border-bottom:1px solid #777777;">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                          <input type="submit" name="submit" value="Simpan" class="btn btn-success">
                                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                      </form>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </td>
                                            <td>
                                              <form action="{{route('kategori.destroy',['id'=>$kategori->id])}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <input type="submit" name="submit" value="Hapus" class="btn btn-danger">
                                              </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
@endsection