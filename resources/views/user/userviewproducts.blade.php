@extends('user.index')
@section('fishbody')

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          

            <span class="tm-site-name brand-text font-weight-light">
                <center>
                    <h1 class="tm-page-fonts "><b>View Products</b></h1>
                </center>
            </span>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Category
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach($category as $value)
                    <a class="dropdown-item btn" href="/view/{{$value->id}}" >{{$value->catname}}</a><br>
                    @endforeach
                </div>
            </div>
            <!--  <input type="submit" name="catsearch" value="Search"> -->

            <!-- <div id="cold">
                        <div class="tm-list">
                            <div class="tm-list-item">
                                 -->
            <div class="row ">
                @foreach($product as $value)
                <div class="col-md-4 product">
                    <div class="card ">
                        <div class="card-body bg-info">

                            <center> <img src="/productimage1/{{$value->productimage}}" alt="Image" width="200px" height="200px" class=""><br>

                                <label> Name:{{$value->productname}}</label><br>

                                <label>Price:{{$value->price}} </label><br>
                                <a href="/addtocart/{{$value->id}}" class=" btn btn-primary">Cart</a>

                            </center>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
    </main>
</div>
</div>
</div>
@endsection