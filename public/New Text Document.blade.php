* {
    box-sizing: border-box;
}

body {
    margin: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    font-family: 'Montserrat', sans-serif;
}

.wrapper {
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
}

.card {
    width: 420px;
    height: 340px;
    margin: 1em;
    perspective: 1500px;
}

.card .content {
    position: relative;
    width: 100%;
    height: 100%;
    transform-style: preserve-3d;
    transition: transform 0.8s cubic-bezier(0.75, 0, 0.85, 1);
}

.more {
    display: none;
}

.more:checked~.content {
    transform: rotateY(180deg);
}

.front,
.back {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    transform-style: preserve-3d;
    border-radius: 6px;
}

.front .inner,
.back .inner {
    height: 100%;
    display: grid;
    padding: 1.5em;
    transform: translateZ(80px) scale(0.94);
}

.front {
    background-color: #fff;
    background-size: cover;
    background-position: center center;
}

.front:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block;
    border-radius: 6px;
    backface-visibility: hidden;
    background: linear-gradient(40deg, rgba(67, 138, 243, 0.7), rgba(255, 242, 166, 0.7));
}

.front .inner {
    grid-template-rows: 5fr 1fr 1fr 2fr 1fr;
    justify-items: center;
}

.front h2 {
    grid-row: 2;
    margin-bottom: 0.3em;
    text-transform: uppercase;
    letter-spacing: 3px;
    color: #fff;
    font-weight: 500;
    text-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
}

.front .rating {
    grid-row: 3;
    color: rgba(255, 255, 255, 0.8);
    font-size: 14px;
    display: flex;
    flex-flow: row nowrap;
}

.front .rating i {
    margin: 0 1px;
}
    <script>
        $(document).ready(function() {
            $('#id1').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 6,"
            width="1450" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    @include('landingpage.layout.footer')
    @include('landingpage.layout.js')
    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>
    <script>
        $(document).ready(function() {
            $('#id1').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                sToShow: 6,})
        )};
    </script>
</body>

