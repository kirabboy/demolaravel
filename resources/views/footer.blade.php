    <footer class="container  text-center mt-5" >
        <div class="card-img">
            <img width="45%" src="public/img/0e97f42f-937a-47f3-a140-7ed857d3826d.png">

        </div>

    </footer>
    <script>
        var link = document.querySelectorAll(".links .link");

                link.forEach((li) => {
                li.onclick = function () {
                    //remove class active from all
                    link.forEach((li) => li.classList.remove("active"));

                    // add class active for selected
                    this.classList.add("active");
                };
        });

    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

