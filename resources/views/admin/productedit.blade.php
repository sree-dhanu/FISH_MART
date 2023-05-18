@extends('admin.header')
@section('adminbody')
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Products</h1>
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
                        @foreach($editproduct as $value)
                        <form action="/editproductaction/{{$value->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputpname1">Product name</label>
                                    <input type="text" class="form-control" name="productname" id="exampleInputpname1" placeholder="Enter product name" value="{{$value->productname}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputcategory1">Category</label>
                                    <select class="form-control" name="category" id="exampleInputcategory1">
                                        <option value="select">Select</option>
                                        @foreach($cat as $value) 
                                         <option value="{{$value->id}}">{{$value->catname}}</option> 
                                        @endforeach
                                    </select>
                                    <!-- <input type="text" class="form-control" name="category" id="exampleInputcategory1" placeholder="enter category"> -->
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputpriceKg1">Price/Kg</label>
                                    <input type="text" class="form-control"  name="pricekg" id="exampleInputpriceKg1" placeholder="enter price" value="{{$value->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputimg2">Image</label>
                                    <input type="file" class="form-control"  name="productimage" id="exampleInputimg2" placeholder="enter image of product" value="{{$value->productimage}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputtotalstock">Total Stock</label>
                                    <input type="text" class="form-control"  name="totalstock" id="exampleInputtotalstock" placeholder="enter total stock" value="{{$value->totstock}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputavailablestock">Available Stock</label>
                                    <input type="text" class="form-control"  name="availablestock" id="exampleInputavailablestock" placeholder="enter available stock" value="{{$value->availstock}}">
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