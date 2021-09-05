@extends('master')
@section('content')
<!-- tiêu đề -->
<div class="container hometitle">
    <div class="row text-center">
        <div class="col-md-1 col-sm-8"></div>
        <div class="col-lg-12 col-md-10 col-sm-8">
            <img class="homelogo" src="{{asset('images/logo1.png')}}" alt="logo">
            <p class="maintitle">THE FIRST REWARDPAD IN CRYPTO WORLD</p>
        </div>
        <div class="col-md-1 col-sm-8"></div>
    </div>
</div>

<div class="container-fluid homeinput" style="padding-top: 80px;">
    <!-- row 1 -->
    <div class="row text-center">
        <div class="col"></div>

        <div class="col-lg-4 col-md-6 col-sm-6 itemhomeinput">
            <p>Holder Number</p>
            <input class="text-center" type="text" value="0">
        </div>

        <div class="col"></div>
    </div>
    <!-- row 2 -->
    <div class="row text-center">
        <div class="col"></div>

        <div class="col-lg-4 col-md-6 itemhomeinput">
            <p>Transection Number</p>
            <input class="text-center" type="text" value="0">
        </div>

        <div class="col"></div>
    </div>
    <!-- row 3 -->
    <div class="row text-center">
        <div class="col"></div>

        <div class="col-lg-4 col-md-6 itemhomeinput">
            <p>MarketCap</p>
            <input class="text-center" type="text" value="0">
        </div>

        <div class="col"></div>
    </div>
    <!-- row 4 -->
    <div class="row text-center">
        <div class="col"></div>

        <div class="col-lg-4 col-md-6 itemhomeinput">
            <p>Reward Treasury</p>
            <input class="text-center" type="text" value="0">
        </div>

        <div class="col"></div>
    </div>
</div>
@endsection