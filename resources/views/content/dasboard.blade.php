@extends('master')
@section('content')
        <div class="row nendam">
                <div class="col-12">
                        <p>1. User information</p>
                        <input class="input-lg db-form" style="" type="text" placeholder="Amount of Token">
                        <input class="input-lg db-form" type="text" placeholder="Amount of Token">
                </div>
                <div class="col-12">
                        <p>2. RewardPad: % Shares in Treasy</p>
                        <input class="input-lg db-form" style="" type="text" placeholder="Number Of Matic">
                        <input class="input-lg db-form" type="text" placeholder="Number Of PYP Token">
                </div>
                <div class="col-12">
                        <button type="button" class="btn-lg btn-primary btn-pd" >CLAIM</button>
                </div>
                <div class="col-12">
                        <p>3. Total Treasury</p>
                        <input class="input-lg db-form" style="" type="text" placeholder="Number Of Matic">
                        <input class="input-lg db-form" type="text" placeholder="Number Of PYP Token">
                </div>
        </div>
@endsection