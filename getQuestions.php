<?php
/**
 * Created by PhpStorm.
 * User: franckmazzolo
 * Date: 16/06/2014
 * Time: 21:56
 */

// ref to questions and answers file
const QUESTIONS_FILE = "data/questions.txt";
include_once("FileReader.php");

$fileReader = new \utilities\FileReader;

//Get questions from QUESTIONS_FILE
$questions = $fileReader->readFileToArray(QUESTIONS_FILE);
foreach($questions as &$question){
    $question = str_getcsv($question,  $delimiter = ";" );
}

echo json_encode($questions);