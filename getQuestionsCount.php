<?php
/**
 * Created by PhpStorm.
 * User: franckmazzolo
 * Date: 17/06/2014
 * Time: 14:35
 */

include_once('constantes.php');
include_once('FileReader.php');

$fileReader = new \utilities\FileReader();

echo $fileReader->countLine(QUESTIONS_FILE);