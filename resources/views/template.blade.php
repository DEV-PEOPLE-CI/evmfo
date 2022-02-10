<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--lien vers facebook-->
    <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">

    <!--modal-->
    <link rel="stylesheet" href="{{asset('css/modal.css')}}">
    <!--preloader-->
    <link rel="stylesheet" href="{{asset('css/preloader.css')}}">

    <link rel="stylesheet" href="aos-by-red.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Eveil media</title>




</head>
<body>

<!---menu--->
<header>

    <section class="ftco-section">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="images/logo_eveil.png" width="150px" class="logo"></a>
                <a class="navbar-brand direct " href="index.html" id="link_direct" ><div class="btn-live"></div>Direct</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation" style="font-weight: bold;">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active"><a href="index.html" class="nav-link first_link">Presque tout<br class="br_menu"><span  style="padding-left: 10px;"></span>en un clic</a></li>
                        <li class="nav-item"><a href="precedement" class="nav-link">Precedemment</a></li>
                        <li class="nav-item" ><a href="live" class="nav-link" id="link_direct_pc">Direct</a></li>
                        <li class="nav-item"><a href="archive" class="nav-link">Archives</a></li>
                    </ul>
                    <div class="social-media mobile_link">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only">Youtube</i></span></a>

                        </p>
                    </div>
                </div>
                <div class="social-media pc_link">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only">Youtube</i></span></a>

                    </p>
                </div>
            </div>
        </nav>
        <!-- END nav -->
    </section>
</header>
<!---End menu--->
<!--music-->
<audio id="player1" src="{{asset('/music/Lil Wayne - Mirror ft. Bruno Mars (Official Music Video).mp3')}}"></audio>
<audio id="player2" src="{{asset('/music/Godo_godo_f2b.mp3')}}"></audio>
<audio id="player3" src="{{asset('/music/Fecafoot_Davidetoo.mp3')}}"></audio>

<div class="container" >
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



<footer>
    <div class="end">
        <div class="contact">
            <h3>CONTACTS UTILES</h3>
            <div>
              <span>
                  <h3>Police: 170 - 111</h3>
              </span>
                <span>
                  <h3>SOS Medecin :185</h3>
              </span>
                <span><span>
                  <h3>Reanimation:186</h3>
              </span>
                <span>
                  <h3>Sapeur Pompier: 180</h3>
              </span>
                <span>
                  <h3>CIE: 179-174</h3>
              </span>
                <span>
                  <h3>SODECI: 175</h3>
              </span>
            </div>
        </div>
        <div class="info">
            <h3>EVEIL MEDIA</h3>
            <div>
                <ul class="number_eveil">
                    <li><h4>Siege</h4></li>
                    <li> Abidjan, Yopougon st André</li>
                </ul>
                <ul class="number_eveil">
                    <li><h4>E-mail</h4></li>
                    <li><a href="mailto:eveilmedia33@gmail.com" style="color:white;">eveilmedia33@gmail.com</a></a></li>
                </ul>
                <ul class="number_eveil">

                    <li><h4>Télephone</h4></li>
                    <li><a href="tel:+2252523006273">(+225)2523006273</a></li>
                    <li><a href="tel:+2250102785073">(+225)0102785073</a></li>
                    <li><a href="tel:+2250799851192">(+225)0799851192</a></li>
                </ul>




            </div>
        </div>
    </div>
    <div class="ncpr">
      <span>
          <p>©2022 Dev'People | Eveil Media </p>
      </span>
    </div>
</footer>
</html>

<script src="{{asset('/js/player.js')}}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>


<script type="text/javascript">
    $('.button').click(function(){
        var buttonId = $(this).attr('id');
        $('#modal-container').removeAttr('class').addClass(buttonId);
        $('body').addClass('modal-active');
        $('.video_modal').get(0).play();
        $('.video_modal').get(0).pause();
    })

    $('.close_frist').click(function(){

        $('#modal-container').addClass('out');
        $('body').removeClass('modal-active');

        $('.video_modal').get(0).pause();

    });
</script>
