@extends('admin.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <div class="container-full">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Category </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <form method="post" action="{{ url('category/' . $category->id) }}" enctype="multipart/form-data"
                        novalidate>
                        @csrf
                        @method('put')

                        <input type="hidden" name="id" value="{{ $category->id }}">
                        <div class="form-group">
                            <h5>Category name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="category_name"
                                    class="form-control  @error('category_name') is-invalid @enderror"
                                    value="{{ old('category_name', $category->category_name) }}">
                                @error('category_name')
                                    <div class="invalid-feedback text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Category icon <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="category_icon"
                                    class="form-control  @error('category_icon') is-invalid @enderror"
                                    value="{{ old('category_icon', $category->category_icon) }}">
                                @error('category_icon')
                                    <div class="invalid-feedback text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="text-xs-right mt-2">
                            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
                        </div>
                    </form>


                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->

    </div>
@endsection
