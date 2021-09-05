@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-lg-10 col-sm-12">
            <div id="myFormdashboard" class="myFormdashboard">
                <p class="text-center">1. User Information</p>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <input type="text" class="inputdashboard" value="Amount of Token">
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <input type="text" class="inputdashboard" value="| Top">
                    </div>
                </div>
                <p class="text-center">2. RewardPad: % Shares in Treasury</p>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <input type="text" class="inputdashboard" value="Number of Matic">
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <input type="text" class="inputdashboard" value="Number of PYP Token">
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-8 col-sm-12" style="padding: 0px 40px 5px 40px;">
                        <button>CLAIM</button>
                    </div>
                    <div class="col"></div>
                </div>
                <p class="text-center">3. Total Treasury</p>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <input type="text" class="inputdashboard" value="Number of Matic">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <input type="text" class="inputdashboard" value="Number of PYP Token">
                    </div>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection