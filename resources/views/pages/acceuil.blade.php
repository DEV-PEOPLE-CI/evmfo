

@extends('template')<link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/logo_eveil.png')}}">

@section('content')

    <div class="row" >
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
                <span style="--index: 0;">VOS PROGRAMMES</span>
                <span style="--index: 1;">VOS PROGRAMMES</span>
                <span style="--index: 2;">VOS PROGRAMMES</span>
              </div>
            </span>
            <div class="btn-prec"></div>
        </div>

        @php
            $pub_count=0;
        @endphp
        @foreach( $categorie as $media )
            @php $pub_count+=1; @endphp
            <div class="col-md-4 main_card" data-aos="fade-up">
                <div class="card text-white card-has-bg click-col card_img" style="background-image: url('{{$media['file']}}');background-size: 100% 100%;">
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="figure">
                            <figcaption>
                                <img class="mr-3 rounded-circle video_play " data-toggle="modal"  data-target="#exampleModal" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px"  onclick="call({{$media['id']}})">
                                <small>Lire</small>
                            </figcaption>
                        </div>

                    </div>
                </div>

            </div>



            @switch($pub_count)
                @case(5)
                <div class="pub pub_first_mobile"><img  data-toggle="modal" data-target="#exampleModal" src="{{$aff1}}" height="100%" width="100%" onclick="show_pub('{{$aff1}}','{{$lien1}}')"/></div>
                @break
                @case(3)
                <div class="pub pub_first_pc"><img   data-toggle="modal" data-target="#exampleModal" src="{{$aff1}}" height="100%" width="100%" onclick="show_pub('{{$aff1}}','{{$lien1}}')"/></div>
                @break
                @case(6)
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
                @break
                @case(9)
                <div class="main_card pub " ><img data-toggle="modal" data-target="#exampleModal" src="{{$aff2}}" height="100%" width="100%" onclick="show_pub('{{$aff2}}','{{$lien2}}')" class=""></div>
                @break
                @case(12)
                <div class="main_card pub " ><img data-toggle="modal" data-target="#exampleModal" src="{{$aff3}}" height="100%" width="100%" onclick="show_pub('{{$aff3}}','{{$lien3}}')" class="" ></div>
                @break
                @default
                {{''}}
            @endswitch

        @endforeach

    </div>

@endsection
@include('include.modal')

