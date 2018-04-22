<?php
/**
 * Created by PhpStorm.
 * User: xlfederalelk0lx
 * Date: 21/04/18
 * Time: 19:17
 */

namespace App\Api;


trait Search
{

    public function SearchTerm($term =""){
        if($term != ""){
            $post = [
                "token_wap" => $this->authentication,
                "term" => $term,
                "start" => 0,
                "size" => 50,
                "ct" => $this->lang,
                "appId" => $this->appId
            ];
            return $this->GetPage("http://api.claromusica.com/api/search/newAutoComplete/token_wap/".$this->authentication."/appId/".$this->appId."/ct/".$this->lang."/lang/".$this->lang."/",$post);
        }
    }

}