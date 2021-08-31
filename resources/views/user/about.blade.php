<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  href="public/css/app.css" rel="stylesheet">
</head>
@extends('master')
@section('content')
<body>
<section class="box">
    <div class="box6">

    </div> 
    <div class="box7">
        <div class="team">
            <div class="gach"></div>
            <h1>TEAM</h1>
            <div class="gach"></div>
          
        </div>
        <div class="pf">
            <div class="pf-item">
                <img src="public/images/image 1.png" alt="" width="80%" >
                <div class="text">
                    <h3>Nathan Nguyen</h3>
                    <h4 class="">Co – Founder/CEO </h4>
                    <p>He has 5 years of experiences in Crypto market and business. Nathan is a trader, private investor, researcher and also the project strategist. Additionally, connection and communication can be considered as the good aspects for Nathan in arranging cooperation between Crypto communities. Eventually, 4 successful global crypto projects have been founded by him. And now is Polyplus.
</p>
                </div>
            </div>
            <div class="pf-item">
                <img src="public/images/image 2.png" alt="" width="80%" >
                <div class="text">
                    <h3>Nathan Nguyen</h3>
                    <h4 class="">Co – Founder/CEO </h4>
                    <p>He has 4 years of Experience in Cryptocurrency as a risk trader, analyzer and Crypto Project founder. Moreover, with amazing creativity, Micheal always brings the best method for the development of previous projects and Polyplus.

</p>
                </div>
            </div>
            <div class="pf-item">
                <img src="public/images/image 3.png" alt="" width="80%" >
                <div class="text">
                    <h3>Nathan Nguyen</h3>
                    <h4 class="">Co – Founder/CEO </h4>
                    <p>He has 5 years of experiences in Crypto market and business. Nathan is a trader, private investor, researcher and also the project strategist. Additionally, connection and communication can be considered as the good aspects for Nathan in arranging cooperation between Crypto communities. Eventually, 4 successful global crypto projects have been founded by him. And now is Polyplus.
</p>
                </div>
            </div>
            <div class="pf-item2">
                <img src="public/images/image 4.png" alt="" width="80%" >
                <div class="text">
                    <h3>Nathan Nguyen</h3>
                    <h4 class="">Co – Founder/CEO </h4>
                    <p>He has 5 years of experiences in Crypto market and business. Nathan is a trader, private investor, researcher and also the project strategist. Additionally, connection and communication can be considered as the good aspects for Nathan in arranging cooperation between Crypto communities. Eventually, 4 successful global crypto projects have been founded by him. And now is Polyplus.
</p>
                </div>
            </div>
            <div class="pf-item2 ">
                <img src="public/images/image 5.png" alt="" width="80%" >
                <div class="text">
                    <h3>Nathan Nguyen</h3>
                    <h4 class="">Co – Founder/CEO </h4>
                    <p>He has 5 years of experiences in Crypto market and business. Nathan is a trader, private investor, researcher and also the project strategist. Additionally, connection and communication can be considered as the good aspects for Nathan in arranging cooperation between Crypto communities. Eventually, 4 successful global crypto projects have been founded by him. And now is Polyplus.
</p>
                </div>
            </div>
            
            

        </div>
        <div class="team2">
    
            <div class="gach"></div>
            <h1>BACKER</h1>
            
            <div class="gach"></div>
            
        </div>
        <div class="img">
            <img src="public/images/IMG_0504.png" alt="">
            <img src="public/images/IMG_0505.png" alt="">
            <img src="public/images/IMG_0506.png" alt="">
            <img src="public/images/IMG_0511.png" alt="">
           
        </div>
        <div class="team3">
            
        <div class="gach"></div>
            <h1>ADVISOR</h1>
            
            <div class="gach"></div>
            
        </div>
        <div class="avd">
            <img src="public/images/image 6.png" alt="" width="70%" >
                <div class="text">
                    <h3>Andy Lian</h3>
                    <h4 class="">Board at Hyundai-DAC
Chief at MPO_mongolia
Singapore Blockchain Ambasador </h4>

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



    </div>







</section>
@endsection
</body>
<style>
.team h1,.team2 h1,.team3 h1{
    color:white;
    font-weight:bold;
}
    .box{ 

width:100%;


position:relative}
    .team{
    height:50px;
  
    position:absolute;
   
    top: 5%;
    flex-direction:row;
    display:flex;
    align-items:center;
    }
.gach{
    border: 3px solid #A00CF8;
transform: rotate(180deg);
width: 90px;
height:0px;
margin:0 20px

}
.pf{height:auto;
    width:75%;
    display: flex;
    flex-direction:row;
    justify-content: center;
    align-items: flex-start;
    position:relative;
    top: 280px;
    flex-wrap: wrap;
   
    
   
}
.pf-item{
   
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 18%;
    justify-content: center;
    margin-left:70px;
    margin-right:70px
    
}
.pf-item2{
   
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 18%;
    justify-content: center;
    margin-left:70px;
    margin-right:70px;
    margin-bottom:1800px
    
}
.text{
    margin-top:20px;
    color: #FFFFFF
}
.text h3{ 
    font-weight: bold;
    text-align: center;
    font-size:28px
}
.text h4{ 
    font-weight: 400;
    text-align: center;
    font-size:20px
}
.text p{ 
    font-family: Bai Jamjuree;
font-size: 14px;
font-style: normal;
font-weight: 400;
line-height: 18px;
letter-spacing: 0px;
text-align: center;

}
.team2{
    height:50px;
  
    position:absolute;
   
    top:1440px;
    flex-direction:row;
    display:flex;
    align-items:center;
}
.img{
  
    display: flex;
   
    justify-content: center;
    flex-direction: row;
    position:absolute;
    top:1600px;
   
   
   
    
    
   
}
.img img{
    margin:0 50px;
}
.team3{
    height:50px;
  
    position:absolute;
   
    top: 1950px;
    flex-direction:row;
    display:flex;
    align-items:center;
}
.avd{
  
    display: flex;
flex-direction: column;
align-items: center;
padding: 60px 60px;

position: absolute;
width: 412px;
height: 454px;

top:2100px;

background: #14032D;
border: 1px solid #C835F8;
box-sizing: border-box;
border-radius: 30px;

   
   
    
    
   
}
.box6{ 
    background: radial-gradient(42.49% 63.74% at 50% 50%, #140034 0%, #140034 100%); 
   
  
    height: 
   100%;
    position: absolute;
    right:0;
    left: 0;
    

}
.box7{
   background-image: url(public/images/br.png);
   background-size: cover;
 
  
    position:relative;
    right: 0;
    left: 0;
    display: flex;
    justify-content:center
    ;
}
</style>
</html>
