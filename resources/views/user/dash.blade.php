<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  href="public/css/dash.css" rel="stylesheet">
</head>
<body  >
@extends('master')
@section('content')

<section class="con">
    <div class="dash d-flex d-flex align-items-center justify-content-center">
        <div class="bang flex-column d-flex align-items-center justify-content-center px-2">
            <div class="bang-item "><h5>1.User Information</h5></div>
            <div class="bang-item row justify-content-center my-4">
            
                <input type="text" class=" ip mx-lg-3 mx-auto mx-sm-auto my-2 col-12 col-sm-10 col-lg-5" placeholder="Amount of Token">
                <input type="text" class="  mx-lg-3 mx-auto mx-sm-auto  my-2 col-12 col-sm-10 col-lg-5" placeholder="Top">

            </div>
            <div class="bang-item "><h5>2. RewardPad : % Shares in Treasury</h5></div>
            <div class="bang-item row justify-content-center  my-4 ">
            
                <input type="text" class=" mx-lg-3 mx-auto mx-sm-auto my-2 col-12  col-sm-10  col-sm-5 col-lg-5" placeholder="Number of Matic">
                <input type="text" class="  mx-lg-3 mx-auto mx-sm-auto  col-sm-10  my-2 col-12 col-sm-5 col-lg-5" placeholder="Number of PYP Token">

            </div>
            <a class="nut1" href="#" style="text-decoration:none;"><h6 class="font-weight-bold">CLAIM</h6></a>
            <div class="bang-item "><h5>3. Total Treasury</h5></div>
            <div class="bang-item row justify-content-center  my-4 ">
            
                <input type="text" class=" mx-lg-3 mx-auto mx-sm-auto my-2 col-sm-10  col-12 col-sm-5 col-lg-5" placeholder="Number of Matic">
                <input type="text" class="  mx-lg-3 mx-auto mx-sm-auto  my-2 col-sm-10  col-12 col-sm-5 col-lg-5" placeholder="Number of PYP Token">

            </div>
            <div class="bang-item"></div>
            <div class="bang-item"></div>

        </div>

    </div> 
    
@endsection
</section>

</body>

</html>
