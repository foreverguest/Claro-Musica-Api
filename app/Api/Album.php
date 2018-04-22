<?php
/**
 * Created by PhpStorm.
 * User: xlfederalelk0lx
 * Date: 21/04/18
 * Time: 16:31
 */

namespace App\Api;


trait Album
{

    public function getAlbumInformation($albumId = 0){
        return $this->GetPage("http://android.api.claromusica.com/api/album/detail/albumId/".$albumId."/appId/".$this->appId."/".$this->appVersion."/ct/".$this->lang."/lang/".$this->lang."/token_wap/".$this->authentication);
    }

    public function getAlbumTracks($albumId = 0){
        $json = $this->GetPage("http://android.api.claromusica.com/api/album/tracks/query/".$albumId."/sortName/albumId/appId/".$this->appId."/appVersion/".$this->appVersion."/ct/".$this->lang."/lang/".$this->lang."/token_wap/".$this->authentication);
        for ($i=0 ; $i < sizeof($json); $i++){
            unset($json[$i]->playUrl);
            @$json[$i]->albumCover = "http://static9.claromusica.com/fotos/".@$json[$i]->albumCover;
        }
        return $json;
    }

}