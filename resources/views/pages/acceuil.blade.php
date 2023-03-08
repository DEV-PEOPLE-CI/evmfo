
@php
    $active = 1;
   $deo_count=0;
   $pub_count=0;
@endphp
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
{{--@dd($aff_nbr)--}}
        @foreach( $categorie as $media )
            <div class="col-md-4 main_card" data-aos="fade-up">
                <div class="card text-white card-has-bg click-col card_img" style="background-image: url('{{$media['file']}}');background-size: 100% 100%;">
                    <div class="card-img-overlay d-flex flex-column">

                        <div class="figure">
                            <figcaption>
                                    <img class="mr-3 rounded-circle video_play " type="button" data-toggle="modal"  data-target="#myModal" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px"  onclick="call({{$media['id']}})">
                                    <small>Lire</small>

                            </figcaption>
                        </div>

                    </div>
                </div>

            </div>

            @php $deo_count+=1; @endphp

            @if(sizeof($affiche) == 0 && $deo_count ==3)
                <div class="main_card pub " ><img data-toggle="modal" data-target="#modalPub" src="{{asset("images/PUB.png")}}" height="100%" width="100%"  class="" ></div>
                @php
                    $deo_count =0;
                @endphp
            @elseif($pub_count <= $aff_nbr-1 && $deo_count ==3)
                <div class="main_card pub " ><img data-toggle="modal" data-target="#modalPub" src="{{$affiche[$pub_count]['file']}}" height="100%" width="100%" onclick="show_pub('{{$affiche[$pub_count]['file']}}','{{$affiche[$pub_count]['link']}}')" class="" ></div>
                @php
                    $pub_count +=1;
                    $deo_count =0;
                @endphp
            @endif


        @endforeach

    </div>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Nos Partenaires</h1>
        @if(sizeof($partenaire) < 4)
            <div class="row">
                @foreach($partenaire as $item)

                    <div class="col-md-4 d-flex justify-content-center mb-3">
                        <a href="{{$item["link"]}}">
                            <img src="{{$item["path"]}}" class="" width="100px" height=100px">
                        </a>
                    </div>

                @endforeach
            </div>
        @else
            <div class="carousel slide multi-item-carousel" id="theCarousel">
                <div class="carousel-inner row w-100 mx-auto">

                    @foreach($partenaire as $item)
                        <div class="carousel-item col-md-4 {{($active == 1) ? 'active' : ''}}">
                            <a href="{{$item["link"]}}">
                                <img src="{{$item["path"]}}" class="img-fluid mx-auto d-block" width="100px" height=100px">
                            </a>
                        </div>
                        <?php $active=0 ?>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#theCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#theCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        @endif
    </div>
    </div>
    <style>
        body {
            background: #333;
            color: #ddd;
        }
        @media (min-width: 768px) {
            .multi-item-carousel .carousel-inner .carousel-item {
                margin-right: inherit;
            }
            .multi-item-carousel .carousel-inner .carousel-item.active + .carousel-item, .multi-item-carousel .carousel-inner .carousel-item.active + .carousel-item + .carousel-item {
                display: block;
            }
            .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left), .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item, .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
                transition: none;
            }
            .multi-item-carousel .carousel-inner .carousel-item.active + .carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -33.333333333333%;
                z-index: -1;
                display: block;
                visibility: visible;
            }
            .multi-item-carousel .carousel-inner .carousel-item-next, .multi-item-carousel .carousel-inner .carousel-item-prev {
                position: relative;
                transform: translate3d(0,0,0);
            }
            .multi-item-carousel .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                display: block;
                visibility: visible;
            }
            .multi-item-carousel .active.carousel-item-left + .carousel-item-next.carousel-item-left, .multi-item-carousel .carousel-item-next.carousel-item-left + .carousel-item, .multi-item-carousel .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item, .multi-item-carousel .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%,0,0);
                visibility: visible;
            }
            .multi-item-carousel .active.carousel-item-right + .carousel-item-prev.carousel-item-right, .multi-item-carousel .carousel-item-prev.carousel-item-right + .carousel-item, .multi-item-carousel .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item, .multi-item-carousel .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%,0,0);
                display: block;
                visibility: visible;
            }
        }
    </style>
    <script>
        // Developed at agap2
        // Based on:
        // http://www.codeply.com/go/s3I9ivCBYH/multi-carousel-single-slide-bootstrap-4

        $('.multi-item-carousel').on('slide.bs.carousel', function (e) {
            let $e = $(e.relatedTarget),
                itemsPerSlide = 3,
                totalItems = $('.carousel-item', this).length,
                $itemsContainer = $('.carousel-inner', this),
                it = itemsPerSlide - (totalItems - $e.index());
            if (it > 0) {
                for (var i = 0; i < it; i++) {
                    $('.carousel-item', this).eq(e.direction == "left" ? i : 0).
                        // append slides to the end/beginning
                        appendTo($itemsContainer);
                }
            }
        });

    </script>

    <script>
        // const player = new Plyr('#player');

    </script>

@endsection
@include('include.modal')

