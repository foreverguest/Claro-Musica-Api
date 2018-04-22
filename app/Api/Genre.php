<?php
/**
 * Created by PhpStorm.
 * User: xlfederalelk0lx
 * Date: 21/04/18
 * Time: 12:50
 */

namespace App\Api;


trait Genre
{

    public function getGenres(){
        $page =  $this->GetPage("http://android.api.claromusica.com/api/top/listGenres/appId/".$this->appId."/ct/".$this->lang."/lang/".$this->lang);
        return json_decode($page);
    }

    public function getTopsbyGenre($genre = ""){
        if($genre != ""){
            return $this->GetPage("http://android.api.claromusica.com/api/top/getAppTops/category/rockeningles/type/novidade/appId/".$this->appId."/ct/".$this->lang."/lang/".$this->lang);
        }
    }

}