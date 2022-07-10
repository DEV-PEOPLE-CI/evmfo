<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cookie;



class AcceuilController extends Controller
{
    function lecteur_deo($title,$file,$id,$link_icon,$link,$description)
    {
        return View('include.lecteur',['title'=>$title,'file'=>$file,'id'=>$id,'link_icon'=>$link_icon,'link'=>$link,'description'=>$description]);
    }

    function Acceuil()
    {

        $get_annonce=(new ApiController())->requestData('GET','announcement');
        $get_category=(new ApiController())->requestData('GET','category');
        $get_partenaire=(new ApiController())->requestData('GET','partenaire');


        if(sizeof($get_annonce['items'])==0)
        {
            $annonce = 'ESPACE ANNONCEURS';
        }else{
            $annonce=$get_annonce['items'];
        }
        $get_media=(new ApiController())->requestData('GET','affiche');
        if (sizeof($get_media['items'])>=3){
            $aff1= $get_media['items'][sizeof($get_media['items'])-1]['file'];
            $lien1=$get_media['items'][sizeof($get_media['items'])-1]['link'];
            $aff2= $get_media['items'][sizeof($get_media['items'])-2]['file'];
            $lien2=$get_media['items'][sizeof($get_media['items'])-2]['link'];
            $aff3= $get_media['items'][sizeof($get_media['items'])-3]['file'];
            $lien3=$get_media['items'][sizeof($get_media['items'])-3]['link'];

        }else if(sizeof($get_media['items'])==2){
            $aff1= $get_media['items'][sizeof($get_media['items'])-1]['file'];
            $lien1=$get_media['items'][sizeof($get_media['items'])-1]['link'];
            $aff2=$get_media['items'][sizeof($get_media['items'])-2]['file'];
            $lien2=$get_media['items'][sizeof($get_media['items'])-2]['link'];
            $aff3= 'images/PUB.png';
            $lien3='#';
        }
        else if(sizeof($get_media['items'])==1){
            $aff1= $get_media['items'][sizeof($get_media['items'])-1]['file'];
            $lien1=$get_media['items'][sizeof($get_media['items'])-1]['link'];

            $aff2= 'images/PUB.png';
            $lien2='#';

            $aff3= 'images/PUB.png';
            $lien3='#';
        }else{
            $aff1= 'images/PUB.png';
            $lien1='#';
            $aff2= 'images/PUB.png';
            $lien2='#';
            $aff3= 'images/PUB.png';
            $lien3='#';
        }

        return View('pages.acceuil',['data'=>'','categorie'=>$get_category['items'],'aff1'=>$aff1,'lien1'=>$lien1,'aff2'=>$aff2,'lien2'=>$lien2,'aff3'=>$aff3,'lien3'=>$lien3,'annonce'=>$annonce,'main_link'=>'active','partenaire'=>$get_partenaire['items']]);
    }

    function index()
    {
        global $tab;

        /*$all_categorie=(new ApiController())->requestData('GET','category');
        return view('test_api',['data'=>$all_categorie['items']]);*/

        //$get_media=(new ApiController())->requestData('GET','affiche');
        return View('test_api');
    }
    function callMediaById($id)
    {


        $get_media=(new ApiController())->requestData('GET','media/category/'.$id);
        $vue=(new ApiController())->requestData('patch','media/vue/'.$get_media['item']['id']);
        $link= urlencode(str_replace('https://','','www.eveilmedia.tv/video/'.$get_media['item']['id'].')'));
        $title=utf8_decode($get_media['item']['title']);
        $file=$get_media['item']['file'];
        $id=$get_media['item']['id'];
        $description=utf8_decode($get_media['item']['description']);
        if (Cookie::has($get_media['item']['id'])) {
            //si le cookie existe il faut faire une dislike dislike

            $link_icon ="skyblue";
        } else {
            // si le coookie n'existe pas il faut faire un like
            $link_icon ="white";
        }

        $result= $this->lecteur_deo($title,$file,$id,$link_icon,$link,$description);
        return $result;


    }
    function  call_son($id)
    {
        //$get_media=(new ApiController())->requestData('GET','media/category/'.$id);
        return "1";
    }
    public function createCommentaire($media_id,$full_name,$content){

        $api = new ApiController();
        $data = $api->sendData('POST','/commentaire',[
            'media_id' => $media_id,
            'fullname' =>$full_name,
            'content' => $content
        ]);
        //$session = $api->setMessage('Opération éffectuée','Une erreur s\'est produite',$data->status);
        //return redirect('commentaire');*/
        return $media_id.$full_name.$content;
    }
    function like($id)
    {


        if (Cookie::has($id)) {
            //si le cookie existe il faut faire une dislike dislike

            return "false";
        } else {
            // si le coookie n'existe pas il faut faire un like
            if ((new ApiController())->requestData('patch','media/like/'.$id)) {
                Cookie::queue($id,true, 19633200125);
                return "true";
            }
        }

    }


