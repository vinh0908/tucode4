@extends('admin.layout')

@section('admin.content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Post Add</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Post Add</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Post Add</h3>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" method="post" action="{{ route('post.save') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" value="{{ old('name') }}" name="name"
                                            class="form-control @error('name') {{ 'is-invalid' }} @enderror" id="name"
                                            placeholder="Abc">

                                        @error('name')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Datetime</label>
                                        <input type="text" name="datetime" class="form-control" id="exampleInputPassword1"
                                            >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Description</label>
                                        <textarea name="des" class="ckeditor form-control @error('des') {{ 'is-invalid' }} @enderror">{{ old('des') }}</textarea>
                                        @error('des')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input"
                                                    id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection



@section('my-script')
    <script type="text/javascript">
        $(document).ready(function() {

            $('#name').keyup(function() {
                var title = $("#name").val();
                // console.log(title);
                $.ajax({
                    type: 'POST', //method of form
                    url: "{{ route('post.get_slug') }}", // action of from
                    data: {
                        title: title,
                        _token: "{{ csrf_token() }}"
                    }, // data of form
                    success: function(data) {
                        // console.log(data);
                        $('#slug').val(data.slug);
                    },
                });
            });

            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
