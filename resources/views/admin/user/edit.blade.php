@extends('layouts.master')
@section('title', 'Tambah Data User')
@section('dashboard', 'User')
@section('content')

<section class="content">
    <div class="container-fluid">
    <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Tambah Data User</h3>

            <div class="card-tools">
            </div>
          </div>
          @if($errors->any())
          <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
            @endforeach
          </div>
          @endif
          <form method="POST" action="{{ url('admin/update-user/'.$user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama User</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $user->name }}" placeholder="Nama User" name="name">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Email</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" value="{{ $user->email }}" placeholder="  Email " name="email">
                        </div>
                  </div>
                   <div class="form-group">
                    <label for="nama">Password</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" value="{{ $user->password }}" placeholder="  Password " name="password">
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Role</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <select class="form-control" name="role_as">
                                <option selected="selected">{{$user->role_as}}</option>
                                <option value="0">Guest</option>
                                <option value="1">Admin</option>
                                
                            </select>
                        </div>
                  </div>
            </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            <!-- /.card-body -->
            </div>
    </div>
</section>




@endsection