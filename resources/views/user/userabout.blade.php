@extends('user.index')
@section('fishbody')
<!-- <div class="tm-container">
    <div class="tm-row"> -->
        <!-- Site Header -->
        <!-- <div class="tm-right"> -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <main class="tm-main">
                    <div id="drink" class="tm-page-content">
                    <center>
                        <h2 class="tm-page-fonts ">User About</h2>
                    </center>

                    <!-- <div class="col-md-6"></div> -->
                    <div class="col-md-12">
                    @foreach($userabout as $value)
                    
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
                    @endforeach
                    </div>
                    </div>
                    </main>
                </div>
            </div>
           
                    <!-- Drink Menu Page -->
                    
                   
                        <!-- <div class="tm-list">
                            <div class="tm-list-item">

                                <img src="/receipieimage/{{$value->receimage}}" alt="Image" width="200px" height="200px" class="">
                            </div>
                        </div> -->
                        
                    </div>
                    <!-- <span class="tm-list-item-price">$10.25</span> -->
                   

@endsection