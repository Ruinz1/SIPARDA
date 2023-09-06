
@extends('layouts.front')
@section('title', 'SIPARDA')
@section('content')
<div class="hero">
	    <section class="home-slider owl-carousel" id="home">
	      <div class="slider-item" style="background-image:url({{asset('front/image/image-hp-1.jpg')}});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
	          <div class="col-md-6 ftco-animate">
	          	<div class="text">
	          		<h2></h2>
		            <h1 class="mb-3"></h1>
	            </div>
	          </div>
	        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url({{asset('front/image/image-hp-2.jpg')}});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
	          <div class="col-md-6 ftco-animate">
	          	<div class="text">
	          		<h2></h2>
		            <h1 class="mb-3"></h1>
	            </div>
	          </div>
	        </div>
	        </div>
	      </div>
	    </section>
	  </div>

      <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Sistem Informasi Pariwisata Daerah</span>
            <h2 class="mb-4">Dinas Pariwisata Sulawesi Tengah</h2>
          </div>
        </div>  
        
      </div>
    </section>

    <!-- Section Paket Wisata -->
    <section class="ftco-section ftco-wrap-about ftco-no-pt ftco-no-pb" id="paket-wisata">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-7 order-md-last d-flex">
						<div class="img img-1 mr-md-2 ftco-animate" style="background-image: url({{asset('front/image/image-dw1.jpg')}});"></div>
						<div class="img img-2 ml-md-2 ftco-animate" style="background-image: url({{asset('front/image/image-dw2.jpg')}});"></div>
					</div>
					<div class="col-md-5 wrap-about pb-md-3 ftco-animate pr-md-5 pb-md-5 pt-md-4">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">Destinasi Wisata</span>
	            <h2 class="mb-4">Recomended</h2>
	          </div>
	          <p>Text</p>
	          
					</div>
				</div>
			</div>
	</section>
    <section class="testimony-section">
      <div class="container">
        <div class="row no-gutters ftco-animate justify-content-center">
        	<div class="col-md-5 d-flex">
        		<div class="testimony-img" style="background-image: url({{asset('front/image/image-pw1.jpg')}});"></div>
        	</div>
          <div class="col-md-7 py-5 pl-md-5">
          	<div class="py-md-5">
	          	<div class="heading-section ftco-animate mb-4">
	          		<span class="subheading">Recomended</span>
			          <h2 class="mb-0">Paket Wisata</h2>
			        </div>
	            <div class="carousel-testimony owl-carousel ftco-animate">	
				@foreach($toppw as $pw)
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">{{$pw->deskripsi_singkat}}</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url({{asset('uploads/paket-wisata/'.$pw->image)}});">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name">{{$pw->nama_paket_wisata}}</p>
		                    <a target="_blank" href="https://goo.gl/maps/WVyT3yvb1tuAjU7H6"><span class="position">{{$pw->lokasi_tempat_wisata}}</span></a><br>
		                    <a target="_blank" href="https://api.whatsapp.com/send?phone=62{{$pw->kontak}}">Hubungi : <span class="icon-whatsapp"></span> </a>
		                  </div>
		                </div>
	                </div>
	              </div>
				@endforeach
				</div>
			</div>
			<p><a href="{{ url('all-paket') }}" class="btn btn-secondary rounded">Lihat Semua</a></p>
		</div>
	    </div>
	    
        </div>
        </div>
      </div>
    </section>
    <!-- End Section Paket Wisata -->

    <!-- Section Event Festival -->
        <section class="ftco-section ftco-no-pb ftco-room" id="event">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Event Festival</span>
            <a href="{{ url('all-event') }}" class="btn btn-primary rounded">Lihat Semua</a>
          </div>
        </div>  
    		<div class="row no-gutters">
				
				@foreach($topevent as $event)
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex ftco-animate">
    					<a href="{{ url('event/'.$event->id) }}" class="img" style="background-image: url({{asset('uploads/event-wisata/'.$event->image)}}"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 text-center">
    							
								<h3 class="mb-3"><a href="#">{{ $event->nama_event }}</a></h3>
								<p class="mb-0"><span class="price mr-1">{{ $event->lokasi_event }}</span></p>
    							<p class="mb-0"><span class="per">{{ \Carbon\Carbon::parse($event->tanggal_event)->isoFormat('Do MMMM YYYY')}}</span></p>
    							<p class="mb-0"><span class="per">{{ $event->deskripsi }}</span></p><br>
	    						<p class="pt-1"><a href="{{ url('event/'.$event->id) }}" class="btn-custom px-3 py-2 rounded">Lihat Detail <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
				@endforeach
				
			</div>
		</section>
    <!-- End Section Event Festival -->

    <!-- Section Ekonomi Kreatif -->
    <section class="ftco-section ftco-menu bg-light" id="ekraf">
			<div class="container-fluid px-md-8">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Ekonomi Kreatif </span>
            <h2>Subsektor Ekraf</h2>
          </div>
        </div>
		<div class="row">
			@foreach($sub as $cat)
        	<div class="col-lg-6 col-xl-4 d-flex">
        		<div class="pricing-entry rounded d-flex ftco-animate">
        			<a href="{{ url('sub-ekraf/'.$cat->slug) }}" class="img" style="background-image: url({{asset('uploads/sub-ekraf/'.$cat->image)}}"></a>
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
							</p>
	        			</div>
        			</div>
        		</div>
        	</div>
        	@endforeach
        	<div class="col-md-12 text-center ftco-animate">
        		<p><a href="{{ url('all-ekraf') }}" class="btn btn-primary rounded">Lihat Semua Subsektor Ekraf</a></p>
        	</div>
            <div class="col-md-12 text-center ftco-animate">
        		<p><a href="{{ url('regis-ekraf') }}" class="btn btn-primary rounded">Registrasi Pelaku Ekraf</a></p>
        	</div>
        </div>
			</div>
	</section>
    <!-- End Section Ekonomi Kreatif -->

    <!-- Blog Section -->
    <!-- <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Read Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3 text-center">
              	<div class="meta mb-2">
                  <div><a href="#">Oct. 30, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3 text-center">
              	<div class="meta mb-2">
                  <div><a href="#">Oct. 30, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3 text-center">
              	<div class="meta mb-2">
                  <div><a href="#">Oct. 30, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 text-center ftco-animate">
        		<p><a href="#" class="btn btn-primary rounded">View All Post</a></p>
        	</div>
      </div>
    </section> -->
    <!-- End Blog Section -->

@endsection