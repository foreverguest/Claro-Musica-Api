<?php
/**
 * Created by PhpStorm.
 * User: xlfederalelk0lx
 * Date: 21/04/18
 * Time: 12:33
 */

// incluimos el archivo autoload para iniciar nuestra app y clases principales
require_once "vendor/autoload.php";

// creamos un objeto de nuestra App para usar claro musica
$cm = new \App\ClaroMuscia();

// esto solo para uso de demostracion, sirve para que las respuestas en el explorador se vean en json
header('Content-Type: application/json');

//Para obtener los generos que maneja claro musica seria de la siguente forma
//echo json_encode($cm->getGenres());

//si queremos obtener los tops de un genero en especifico usamos el genreAlias : urbano
/*
 * Obtiene los banners, las playlist gratis, las playlist que no son gratis y canciones mas populares de ese genero
 */
//echo json_encode($cm->getTopsbyGenre("urbano"));

/*
 * Si queremos buscar algun artista, cancion o algun termino lo hacemos asi
 * asignara o seleccionara el mejor resultado, algunos artistas que coinciden con el termino
 * los albumns que contienen el termino maluma y canciones del termino
 */

//echo json_encode($cm->SearchTerm("mana"));

/*
 * Si queremos saber la informacion de algun artista seria de la siguiente forma
 */
//echo json_encode($cm->getArtistInformation(239784));

/*
 * Si queremos obtener los top tracks de algun artista seria de la siguiente forma
 */
//echo json_encode($cm->getArtistTracks(239784));

/*
 * Si queremos obtener los tracks mas recientes de algun artista seria de la siguiente forma
 */
//echo json_encode($cm->getArtistReleases(239784));

/*
 * Si queremos obtener los artist similares de algun artista seria de la siguiente forma
 */
//echo json_encode($cm->getArtistSimilar(239784));

/*
 * Si queremos obtener las playlist tops seria asi
 */

//echo json_encode($cm->getTopsbyPlayList());

/*
 * Para obtener una pl en especifico
 * los idPhonograms son los id de las canciones o tracks de esta PlayList
 */
//echo json_encode($cm->getPlayListbyId(46180745));

/*
 * Para obtener la informacion de un track o cancion en especifico seria asi
 */

//echo json_encode($cm->getTrackInformation(36753682));

/*
 * Para obtener el enlace de reproduccion de un track o cancion en especifico seria asi
 * se puede descargar y aunque no guardara la cancion con el nombre real, pues bueno pueden
 * usar js para guardarla automaticamente con el nombre, en mi caso la descargare y los tags del
 * mdia si seguardaran automaticamente de forma correcta, y funciona bien, los reproductores de
 * los smartPhone igual lo reconoceran con tags media correctamente
 */

//echo json_encode($cm->getTrackStream(29295579));

/*
 * Bueno en la opcion de album obtiene la informacion de un album y obtiene los tracks de algun album
 */

//$cm->getAlbumInformation(1212);
//$cm->getAlbumTracks(123123);

/*
 * Esta es la primer version y no se que ma implementar se aceptan ideas, lo dejo libre lo pueden usar
 * e implemntar en sus propios scripts.
 */