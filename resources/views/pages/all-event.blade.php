@extends('layouts.front')
@section('title', 'All Festival Event')
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
	          	<span class="subheading">Festival Event</span>
	            <h2 class="mb-4"></h2>
                <p>Event yang diselenggarakan oleh dinas pariwisata provinsi sulawesi tengah memiliki tujuan untuk mempromosikan potensi pariwisata daerah sulawesi tengah, menarik wisatawan, serta mengembangkan sektor pariwisata secara keseluruhan.</p>
                <p>Penting bagi dinas pariwisata provinsi sulawesi tengah untuk merencanakan dan mengelola event dengan baik, memastikan promosi yang efektif, dan berfokus pada kualitas pengalaman bagi wisatawan. Event-event semacam ini dapat berkontribusi pada pertumbuhan ekonomi daerah sulawesi tengah dan memperkuat identitas budaya serta daya tarik wisata.</p>
	          </div> 
    			</div>
    		</div>
    	</div>
    </section>
     <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
        @foreach($event as $ev)
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{ url('event/'.$ev->id) }}" class="block-20 rounded" style="background-image: url({{asset('uploads/event-wisata/'.$ev->image)}}">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><p>{{ $ev->lokasi_event }},</p></div>
                  <div><p>{{ \Carbon\Carbon::parse($ev->tanggal_event)->isoFormat('Do MMMM YYYY')}}</p></div>
                </div>
                <h3 class="heading">{{ $ev->nama_event }}</h3>
                <p>{{ $ev->deskripsi }}</p>
                <a href="{{ url('event/'.$ev->id) }}" class="btn btn-secondary rounded">More info</a>
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