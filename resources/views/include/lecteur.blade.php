<video  src='{{$file}}' controls controlsList='nodownload' style='max-width: 100%' id='video_player'>
</video>
<div class='container col' style='width: 645px;'>
    <span style='width:100%;color:white;'><p>{{$title}}</p></span>
    <span class='icon_action'>
        <i class='fa fa-thumbs-up' id='dev' style='color:{{$link_icon}};' aria-hidden='true' onclick='like({{$id}})'></i>
        <i class='fa fa-comments' data-toggle='collapse' href='#collapseExample' role='button' aria-expanded='false' aria-controls='collapseExample' style='color:white'></i>
    </span>
    <iframe src='https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2F{{$link}}&layout=button&size=large&width=130&height=28&appId' width='100' height='28' style='border:none;overflow:hidden' scrolling='no' frameborder='0' allowfullscreen='true' allow='autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share'></iframe>
    <a class="btn btn-success" type="button" href="https://wa.me/?text=Je vous invite à regarder et à partager cette vidéo svp. {{$link}}" target="_blank"><i class="fa fa-whatsapp"></i></a>
    <div class='collapse' id='collapseExample'>
        <input class='form-control' name='fullname' type='text' placeholder='Nom et prenom' id='fullname' required>
        <textarea class='form-control' id='msg' rows='3' placeholder='Saisir ici' name='content' required></textarea>
        <input type='reset' class='btn btn-danger'  value='fermer' data-toggle='collapse' href='#collapseExample' role='button' aria-expanded='false' aria-controls='collapseExample' ></button>
        <button  class='btn btn-success'  onclick='send_comments()'>Envoyer</button>
    </div><br>
    <small>{{$description}}</small><input type='hidden' value='{{$id}}' name='media_id' id='hidden_input'>
</div>




