@extends('layouts.master')
@section('title', 'Tambah Data Paket Wisata')
@section('dashboard', 'Paket Wisata')
@section('content')

<section class="content">
    <div class="container-fluid">
    <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Tambah Data Paket Wisata</h3>

            <div class="card-tools">
            </div>
          </div>
          @if($errors->any())
          <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
            @endforeach
          </div>
          @endif
          <form method="POST" action="{{ url('admin/add-paket-wisata') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">    
                  <div class="form-group">
                        <label for="nama">Nama Paket Wisata</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-person-walking"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder=" Nama Paket Wisata " name="nama_paket_wisata">
                            </div>
                    </div>
                  <div class="form-group">
                        <label for="nama">Lokasi Tempat Wisata</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-map-location"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder=" Nama Tempat Wisata " name="lokasi_tempat_wisata">
                            </div>
                    </div>
                  <div class="form-group">
                        <label for="nama">Nama Tempat Wisata</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-monument"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder=" Nama Paket Wisata " name="nama_tempat_wisata">
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Kontak +62</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-monument"></i></span>
                                </div>
                                <input type="number" class="form-control" placeholder=" Kontak " name="kontak">
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Deskripsi Singkat</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-book-open"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder=" Deskripsi Singkat " name="deskripsi_singkat">
                            </div>
                    </div> 
                    <div class="form-group">
                        <label for="nama">Informasi</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-circle-info"></i></span>
                            </div>
                            <textarea name="informasi" class="form-control" cols="4" rows="2"></textarea>
                            </div>
                    </div>              
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Foto</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-image"></i></span>
                            </div>
                      <div class="custom-file">
                        
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" >Choose file</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                        <label for="nama">Embed Maps</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-map"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder=" Embed Maps " name="embed_gmaps">
                            </div>
                    </div> 

                    <div class="form-group">
                        <label for="nama">Tour File</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-file"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder=" Tour File " name="tour">
                            </div>
                    </div> 
                  
                  
            </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            <!-- /.card-body -->
            </div>
    </div>
</section>




@endsection