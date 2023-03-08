<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png"  href="{{asset('images/logo_eveil.png')}}">
    <meta name="keywords" content="eveil, eveil media,media,media eveil">
    <meta name="descritption" content="Eveil media,presque tout en un clic">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--custom-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
    <!--anim_card-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/anim_card.css')}}">
    <!--effect_btn-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/effect_btn.css')}}">
    <!--effect_btn_glicht-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/effect_btn_glicth.css')}}">
    <!--navbar-->
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <!--footer-->
    <!--footer-->
    <link rel="stylesheet" href="{{asset('css/footerr.css')}}">
    <!--modal-->
    <link rel="stylesheet" href="{{asset('css/modal.css')}}">
    <!--preloader-->
    <link rel="stylesheet" href="{{asset('css/preloader.css')}}">
    <!--function ajax-->

    <script type="text/javascript" src="{{asset('js/ajax_code.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LPDCJBXLJN"></script>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.3/plyr.css" />
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-LPDCJBXLJN');
    </script>

    <title>Eveil media</title>




</head>
<body>

@include('include.menu')
<!--music-->

<!-- @include('include.link_humour') -->
<div class="container-fluid  body_content" >

   @yield('content')
</div>





<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
-->

</body>

<!--MODAL-->

@include('include.footer')

</html>

<script src="{{asset('js/player.js')}}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdn.plyr.io/3.7.3/plyr.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    AOS.init();
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
        const player = new Plyr('#player');
        const video = new Plyr('#video_show');

        // Expose
        window.player = player;
        window.player = video;

        // Bind event listener
        function on(selector, type, callback) {
            document.querySelector(selector).addEventListener(type, callback, false);
        }
        player.play();



        // Play
        on('.js-play', 'click', () => {

            player.play();
        });

        // Pause
        on('.js-pause', 'click', () => {
            player.pause();
        });

        // Stop
        on('.js-stop', 'click', () => {
            player.stop();
        });

        // Rewind
        on('.js-rewind', 'click', () => {
            player.rewind();
        });

        // Forward
        on('.js-forward', 'click', () => {
            player.forward();
        });

        $('#exampleModal').on('show.bs.modal', function () {
            alert('hi')
        })
    });
</script>

<style>

    /* This is purely for the demo */

    .plyr {
        border-radius: 4px;
        margin-bottom: 15px;
    }
</style>

