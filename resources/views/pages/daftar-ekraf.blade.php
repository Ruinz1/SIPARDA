@extends('layouts.front')
@section('title', 'Daftar Ekraf')
@section('content')


<section class="ftco-section contact-section bg-ekraf">
    @if($errors->any())
          <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
            @endforeach
          </div>
    @endif
    @if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <br>
    <br>
    <br>
      <div class="container">
          <div class="row block-3">
            <div class="col-md-12 d-flex">
            <form method="POST" action="{{ url('regis-ekraf') }}" enctype="multipart/form-data" class="bg-white p-5 contact-form">
                @csrf    
                    <h2>Daftar Pelaku Ekraf</h2>
                    <div class="form-group">
                        <label for="">Nama Pelaku Usaha</label>
                        <input type="text" class="form-control" placeholder=" Nama Pelaku Usaha " name="nama">
                    </div>
                    <div class="form-group">
                        <label for="">No WhatsApp </label>
                        <input type="text" class="form-control" placeholder=" No WhatsApp " name="no_whatsapp">
                    </div>
                    <div class="form-group">
                        <label for="">Email </label>
                        <input type="email" class="form-control" placeholder=" Email " name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin </label>
                        <select class="form-control" name="jenis_kelamin">
                                <option selected="selected">Jenis Kelamin</option>
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>   
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Usaha </label>
                        <input type="text" class="form-control" placeholder=" Nama Usaha " name="nama_usaha">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Pemilik Usaha </label>
                        <input type="text" class="form-control" placeholder=" Alamat Pemilik Usaha " name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="">Lokasi Usaha </label>
                        <input type="text" class="form-control" placeholder=" Lokasi Usaha " name="lokasi_usaha">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Usaha </label>
                        <input type="text" class="form-control" placeholder=" Jenis Usaha " name="jenis_usaha">
                    </div>
                    <div class="form-group">
                        <label for="">Tahun Berdiri</label>
                        <input type="date" class="form-control" placeholder=" Tahun Berdiri " name="tahun_berdiri">
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Karyawan </label>
                        <input type="number" class="form-control" placeholder=" Jumlah Karyawan " name="jumlah_karyawan">
                    </div>
                    <div class="form-group">
                        <label for="">Modal </label>
                        <input type="number" class="form-control" placeholder=" Modal " name="modal">
                    </div>
                    <div class="form-group">
                        <label for="">Omset </label>
                        <input type="number" class="form-control" placeholder=" Omset " name="omset">
                    </div>
                    <div class="form-group">
                        <label for="">Marketplace </label>
                        <input type="text" class="form-control" placeholder=" Marketplace " name="marketplace">
                    </div>
                    <div class="form-group">
                        <label for="">Website (Opsional)</label>
                        <input type="text" class="form-control" placeholder=" Website " name="website">
                    </div>
                    <div class="form-group">
                        <label for="">Permasalahan)</label>
                        <textarea name="permasalahan" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div> 
                    <div class="form-group">
                        <label for="">Foto Produk</label>
                        <input type="file" class="form-control" placeholder=" Website " name="image">
                    </div> 
                    <div class="form-group">
                        <label for="">Sub Sektor Ekonomi Kreatif </label>
                        <select class="form-control" name="id_category_sub_ekraf">
                                <option selected="selected">Sub Ekraf</option>
                                @foreach ($category as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary py-3 px-5" >Daftar</button>
                    </div>
                     
                </form>
            </div>
      </div>
    </section>
@endsection