    function prec()
    {
        $get_annonce=(new ApiController())->requestData('GET','announcement');
        $get_category=(new ApiController())->requestData('GET','category');

        if(sizeof($get_annonce['items'])==0)
        {
            $annonce = 'ESPACE ANNONCEURS';
        }else{
            $annonce=$get_annonce['items'];
        }

        return View('pages.prec',['data'=>'','categorie'=>$get_category['items'],'precedemment_link'=>'active','annonce'=>$annonce]);
    }
    function call_controller_prec($id)
    {
        $get_media=(new ApiController())->requestData('get','previously/category/'.$id);
        $vue=(new ApiController())->requestData('patch','media/vue/'.$get_media['item']['id']);
        $link= urlencode(str_replace('https://','','www.eveilmedia.tv/video/'.$get_media['item']['id'].')'));
        $title=utf8_decode($get_media['item']['title']);
        $title=utf8_decode($get_media['item']['title']);
        $file=$get_media['item']['file'];
        $id=$get_media['item']['id'];

        if (Cookie::has($get_media['item']['id'])) {
            //si le cookie existe il faut faire une dislike dislike

            $link_icon ="skyblue";
        } else {
            // si le coookie n'existe pas il faut faire un like
            $link_icon ="white";
        }
        $description=utf8_decode($get_media['item']['description']);
        $result= $this->lecteur_deo($title,$file,$id,$link_icon,$link,$description);
        return $result;
    }
    function Archive()
    {
        $get_media=(new ApiController())->requestData('get','archive');

        if(sizeof($get_media['items'])==0)
        {
            $txt="Aucun contenu pour le moment !";
        }else{$txt='';}
        return View('pages.archive',['media'=>$get_media['items'],'archive_link'=>'active','txt'=>$txt]);
    }
    function call_deo($id,$type)
    {
        if ($type=='hum')
        {
            $get_media=(new ApiController())->requestData('GET','media/sub-category/'.$id);

        }else{
            $get_media=(new ApiController())->requestData('GET','media/'.$id);

        }
        $vue=(new ApiController())->requestData('patch','media/vue/'.$get_media['item']['id']);
        $link= urlencode(str_replace('https://','','www.eveilmedia.tv/video/'.$get_media['item']['id'].')'));
        $title=utf8_decode($get_media['item']['title']);
        $file=$get_media['item']['file'];
        $id=$get_media['item']['id'];
        $description=utf8_decode($get_media['item']['description']);
        if (Cookie::has($get_media['item']['id'])) {
            //si le cookie existe il faut faire une dislike dislike

            $link_icon ="skyblue";
        } else {
            // si le coookie n'existe pas il faut faire un like
            $link_icon ="white";
        }

        $result= $this->lecteur_deo($title,$file,$id,$link_icon,$link,$description);
        return $result;
    }
    function call_deo_one_page($id)
    {
        $get_media=(new ApiController())->requestData('GET','media/'.$id);
        $vue=(new ApiController())->requestData('patch','media/vue/'.$get_media['item']['id']);
        $title=utf8_decode($get_media['item']['title']);
        $description=utf8_decode($get_media['item']['description']);
        $link= urlencode(str_replace('https://','','www.eveilmedia.tv/video/'.$get_media['item']['id'].')'));
        if (Cookie::has($get_media['item']['id'])) {
            //si le cookie existe il faut faire une dislike dislike

            $link_icon ="skyblue";
        } else {
            // si le coookie n'existe pas il faut faire un like
            $link_icon ="white";
        }
        return view('pages.video',['title'=>$title,'description'=>$description,'link'=>$get_media['item']['file'],'id_video'=>$get_media['item']['id'],'link_fb'=>$link,'link_icon'=>$link_icon]);
    }
    function  humour()
    {
        $get_proverbe=(new ApiController())->requestData('GET','proverbe');
        if (sizeof($get_proverbe['items'])==0)
        {
            $proverbe='None';
        }else{
            $proverbe= $get_proverbe['items'][sizeof($get_proverbe['items'])-1]['file'];

        }
        $lien="#";
        $get_annonce=(new ApiController())->requestData('GET','announcement');
        $media_humour=(new ApiController())->requestData('GET','sub-category/humour-et-retro');

        if(sizeof($get_annonce['items'])==0)
        {
            $annonce = 'ESPACE ANNONCEURS';
        }else{
            $annonce=$get_annonce['items'];
        }
        return View('pages.humour',['media'=>$media_humour['items'],'proverbe'=>$proverbe,'lien'=>$lien,'humour_link'=>'active','annonce'=>$annonce]);
    }
}



