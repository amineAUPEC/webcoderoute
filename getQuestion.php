<?php
/**
 * Created by PhpStorm.
 * User: franckmazzolo
 * Date: 17/06/2014
 * Time: 00:28
 */

session_start();
header("Content-Type: text/plain");
include_once('functions.php');

$idQuestion = (isset($_GET["idQuestion"])) ? $_GET["idQuestion"] : NULL;

if($idQuestion != null){

    if(isset($_SESSION['questions'])){
        $questions = $_SESSION['questions'];
    }
    else{
        $fileReader = new \utilities\FileReader;
        $questions = getQuestions();
    }

    $question = $questions[$idQuestion];
    $question = array('text' => $question[0], 'repA' => $question[1], 'repB' => $question[2], 'repC' => $question[3]);

    echo json_encode($question);
}
else{
    echo "fail";
}