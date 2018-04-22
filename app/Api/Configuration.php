<?php
/**
 * Created by PhpStorm.
 * User: xlfederalelk0lx
 * Date: 21/04/18
 * Time: 12:54
 */

namespace App\Api;


trait Configuration
{

    public function getConfiguration(){
        return $this->GetPage("http://api.claromusica.com/api/store/getStore/appId/".$this->appVersion);
    }

    public function getAppProfile(){
        $post = [
            "deviceModel" => "samsung+SM-T230NU",
            "anonymous" => 1,
            "facebookAppId" => 143750175833680,
            "appId" => $this->appId
        ];
        return $this->GetPage("http://api.claromusica.com/api/appProfile/loginUnique/tagOnly/0/",$post);
    }

}