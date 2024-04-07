@extends('admin.layout')

@section('admin.contentpost')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Post</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Post</li>
          </ol>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Post</h3>
              <div class="text-right">
                <a class="btn btn-primary" href="{{ route('post.add') }}">Add</a>
              </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Image</th>
                  <th>Datetime</th>
                  <th>Name</th>
                  <th>Desc</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($datas as $data)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @php
                          $image = empty($data->image) ? 'image_post_default.png' : $data->image;
                          @endphp
                      <img src="{{ asset('images')."/".$image }}" alt="{{ $image }}"
                      width="150" height="150" />
                    </td>
                    <td>{{ $data->datetime }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->des }}</td>
                    <td>{{ date('d-m-Y', strtotime($data->created_at)) }}</td>
                    <td>
                      <div class="row">
                        <form action="{{ route('post.delete', [$data->id]) }}" method="POST">
                          @csrf
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('post.detail', [$data->id]) }}" class="btn btn-primary">Edit</a>
                      </div>
                    </td>
                  </tr>
                @endforeach


              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection
