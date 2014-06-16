<?php
/**
 * Created by PhpStorm.
 * User: franckmazzolo
 * Date: 16/06/2014
 * Time: 23:58
 */

header("Content-Type: text/plain");

$idAnswer = (isset($_GET["idAnswer"])) ? $_GET["idAnswer"] : NULL;

if($idAnswer != null){
    include_once('functions.php');
    $fileReader = new \utilities\FileReader;

    $answers = getAnswers();

    echo $answers[$idAnswer];
}
else{
    echo "fail";
}