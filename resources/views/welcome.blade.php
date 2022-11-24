<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            text-align: center;
            margin-top: 10%;
        }

        .play-video {
            display: inline-block;
            padding: 10px 25px;
            text-align: center;
            color: #fff;
            background: #40c0c0;
            border: 1px solid transparent;
            border-radius: 50px;
            font-size: 1.1em;
            cursor: pointer;
        }

        .modal {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transform: scale(1.1);
            transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
            z-index: 100;
        }

        .show-modal {
            opacity: 1;
            visibility: visible;
            transform: scale(1);
            transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
        }

        .modal-content {
            position: relative;
            max-width: 50em;
            margin: 0 auto;
            display: block;
            padding: 0 3%;
            height: auto;
            z-index: 10;
            top: 50%;
            transform:
                /*translateX(-50%)*/
                translateY(-50%);
            /*left: 50%;*/
        }

        .video-container {
            padding-bottom: 56.25%;
            position: relative;
            overflow: hidden;
            height: 0;
            /*border: 2px #FFF solid;*/
            box-shadow: 0 0 15px #333;
        }

        .video-container iframe,
        .video-container object,
        .video-container embed {
            position: absolute;
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
        }

        .close-modal {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: -20px;
            right: 35px;
            width: 40px;
            height: 40px;
            cursor: pointer;
            border-radius: 100%;
            border: 1px #fff solid;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
            background-color: #70d0d0;
            text-align: center;
            text-decoration: none;
            color: #fff;
            z-index: 101;
            transition: all 0.3s ease;
        }

        .-webkit-.touchevents .close-modal {
            line-height: 0.5;
        }

        .close-modal svg {
            width: 100%;
        }

        .close-modal:hover {
            opacity: 0.8;
            color: #fff;
        }
    </style>
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
