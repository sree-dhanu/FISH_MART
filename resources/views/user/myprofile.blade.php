@extends('user.index')
@section('fishbody')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

    label
    {
        color:aliceblue;
    }
    h1{
        font-size: larger;
    }
   
    </style>



<div class="tm-container">
    <div class="tm-row">
        <!-- Site Header -->
        <div class="tm-right " style="padding-left: 5px; ">
            <main class="tm-main pl-5">
                <div id="drink" class="tm-page-content">
                    <!-- Drink Menu Page -->
                    <center>
                        <h1 class="tm-page-fonts ">My Profile</h1>
                    </center>

                 
                                                        <!-- /.card-header -->


                                                        <!-- //form -->
                                                        @foreach($myprofile as $value)
                                                        <form action="/myprofileaction" method="post">
                                                            @csrf
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="exampleInputTitle1">Name</label>
                                                                    <input type="text" class="form-control" name="rname" id="exampleInputName" placeholder="Enter name" value="{{$value->regname}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputdescription1">Email</label>
                                                                    <input type="email" class="form-control" name="remail" id="exampleInputEmail" placeholder="Enter email" value="{{$value->regemail}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputdescription1">Phone</label>
                                                                    <input type="tel" class="form-control" name="rphone" id="exampleInputContact" placeholder="Enter Phonenumber" value="{{$value->regphone}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputdescription1">Username</label>
                                                                    <input type="text" class="form-control" name="runame" id="exampleInputContact" placeholder="Enter username" value="{{$value->reguname}}">
                                                                 </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputdescription1">Password</label>
                                                                    <input type="password" class="form-control" name="rpassword" id="exampleInputContact" placeholder="Enter password" value="{{$value->regpassword}}">
                                                                 </div>

                                                    <!-- /.card-body -->

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Edit</button>
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