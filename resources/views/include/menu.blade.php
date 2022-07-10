<!---menu--->
<header>

    <section class="ftco-section">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="{{asset('images/logo_eveil.png')}}" width="150px" class="logo"></a>
                <a class="navbar-brand direct " href="/" id="link_direct" ><div class="btn-live"></div>Direct</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation" style="font-weight: bold;">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item {{isset($main_link) ? 'active': ''  }}"><a href="/" class="nav-link first_link">HUMOUR - INFOS - SERIES - SPORTS - MUSIQUE - CULTURE</a></li>
                        <!-- <li class="nav-item {{isset($humour_link) ? 'active': ''  }}"><a href="/sport_et_culture" class="nav-link first_link">SPORTS - MUSIQUE - CULTURE</a></li> -->
                        <!--<li class="nav-item {{isset($precedemment_link) ? 'active': ''  }}"><a href="/precedemment" class="nav-link">Precedemment</a></li>-->
                        <!--<li class="nav-item {{isset($live_link) ? 'active': ''  }}" ><a href="/live" class="nav-link" id="link_direct_pc">Direct</a></li>-->
                        <li class="nav-item {{isset($archive_link) ? 'active': ''  }}"><a href="/archive" class="nav-link">Archives</a></li>
                    </ul>
                    <div class="social-media mobile_link">
                        <p class="mb-0 d-flex">
                            <a href="https://web.facebook.com/EveilTeleOfficiel" class="d-flex align-items-center justify-content-center" target="_blank" style="background: #3f61a7"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="https://www.youtube.com/channel/UCXnihMyy6wLi6z99uOvuIGA" class="d-flex align-items-center justify-content-center" target="_blank" style="background: #cc0000" ><span class="fa fa-youtube"><i class="sr-only">Youtube</i></span></a>
                            <a href="https://wa.me/?text=Je vous invite à visiter ce site svp. https://www.eveilmedia.tv/ " class="d-flex align-items-center justify-content-center" target="_blank" style="background: #08c040" ><span class="fa fa-whatsapp"><i class="sr-only">Youtube</i></span></a>
                        </p>
                    </div>
                </div>
                <div class="social-media pc_link">
                    <p class="mb-0 d-flex">
                        <a href="https://web.facebook.com/EveilTeleOfficiel" class="d-flex align-items-center justify-content-center" target="_blank" style="background: #3f61a7"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="https://www.youtube.com/channel/UCXnihMyy6wLi6z99uOvuIGA" class="d-flex align-items-center justify-content-center" target="_blank" style="background: #cc0000" ><span class="fa fa-youtube"><i class="sr-only">Youtube</i></span></a>
                        <a href="https://wa.me/?text=Je vous invite à visiter ce site svp. https://www.eveilmedia.tv/ " class="d-flex align-items-center justify-content-center" target="_blank" style="background: #08c040" ><span class="fa fa-whatsapp"><i class="sr-only">Youtube</i></span></a>

                    </p>
                </div>
            </div>

        </nav>

        <!-- END nav -->
    </section>

</header>
<style>
    .sr-only{
        color:green;
    }
</style>

<!---End menu--->
