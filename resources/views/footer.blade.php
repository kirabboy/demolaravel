</div>
<div style="height: 55px;"></div>
<div class="container text-center iconfooter">
    <div class="row">
        <div class="col-lg-4 col-sm-1"></div>
        <div class="col-lg-4 col-sm-10">
            <a href=""><img src="./images/iconmail.png" alt="mail"></a>
            <a href=""><img src="./images/icontwitter.png" alt="mail"></a>
            <a href=""><img src="./images/iconfb.png" alt="mail"></a>
            <a href=""><img src="./images/icondiscord.png" alt="mail"></a>
            <a href=""><img src="./images/icongido.png" alt="mail"></a>
        </div>
        <div class="col-lg-4 col-sm-1"></div>
    </div>
</div>
<div style="height: 55px;"></div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    // Get the container element
    var btnContainer = document.getElementById("myFormdashboard");

    // Get all buttons with class="btn" inside the container
    var btns = btnContainer.getElementsByClassName("inputdashboard");

    // Loop through the buttons and add the active class to the current/clicked button
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("chon");
            current[0].className = current[0].className.replace(" chon", "");
            this.className += " chon";
        });
    }
</script>
</body>

</html>