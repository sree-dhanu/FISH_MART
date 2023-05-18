@extends('user.index')
@section('fishbody')
<!-- <script>
    var grandtotal,countnum,count;
    $(document).ready(function(){
        $("#total").on("change",function(){
            countnum=count(parseInt($("#total").val()));
            alert(countnum);
            // grandtotal=parseInt($("#total").text());

            // for(count=0;count<=countnum;count++)
            // { 
            //     grandtotal=grandtotal+1;
            // }
          
        })
    })
    </script> -->
<div class="tm-container">
    <div class="tm-row">
        <!-- Site Header -->
        <div class="tm-right pl-5">
            <main class="tm-main">
                <div id="drink" class="tm-page-content">
                    <!-- Drink Menu Page -->
                    <center>
                        <h2 class="tm-page-link ">View Cart</h2>
                    </center>


                    <!-- <div id="cold">
                       
                        <div class="tm-list">
                            <div class="tm-list-item"> -->
                    <div class="tm-black-bg tm-list-item-text cart">
                          <form action="/proceedaction" method="post">
                            @csrf
                            <div class="container">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <table class="w-100 pl-3">
                                            <tr>
                                                <th class="px-5">PRODUCT NAME</th>
                                                <th class="px-5">PRODUCT IMAGE</th>
                                                <th class="px-5">PRICE</th>
                                                <th class="px-5">QUANTITY </th>
                                                <th class="px-5">TOTAL AMOUNT</th>
                                            </tr>
                                            @foreach($cart as $value)
                                            <tr>

                                                <td class="px-5">{{$value->productname}}</td>
                                                <td class="px-5"> <img src="/productimage1/{{$value->productimage}}" alt="Image" width="200px" height="200px" class=""></td>
                                                <td class="px-5"> {{$value->price}}</td>

                                                <td class="px-5"> {{$value->quantity}}</td>
                                                
                                                <td class="px-5"> {{$value->totalamount}}</td>
                                                <!-- <input type="hidden" value="{{$value->totalamount}}" id="total"> -->
                                                 <td class="px-3"><a href="/cartdelete/{{$value->id}}" class="btn btn-info">Delete</td> 
                                                
                                            </tr>
                                            @endforeach
                                            <tr>
                                                @foreach($sum as $total)
                                                <td>Grand Total: 
                                                    <input type="text" class="form-control" name="gtotal" value="{{$total->cartsum}}">
                                                    <br>
                                                </td>
                                                @endforeach
                                            </tr>
                                           <tr>
                                                <td class="px-5 py-3"><a href="/userviewproducts" class="form-control btn btn-primary" >Add Product</a></td>
                                                <td class="px-5"> <input type="submit" class="form-control btn btn-primary" name="sub" value="Proceed"></td>
                                            </tr>
                                   
                                    </div>   
                                </div>
                            </div>
                            
                        </form>
                 </div>
                </div>
                
                </div>
            </main>
           
        </div>
    </div>
</div>
@endsection