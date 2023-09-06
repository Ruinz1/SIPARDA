@extends('layouts.master')
@section('title', 'Data Paket Wisata')
@section('dashboard', 'Paket Wisata')
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
                    <th>Nama Paket Wisata</th>
                    <th>Lokasi Tempat Wisata</th>
                    <th>Nama Tempat Wisata</th>
                    <th>Kontak</th>
                    <th>Deskripsi</th>
                    <th>Informasi</th>
                    <th>Gambar</th>
                    <th>Embed</th>
                    <th>Tour</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?PHP $no=1 ?>
                    @foreach($paketwisata as $item)
                  <tr>
                    
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nama_paket_wisata }}</td>
                    <td>{{ $item->lokasi_tempat_wisata }}</td>
                    <td>{{ $item->nama_tempat_wisata }}</td>
                    <td>{{ $item->kontak }}</td>
                    <td>{{ $item->deskripsi_singkat }}</td>
                    <td>{{ $item->informasi }}</td>
                    <td><img src="{{asset('uploads/paket-wisata/'.$item->image)}}" width="150px" height="150px" alt=""></td>
                    <td>{{ $item->embed_gmaps }}</td>
                    <td>{{ $item->tour }}</td>
                    <td class="hide-on-print-download">
                      <a href="{{ url('admin/edit-paket-wisata/'.$item->id) }}" class="btn btn-warning"> Edit </a>
                      <a href="{{ url('admin/delete-paket-wisata/'.$item->id) }}" class="btn btn-danger"> Delete </a></td>
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