@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10" style="padding: 25px 40px 0px 40px;">
            <div id="myFormdashboard" class="myFormdashboard">
                <p class="text-center">1. User Information</p>
                <div class="row">
                    <div class="col-6 text-right">
                        <input type="text" class="inputdashboard" value="Amount of Token">
                    </div>
                    <div class="col-6">
                        <input type="text" class="inputdashboard chon" value="| Top">
                    </div>
                </div>
                <p class="text-center">2. RewardPad: % Shares in Treasury</p>
                <div class="row">
                    <div class="col-6 text-right">
                        <input type="text" class="inputdashboard" value="Number of Matic">
                    </div>
                    <div class="col-6">
                        <input type="text" class="inputdashboard" value="Number of PYP Token">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8" style="padding: 0px 40px 5px 40px;">
                        <button>CLAIM</button>
                    </div>
                    <div class="col-2"></div>
                </div>
                <p class="text-center">3. Total Treasury</p>
                <div class="row">
                    <div class="col-6 text-right">
                        <input type="text" class="inputdashboard" value="Number of Matic">
                    </div>
                    <div class="col-6">
                        <input type="text" class="inputdashboard" value="Number of PYP Token">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>
@endsection