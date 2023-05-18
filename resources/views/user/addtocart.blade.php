@extends('user.index')
@section('fishbody')

<script>
     var price,quantity,total;
    $(document).ready(function(){
        $("#qty1").on("change",function(){
          
            price=parseInt($("#price").val());
            //alert(price)
            quantity=parseInt($("#qty1").val());
            total=$("#tot1").val(quantity*price);
         
        })
    })
    </script>
<div class="container">
    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
 <!--<div class="tm-right">
            <main class="tm-main">
                <div id="" class="tm-page-content"> -->
                    <!-- Drink Menu Page -->
                    <center>
                        <h2 class="tm-page-link "> Add To Cart</h2>
                    </center>

                    <!-- <div id="cold">
                        <div class="tm-list">
                            <div class="tm-list-item">
                                 -->
                                 @foreach($addcart as $value)
                       <form action="/addtocartaction/{{$value->id}}" method="post">
                        @csrf
                       <div class="row "> 
                       
                      
                       
                    <div class="col-md-4 product">
                           <div class="card ">
                               <div class="card-body bg-info">
                              
                                 <center>  <img src="/productimage1/{{$value->productimage}}" alt="Image" width="200px" height="200px" class=""><br>
                                   
                                   <label> Name:{{$value->productname}}</label><br>
                                   
                                   <label id="">Price:{{$value->price}} </label><br>
                                   <input type="hidden" value="{{$value->price}}"id="price">
                                   <label>Qty:<input type="number" name="qty" id="qty1" value="1" min="1"></label><br>
                                   <label> Total:<input type="text" name="total" id="tot1" value="{{$value->price}}"></label><br>
                                   <button type="submit" class=" bg bg-primary" value="Cart" >submit</button>
                                 </center>
                               </div>
                           </div>
                       </div>
                       
                       @endforeach
                   </div>
                       </form>          
                   
                </div>
                <!-- <img src="" alt="Image" width="200px" height="200px" class=""> -->

                <!-- <div class="tm-list">
                            <div class="tm-list-item">
                                <div class="tm-black-bg tm-list-item-text">
                                    
                                </div> 
                            </div>
                      
                    
                    <span class="tm-list-item-price">$10.25</span> -->

        </div>
        </main>
    </div>
</div>
</div>
@endsection