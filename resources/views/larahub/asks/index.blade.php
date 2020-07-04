@extends('adminlte.master')

@push('style')
<link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create Pertanyaan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item">Pertanyaan</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable Pertanyaan</h3>
        <div class="text-right">
          <a href="/pertanyaan/create">
            <button class="btn btn-primary">+ Add Data</button>
          </a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Like</th>
            <th>Dislike</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($asks as $key => $ask)
              <tr>
                <td> {{ $key + 1 }} </td>
                <td> {{ $ask->judul }} </td>
                <td> {{ $ask->isi }} </td>
                <td> {{ $ask->like }} </td>
                <td> {{ $ask->dislike }} </td>
                <td> 
                  <a href="/pertanyaan/{{ $ask->id }}"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a>
                  <a href="/jawaban/{{ $ask->id }}/create"><button class="btn btn-warning btn-sm"><i class="fas fa-plus"></i></button></a>
                  <a href="/pertanyaan/{{ $ask->id }}/edit"><button class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button></a>
                  <form action="/pertanyaan/{{$ask->id}}" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button></a>
                  </form>
                </td>
              </tr>
          @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Isi</th>
              <th>Like</th>
              <th>Dislike</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
</section>
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