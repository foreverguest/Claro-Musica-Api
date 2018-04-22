<?php
/**
 * Created by PhpStorm.
 * User: xlfederalelk0lx
 * Date: 21/04/18
 * Time: 14:32
 */

namespace App\Api;


trait Track
{
    public function getTrackInformation($track = 0){
        $page = $this->GetPage("http://android.api.claromusica.com/api/phonogram/getPhonogramDetailsById/appVersion/".$this->appVersion."/appId/".$this->appId."/ct/".$this->lang."/lang/".$this->lang."/idPhonogram/".$track);
        return $page;
    }

    public function getTrackStream($track = 0){
        $media = new \stdClass();
        $media->status = true;
        $media->media->url_mp4 = "http://cdn.imusica.com.br/api/musicStreaming/playTrackCdn?phonogramId=".$track."&token_wap=".$this->authentication."&typeId=10&isPreview=0&appId=".$this->appId."&playlistId=46180748";
        return $media;
    }

}