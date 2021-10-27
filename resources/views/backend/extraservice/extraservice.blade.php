@extends('backend.layout.app')

@section('title','Extra Services')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Extra Service</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Extra Service</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                	<a href="{{ url('/admin/add-edit-extraservice') }}" class="btn btn-primary btn-sm">Add Extra Service</a>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>title</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Create Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($extraservices as $key=> $service)
                    <tr>
                    	<td>{{ $key+1 }}</td>
                      <td>{{ $service['title'] }}</td>
                      <td>{{ $service['price'] }}</td>
                      <td>{{ $service['status'] }}</td>
                      <td>
                        {{ $service['created_at']->toDateString() }}
                      </td>
                      <td>
                        <a href="{{ url('admin/add-edit-extraservice/'.$service['id'] ) }}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                        <a record="extraservice" recordid="{{ $service['id'] }}" class="btn btn-sm btn-danger confirmDelete"><i class="fas fa-times"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection