@extends('layouts.master')
@section('title', 'Data Ekonomi Kreatif')
@section('dashboard', 'Ekonomi Kreatif')
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
                    <th>Nama Pemilik Usaha</th>
                    <th>No WhatsApp</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Nama Usaha</th>
                    <th>Alamat Pemilik Usaha</th>
                    <th>Lokasi Usaha</th>
                    <th>Jenis Usaha</th>
                    <th>Tahun Berdiri</th>
                    <th>Jumlah Karyawan</th>
                    <th>Modal</th>
                    <th>Omset</th>
                    <th>Marketplace</th>
                    <th>Website</th>
                    <th>Permasalahan</th>
                    <th>image</th>
                    <th>Sub Ekraf</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?PHP $no=1 ?>
                    @foreach($ekraf as $item)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->no_whatsapp }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->nama_usaha }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->lokasi_usaha }}</td>
                    <td>{{ $item->jenis_usaha }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->tahun_berdiri)->isoFormat('Do MMMM YYYY')}}</td>
                    <td>{{ $item->jumlah_karyawan }}</td>
                    <td>{{ $item->modal }}</td>
                    <td>{{ $item->omset }}</td>
                    <td>{{ $item->marketplace }}</td>
                    <td>{{ $item->website }}</td>
                    <td>{{ $item->permasalahan }}</td>
                    <td><img src="{{asset('uploads/ekraf/'.$item->image)}}" width="250px" height="250px" alt=""></td>
                    <td>{{ $item->CategorySubEkraf->nama }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                      @if($item->status == 'Pending')
                      <a href="{{ url('admin/verified-ekraf/'.$item->id) }}" class="btn btn-success"> Verifikasi Ekraf </a>
                      <a href="{{ url('admin/denied-ekraf/'.$item->id) }}" class="btn btn-danger"> Denied Ekraf </a>
                      @endif
                      <br>
                      <a href="{{ url('admin/edit-ekraf/'.$item->id) }}" class="btn btn-warning"> Edit </a>
                      <a href="{{ url('admin/delete-ekraf/'.$item->id) }}" class="btn btn-danger"> Delete </a> </td>
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