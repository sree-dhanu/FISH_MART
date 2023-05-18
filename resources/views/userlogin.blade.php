@extends('index')
@section('indexbody')
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
   
    </style>



<div class="tm-container">
    <div class="tm-row">
        <!-- Site Header -->
        <div class="tm-right " style="padding-left: 300px; ">
            <main class="tm-main pl-5">
                <div id="drink" class="tm-page-content">
                    <!-- Drink Menu Page -->
                    <center>
                        <h1 class="tm-page-fonts ">Login</h1>
                    </center>

                 
                                                        <!-- /.card-header -->


                                                        <!-- //form -->
                                                        <form action="/userloginaction" method="post">
                                                            @csrf
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="exampleInputUser">Username</label>
                                                                    <input type="text" class="form-control" name="user1" id="exampleInputUser" placeholder="Enter username">
                                                                </div>
                                                               
                                                                <div class="form-group">
                                                                    <label for="exampleInputdescription1">Password</label>
                                                                    <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Enter password">
                                                                 </div>

                                                    <!-- /.card-body -->

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Login</button>
                                                    </div>
                                                    </form>

                                                    @if(session('error'))
                                                     <p style="color:red">
                                                      {{session('error')}}
                                                    </p>
                                                    @endif
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