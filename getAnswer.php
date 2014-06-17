<?php
/**
 * Created by PhpStorm.
 * User: franckmazzolo
 * Date: 16/06/2014
 * Time: 23:58
 */

session_start();
header("Content-Type: text/plain");

$idAnswer = (isset($_GET["idAnswer"])) ? $_GET["idAnswer"] : NULL;
include_once('functions.php');
if($idAnswer != null){

    if(isset($_SESSION['answers'])){
        $answers = $_SESSION['answers'];
    }
    else{
        $fileReader = new \utilities\FileReader;
        $_SESSION['answers'] = getAnswers();
    }

    echo $answers[$idAnswer];
}
else{
    echo "fail";
}