

@extends('template')<link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/logo_eveil.png')}}">
@section('content')


    <div class="row">

        <div class="txt txt_glicth">
            <div class="btn-prec"></div>
            <span>
      <div class="stack" style="--stacks: 3;">
        <span style="--index: 0;">VOS PROGRAMMES</span>
        <span style="--index: 1;">VOS PROGRAMMES</span>
        <span style="--index: 2;">VOS PROGRAMMES</span>
      </div>
    </span>
            <div class="btn-prec"></div>
        </div>
        @php
            $show_pub=0;
        @endphp
        @foreach( $categorie as $media )
            @php $show_pub+=1; @endphp
            <div class="col-md-4 main_card" data-aos="fade-up" >
                <div class="card text-white card-has-bg click-col " style="border-radius: 20px;border: solid 0px " >
                    <img src="{{$media['file']}}" class="card_img" width="100%" height="100%" style="max-width: 100%;max-height: 100%">

                    <div class="figure">
                        <figcaption>

                            <img class="mr-3 rounded-circle video_play " data-toggle="modal"  data-target="#exampleModal" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px"  onclick="call_deo({{$media['id']}})">
                            <small>Lire</small>


                        </figcaption>
                    </div>
                </div>
                <div class="media">


                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">{{$media['id']}}-->{{$show_pub}}</h6>
                    </div>
                </div>
            </div>



            @switch($show_pub)
                @case(5)
                <div class="pub pub_first_mobile"><img  data-toggle="modal" data-target="#exampleModal" src="{{$aff1}}" height="150px" width="100%" onclick="show_pub('{{$aff1}}','{{$lien1}}')"/></div>
                @break
                @case(6)
                <div class="pub pub_first_pc"><img   data-toggle="modal" data-target="#exampleModal" src="{{$aff1}}" height="150px" width="100%" onclick="show_pub('{{$aff1}}','{{$lien1}}')"/></div>
                @break
                @case(9)
                <div class="txt bande">
                    <div ><img src="{{asset('images/annonce_left_.png')}}" width="50px" height="50px"></div>
                    <div class="f">
                <span>
                    @if($annonce == "ESPACE ANNONCEURS")
                        <h4><marquee>{{$annonce}}</marquee></h4>
                    @else
                        @foreach($annonce as $q)
                            <h4><marquee>{{$q['content']}}</marquee></h4>
                        @endforeach
                    @endif
                </span>
                    </div>
                    <div><img src="{{asset('images/annonce_right.png')}}" width="50px" height="50px"></div>
                </div>
                @break
                @case(12)
                <div class="main_card pub " ><img data-toggle="modal" data-target="#exampleModal" src="{{$aff2}}" height="150px" width="100%" onclick="show_pub('{{$aff2}}','{{$lien2}}')" class=""></div>
                @break
                @case(15)
                <div class="main_card pub " ><img data-toggle="modal" data-target="#exampleModal" src="{{$aff3}}" height="150px" width="100%" onclick="show_pub('{{$aff3}}','{{$lien3}}')" class="" ></div>
                @break
                @default
                {{''}}
            @endswitch

        @endforeach

    </div>

@endsection
@include('include.modal')
@include('include.link_humour')
<style>

    .card-has-bg:hover figcaption {
        bottom: 0%;
    }
    .figure h1 {
        position: absolute;
        top: 50px;
        left: 20px;
        margin: 0;
        padding: 0;
        color: white;
        font-size: 60px;
        font-weight: 100;
        line-height: 1;
    }
    .figure img {
        height: 50px;
        transition: 0.25s;
        width: 50px;
    }
    .figure figcaption {
        position: absolute;
        bottom: -50%;
        left: 0;
        width: 100%;
        margin: 0;
        padding: 5px 10px 5px 10px;
        background-color: rgba(0, 0, 0, 0.85);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
        color: white;
        line-height: 1;
        transition: 0.25s;
    }


</style>
