<!---modal commentaire-->
<!-- Modal -->
<div id="modal-container">

    <div class="modal-background">
        <div class="modal modal_video">


            <div class="modal-header" style="border: none;height: 5px;position: absolute;top: 0px;right: 0;">
                <a type="button" class="close close_frist" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white">&times;</span>
                </a>
            </div>

            <div class="modal-body" style="text-align:center;">
                <video class="video_modal" id="VisaChipCardVideo" width="600" controls>
                    <source src="video/serie.mp4" type="video/mp4" >
                </video>


            </div>
            <div class="container col" style="width: 645px;">
                <span style="display:grid;grid-template-columns: 1fr 2rem 2rem 2rem;width: 98%;"><h5>Le menteur à la cabine : Arrêtes ça !</h5></span>
                <span class="icon_action"><i class="fa fa-thumbs-up" aria-hidden="true"></i><i class="fa fa-comments" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></i> <div class="fb-share-button" data-href="https://www.your-domain.com/your-page.html"
                                                                                                                                                                                                   data-layout="button_count"></div></span>
                <small>Lien:<a href="#" style="color:white;font-weight: bold;text-decoration: underline blue"
                    >lien</a></small><br>
                <small style="text-align:left">Eveil Télé / Kpaflotaaaaage /</small>

            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Commentaire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background:none;">
                <form>
                    <div class="form-group">

                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Saisir ici"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input type="reset" class="btn btn-danger"  value="reinitialisé"></button>
                <input type="submit" class="btn btn-success" value="Envoyé"></button>
            </div>
        </div>
    </div>
</div>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!---modal share-->
<!-- Modal -->
<div class="modal fade" id="partage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">partager le lien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <label>Lien:<a href="#" style="color:blue;text-decoration: underline blue"
                    >lien</a></label>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
