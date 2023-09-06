@extends('layouts.master')
@section('title', 'Data Event Wisata')
@section('dashboard', 'Event Wisata')
@section('content')
<style>
    @media print {
        .hide-on-print-download {
            display: none;
        }
    }

    @media screen {
        .hide-on-print-download-screen {
            display: none;
        }
    }
</style>
 <div class="card">
  @if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
  @endif
  
              <div class="card-header">
                <h3 class="card-title">Data @yield('dashboard')</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>  
                 <tr>
                    <th>No</th>
                    <th>Nama Event Wisata</th>
                    <th>Lokasi Event Wisata</th>
                    <th>Tanggal Event Wisata</th>
                    <th>Deskripsi</th>
                    <th>Informasi</th>
                    <th>Gambar</th>
                    <th>Embed Gmaps</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?PHP $no=1 ?>
                    @foreach($event as $item)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nama_event }}</td>
                    <td>{{ $item->lokasi_event }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->tanggal_event)->isoFormat('Do MMMM YYYY')}}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->informasi }}</td>
                    <td><img src="{{asset('uploads/event-wisata/'.$item->image)}}" width="150px" height="150px" alt=""></td>
                    <td>{{ $item->embed_gmaps }}</td>
                    <td class="hide-on-print-download">
                      <a href="{{ url('admin/edit-event-wisata/'.$item->id) }}" class="btn btn-warning"> Edit </a>
                      <a href="{{ url('admin/delete-event-wisata/'.$item->id) }}" class="btn btn-danger"> Delete </a></td>
                  </tr>
                 @endforeach
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    
   
@endsection