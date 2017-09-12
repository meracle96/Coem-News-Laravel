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
                                Kelola Berita
                            </h2>
                            <br>

                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Tambah Berita</button>
                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Tambah Berita</h4>
                                  </div>
                                  <div class="modal-body">
                                      <form action="{{route('berita.store')}}" method="post" enctype="multipart/form-data">
                                          {{csrf_field()}}
                                          <div class="form-group">
                                              <label>Judul Berita</label>
                                              <input type="text" name="judul" placeholder="Masukkan judul berita..." required class="form-control" style="border-bottom:1px solid #777777;">
                                          </div>
                                          <div class="form-group">
                                            <label for="kelas_id">Kategori Berita</label>
                                            <div class="row clearfix">
                                                <div class="col-md-8">
                                                    <select class="form-control show-tick" name="kategori_id">
                                                        @foreach ($kategoris as $kategori)
                                                          <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                  </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label>Isi Berita</label>
                                            <textarea class="form-control" required name="isi" style="border-bottom:1px solid #777777"></textarea>
                                          </div>
                                          <div class="form-group">
                                            <label>Foto Berita</label>
                                            <input type="file" name="foto" required class="form-control"> 
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
                                        <th>Judul</th>
                                        <th>Nama Kategori</th>
                                        <th>Foto</th>
                                        <th>Tanggal Post</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($beritas as $berita)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $berita->judul }}</td>
                                            <td>{{ $berita->kategori->nama }}</td>
                                            <td><img src="{{asset('uploads/berita')}}/{{ $berita->foto }}" width="80"></td>
                                            <td>{{ tglIndo($berita->created_at) }}</td>
                                            <td>
                                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal{{$berita->id}}">Edit</button>
                                              <!-- Modal -->
                                              <div id="myModal{{$berita->id}}" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                  <!-- Modal content-->
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Edit Berita</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('berita.update',['id'=>$berita->id])}}" method="post" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            {{method_field('PUT')}}
                                                            <div class="form-group">
                                                                <label>Judul Berita</label>
                                                                <input type="text" name="judul" value="{{ $berita->judul }}" required class="form-control" style="border-bottom:1px solid #777777; margin-bottom:20px;">
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="kelas_id">Kategori Berita</label>
                                                              <div class="row clearfix">
                                                                  <div class="col-md-8">
                                                                      <select class="form-control show-tick" name="kategori_id">
                                                                          @foreach ($kategoris as $kategori)
                                                                            @if($kategori->id == $berita->kategori_id)
                                                                              <option value="{{ $kategori->id }}" selected>{{ $kategori->nama }}</option>
                                                                            @else
                                                                              <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                                                            @endif
                                                                          @endforeach
                                                                      </select>
                                                                    </div>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                              <label>Isi Berita</label>
                                                              <textarea class="form-control" required name="isi" style="border-bottom:1px solid #777777">{{ $berita->isi }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                              <label>Foto Berita</label>
                                                              <input type="file" name="foto" class="form-control"> 
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
                                              <form action="{{route('berita.destroy',['id'=>$berita->id])}}" method="post">
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