<?php
/**
 * Created by PhpStorm.
 * User: xlfederalelk0lx
 * Date: 21/04/18
 * Time: 12:41
 */

namespace App;


use App\Api\Album;
use App\Api\Artist;
use App\Api\Configuration;
use App\Api\Genre;
use App\Api\PlayList;
use App\Api\Track;
use App\Traits\Http;
use Curl\Curl;

class ClaroMuscia extends Curl
{

    public $version = "1.0";
    public $authentication = "lqJNUCxRPNwx2KthgesxBXqHqDfbGVSiz4PZp7jobu";
    public $appId = "f14eadf1e22495ac2b404ee4e256a4e2";
    public $appVersion = "00022b851d34aacd2f00ea5301d26c60";

    public $lang = null;
    public $config = null;
    public $appProfile = null;

    public $path_photos = "http://static0.claromusica.com/fotos/";

    use Http;

    use Configuration;
    use Genre;
    use PlayList;
    use Track;
    use Album;
    use Artist;

    public function __construct($base_url = null)
    {
        parent::__construct($base_url);
        $this->setUserAgent("Dalvik/1.6.0 (Linux; U; Android 4.4.2; SM-T230NU Build/KOT49H)");
        $this->setHeader("Version",$this->version);
        $this->setHeader("Authentication",$this->authentication);
        $this->setHeader("deviceId","[C@41f87908");
        $this->setHeader("Host","api.claromusica.com");
        $this->appProfile = $this->getAppProfile();
        if(@$this->appProfile->profile->token != ""){
            $this->authentication = @$this->appProfile->profile->token;
            $this->setHeader("Authentication",$this->authentication);
        }
        $this->config = $this->getConfiguration();
        if(@$this->config->store->language != ""){
            $this->lang = strtoupper(@$this->config->store->language);
        }else{
            $this->lang = "MX";
        }
    }

}