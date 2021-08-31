@extends('master')
@section('content')
        <div class="row ">
            <div class="col-12 d-flex justify-content-center">
            <img src="{{url('public')}}/images/Group.png" style="width:50px">
                <h3>POLY PLUS</h3>
            </div>
            <div class="col-12">
                <h2>THE FIRST REWARDPAD IN CRYPTO WORLD</h2>
            </div>
        </div>
        <div class="row" style="padding-top:50px">
        <div class="col-12">
                <h5>Holder Number<h5>
                <input type="text" class="home_input" value="0" disabled>
            </div>
            <div class="col-12">
                <h5>Transection Number<h5>
                <input type="text" class="home_input" value="0" disabled>
            </div>
            <div class="col-12">
                <h5>Market Cap<h5>
                <input type="text" class="home_input" value="0" disabled>
            </div>
            <div class="col-12">
                <h5>Reward Treasury<h5>
                <input type="text" class="home_input" value="0" disabled>
            </div>
        </div>
@endsection