@extends('backend.layout.app')

@section('title','Orders')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Order</li>
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
                <h3 class="card-title">Orders</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>phone</th>
                    <th>Bed Rooms</th>
                    <th>Bath Rooms</th>
                    <th>Extra Service</th>
                    <th>Sub Total</th>
                    <th>Vat-Tax</th>
                    <th>Total</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($orders as $key=>$order)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $order->name }}</td>
                      <td>{{ $order->phone }}</td>
                      <td>
                        <span>Bed Rooms: {{ $order->bed_rooms }}</span><br>
                        <span>Unit Price: ${{ $order->bed_room_unit_price }}</span><br>
                        <span>Total Price: ${{ $order->bed_rooms_total_price }}</span><br>
                      </td>
                      <td>
                        <span>Bath Rooms: {{ $order->bath_rooms }}</span><br>
                        <span>Unit Price: ${{ $order->bath_room_unit_price }}</span><br>
                        <span>Total Price: ${{ $order->bath_rooms_total_price }}</span><br>
                      </td>
                      <td><?php 
                         $extra_service = explode(",", $order->extra_service); 
                         foreach($extra_service as $service){
                           echo $service.'<br>';
                         }
                        ?></td>
                      <td>{{ $order->sub_total }}</td>
                      <td>{{ $order->vat_tax }}</td>
                      <td>{{ $order->final_total }}</td>
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