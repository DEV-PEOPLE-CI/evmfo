@if($title =="null")
    <h3>Aucune video pour l'instant</h3>

@else
    <video  controls playsinline style='max-width: 100%' id='player'>

        <!-- Video files -->
        <source src="{{$file}}" type="video/mp4" size="576" >
        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">
        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4" type="video/mp4" size="1440">

        <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">

    </video>


{{--    <div class='container col' style='width: 645px;'>--}}
{{--        <span style='width:100%;color:white;'><p>{{$title}}</p></span>--}}
{{--        <span class='icon_action'>--}}
{{--        <i class='fa fa-thumbs-up' id='dev' style='color:{{$link_icon}};' aria-hidden='true' onclick='like({{$id}})'></i>--}}
{{--        <i class='fa fa-comments' data-toggle='collapse' href='#collapseExample' role='button' aria-expanded='false' aria-controls='collapseExample' style='color:white'></i>--}}
{{--    </span>--}}
{{--        <iframe src='https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2F{{$link}}&layout=button&size=large&width=130&height=28&appId' width='100' height='28' style='border:none;overflow:hidden' scrolling='no' frameborder='0' allowfullscreen='true' allow='autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share'></iframe>--}}
{{--        <a class="btn btn-success" type="button" href="https://wa.me/?text=Je vous invite à regarder et à partager cette vidéo svp. {{$link}}" target="_blank"><i class="fa fa-whatsapp"></i></a>--}}
{{--        <div class='collapse' id='collapseExample'>--}}
{{--            <input class='form-control' name='fullname' type='text' placeholder='Nom et prenom' id='fullname' required>--}}
{{--            <textarea class='form-control' id='msg' rows='3' placeholder='Saisir ici' name='content' required></textarea>--}}
{{--            <input type='reset' class='btn btn-danger'  value='fermer' data-toggle='collapse' href='#collapseExample' role='button' aria-expanded='false' aria-controls='collapseExample' ></button>--}}
{{--            <button  class='btn btn-success'  onclick='send_comments()'>Envoyer</button>--}}
{{--        </div><br>--}}
{{--        <small>{{$description}}</small><input type='hidden' value='{{$id}}' name='media_id' id='hidden_input'>--}}
{{--            @if(isset($commentaire) && $commentaire != "null")--}}
{{--            <h4>Commentaires</h4>--}}

{{--            <div id="block_comment">--}}

{{--            @foreach($commentaire as $item)--}}
{{--                    <div>--}}
{{--                        <p>--}}
{{--                            <b>{{$item["fullname"]}}</b>--}}
{{--                            <br/>--}}
{{--                            <small>{{urldecode(utf8_decode($item["content"]))}}</small>--}}
{{--                        </p>--}}

{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--            @endif--}}

{{--    </div>--}}
@endif
<style>
    #block_comment {
        height: 200px;
        overflow-y: scroll;
    }

</style>
<script>
    $(document).ready(function() {
        console.log("hello")
        const player = new Plyr('#player');
        // Expose
        window.player = player;

    });
</script>
