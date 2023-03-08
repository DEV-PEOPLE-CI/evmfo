
<!-- Button trigger modal -->

<!-- Modal -->
{{--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" onclick="close_modal()" style="background: none-webkit-backdrop-filter: blur(15px); /* assure la compatibilité avec safari */--}}
{{--    backdrop-filter: blur(15px);background-color: rgba(182, 182, 182, 0.2);">--}}
{{--    <div class="modal-dialog"style="background: none;">--}}
{{--        <div class="modal-content "style="background: none">--}}
{{--            <div class="modal-header" style="border: none">--}}

{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="close_modal()">--}}
{{--                    <span aria-hidden="true" style="color: white">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body" style="background: black">--}}
{{--                ...--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="background-color: rgba(182, 182, 182, 0.2);backdrop-filter: blur(15px);">
    <div class="modal-dialog" role="document" style="background: none;">
        <div class="modal-content" style="background: none;">
            <div class="modal-header" style="background: none;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" style="color: white">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background: black">
                <div id="video_show">

                </div>
                    <video  controls playsinline style='max-width: 100%' id='player'>
                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">
                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4" type="video/mp4" size="1440">

                        <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">

                    </video>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalPub" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="background-color: rgba(182, 182, 182, 0.2);backdrop-filter: blur(15px);">
    <div class="modal-dialog" role="document" style="background: none;">
        <div class="modal-content" style="background: none;">
            <div class="modal-header" style="background: none;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" style="color: white">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background: black" id="pub_show">

            </div>
        </div>
    </div>
</div>

