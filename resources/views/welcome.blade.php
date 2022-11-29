<!DOCTYPE html>
<html lang="en">

@include('landingpage.layout.head')

<body>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../assets/img/home/smk.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../assets/img/home/smk.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../assets/img/home/smk.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    @include('landingpage.layout.js')
    <script>
        // Hide all item in .carousel-item initially
        $(".carousel-item *").addClass("d-none");

        // Animate the first slide
        setTimeout(function() {
            $(".carousel-item.active *")
                .removeClass("d-none")
                .addClass("animated");
        }, 1000);

        // Animate after the slider changes
        $("#mainBanner").on("slid.bs.carousel", function(e) {
            // Add .d-none to previous shown slide
            $(".carousel-item *").addClass("d-none");

            // Element for new slide
            var c = e["relatedTarget"];

            // After 0.7 sec slide changes, then make the animation for new slide
            setTimeout(function() {
                $(c)
                    .find("*")
                    .removeClass("d-none")
                    .addClass("animated");
                console.log("c");
            }, 1000);
        });
    </script>
</body>

</html>
