@extends('template')<link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/logo_eveil.png')}}">
@section('content')
    <div class="row">
    <br><br><br><br>
        @if($title =="null")
            <h3>Aucune video pour l'instant</h3>

        @else
            <div class='modal-body' style='text-align:center;'>
                <video class='video_modal' id='VisaChipCardVideo' width='600' controls controlsList='nodownload'>
                    <source src='{{$link}}' type='video/mp4' >
                </video>
            </div>
            <div class='container' style='width: 645px;color: white'>
                <span style='display:grid;grid-template-columns: 1fr 2rem 2rem 2rem;width: 98%;margin-top: 25px'><h5>{{$title}}</h5></span>
                <span class='icon_action'>

        <i class='fa fa-thumbs-up' id='dev' style='color:{{$link_icon}};' aria-hidden='true' onclick='like({{$id_video}})'></i>
            <i class='fa fa-comments' data-toggle='collapse' href='#collapseExample' role='button' aria-expanded='false' aria-controls='collapseExample' ></i>
        </span>
                <iframe src='https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2F{{$link_fb}}&layout=button&size=small&width=81&height=20&appId' width='81' height='20' style='border:none;overflow:hidden' scrolling='no' frameborder='0' allowfullscreen='true' allow='autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share'></iframe>
                <a class="btn btn-success" type="button" href="https://wa.me/?text=Je vous invite à regarder et à partager cette vidéo svp. {{$link_fb}}" target="_blank"><i class="fa fa-whatsapp"></i></a>

                <div class='collapse' id='collapseExample'>
                    <input class='form-control' name='fullname' type='text' placeholder='Nom et prenom' id='fullname' required>
                    <textarea class='form-control' id='msg' rows='3' placeholder='Saisir ici' name='content' required></textarea>
                    <input type='reset' class='btn btn-danger'  value='Annuler' data-toggle='collapse' href='#collapseExample' role='button' aria-expanded='false' aria-controls='collapseExample' ></button>
                    <button  class='btn btn-success'  onclick='send_comments()'>Envoyer</button>
                </div><br>
                <br><br><br>
                <small style='text-align:left'>{{utf8_decode($description)}}</small><input type='hidden' value='{{$id_video}}' name='media_id' id='hidden_input'>
                    @if(isset($commentaire) && $commentaire != "null")
                    <h4>Commentaires</h4>

                    <div id="block_comment">

                    @foreach($commentaire as $item)
                            <div>
                                <p>
                                    <b>{{$item["fullname"]}}</b>
                                    <br/>
                                    <small>{{$item["content"]}}</small>
                                </p>

                            </div>
                        @endforeach
                    </div>

                    @endif
            </div>
        @endif

</div>
@endsection
<style>
    #block_comment {
        height: 200px;
        overflow-y: scroll;
    }
</style>


