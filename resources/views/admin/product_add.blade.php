@extends('layouts.admin')

@section('title','Add Product')
@section('javascript')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    @endsection
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Product</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">

                    <!-- form start -->
                    <form role="form" action="{{route('admin_product_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label>Parent</label>


                                <select class="form-control select2" name="category_id" style="width: 100%;">

                                    @foreach ($datalist as $rs)
                                        <option value="{{$rs->id}}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" id="title" name="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label> Keywords </label>
                                <input type="text" name="Keywords" class="form-control">
                            </div>

                            <div class="form-group">
                                <label> Description </label>
                                <input type="text" name="Description" class="form-control">
                            </div>

                            <div class="form-group">
                                <label> Price </label>
                                <input type="number" name="price" value="0" class="form-control">
                            </div>

                            <div class="form-group">
                                <label> Quantity </label>
                                <input type="text" name="quantity" class="form-control">
                            </div>


                            <div class="form-group">
                                <label> Minquantity </label>
                                <input type="number" name="minquantity" value="5" class="form-control">
                            </div>

                            <div class="form-group">
                                <label> tax </label>
                                <input type="number" value="18" class="form-control">
                            </div>


                            <div class="form-group">
                                <label> detail </label>
                                <textarea id="detail" name="detail"></textarea>
                                <script>
                                    $(document).ready(function() {
                                        $('#detail').summernote();
                                    });
                                </script>
                            </div>


                            <div class="form-group">
                                <label> Slug </label>
                                <input type="text" name="Slug" class="form-control">
                            </div>

                            <div class="form-group">
                                <label> Image </label>
                                <input type="file" name="image" class="form-control">
                            </div>



                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option selected="selected">False</option>
                                    <option>True</option>
                                </select>
                            </div>


                        </div>
                        <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
                    </form>
                <!-- /.card-footer-->
            </div>




            </div>
            <!-- /.card-body -->


        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection
