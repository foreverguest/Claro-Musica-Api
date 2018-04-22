<?php
/**
 * Created by PhpStorm.
 * User: xlfederalelk0lx
 * Date: 21/04/18
 * Time: 12:33
 */

require_once "vendor/autoload.php";

$cm =  new \App\ClaroMuscia();

header('Content-Type: application/json');
echo json_encode($cm->getArtistSimilar(239784));