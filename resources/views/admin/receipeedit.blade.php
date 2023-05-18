@extends('admin.header')
@section('adminbody')
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Receipe</h1>
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
                        @foreach($receiperesult as $value)
                        <form action="/editreceipeaction/{{$value->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputreceipename">Receipe Name</label>
                                    <input type="text" class="form-control" name="receipename" id="exampleInputreceipename" placeholder="Enter receipename" value="{{$value->receipename}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputincrediants">Incrediants</label>
                                    <textarea  class="form-control"  name="incrediants" id="exampleInputincrediants"  placeholder="enter incrediants" style="height: 170px;" value="{{$value->incrediants}}">{{$value->incrediants}}</textarea>
                                </div>
                                <!-- /div> -->
                                <div class="form-group">
                                    <label for="exampleInputMethod1">Method</label>
                                    <textarea  class="form-control"  name="method" id="exampleInputMethod1"  placeholder="enter method" style="height: 170px;" value="{{$value->method}}">{{$value->method}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputImage3">Image</label> 
                                    <input type="file" class="form-control" name="receipeimg" id="exampleInputImage3" placeholder="enter image" value="{{$value->receimage}}">
                                </div>
                                
                                <div class="form-group">
                                    <!-- <label for="exampleInputFile">File input</label> -->
                                    <div class="input-group">
                                        <!-- <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div> -->
                                        <!-- <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        @endforeach
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