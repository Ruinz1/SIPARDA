@extends('layouts.front')
@section('title', 'Subsektor Ekraf')
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
      					<div class="resto-img rounded" style="background-image: url({{asset('uploads/sub-ekraf/'.$category->image)}}"></div>
      				</div>
      			</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">Sub Sektor Ekonomi Kreatif</span>
	            <h2 class="mb-4">{{$category->nama}}</h2>
                <p>{{$category->informasi}}</p>
	          </div>
    			</div>
    		</div> 
    	</div>
    </section>
     <section class="ftco-section">
        <div class="col-md-15 heading-section text-center ftco-animate">
          <h2>Produk Ekraf {{ $category->nama }}</h2>
          </div>
          <br>
          <br>
          <br>
          <br>
        <div class="container">  
        <div class="row d-flex">
        @foreach($ekraf as $e)
        @if($e->status == 'Active')
        @if( $category->id == $e->id_category_sub_ekraf )
          <div class="col-md-4  ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="" class="block-20 rounded" style="background-image: url({{asset('uploads/ekraf/'.$e->image)}}">
              </a>
              <div class="text mt-3">
                <h3 class="heading"><a href="#">{{ $e->nama_usaha }}</a></h3>
                <p>Pemilik : {{ $e->nama }}</p>
                <p>Kontak : {{ $e->no_whatsapp }}</p>
                <p>Lokasi : {{ $e->lokasi_usaha }}</p>
                <p>Marketplace : {{ $e->marketplace }}</p>
                <p>Website : {{ $e->website }}</p>
              </div>
            </div>
          </div>
        @endif
        @endif
        @endforeach
      </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection