@extends('layouts.front')
@section('title', 'Paket Wisata')
@section('content')
<section class="ftco-section bg-ekraf">
    <br>
    <br>
    <br>
    <br>
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Paket Wisata <br> {{ $paketwisata->nama_paket_wisata }} </h2>
            <br>
            <h4>Pesan Paket : </h4>
            <h2><a target="_blank" href="https://api.whatsapp.com/send?phone=62{{$paketwisata->kontak}}"><span class="icon-whatsapp"></a><br>
            <p><a target="_blank" href="{{$paketwisata->tour}}" class="btn btn-secondary rounded">More info</a></p>
          </div>
        </div>  
      </div>
    </section>
 <section class="ftco-section ftco-degree-bg bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">{{ $paketwisata->nama_paket_wisata }}</h2>
            <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><p>{{ $paketwisata->lokasi_tempat_wisata }}</p></div>
            </div>
            <p>{{ $paketwisata->deskripsi_singkat }}</p>
            <p>
              <img src="{{asset('uploads/paket-wisata/'.$paketwisata->image)}}" alt="">
            </p>
            <p>{{ $paketwisata->informasi }}</p>
          	<iframe src="{{ $paketwisata->embed_gmaps }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>
@endsection