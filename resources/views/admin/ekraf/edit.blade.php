@extends('layouts.master')
@section('title', 'Edit Data Ekonomi Kreatif')
@section('dashboard', 'Ekonomi Kreatif')
@section('content')

<section class="content">
    <div class="container-fluid">
    <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Edit Data Ekraf</h3>

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
          <form method="POST" action="{{ url('admin/update-ekraf/'.$ekraf->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama Pemilik Usaha</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $ekraf->nama }}" placeholder="Nama Pemilik Usaha" name="nama">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">No WhatsApp</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="number" class="form-control" value="{{ $ekraf->no_whatsapp }}" placeholder=" No WhatsApp " name="no_whatsapp">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Email</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $ekraf->email }}" placeholder=" Email " name="email">
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
                                <option value="{{$jks}}" {{ $ekraf->jenis_kelamin == $jks ? 'selected':'' }}>{{$jks}}</option>
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
                            <input type="text" class="form-control" value="{{ $ekraf->nama_usaha }}" placeholder="Nama Usaha" name="nama_usaha">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Alamat Pemilik Usaha</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-home"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $ekraf->alamat }}" placeholder="Alamat Pemilik Usaha" name="alamat">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Alamat Lokasi Usaha</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-location"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $ekraf->lokasi_usaha }}" placeholder="Alamat Lokasi Usaha" name="lokasi_usaha">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Jenis Usaha</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $ekraf->jenis_usaha }}" placeholder="Jenis Usaha" name="jenis_usaha">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Tahun Berdiri</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar-days"></i></span>
                            </div>
                            <input type="date" class="form-control" value="{{ $ekraf->tahun_berdiri }}" placeholder="Tahun Berdiri" name="tahun_berdiri">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Jumlah Karyawan</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                            </div>
                            <input type="number" class="form-control" value="{{ $ekraf->jumlah_karyawan }}" placeholder=" Jumlah Karyawan " name="jumlah_karyawan">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Modal</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                            </div>
                            <input type="number" class="form-control" value="{{ $ekraf->modal }}" placeholder=" Modal " name="modal">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Omset</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                            </div>
                            <input type="number" class="form-control" value="{{ $ekraf->omset }}" placeholder=" Omset " name="omset">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Catatan Keuangan</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                            </div>
                            <input type="number" class="form-control" value="{{ $ekraf->catatan_keuangan }}" placeholder=" Catatan Keuangan " name="catatan_keuangan">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Marketplace</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-store"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $ekraf->marketplace }}" placeholder=" Marketplace " name="marketplace">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Website</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-globe"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $ekraf->website }}" placeholder=" Website " name="website">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Permasalahan</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-triangle-exclamation"></i></span>
                            </div>
                            <textarea name="permasalahan" class="form-control" cols="4" rows="2">{{ $ekraf->permasalahan }}</textarea>
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
                        
                        <input type="file" class="custom-file-input" name="image" value="{{ $ekraf->image }}">
                        <label class="custom-file-label" >Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-globe"></i></span>
                            </div>
                      <div class="custom-file">
                        
                        <input type="file" class="custom-file-input" name="foto_produk">
                        <label class="custom-file-label" >Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="form-group">
                    <label for="nama">Sub Sektor Ekraf</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <select class="form-control" name="id_category_subsektor_ekraf">
                                <option selected="selected">Sub Sektor Ekonomi Kreatif</option>
                                <option value="1">Kriya</option>
                                <option value="2">Seni Pertunjukan</option>
                                <option value="3">Desain Produk</option>
                                <option value="4">Seni Rupa</option>
                                <option value="5">Kuliner</option>
                                <option value="6">Fotografi</option>
                                <option value="7">Musik</option>
                                <option value="8">Arsitektur</option>
                                <option value="9">Desain Interior</option>
                                <option value="10">Fashion</option>
                                <option value="11">Animasi & Film</option>
                                <option value="12">Desain Komunikasi</option>
                                <option value="13">Televisi & Radio</option>
                                <option value="14">Periklanan</option>
                                <option value="15">Penerbitan</option>
                                <option value="16">Aplikasi</option>
                                <option value="17">Pengembangan Game</option>
                            </select>
                        </div>
                  </div> -->
                  <div class="form-group">
                    <label for="nama">Sub Ekraf</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <select class="form-control" name="id_category_sub_ekraf">
                                <option selected="selected">-- Sub Ekraf --</option>
                                @foreach ($category as $item)
                                <option value="{{$item->id}}" {{ $ekraf->id_category_sub_ekraf == $item->id ? 'selected':'' }}>{{$item->nama}}</option>
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
                                <option value="{{$s}}" {{ $ekraf->status == $s ? 'selected':'' }}>{{$s}}</option>
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