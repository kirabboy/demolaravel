<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="public/css/app.css" rel="stylesheet">
    
</head>
<body>
@extends('master')
@section('content')

<section class="box">
 
<div class="box1" >
  
    
</div>
<div class="box2" > 
<div class="func" >
        <h1  style="font-weight:bold;">
        FUNCTION AND TOKENOMICS
    </h1>
    <p class="func-item txt" >
    PolyPlus is the First RewardPad in Crypto World where investors can earn reward automatically through their investment. Polyplus can be considered as the best farming protocol (RewardPad) which is a combination of Yield Farming and Autofarming.
    </p>
    
    <div class="func-item">
        <img src="public/images/g12.png" alt="">
    </div>
    
    <div class="func-item box">
        <div class="box-item">
            <h6 class="tit">ANGEL ROUND</h6>
            <h6 class="pt">10,000,000(10%)</h6>


        </div>
        <div class="box-item"> 
             <h6 class="tit">seed round</h6>
            <h6 class="pt">15,000,000 (15%)</h6>
        </div>
        <div class="box-item"> 
             <h6 class="tit">Marketing</h6>
            <h6 class="pt">20,000,000 (20%)</h6></div>
        <div class="box-item">
              <h6 class="tit">Liquidity</h6>
            <h6 class="pt">10,000,000(10%)</h6></div>
        <div class="box-item"> 
             <h6 class="tit">Private round</h6>
            <h6 class="pt">15,000,000 (15%)</h6></div>
        <div class="box-item"> 
             <h6 class="tit">Public round</h6>
            <h6 class="pt">5,000,000 (5%)</h6></div>
        <div class="box-item"> 
             <h6 class="tit">team</h6>
            <h6 class="pt">6,000,000 (6%)</h6></div>
        <div class="box-item"> 
             <h6 class="tit">Development</h6>
            <h6 class="pt">9,000,000 (9%)</h6></div>
            <div class="box-item"> 
             <h6 class="tit">Advisor</h6>
            <h6 class="pt">5,000,000 (5%)</h6></div>
            <div class="box-item"> 
             <h6 class="tit">partner</h6>
            <h6 class="pt">5,000,000 (5%)</h6></div>
        
        
       
    </div>
    
    
       
    </div>
  
    </div>
    
  
    </div>
    <div class="social">
    <div class="social-item">
    <img src="public/images/tele.png" alt="">
    </div>
    <div class="social-item">
    <img src="public/images/tw.png" alt="">
    </div>
    <div class="social-item">
    <img src="public/images/face.png" alt="">

    </div>
    <div class="social-item"> <img src="public/images/dc.png" alt=""></div>
    <div class="social-item"> <img src="public/images/em.png" alt=""></div>
</div>
</div>


</section>


@endsection
</body>
<style>
 .func-item.txt{ font-family: Bai Jamjuree;
font-size: 17px;
font-style: normal;
font-weight: 400;
line-height: 23px;
letter-spacing: 0px;
text-align: center;
color: #ffffff;
}
.func h1{ color:#FFFFFF}
.func-item{
    margin-bottom: 100px;
    margin-top:10px
}
.func-item.box{ 
   
    width:160%;
    height:450px;
    z-index: 99;
    background: #14032D;
border-radius: 12px;
display:flex;
flex-direction:row;

flex-wrap:wrap;
align-items:center;padding-left:100px;
padding-top:70px;
padding-bottom:50px






}
.box-item{
  
    display:flex;
    flex-direction:column;
    align-self: start;
   
    margin: 5px 30px;
    padding:0
    
    
    
}
.pt{font-weight:400;
color:#ffffff;}
.tit{color:#C835F8; 
font-weight:bold;
text-transform:uppercase}

</style>
</html>