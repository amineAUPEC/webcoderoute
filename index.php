<?php
/**
 * Created by PhpStorm.
 * User: franckmazzolo
 * Date: 16/06/2014
 * Time: 20:54
 */

const QUESTIONS_FILE = "data/questions.txt";
include_once("FileReader.php");

$fileReader = new \utilities\FileReader;

$content = $fileReader->readFileToArray(QUESTIONS_FILE);

var_dump($content);