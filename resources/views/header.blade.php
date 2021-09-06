<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <link  rel="stylesheet" href="public/menu.css">
</head>


<body class="bg">
    <nav class=" container-fluid navbar navbar-expand-sm  navbar-dark nav   " >
        <!-- Brand -->


        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
           <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse  " id="collapsibleNavbar">
            <nav class="navbar navbar-expand-sm   justify-content-center nm" style="width:95%">
                <!-- Links -->
                <div class="row  container-fluid navbar-nav links  ">
                    <div class="col-sm-2   ">
                        <div class="card-text mt-2 ">
                            <p class="text-menu" >
                                <a class="link"  href="{{ url('/') }}">Home</a>
                            </p></div>
                    </div>
                    <div class="col-sm-2  ">
                        <div class="card-text  mt-2 "><p class="text-menu" > <a class="link" href="{{ url('/Dashboard') }}">Dashboard</a></p></div>
                    </div>
                    <div class="col-sm-2  ">
                        <div class="card-text  mt-2 "><p class="text-menu" > <a class="link" href="{{ url('/Function') }}">Functions and tokenomics</a></p></div>
                    </div>
                    <div class="col-sm-2  ">
                        <div class="card-text  mt-2 "><p class="text-menu" > <a class="link" href="{{ url('/Aboutus') }}">About Us </a></p></div>
                    </div>
                    <div class="col-sm-2 ">
                        <div class="card-text  mt-2 "><p class="text-menu" > <a href="">Community</a></p></div>
                    </div>
                    <div class="col-sm-2 " >
                        <button  class="btn  bg-m text-menu  ">Connect Wallet</button>
                    </div>
                </div>


             </nav>



        </div>
    </nav>
    <div class="position">
        <div class="hinhneba">
            <img   src="public/img/591_Artboard 2.png">
        </div>
        <div class="hinh">
            <img src="public/img/591-02.png">
        </div>
    </div>
