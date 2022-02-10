@extends('template')
@section('content')
    <div class="row">
        <div class="txt txt_glicth">
            <div class="btn-prec"></div>
            <span>
      <div class="stack" style="--stacks: 3;">
        <span style="--index: 0;">PRESQUE TOUT EN UN CLIC</span>
        <span style="--index: 1;">PRESQUE TOUT EN UN CLIC</span>
        <span style="--index: 2;">PRESQUE TOUT EN UN CLIC</span>
      </div>
    </span>
            <div class="btn-prec"></div>
        </div>
        <div class="col-md-4 main_card" data-aos="fade-up" >
            <div class="card text-white card-has-bg click-col card_img card_agenda">
                <div class="titre">
                    <span >Agenda</span>
                </div>
                <div class="card-img-overlay d-flex flex-column">

                    <br>
                    <div class="card-footer">
                        <div class="media">
                            <img class="mr-3 rounded-circle video_play" id="btn1" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px"
                                 onclick="playpause1()">
                            <div class="media-body">
                                <h6 class="my-0 text-white d-block">Lire</h6>
                                <small style="color:#fff">16h</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img card_publi">
                <div class="titre">
                    <span >Publi-reportage</span>
                </div>
                <div class="card-img-overlay d-flex flex-column">

                    <br>
                    <div class="card-footer">
                        <div class="media">
                            <img class="mr-3 rounded-circle video_play" id="btn2" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px"
                                 onclick="playpause2()">
                            <div class="media-body">
                                <h6 class="my-0 text-white d-block">Lire</h6>
                                <small style="color:#fff">16h</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img card_avis">
                <div class="titre">
                    <span>Avis et communiqués</span>
                </div>
                <div class="card-img-overlay d-flex flex-column">
                    <br>
                    <div class="card-footer">
                        <div class="media">
                            <img class="mr-3 rounded-circle video_play" id="btn3" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px"
                                 onclick="playpause3()">
                            <div class="media-body">
                                <h6 class="my-0 text-white d-block">Lire</h6>
                                <small style="color:#fff">16h</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img" >
                <div class="titre">
                    <span>Bèdjassou 5Réveil</span>
                </div>
                <div style="max-width: 100%;max-height: 100%;">
                    <img src="{{asset('images/rev.jpeg')}}" width="100%" height="100%">
                </div>
            </div>
            <div class="card-footer">
                <div class="media">
                    <img class="mr-3 rounded-circle video_play" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px">
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Lire</h6>
                        <small style="color:#fff">5h-8h00</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img">
                <div class="titre">
                    <span>Savoir et Education</span>
                </div>
                <div style="max-width: 100%;max-height: 100%;">
                    <img src="{{asset('images/savoir.png')}}" width="100%" height="100%">
                </div>
            </div>
            <div class="card-footer">
                <div class="media">
                    <img class="mr-3 rounded-circle video_play" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px">
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Lire</h6>
                        <small style="color:#fff">9h00</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="pub pub_first_mobile"><img src="{{asset('images/PUB.png')}}" height="150px" width="100%"></div>
        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img">
                <div class="titre">
                    <span>Showbiz-Arts et Mode</span>
                </div>
                <div style="max-width: 100%;max-height: 100%;">
                    <img src="{{asset('images/mode.png')}}" width="100%" height="100%">
          </div>

        </div>
        <div class="card-footer">
                <div class="media">
                  <img class="mr-3 rounded-circle video_play" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px">
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Lire</h6>
                        <small style="color:#fff">10h00</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="pub pub_first_pc"><img src="{{asset('images/PUB.png')}}" height="150px" width="100%"></div>

        <!--     --->

        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img"style="background-image:url('images/event.png'); background-size: cover;">
                <div class="titre">
                    <span>Events and Business</span>
                </div>


            </div>
            <div class="card-footer">
                <div class="media">
                    <img class="mr-3 rounded-circle video_play" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px">
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Lire</h6>
                        <small style="color:#fff">11h</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img"style="background-image:url('images/serie.png'); background-size: cover;">
                <div class="titre">
                    <span>Séries Africaines</span>
                </div>

                <div class="card-img-overlay d-flex flex-column">

                    <div class="video">


                        <!-- <div class="play">

                        </div> -->
                        <!-- <div>
                            <span>16h</span>
                        </div> -->
                    </div>
                    <div class="card-body">

                    </div>

                </div>
            </div>
            <div class="card-footer">
                <div class="media">
                    <img class="mr-3 rounded-circle video_play button" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px" id="one">
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Lire</h6>
                        <small style="color:#fff">12h00</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img"style="background-image:url('images/micro.png'); background-size: cover;">
                <div class="titre">
                    <span>Micro Voyageur</span>
                </div>

                <div class="card-img-overlay d-flex flex-column">

                    <div class="video">


                        <!-- <div class="play">

                        </div> -->
                        <!-- <div>
                            <span>16h</span>
                        </div> -->
                    </div>
                    <div class="card-body">

                    </div>

                </div>
            </div>
            <div class="card-footer">
                <div class="media">
                    <img class="mr-3 rounded-circle video_play" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px">
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Lire</h6>
                        <small style="color:#fff">13h00</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="txt bande">
            <div ><img src="{{asset('images/annonce_left_.png')}}" width="50px" height="50px"></div>
         <div class="f"><span><h4><marquee>ESPACE ANNONCEURS</marquee></h4></span></div>
        <div><img src="{{asset('images/annonce_right.png')}}" width="50px" height="50px"></div>
        </div>
        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img" style="background-image:url('images/zouglou.png'); background-size: cover;">
                <div class="titre">
                    <span style="font-size:22px;">Zouglou-Varieté-Rumba-Slow</span>
                </div>
                <div class="card-img-overlay d-flex flex-column">

                    <div class="video">


                        <!-- <div class="play">

                        </div> -->
                        <!-- <div>
                            <span>16h</span>
                        </div> -->
                    </div>
                    <div class="card-body">

                    </div>

                </div>
            </div>
            <div class="card-footer">
                <div class="media">
                    <img class="mr-3 rounded-circle video_play" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px">
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Lire</h6>
                        <small style="color:#fff">14h00</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img" style="background-image:url('images/islam.png'); background-size: cover;">
                <div class="titre">
                    <span>L'Islam en Couleur</span>
                </div>
                <div class="card-img-overlay d-flex flex-column">

                    <div class="video">


                        <!-- <div class="play">

                        </div> -->
                        <!-- <div>
                            <span>16h</span>
                        </div> -->
                    </div>
                    <div class="card-body">

                    </div>

                </div>
            </div>
            <div class="card-footer">
                <div class="media">
                    <img class="mr-3 rounded-circle video_play" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px">
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Lire</h6>
                        <small style="color:#fff">15h00</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img button" style="background-image:url('images/honneur.png'); background-size: cover;">
                <div class="titre">
                    <span>Magazines</span>
                </div>
                <div class="card-img-overlay d-flex flex-column">

                    <div class="video">


                        <!-- <div class="play">

                        </div> -->
                        <!-- <div>
                            <span>16h</span>
                        </div> -->
                    </div>
                    <div class="card-body">

                    </div>

                </div>
            </div>
            <div class="card-footer">
                <div class="media">
                    <img class="mr-3 rounded-circle video_play" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px">
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Lire</h6>
                        <small style="color:#fff">16h00</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_card pub " ><img src="{{asset('images/PUB.png')}}" height="150px" width="100%"></div>
        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img" style="background-image:url('images/dj.png'); background-size: cover;">
                <div class="titre">
                    <span style="font-size:22px;">Afrobeat-DJ et Rap</span>
                </div>

                <div class="card-img-overlay d-flex flex-column">

                    <div class="video">


                        <!-- <div class="play">

                        </div> -->
                        <!-- <div>
                            <span>16h</span>
                        </div> -->
                    </div>
                    <div class="card-body">

                    </div>

                </div>
            </div>
            <div class="card-footer">
                <div class="media">
                    <img class="mr-3 rounded-circle video_play" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px">
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Lire</h6>
                        <small style="color:#fff">17h00</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img" style="background-image:url('images/reportage.png'); background-size: cover;">
                <div class="titre">
                    <span>Reportages et Régions</span>
                </div>

                <div class="card-img-overlay d-flex flex-column">

                    <div class="video">


                        <!-- <div class="play">

                        </div> -->
                        <!-- <div>
                            <span>16h</span>
                        </div> -->
                    </div>
                    <div class="card-body">

                    </div>

                </div>
            </div>
            <div class="card-footer">
                <div class="media">
                    <img class="mr-3 rounded-circle video_play" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px">
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Lire</h6>
                        <small style="color:#fff">18h00</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img" style="background-image:url('images/humour.png');background-size: cover;">
                <div class="titre">
                    <span>Humour et Mariage</span>
                </div>
                <div class="card-img-overlay d-flex flex-column">

                    <div class="video">


                        <!-- <div class="play">

                        </div> -->
                        <!-- <div>
                            <span>16h</span>
                        </div> -->
                    </div>
                    <div class="card-body">

                    </div>

                </div>
            </div>
            <div class="card-footer">
                <div class="media">
                    <img class="mr-3 rounded-circle video_play" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px">
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Lire</h6>
                        <small style="color:#fff">19h00</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_card pub " ><img src="{{asset('images/PUB.png')}}" height="150px" width="100%"></div>
        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img" style="background-image:url('images/sjt.png'); background-size: cover;">
                <div class="titre">
                    <span style="font-size:22px;">Jeunesse et Débats</span>
                </div>


            </div>
            <div class="card-footer">
                <div class="media">
                    <img class="mr-3 rounded-circle video_play" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px">
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Lire</h6>
                        <small style="color:#fff">20h00</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img" style="background-image:url('images/sport.png'); background-size: cover;">
                <div class="titre">
                    <span>Sports et Buzz</span>
                </div>

            </div>
            <div class="card-footer">
                <div class="media">
                    <img class="mr-3 rounded-circle video_play" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px">
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Lire</h6>
                        <small style="color:#fff">21h00</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 main_card" data-aos="fade-up">
            <div class="card text-white card-has-bg click-col card_img" style="background-image:url('images/christ.png'); background-size: cover;">
                <div class="titre">
                    <span style="font-size:20px;">Christianisme et Chansons</span>
                </div>


            </div>
            <div class="card-footer">
                <div class="media">
                    <img class="mr-3 rounded-circle video_play button" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px" id="one">
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Lire</h6>
                        <small style="color:#fff">22h00-5h00</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('include.modal')
