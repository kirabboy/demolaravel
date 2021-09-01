<link rel="stylesheet" href="./css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
@include('header')
<div class="form">
    <div class="container">
        <div class="row form-row" style="margin: auto;">
            <div class="col-12 col-md-12 col-lg-12 iteam">
                <div class="text">
                    <p>1. User Information</p>
                </div>
                <div class="row input">
                    <div class="col-12 col-md-6 col-lg-6 input_item">
                        <input type="text" name="" id="" placeholder="Amount of Token">
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 input_item">
                        <input type="text" name="" id="" placeholder="Top">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12 iteam">
                <div class="text">
                    <p>2. RewardPad: % Shares in Treasury</p>
                </div>
                <div class="row input">
                    <div class="col-12 col-md-6 col-lg-6 input_item">
                        <input type="text" name="" id="" placeholder="Number of Matic">
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 input_item">
                        <input type="text" name="" id="" placeholder="Number of PYP Token">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12 iteam">
                <div class="btn">
                    <p>claim</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12 iteam">
                <div class="text">
                    <p>3. Total Treasury</p>
                </div>
                <div class="row input">
                    <div class="col-12 col-md-6 col-lg-6 input_item">
                        <input type="text" name="" id="" placeholder="Number of Matic">
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 input_item">
                        <input type="text" name="" id="" placeholder="Number of PYP Token">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')