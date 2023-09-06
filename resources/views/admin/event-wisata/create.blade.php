@extends('layouts.master')
@section('title', 'Tambah Data Event Wisata')
@section('dashboard', 'Event Wisata')
@section('content')

<section class="content">
    <div class="container-fluid">
    <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Tambah Data Event Wisata</h3>

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
          <form method="POST" action="{{ url('admin/add-event-wisata') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">    
                  <div class="form-group">
                        <label for="nama">Nama Event Wisata</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-monument"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder=" Nama Event Wisata " name="nama_event">
                            </div>
                    </div>
                  <div class="form-group">
                        <label for="nama">Lokasi Event Wisata</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-map-location"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder=" Nama Tempat Wisata " name="lokasi_event">
                            </div>
                    </div>
                  <div class="form-group">
                        <label for="nama">Tanggal Event Wisata</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                </div>
                                <input type="date" class="form-control" placeholder=" Nama Paket Wisata " name="tanggal_event">
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Deskripsi Event</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-book-open"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder=" Deskripsi Event " name="deskripsi">
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
                    <label for="exampleInputFile">Foto/Gambar Event</label>
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