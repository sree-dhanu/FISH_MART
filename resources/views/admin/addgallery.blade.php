@extends('admin.header')
@section('adminbody')
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Gallery</h1>
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
                        <form action="/addgalleryaction" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputimgname1">Name</label>
                                    <input type="text" class="form-control" name="galleryname" id="exampleInputimgname1" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputImage1">Image</label>
                                    <input type="file" class="form-control" name="imagename" id="exampleInputImage1" placeholder="Enter image">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputdescription2"> Description</label>
                                    <textarea class="form-control" name="description2" id="exampleInputdescription2" placeholder="Decscription"></textarea>
                                    
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