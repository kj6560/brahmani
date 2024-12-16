@extends('layouts.site')
@section('content')

<section class="page-title" style="background-image:url(images/background/9.jpg);margin-top:245px;">
    <div class="auto-container">
        <h1 style="color:white;">Our Presence</h1>
        <ul class="page-breadcrumb">
            <li><a href="/">home</a></li>
            <li>Our Presence</li>
        </ul>
    </div>
</section>

<div class="container-fluid" style="margin-right: 100px;margin-top: 50px;margin-bottom:100px;">
    <div class="row">
        <div class="column col-lg-4 col-md-4 col-sm-4 mb-3 me-3">
            <a href="/manufacturersCategory" class="btn btn-secondary w-100">Manufacturers Category</a>
        </div>
        <div class="column col-lg-4 col-md-4 col-sm-4 mb-3 me-3">
            <a href="/supliersCategory" class="btn btn-secondary w-100">Suppliers Category</a>
        </div>
        <div class="column col-lg-4 col-md-4 col-sm-4 mb-3 me-3">
            <a href="/exportersCategory" class="btn btn-secondary w-100">Exporters Category</a>
        </div>
    </div>
    <center><label for="countryWise">Countries</label></center>
    <div class="row" id="countryWise" style="margin: 10px;">
        @foreach ($countryWiseData as $key => $value)
            <div class="column col-lg-3 col-md-3 col-sm-3 mb-3 me-3">
                <a href="/{{$value}}" class="btn btn-secondary w-100">{{$key}}</a>
            </div>
        @endforeach
    </div>
    <center><label for="stateWise">States</label></center>
    <div class="row" id="stateWise" style="margin: 10px;">
        @foreach ($stateWiseData as $key => $value)
            <div class="column col-lg-3 col-md-3 col-sm-3 mb-3 me-3">
                <a href="/{{$value}}" class="btn btn-secondary w-100">{{$key}}</a>
            </div>
        @endforeach
    </div>
    <center><label for="cityWise">Cities</label></center>
    <div class="row" id="cityWise" style="margin: 10px;">
        @foreach ($cityWiseData as $key => $value)
            <div class="column col-lg-3 col-md-3 col-sm-3 mb-3 me-3">
                <a href="/{{$value}}" class="btn btn-secondary w-100">{{$key}}</a>
            </div>
        @endforeach
    </div>
</div>




@endsection