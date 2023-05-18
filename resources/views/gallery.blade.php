@extends('index')
@section('indexbody')
<div class="tm-container">
    <div class="tm-row">
        <!-- Site Header -->
        <div class="tm-right " style="padding-left: 300px;">
            <main class="tm-main pl-5">
                <div id="drink" class="tm-page-content">
                    <!-- Drink Menu Page -->
                    <center>
                        <h2 class="tm-page-fonts ">Gallery</h2>
                    </center>
                    @foreach($gallery as $value)
                    <div id="cold" >
                        <div class="tm-list">
                             <div class="tm-list-item">

                                <img src="/galleryimg/{{$value->image}}" alt="Image" width="200px" height="200px" class="">
                            </div> 
                        </div>
                        </div>
                    @endforeach
                        <!-- <div class="tm-list p-0">
                            <div class="tm-list-item p-0">
                                <div class="tm-list-item-text p-0"> -->
                                    <!-- {{$value->receimage}} -->
                                    <!-- <h3 class="tm-list-item-name">{{$value->receipename}}</h3> -->
                                    <!-- <p class="tm-list-item-description" style="color: white">{{$value->description}}</p> -->
                                <!-- </div>
                            </div>
                        </div> -->
                   
                    <!-- <span class="tm-list-item-price">$10.25</span> -->
                    
                </div>
            </main>
        </div>
    </div>
</div>
@endsection