@extends('adminlte.master')

@push('style')
<link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Stock</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items as $key => $item)
            <tr>
              <td> {{ $key + 1 }} </td>
              <td> {{ $item->name }} </td>
              <td> {{ $item->description }} </td>
              <td> {{ $item->price }} </td>
              <td> {{ $item->stock }} </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection

@push('scripts')
<script src="{{ asset('/adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush