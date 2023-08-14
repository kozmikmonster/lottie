@extends('layouts.admin')

@section('title','Edit Category')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Category</li>
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
                <h3 class="card-title">Add Category</h3>

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
                    <form role="form" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Parent</label>


                                <select class="form-control select2" name="parent_id" style="width: 100%;">
                                    <option value="0" selected="selected">Main Category</option>
                                    @foreach ($datalist as $rs)
                                        <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif >
                                            {{  \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control"
                            </div>

                            <div class="form-group">
                                <label> Keywords </label>
                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control"
                            </div>


                            <div class="form-group">
                                <label> Description </label>
                                <input type="text" name="description" value="{{$data->description}}" class="form-control"
                            </div>

                            <div class="form-group">
                                <label> Slug </label>
                                <input type="text"  name="slug"  value="{{$data->slug}}" class="form-control"
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="...">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>False</option>
                                    <option>True</option>

                                </select>
                            </div>


                        </div>
                        <!-- /.card-body -->

                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </div>
                <!-- /.card-footer-->
            </div>




            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
