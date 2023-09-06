@extends('layouts.front')
@section('title', 'Event Wisata')
@section('content')
<section class="ftco-section bg-ekraf">
    <br>
    <br>
    <br>
    <br>
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Event Wisata <br> {{ $event->nama_event }} </h2>
            <br>
        </div>  
      </div>
    </section>
 <section class="ftco-section ftco-degree-bg bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">{{ $event->lokasi_event }}</h2>
            <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><p>{{ $event->deskripsi }}</p></div>
            </div>
            <p></p>
            <p>
              <img src="{{asset('uploads/event-wisata/'.$event->image)}}" alt="">
            </p>
            <p>{{ $event->informasi }}</p>
          	<iframe src="{{ $event->embed_gmaps }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section> 
@endsection