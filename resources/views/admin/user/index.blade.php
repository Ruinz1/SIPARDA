@extends('layouts.master')
@section('title', 'Data User')
@section('dashboard', 'User')
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
                    <th>Nama User</th>
                    <th>Email User</th>
                    <th>Password</th>
                    <th>Role User</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?PHP $no=1 ?>
                    @foreach($user as $item)
                  <tr>
                    
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->password }}</td>
                    <td>{{ $item->role_as }}</td>
                    <td>
                      <a href="{{ url('admin/edit-user/'.$item->id) }}" class="btn btn-warning"> Edit </a>
                      <a href="{{ url('admin/delete-user/'.$item->id) }}" class="btn btn-danger"> Delete </a></td>
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