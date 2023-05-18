@extends('index')
@section('indexbody')

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

    label{
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
                        <h1 class="tm-page-fonts ">Contact Us</h1>
                    </center>
<!-- 
                    <div id="cold">

                        <div class="tm-list p-0">
                            <div class="tm-list-item p-0">
                                <div class="tm-list-item-text p-0"> -->



                                    <!-- Main content -->
                                    <!-- <section class="content">
                                        <div class="container-fluid">
                                            <div class="row"> -->
                                                <!-- left column -->
                                                <!-- <div class="col-md-12"> -->
                                                    <!-- general form elements -->
                                                    <!-- <div class="card "> -->

                                                        <!-- /.card-header -->


                                                        <!-- //form -->
                                                        <form action="/addcontactaction" method="post">
                                                            @csrf
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="exampleInputTitle1">Name</label>
                                                                    <input type="text" class="form-control" name="name1" id="exampleInputName" placeholder="Enter name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputdescription1">Email</label>
                                                                    <input type="email" class="form-control" name="email1" id="exampleInputEmail" placeholder="Enter email">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputdescription1">Contact</label>
                                                                    <input type="text" class="form-control" name="contact1" id="exampleInputContact" placeholder="Enter Phonenumber">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputdescription1">Message</label>
                                                                    <textarea class="form-control" name="message1" id="exampleInputmessage1" placeholder="Message"></textarea>
                                                                </div>

                                                                <!-- <div class="card-footer">
                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                </div> -->



                                                                <!-- <div class="input-group"> -->
                                                                    <!-- <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                           <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                                 </div> -->
                                                                    <!-- <div class="input-group-append">
                                             <span class="input-group-text">Upload</span> 
                                        </div> -->
                                                                <!-- </div>
                                                            </div>

                                                    </div> -->


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










                            <!-- End form -->
                        <!-- </div>
                    </div>
                </div>
        </div>


    </div>
    </main>
</div>
</div>
</div> -->
@endsection