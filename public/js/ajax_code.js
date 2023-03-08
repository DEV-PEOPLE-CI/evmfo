function videoPlayer(idPlayer) {
    console.log("player==>", idPlayer)

    console.log("load video")
    // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
    const player = new Plyr('#' + idPlayer);

    // Expose
    window.player = player;

    // Bind event listener
    function on(selector, type, callback) {
        document.querySelector(selector).addEventListener(type, callback, false);
    }

    player.play();


    // Play
    on('.js-play', 'click', () => {
        player.play();
    });

    // Pause
    on('.js-pause', 'click', () => {
        player.pause();
    });

    // Stop
    on('.js-stop', 'click', () => {
        player.stop();
    });

    // Rewind
    on('.js-rewind', 'click', () => {
        player.rewind();
    });

    // Forward
    on('.js-forward', 'click', () => {
        player.forward();
    });
}

function call(id) {
    console.log("in call")
    // const player = new Plyr('#player');
    //
    // player.setup();

    // $('#myModal').modal('show');

    $.get('/call_controller/'+id, function(data) {
        // console.log("data--",data)
        // player.setup();

        // Update the modal body with the response
        $('#myModal #player').html(data);

        // Show the modal
        // $('#myModal').modal('show');
    });


}

function play(id)
{
    id_get=id
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {



            document.getElementById("player1").src=this.responseText;
        }
    };

    xhttp.open("GET", 'call_son/'+id_get, true);
    xhttp.send();
}

function send_comments()
{
    full_name=document.getElementById('fullname').value;
    media_id=document.getElementById('hidden_input').value;
    content=(document.getElementById('msg').value);
    console.log("decode",decodeURI(content));
    var xhttp = new XMLHttpRequest();
    alert('vous avez commenté');
    // xhttp.onreadystatechange = function() {
    //     if (this.readyState == 4 && this.status == 200) {
    //
    //         alert('vous avez commenté');
    //     }
    // };
    console.log("comment xend")
    $("#collapseExample").collapse('hide')

    xhttp.open("get", 'send_commentaire/'+media_id+'/'+full_name+'/'+content, true);
    xhttp.send();
}

function like(id)
{
    console.log("use")
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("dev").style.color='skyblue';
            //document.getElementById("willy").innerHTML=this.responseText;
            /*if (this.responseText == "true") {
                console.log("like")

                document.getElementById("dev").style.color='skyblue';
            }else{
                console.log("dislke")
                document.getElementById("dev").style.color='white';

            }*/
        }
    };
    xhttp.open("GET", 'like/'+id, true);
    xhttp.send();
}


function show_pub(file,lien)
{

    document.getElementById("video_show").innerHTML="";

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            if(lien != "#")
            {
                document.getElementById("video_show").innerHTML="<a href='"+lien+"' target='_blank'><img src='"+file+"' width='100%'/><br><em style='text-align:center'>cliquez sur l'affiche pour en savoir plus</em></a>";

            }else{
                document.getElementById("video_show").innerHTML="<img src='"+file+"' width='100%'/><br>";

            }
        }
    };
    xhttp.open("GET", 'file.txt', true);
    xhttp.send();
}

//new 17-02-2022

function call_prec(id)
{
    document.getElementById("video_show").innerHTML="<video  src='' style='max-width: 100%' controls controlsList='nodownload'></video>"
    id_get=id
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("video_show").innerHTML=this.responseText;
        }

    };
    xhttp.open("GET", 'call_controller_prec/'+id_get, true);
    xhttp.send();
}

function  call_deo(id,type)
{
    document.getElementById("video_show").innerHTML="<video  src='' style='max-width: 100%' controls controlsList='nodownload'></video>"
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("video_show").innerHTML=this.responseText;
        }

    };
    xhttp.open("GET", 'call_deo/'+id+'/'+type, true);
    xhttp.send();
}
function close_modal()
{
    document.getElementById('player').pause();
}

