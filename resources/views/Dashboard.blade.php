@include('header')
    <section class="container " >
        <div class="row ">
            <div class="col-xl-2  col-md-2"></div>
            <div class="col-xl-8 col-md-8 card" >
                <!--Phan 1 user infomation-->
                <div class="card-text text-center  mt-4">
                    <p>1.User Information</p>
                </div>
                <div class="row  text-center">
                    <div class="col-xl-6  col-lg-6  mt-2 input-das">
                      <input type="text" placeholder="Amount of Token" >
                    </div>
                    <div class="col-xl-6 col-lg-6 mt-2  input-das-t">
                        <input type="text" placeholder="| Top" >
                    </div>
                </div>

                <!-- phan2 ....-->
                <div class="card-text text-center  mt-4">
                    <p>2. RewardPad : % Shares in Treasury</p>
                </div>
                <div class="row  text-center">
                    <div class="col-xl-6  col-lg-6  mt-2 input-das">
                      <input type="text" placeholder="Number of Matic" >
                    </div>
                    <div class="col-xl-6 col-lg-6 mt-2  input-das">
                        <input type="text" placeholder="Number of PYP Token" >
                    </div>
                </div>
                <!-- phan 3 nut button mau tim -->
                <div class="row text-center ">
                    <div class="col-xl-3 col-lg-2 col-md-2 col-sm-3 col-3" ></div>
                    <div class="col-xl-6 col-lg-8 col-md-8 col-sm-6 col-6">
                        <div class="bg-claim mt-3" >
                            <button class="btn bg-claim">CLAIM</button>
                        </div>
                    </div>
                </div>
                <!--phan 4-->
                <div class="card-text text-center  mt-4">
                    <p>3. Total Treasury</p>
                </div>
                <div class="row  text-center">
                    <div class="col-xl-6  col-lg-6  mt-2 input-das">
                      <input type="text" placeholder="Number of Matic" >
                    </div>
                    <div class="col-xl-6 col-lg-6 mt-2  input-das">
                        <input type="text" placeholder="Number of PYP Token" >
                    </div>
                </div>

            </div>

        </div>

    </section>
@include('footer')

