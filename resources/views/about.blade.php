@extends('index')
@section('indexbody')
<!-- <div class="tm-container">
    <div class="tm-row">
         Site Header -->
        <!-- <div class="tm-right " style="padding-left: 300px;">
            <main class="tm-main pl-5">
                <div id="drink" class="tm-page-content">
                    Drink Menu Page -->
                    <!-- <center>
                        <h2 class="tm-page-link ">About Us</h2>
                    </center> -->
                 
                    <!-- <div id="cold" > -->
                        <!-- <div class="tm-list">
                             <div class="tm-list-item">
</div> 
                        </div> -->
                        <!-- <div class="tm-list p-0">
                            <div class="tm-list-item p-0">
                         </div>
                            </div>
                        </div> -->
                    <!-- </div> -->
                    <!-- <span class="tm-list-item-price">$10.25</span> -->
                                  <!-- </div>
            </main>
        </div>
    </div>
</div> -->
<style>


 </style>
<!-- 
<div class="tm-container">
    <div class="tm-row"> -->
        <!-- Site Header -->
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <!-- <div class="tm-right"> -->
            <main class="tm-main">
                <div id="drink" class="tm-page-content"> 
                    <!-- Drink Menu Page -->
                    
                    <center>
                        <h1 class="tm-page-fonts ">About Us</h1>
                    </center>
                                <div class="col-md-6"></div>
                                <div class="clo-md-6">
                               
                    @foreach($about as $value)
                    
                    <div id="cold">
                    <div class="tm-list">
                            <div class="tm-list-item">
                                <div class="tm-black-bg tm-list-item-text">
                                    <!-- {{$value->receimage}} -->
                                    <h3 class="tm-list-item-name">{{$value->title}}</h3>
                                    <p class="tm-list-item-description">{{$value->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <span class="tm-list-item-price">$10.25</span> -->
                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
                        <!-- <div class="tm-list">
                            <div class="tm-list-item">

                                <img src="/receipieimage/{{$value->receimage}}" alt="Image" width="200px" height="200px" class="">
                            </div>
                        </div> -->
                      
               
            </main>
       
@endsection