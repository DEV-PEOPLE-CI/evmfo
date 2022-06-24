@extends('template')<link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/logo_eveil.png')}}">
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
        <?php $count=0 ?>
     @if(empty($txt))
            @foreach($media as $q)

                <?php $count+=1 ?>
                @if($count==1)
                    @php $image=asset('images/archive.png'); @endphp

                @else
                    @php $image=asset('images/archive_w.png');$count=0 ; @endphp
                @endif


                    <div class="col-md-4 main_card" data-aos="fade-up">
                        <div class="card text-white card-has-bg click-col card_img" style="background-image: url('{{$image}}');background-size: 100% 100%;height: 250px">
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="figure">
                                    <figcaption style="bottom: 1%;display: inline-block">
                                        <img class="mr-3 rounded-circle video_play " data-toggle="modal"  data-target="#exampleModal" src="{{asset('images/play.png')}}" alt="Generic placeholder image" style="max-width:50px"  onclick="call_deo({{$q['id']}},'cat')">
                                        <small style="color:white"><b style="font-size: 15px"><em>{{utf8_decode($q['name'])}}</em></b>-{{utf8_decode($q['title'])}}</small>

                                    </figcaption>
                                </div>

                            </div>
                        </div>

                    </div>
            @endforeach
        @else
         <br>
            <div style="text-align: center;width: 100%"><div class='alert alert-danger' role='alert' >{{$txt}}</div></div>
         @endif





    </div>
@endsection

@include('include.modal')
