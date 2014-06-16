<?php
/**
 * Created by PhpStorm.
 * User: franckmazzolo
 * Date: 17/06/2014
 * Time: 00:28
 */
header("Content-Type: text/plain");

$idQuestion = (isset($_GET["idQuestion"])) ? $_GET["idQuestion"] : NULL;

if($idQuestion != null){
    include_once('functions.php');
    $fileReader = new \utilities\FileReader;

    $questions = getQuestions();

    echo $questions[$idQuestion][0];
}
else{
    echo "fail";
}