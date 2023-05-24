@extends('user.index')
@section('fishbody')
<!-- <div class="tm-container">
    <div class="tm-row"> -->
        <!-- Site Header -->
        <div class="container">
            <div class="row">
           
            <div class="col-md-12">
            <main class="tm-main">
                <div id="drink" class="tm-page-content">

                <center>
                        <h2 class="tm-page-fonts ">UserView Orders</h2>
                    </center>

                    <div id="cold">
                       
                        <div class="tm-list">
                            <div class="tm-list-item">
                    <div class="tm-black-bg tm-list-item-text cart">
                        <form action="/proceedaction" method="post" id="regform">
                            @csrf
                            <div class="container">
                                <div class="row ">
                                    <div class="col-md-10">
                                        <table class="w-100 pl-3">
                                            <tr>
                                                <th class="px-5">ID</th>
                                                <th class="px-5">PRODUCT NAME</th>
                                                <th class="px-5">PRICE</th>
                                                <th class="px-5">QUANTITY </th>
                                                <th class="px-5">TOTAL AMOUNT</th>
                                            </tr>
                                            @foreach($uservieworders as $value)
                                            <tr>
                                                <td class="px-5">{{$value->id}}</td>
                                                <td class="px-5">{{$value->productname}}</td>
                                                <td class="px-5"> {{$value->price}}</td>
                                                <td class="px-5"> {{$value->quantity}}</td>
                                                <td class="px-5"> {{$value->totalamount}}</td>
                                            </tr>
                                            @endforeach
                                        </table>  
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>


            </div>
            </div>
        </div>
        <!-- <div class="tm-right pl-5"> -->

                    <!-- Drink Menu Page -->
                 

                    
        
        </main>

    </div>
</div>
</div>
@endsection