@extends('admin.header')
@section('adminbody')
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Category</h1>
                </div>
                <div class="col-sm-6">
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
                    <div class="card ">
                        
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/addcategoryaction" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body"> 
                                <div class="form-group">
                                    <label for="exampleInputcategoryname1">Category Name</label>
                                    <input type="text" class="form-control" name="catnam" id="exampleInputcategoryname1" placeholder="Enter category">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputimage4">Image</label>
                                    <input type="file" class="form-control" name="catimag" id="exampleInputimage4" placeholder="enter image">
                                </div>
                                <div class="form-group">
                                  
                                    <div class="input-group">
                                       
                                    </div>
                                </div>
                               
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection