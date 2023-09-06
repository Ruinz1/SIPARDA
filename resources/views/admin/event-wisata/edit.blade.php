@extends('layouts.master')
@section('title', 'Edit Data Event Wisata')
@section('dashboard', 'Event Wisata')
@section('content')

<section class="content">
    <div class="container-fluid">
    <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Edit Data Event Wisata</h3>

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
          <form method="POST" action="{{ url('admin/update-event-wisata/'.$event->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">    
                  <div class="form-group">
                        <label for="nama">Nama Event Wisata</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-monument"></i></span>
                                </div>
                                <input type="text" class="form-control" value="{{ $event->nama_event }}" placeholder=" Nama Event Wisata " name="nama_event">
                            </div>
                    </div>
                  <div class="form-group">
                        <label for="nama">Lokasi Event Wisata</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-map-location"></i></span>
                                </div>
                                <input type="text" class="form-control" value="{{ $event->lokasi_event }}" placeholder=" Nama Tempat Wisata " name="lokasi_event">
                            </div>
                    </div>
                  <div class="form-group">
                        <label for="nama">Tanggal Event Wisata</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                </div>
                                <input type="date" class="form-control" value="{{ $event->tanggal_event }}" placeholder=" Nama Paket Wisata " name="tanggal_event">
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Deskripsi Event</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-book-open"></i></span>
                                </div>
                                <input type="text" class="form-control" value="{{ $event->deskripsi }}" placeholder=" Deskripsi Event " name="deskripsi">
                            </div>
                    </div> 
                    <div class="form-group">
                        <label for="nama">Informasi</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-circle-info"></i></span>
                            </div>
                            <textarea name="informasi" class="form-control" cols="4" rows="2">{{ $event->informasi }}</textarea>
                            </div>
                    </div>              
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Foto/Gambar Event</label>
                    <img src="{{asset('uploads/event-wisata/'.$event->image)}}" width="150px" height="150px" alt="">
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
                                <input type="text" class="form-control" value="{{ $event->embed_gmaps }}" placeholder=" Embed Maps " name="embed_gmaps">
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