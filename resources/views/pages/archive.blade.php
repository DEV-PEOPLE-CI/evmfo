@extends('template')
@section('content')
    <!---text glicth--->

    <!---end text glicth--->
    <div class="row">
        <div class="txt txt_glicth">
            <div class="btn-prec"></div>
            <span>
		      <div class="stack" style="--stacks: 3;">
		        <span style="--index: 0;">ARCHIVES</span>
		        <span style="--index: 1;">ARCHIVES</span>
		        <span style="--index: 2;">ARCHIVES</span>
		      </div>
		    </span>
            <div class="btn-prec"></div>
        </div>
        <div style="border-bottom: solid 2px;width: 100%;color: white;text-align: center;">
            <h2
                data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" >
                Il y a quelques jours
            </h2>
        </div>



        <div class="collapse row" id="collapseExample">
            <div class="col-md-4 main_card" data-aos="fade-up">
                <div class="card text-white card-has-bg click-col">
                    <video class="video_modal" id="VisaChipCardVideo" style="max-width: 100%;">
                        <source src="video/serie.mp4" type="video/mp4" >
                    </video>

                </div>
                <div class="card-footer">
                    <div class="media">
                        <img class="mr-3 rounded-circle video_play button" src="images/play.png" alt="Generic placeholder image" style="max-width:50px" id="one">
                        <div class="media-body">
                            <span style="display:grid;grid-template-columns: 1fr 2rem 2rem 2rem;width: 98%;color: white;"><h5></h5><i class="fa fa-thumbs-up" aria-hidden="true"></i><i class="fa fa-comments" aria-hidden="true"></i><i class="fa fa-share" aria-hidden="true"></i></span>
                            <small class="my-0 text-white d-block">Le menteur à la cabine : Arrêtes ça !</small>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 main_card" data-aos="fade-up">
                <div class="card text-white card-has-bg click-col">
                    <video class="video_modal" id="VisaChipCardVideo" style="max-width: 100%;">
                        <source src="video/serie.mp4" type="video/mp4" >
                    </video>

                </div>
                <div class="card-footer">
                    <div class="media">
                        <img class="mr-3 rounded-circle video_play button" src="images/play.png" alt="Generic placeholder image" style="max-width:50px" id="one">
                        <div class="media-body">
                            <span style="display:grid;grid-template-columns: 1fr 2rem 2rem 2rem;width: 98%;color: white;"><h5></h5><i class="fa fa-thumbs-up" aria-hidden="true"></i><i class="fa fa-comments" aria-hidden="true"></i><i class="fa fa-share" aria-hidden="true"></i></span>
                            <small class="my-0 text-white d-block">Le menteur à la cabine : Arrêtes ça !</small>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 main_card" data-aos="fade-up">
                <div class="card text-white card-has-bg click-col">
                    <video class="video_modal" id="VisaChipCardVideo" style="max-width: 100%;">
                        <source src="video/serie.mp4" type="video/mp4" >
                    </video>

                </div>
                <div class="card-footer">
                    <div class="media">
                        <img class="mr-3 rounded-circle video_play button" src="images/play.png" alt="Generic placeholder image" style="max-width:50px" id="one">
                        <div class="media-body">
                            <span style="display:grid;grid-template-columns: 1fr 2rem 2rem 2rem;width: 98%;color: white;"><h5></h5><i class="fa fa-thumbs-up" aria-hidden="true"></i><i class="fa fa-comments" aria-hidden="true"></i><i class="fa fa-share" aria-hidden="true"></i></span>
                            <small class="my-0 text-white d-block">Le menteur à la cabine : Arrêtes ça !</small>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@include('include.modal')
