@extends('index')
@section('indexbody')
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Contact Us</h1>
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
                        <form action="/addaboutaction" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle1">Title</label>
                                    <input type="text" class="form-control"  name="title1" id="exampleInputTitle" placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputdescription1">Description</label>
                                    <textarea class="form-control" name="description1" id="exampleInputdescription1" placeholder="Decscription"></textarea>
                                    <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                                </div>
                                <div class="form-group">
                                    <!-- <label for="exampleInputFile">File input</label> -->
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <!-- <label class="custom-file-label" for="exampleInputFile">Choose file</label> -->
                                        </div>
                                        <div class="input-group-append">
                                            <!-- <span class="input-group-text">Upload</span> -->
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
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection