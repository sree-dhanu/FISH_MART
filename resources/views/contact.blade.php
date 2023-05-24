@extends('index')
@section('indexbody')

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
    label {
        color: aliceblue;
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


                    <!-- //form -->
                    <form action="/addcontactaction" method="post" id="contactform">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputTitle1">Name</label>
                                <input type="text" class="form-control" name="name1" id="name1" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputdescription1">Email</label>
                                <input type="email" class="form-control" name="email1" id="email1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputdescription1">Contact</label>
                                <input type="text" class="form-control" name="contact1" id="contact1" placeholder="Enter Phonenumber">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputdescription1">Message</label>
                                <textarea class="form-control" name="message1" id="message1" placeholder="Message"></textarea>
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
<script type="text/javascript">
    $("#contactform").validate({
        rules: {
            name1: {
                required: true
            },
            email1: {
                required: true,
                email: true
            },
            contact1: {
                required: true,
            },
            message1: {
                required: true
            }
        }
    });
</script>

@endsection

