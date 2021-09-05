@extends('master')
@section('content')
<div style="height: 20px;"></div>

<div class="container">
    <div class="row">
        <div class="col-12 maintitleaboutus">
            <div></div>
            <p>TEAM</p>
            <div></div>
        </div>
    </div>
    <div style="height: 15px;"></div>
    <div class="text-center nhansu">
        <div class="item">
            <img src="{{asset('images/nv1.png')}}" width="150px" alt="nv1" style="margin-bottom: 40px;">
            <div class="content">
                <p class="ten">Nathan Nguyen</p>
                <p class="vitri">Co – Founder/CEO</p>
                <p class="gioithieu">He has 5 years of experiences in Crypto market and business. Nathan is a trader, private investor, researcher and also the project strategist. Additionally, connection and communication can be considered as the good aspects for Nathan in arranging cooperation between Crypto communities. Eventually, 4 successful global crypto projects have been founded by him. And now is Polyplus.</p>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('images/nv2.png')}}" width="150px" alt="nv2" style="margin-bottom: 40px;">
            <div class="content">
                <p class="ten">Micheal Luong</p>
                <p class="vitri">Co – Founder/R&D</p>
                <p class="gioithieu">He has 4 years of Experience in Cryptocurrency as a risk trader, analyzer and Crypto Project founder. Moreover, with amazing creativity, Micheal always brings the best method for the development of previous projects and Polyplus.</p>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('images/nv3.png')}}" width="150px" alt="nv3" style="margin-bottom: 40px;">
            <div class="content">
                <p class="ten">Harry Dung</p>
                <p class="vitri">Co – Founder</p>
                <p class="gioithieu">Harry has 4 years of experience in the Cryptocurrency market as an investor, marketer, community manager, brand builder. Previously, he was a freelancer and specialized in marketing planning and on-chain data analysing. Harry is now a Co – Owner of Infinity Capital.</p>
            </div>
        </div>
        <div class="item itemtrai">
            <img src="{{asset('images/nv4.png')}}" width="150px" alt="nv4" style="margin-bottom: 40px;">
            <div class="content">
                <p class="ten">Micheal Luong</p>
                <p class="vitri">CFO</p>
                <p class="gioithieu">He has 5 years of experience in both Crypto and Stock Market as trader and investor. Nathan also a Senior equity investment strategist at Vietcombank Securities. With his amazing ability, Nathan can be considered as market maker which can provide the best direction for Polyplus market growth.</p>
            </div>
        </div>
        <div class="item itemphai">
            <img src="{{asset('images/nv5.png')}}" width="150px" alt="nv5" style="margin-bottom: 40px;">
            <div class="content">
                <p class="ten">Harry Dung</p>
                <p class="vitri">CMO</p>
                <p class="gioithieu">Jacky is a Crypto enthusiast, has been involved in the Crypto market for almost 5 years. With a deep knowledge of Blockchain as well as a passion for technology, crypto investment... Jacky came up with the idea to create Infinity Capital and is currently one of the top media - community channels in Vietnam. Jacky is now Owner of Infinity Capital.</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 maintitleaboutus">
            <div></div>
            <p>BACKER</p>
            <div></div>
        </div>
    </div>
    <div style="height: 15px;"></div>
    <div class="backer">
        <img src="{{asset('images/backer1.png')}}" alt="1">
        <img src="{{asset('images/backer2.png')}}" alt="2">
        <img src="{{asset('images/backer3.png')}}" alt="3">
        <img src="{{asset('images/backer4.png')}}" alt="4">
    </div>
</div>

<div style="height: 80px;"></div>

<div class="container">
    <div class="row">
        <div class="col-12 maintitleaboutus">
            <div></div>
            <p>ADVISOR</p>
            <div></div>
        </div>
    </div>
    <div style="height: 15px;"></div>
    <div class="advisor text-center">
        <div class="item">
            <img src="{{asset('images/ad.png')}}" alt="ad" width="150px">
            <p class="ten">Andy Lian</p>
            <p class="gioithieu">Board at Hyundai-DAC <br>
                Chief at MPO_mongolia <br>
                Singapore Blockchain Ambasador
            </p>
        </div>
    </div>
</div>
@endsection