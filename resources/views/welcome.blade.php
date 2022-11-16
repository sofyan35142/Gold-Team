<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../cssyosop.css">
</head>
<body>
    <div class="container">

        <div class="play-video">Play Video</div>

        <div class="video-popup modal">
            <div class="modal-content">
                <span class="close-modal">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
                        <path
                            d="M28.5 9.6l-2.1-2.1-8.4 8.4-8.4-8.4-2.1 2.1 8.4 8.4-8.4 8.4 2.1 2.1 8.4-8.4 8.4 8.4 2.1-2.1-8.4-8.4z"
                            style="fill: #FFF;" />
                    </svg>
                </span>
                <div class="video-container">
                    <!-- Enter the video ID into the data-id attribute -->
                    <div id="player" data-id="DGIXT7ce3vQ"></div>
                </div>
            </div>
        </div>
    </div>
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
                height: "390",
                width: "640",
                videoId: vidId,
                events: {
                    onReady: onPlayerReady
                }
            });
        }

        // ==== Variables for popup
        var modal = document.querySelector(".modal"),
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
</body>

</html>
