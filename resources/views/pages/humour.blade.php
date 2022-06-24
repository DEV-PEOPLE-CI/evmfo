@extends('template')<link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/logo_eveil.png')}}">
@section('content')


    <div class="row">
        <div class="txt bande">
            <div ><img src="{{asset('images/annonce_left_.png')}}" width="50px" height="50px"></div>
            <div class="f">
                @php $nb=0 @endphp
                <span>
                    @if($annonce == "ESPACE ANNONCEURS")
                        <h4><marquee>{{$annonce}}</marquee></h4>
                    @else
                        <h4><marquee> @foreach($annonce as $q)
                                    @php $nb+=1 @endphp
                                    {{'**'.utf8_decode($q['content'])."**"}}
                                @endforeach
                            </marquee></h4>

                    @endif
                </span>
            </div>
            <div><img src="{{asset('images/annonce_right.png')}}" width="50px" height="50px"></div>
        </div>

        <div class="txt txt_glicth">
            <div class="btn-prec"></div>
            <span>
              <div class="stack" style="--stacks: 3;">
                <span style="--index: 0;">SPORTS-MUSIQUE-CULTURE</span>
                <span style="--index: 1;">SPORTS-MUSIQUE-CULTURE</span>
                <span style="--index: 2;">SPORTS-MUSIQUE-CULTURE</span>
              </div>
            </span>
            <div class="btn-prec"></div>
        </div>
        @php
            $count=0;
        @endphp
        @foreach( $media as $sub_categorie )
            @php $count+=1; @endphp
            <div class="col-md-4 main_card" data-aos="fade-up">
                <div class="card text-white card-has-bg click-col card_img" style="background-image: url('{{$sub_categorie['file']}}');background-size: 100% 100%;">
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="figure">
                            <figcaption>
                                <img class="mr-3 rounded-circle video_play " data-toggle="modal"  data-target="#exampleModal" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px"  onclick="call_deo({{$sub_categorie['id']}},'hum')">
                                <small>Lire</small>
                            </figcaption>

                        </div>

                    </div>
                </div>

            </div>
            @if($count==9)
                <div class="txt bande">
                    <div ><img src="{{asset('images/annonce_left_.png')}}" width="50px" height="50px"></div>
                    <div class="f">
                <span>
                    @if($annonce == "ESPACE ANNONCEURS")
                        <h4><marquee>{{$annonce}}</marquee></h4>
                    @else
                        <h4><marquee> @foreach($annonce as $q){{utf8_decode($q['content'])."  "}}@endforeach</marquee></h4>

                    @endif
                </span>
                    </div>
                    <div><img src="{{asset('images/annonce_right.png')}}" width="50px" height="50px"></div>
                </div>
            @endif
                @endforeach
       @if($proverbe != 'None')
            <div class="main_card pub " ><img data-toggle="modal" data-target="#exampleModal" src="{{$proverbe}}" height="150px" width="100%" onclick="show_pub('{{$proverbe}}','{{$lien}}')" class="" ></div>
        @endif


    </div>
@endsection
@include('include.modal')
<style>
    .hero{
        display: none;
    }
</style>
