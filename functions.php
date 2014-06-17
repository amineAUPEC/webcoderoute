<?php
/**
 * Created by PhpStorm.
 * User: franckmazzolo
 * Date: 17/06/2014
 * Time: 00:00
 */
// ref to questions and answers file
include_once('constantes.php');
include_once('FileReader.php');

function getAnswers(){

    $fileReader = new \utilities\FileReader();

    //Get answers from ANSWERS_FILE
    $answers = $fileReader->readFileToArray(ANSWERS_FILE);
    return $answers;
}

function getQuestions(){

    $fileReader = new \utilities\FileReader;

    //Get questions from QUESTIONS_FILE
    $questions = $fileReader->readFileToArray(QUESTIONS_FILE);
    foreach($questions as &$question){
        $question = str_getcsv($question,  $delimiter = ";" );
    }

    return $questions;
}
