@extends('adminlte.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Create Item</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
  
        <!-- Default box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="/items" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
              </div>
              <div class="form-group">
                <label for="description">Description: </label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Enter description">
              </div>
              <div class="form-group">
                <label for="stock">Stock: </label>
                <input type="number" name="stock" class="form-control" id="stock" placeholder="Enter stock">
              </div>
              <div class="form-group">
                <label for="price">price: </label>
                <input type="number" name="price" class="form-control" id="price" placeholder="Enter price">
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content --> 
@endsection

@push('scripts')
    <script>
      var item = ["ini", "contoh"];
      console.log("ini items: ", item);
    </script>
@endpush