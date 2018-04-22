<?php
/**
 * Created by PhpStorm.
 * User: xlfederalelk0lx
 * Date: 21/04/18
 * Time: 16:47
 */

namespace App\Api;


trait Artist
{

    public function getArtistInformation($artistId = 0){
        $json =  $this->GetPage("http://android.api.claromusica.com/api/artist/detail/artistId/".$artistId."/appId/".$this->appId."/appVersion/".$this->appVersion."/ct/".$this->lang."/lang/".$this->lang."/token_wap/".$this->authentication);
        if(@$json->picture != ''){
            @$json->picture = "http://static9.claromusica.com/fotos/".@$json->picture;
        }
        return $json;
    }

    public function getArtistTracks($artistId = 0, $start = 0, $end = 50){
        $json = $this->GetPage("http://android.api.claromusica.com/api/artist/tracks/query/".$artistId."/appId/".$this->appId."/appVersion/".$this->appVersion."/start/".$start."/size/".$end."/ct/".$this->lang."/lang/".$this->lang);
        for ($i=0 ; $i < sizeof($json); $i++){
            unset($json[$i]->playUrl);
            @$json[$i]->albumCover = "http://static9.claromusica.com/fotos/".@$json[$i]->albumCover;
        }
        return $json;
    }

    public function getArtistReleases($artistId = 0, $start = 0, $end = 50){
        $json = $this->GetPage("http://android.api.claromusica.com/api/artist/releases/artistId/".$artistId."/size/".$end."/start/".$start."/appId/".$this->appId."/appVersion/".$this->appVersion."/ct/".$this->lang."/lang/".$this->lang);
        for ($i=0 ; $i < sizeof($json); $i++){
            unset($json[$i]->playUrl);
            @$json[$i]->albumCover = "http://static9.claromusica.com/fotos/".@$json[$i]->albumCover;
        }
        return $json;
    }

    public function getArtistSimilar($artistId = 0, $start = 0, $end = 50){
        $json = $this->GetPage("http://android.api.claromusica.com/api/artist/similar/artistId/".$artistId."/appId/".$this->appId."/appVersion/".$this->appVersion."/ct/".$this->lang."/lang/".$this->lang);
        for ($i=0 ; $i < sizeof($json); $i++){
            @$json[$i]->picture = "http://static9.claromusica.com/fotos/".@$json[$i]->picture;
        }
        return $json;
    }

}