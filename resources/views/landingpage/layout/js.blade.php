<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="../assets/js/jquery.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/owl.carousel.min.js"></script>

<script src="../assets/js/slick.min.js"></script>

<script src="../assets/js/jquery.magnific-popup.min.js"></script>

<script src="../assets/js/meanmenu.js"></script>

<script src="../assets/js/jquery.ajaxchimp.min.js"></script>

<script src="../assets/js/form-validator.min.js"></script>

<script src="../assets/js/contact-form-script.js"></script>

<script src="../assets/js/custom.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>
        {{-- POP UP VIDEO --}}
<script>
    var tag = document.createElement("script");
    tag.src = "https://www.youtube.com/iframe_api";

    var firstScriptTag = document.getElementsByTagName("script")[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // Get video ID
    var vidId = document.getElementById("player").dataset.id;

    // Build the player
    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player("player", {
            height: "0",
            width: "0",
            videoId: vidId,
            events: {
                onReady: onPlayerReady
            }
        });
    }

    // ==== Variables for popup
    var modal = document.querySelector(".modalyosop"),
        close = document.querySelector(".close-modal"),
        root = document.getElementsByTagName("html")[0];

    // Do stuff when player is ready
    function onPlayerReady(event) {
        document.querySelector(".play-video").addEventListener("click", function() {
            modal.classList.add("show-modal");

            // Play video
            setTimeout(function() {
                event.target.playVideo();
            }, 100);
        });

        // Close if outside box is clicked
        window.addEventListener("click", function(e) {
            if (e.target === modal) {
                modal.classList.remove("show-modal");
                root.classList.remove("no-scroll");
                event.target.pauseVideo();
            }
        });

        // Close if close button is clicked
        close.addEventListener("click", function() {
            modal.classList.remove("show-modal");
            root.classList.remove("no-scroll");
            event.target.pauseVideo();
        });
    }
</script>
