<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

</head>

<body>
    <div id="banner" style="height: 350px" class="bg-secondary">
        <div id="mainBanner" class="carousel slide" data-ride="carousel" data-interval="7000">
            <ol class="carousel-indicators">
                <li data-target="#mainBanner" data-slide-to="0" class="active"></li>
                <li data-target="#mainBanner" data-slide-to="1"></li>
                <li data-target="#mainBanner" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 350px;background-color: orange">
                    <div class="p-4 bounceIn">Slide</div>
                </div>
                <div class="carousel-item" style="height: 350px;background-color: red">
                    <div class="p-4">
                        <h3 class="bounceIn">Slide</h3>
                    </div>
                </div>
                <div class="carousel-item" style="height: 350px;background-color: green">
                    <div class="p-4 bounceIn">Slide</div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#mainBanner" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainBanner" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        // Hide all item in .carousel-item initially
        $(".carousel-item *").addClass("d-none");

        // Animate the first slide
        setTimeout(function() {
            $(".carousel-item.active *")
                .removeClass("d-none")
                .addClass("animated");
        },100);

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
            }, 700);
        });
    </script>
</body>

</html>
