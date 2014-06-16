<?php
/**
 * Created by PhpStorm.
 * User: franckmazzolo
 * Date: 16/06/2014
 * Time: 22:58
 */

header("Content-Type: text/plain");

const ANSWERS_FILE = "data/bonne_reponse.txt";
include_once('FileReader.php');

$fileReader = new \utilities\FileReader();

//Get answers from ANSWERS_FILE
$answers = $fileReader->readFileToArray(ANSWERS_FILE);

echo json_encode($answers);