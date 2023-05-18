@extends('user.index')
@section('fishbody')
<div class="tm-container">
    <div class="tm-row">
        <!-- Site Header -->
        <!-- <div class="tm-right">
            <main class="tm-main">
                <div id="drink" class="tm-page-content"> -->
                    <!-- Drink Menu Page -->

                    <div class="container-fluid">
                        <div class="row">

                            <!-- <div class="col-md-4"></div> -->
                            <div class="col-md-12">
                                <!-- <div class="tm-right"> -->
                                    <main class="tm-main">
                                        <div id="drink" class="tm-page-content">
                                            <center>
                                                <h1 class="tm-page-fonts "><b>Receipes</b></h1>
                                            </center>

                                            @foreach($receipe as $value)
                                            <div id="cold">
                                                <div class="col-md-5">
                                                <div class="tm-list">
                                                    <div class="tm-list-item">

                                                        <img src="/receipieimage/{{$value->receimage}}" alt="Image" width="200px" height="200px" class="">
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-7">
                                                <div class="tm-list">
                                                    <div class="tm-list-item">
                                                        <div class="tm-black-bg tm-list-item-text">
                                                            <!-- {{$value->receimage}} -->
                                                            <h3 class="tm-list-item-name">{{$value->receipename}}</h3>
                                                            <p class="tm-list-item-description">{{$value->method}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- <span class="tm-list-item-price">$10.25</span> -->
                                            @endforeach
                                        </div>
                                            </main>
                                        </div>
                            </div>
   </div>
           
        </div>
    </div>
</div>
@endsection