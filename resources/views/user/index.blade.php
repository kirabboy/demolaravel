@extends('master')
@section('content')
<!-- tiêu đề -->
<div class="container">
    <div class="row text-center">
        <div class="col-12">
            <img style="padding-top: 100px;" src="./images/logo.png" width="300px" alt="logo">
            <p class="maintitle">THE FIRST REWARDPAD IN CRYPTO WORLD</p>
        </div>
    </div>
</div>

<div class="container-fluid homeinput" style="padding-top: 80px;">
    <!-- row 1 -->
    <div class="row text-center">
        <div class="col-4"></div>

        <div class="col-4">
            <p>Holder Number</p>
            <input class="text-center" type="text" value="0">
        </div>

        <div class="col-4"></div>
    </div>
    <!-- row 2 -->
    <div class="row text-center">
        <div class="col-4"></div>

        <div class="col-4">
            <p>Transection Number</p>
            <input class="text-center" type="text" value="0">
        </div>

        <div class="col-4"></div>
    </div>
    <!-- row 3 -->
    <div class="row text-center">
        <div class="col-4"></div>

        <div class="col-4">
            <p>MarketCap</p>
            <input class="text-center" type="text" value="0">
        </div>

        <div class="col-4"></div>
    </div>
    <!-- row 4 -->
    <div class="row text-center">
        <div class="col-4"></div>

        <div class="col-4">
            <p>Reward Treasury</p>
            <input class="text-center" type="text" value="0">
        </div>

        <div class="col-4"></div>
    </div>
</div>

<div style="height: 150px;"></div>
@endsection