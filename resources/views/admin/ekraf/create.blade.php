@extends('layouts.master')
@section('title', 'Tambah Data Ekonomi Kreatif')
@section('dashboard', 'Ekonomi Kreatif')
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
          <form method="POST" action="{{ url('admin/add-ekraf') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama Pemilik Usaha</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nama Pemilik Usaha" name="nama">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">No WhatsApp</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="number" class="form-control" placeholder=" No WhatsApp " name="no_whatsapp">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Email</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder=" Email " name="email">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Jenis Kelamin</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <select class="form-control" name="jenis_kelamin">
                                 <?php  $jk=['pria','wanita']; ?>
                                <option selected="selected">Jenis Kelamin</option>
                                @foreach ($jk as $jks)
                                <option value="{{$jks}}">{{$jks}}</option>
                                @endforeach
                            </select>
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Usaha</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-building"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nama Usaha" name="nama_usaha">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Alamat Pemilik Usaha</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-home"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Alamat Pemilik Usaha" name="alamat">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Alamat Lokasi Usaha</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-location"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Alamat Lokasi Usaha" name="lokasi_usaha">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Jenis Usaha</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Jenis Usaha" name="jenis_usaha">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Tahun Berdiri</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar-days"></i></span>
                            </div>
                            <input type="date" class="form-control" placeholder="Tahun Berdiri" name="tahun_berdiri">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Jumlah Karyawan</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                            </div>
                            <input type="number" class="form-control" placeholder=" Jumlah Karyawan " name="jumlah_karyawan">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Modal</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                            </div>
                            <input type="number" class="form-control" placeholder=" Modal " name="modal">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Omset</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                            </div>
                            <input type="number" class="form-control" placeholder=" Omset " name="omset">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Marketplace</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-store"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder=" Marketplace " name="marketplace">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Website</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-globe"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder=" Website " name="website">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Permasalahan</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-triangle-exclamation"></i></span>
                            </div>
                            <textarea name="permasalahan" class="form-control" cols="4" rows="2"></textarea>
                        </div>
                  </div>
                  <!-- <div class="form-group">
                        <label for="exampleInputFile">Foto Produk</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-image"></i></span>
                            </div>
                            <div class="">
                                <input type="file" class="custom-file-input" name="foto_produk">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                  </div>     -->
                  <div class="form-group">
                    <label for="exampleInputFile">Foto Produk</label>
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
                    <label for="nama">Sub Ekraf</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <select class="form-control" name="id_category_sub_ekraf">
                                <option selected="selected">Sub Ekraf</option>
                                @foreach ($category as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Status</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-circle-check"></i></span>
                            </div>
                            <select class="form-control" name="status">
                                 <?php  $status=['Active','Pending','Denied']; ?>
                                <option selected="selected">Status</option>
                                @foreach ($status as $s)
                                <option value="{{$s}}">{{$s}}</option>
                                @endforeach
                            </select>
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