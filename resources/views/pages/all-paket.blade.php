@extends('layouts.front')
@section('title', 'All Paket Wisata')
@section('content')
<section class="ftco-section bg-ekraf">
    <br>
    <br>
    <br>
    <br>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
      			<div class="single-slider-resto mb-4 mb-md-0 owl-carousel">
      				<div class="item">
      					<div class="resto-img rounded" style="background-image: url({{asset('front/image/image-pw1.jpg')}});"></div>
      				</div>
      				<div class="item">
      					<div class="resto-img rounded" style="background-image: url({{asset('front/image/image-dw1.jpg')}});"></div>
      				</div>
      			</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">VISIT SULTENG WITH RECOMMENDATION PACKAGE</span>
	            <h2 class="mb-4"></h2>
                <p>Kekayaan akan alam tidak bisa dipungkiri di Indonesia, begitupun di Sulawesi Tengah.
                  Begitu banyak wisata yang bisa dijelajahi, dari wisata pantai, air terjun, goa, patung hingga keindahan wisata sumur raksasa.
                </p>  
                <p>Dengan memenuhi kemudahan dan kenyamanan perjalanan wisata Anda, 
                  terdapat berbagai rekomendasi paket wisata yang dapat memperlancar perjalanan wisata Anda.</p>
                <p>-Bangga Berwisata Di Sulawesi Tengah-</p>
	          </div>
    			</div>
    		</div> 
    	</div>
    </section>
     <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
        @foreach($paketwisata as $pw)
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{ url('paket/'.$pw->id) }}" class="block-20 rounded" style="background-image: url({{asset('uploads/paket-wisata/'.$pw->image)}}">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><p>{{ $pw->nama_tempat_wisata }}</p></div>
                  <div><p>{{ $pw->lokasi_tempat_wisata }}</p></div>
                  <div><a target="_blank" href="https://api.whatsapp.com/send?phone=62{{$pw->kontak}}" class="meta-chat">Kontak: <span class="icon-whatsapp"></span></a></div>
                </div>
                <h3 class="heading">{{ $pw->nama_paket_wisata }}</h3>
                <p>{{ $pw->deskripsi_singkat }}</p>
                <a href="{{ url('paket/'.$pw->id) }}" class="btn btn-secondary rounded">More info</a>
              </div>
            </div>
          </div>
        @endforeach
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class=""><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection