@extends('layouts.front')
@section('title', 'All Ekonomi Kreatif')
@section('content')
<section class="ftco-section ftco-menu bg-ekraf" id="ekraf">
    <br>
    <br>
    <br>
    <div class="container-fluid px-md-8">
		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Ekonomi Kreatif </span>
            <h2>Subsektor Ekraf</h2>
          </div>
        </div>
		<div class="row">
			@foreach($category as $cat)
        	<div class="col-lg-6 col-xl-4 d-flex">
        		<div class="pricing-entry rounded d-flex ftco-animate">
        			<a href="{{ url('ekraf/'.$cat->slug) }}" class="img" style="background-image: url({{asset('uploads/sub-ekraf/'.$cat->image)}}"></a>
        			<div class="desc p-4">
	        			<div class="d-md-flex text align-items-start">
						
	        				<h3><span>{{ $cat->nama }}</span></h3>
	        				
	        			</div>
	        			<div class="d-block">
	        				<p>UMKM Terdaftar :  
							@if( $cat->id == 1 )	
								{{$kriya}}
							@endif
							@if( $cat->id == 2 )	
								{{$sp}}
							@endif
							@if( $cat->id == 3 )	
								{{$dp}}
							@endif
                            @if( $cat->id == 4 )	
								{{$sr}}
							@endif
                            @if( $cat->id == 5 )	
								{{$kuliner}}
							@endif
                            @if( $cat->id == 6 )	
								{{$fotografi}}
							@endif
                            @if( $cat->id == 7 )	
								{{$musik}}
							@endif
                            @if( $cat->id == 8 )	
								{{$arsitektur}}
							@endif
                            @if( $cat->id == 9 )	
								{{$di}}
							@endif
                            @if( $cat->id == 10 )	
								{{$fashion}}
							@endif
                            @if( $cat->id == 11 )	
								{{$af}}
							@endif
                            @if( $cat->id == 12 )	
								{{$dk}}
							@endif
                            @if( $cat->id == 13 )	
								{{$tvd}}
							@endif
                            @if( $cat->id == 14 )	
								{{$iklan}}
							@endif
                            @if( $cat->id == 15 )	
								{{$penerbitan}}
							@endif
                            @if( $cat->id == 16 )	
								{{$apk}}
							@endif
                            @if( $cat->id == 17 )	
								{{$pg}}
							@endif

							</p>
	        			</div>
        			</div>
        		</div>
        	</div>
        	@endforeach
        </div>
			</div>
	</section>
    <section class="ftco-section bg-light">    
    <div class="container-fluid px-md-8">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Daftar Katalog Produkmu ke Ekonomi Kreatif Sulteng </span>
            <h2>Daftar Menjadi Pelaku Ekraf</h2>
            <div class="col-md-12 text-center ftco-animate">
        		<p><a href="{{ url('regis-ekraf') }}" class="btn btn-primary rounded"> Registrasi Sekarang! </a></p>
        	</div>
          </div>
        </div>
</section>
@endsection