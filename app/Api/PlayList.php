<?php
/**
 * Created by PhpStorm.
 * User: xlfederalelk0lx
 * Date: 21/04/18
 * Time: 14:01
 */

namespace App\Api;


trait PlayList
{

    public function getTopsbyPlayList($start= 0 , $end = 50){
        return $this->GetPage("http://android.api.claromusica.com/api/top/getPlaylistsTops/category/general/appId/".$this->appId."/ct/".$this->lang."/type/novidade/start/".$start."/size/".$end."/lang/".$this->lang);
    }

    public function getPlayListbyId($id = 0){
        return $this->GetPage("http://android.api.claromusica.com/api/playlistapi/playlistById/appId/".$this->appId."/ct/".$this->lang."/lang/".$this->lang,["playlistids"=>$id]);
    }

}