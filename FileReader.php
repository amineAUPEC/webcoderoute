<?php
/**
 * Created by PhpStorm.
 * User: franckmazzolo
 * Date: 16/06/2014
 * Time: 20:32
 */
namespace utilities;

/**
 * Class FileReader
 * @package utilities
 */
class FileReader {
    /**
     * Read a file, store and return its content
     * @param $file String
     * @return file's content
     */
    public function readFile($file){
        $lines = '';
        $file_handle = fopen($file, "r");
        while (!feof($file_handle)) {
            $line = fgets($file_handle);
            $lines = $lines . $line;
        }
        fclose($file_handle);
        return $lines;
    }

    /**
     * Return a file as array
     * @param $file
     * @return array
     */
    public function readFileToArray($file){
        $array = array();
        $file_handle = fopen($file, "r");
        while (!feof($file_handle)) {
            $line = fgets($file_handle);
            array_push($array, $line);
        }
        fclose($file_handle);
        return $array;
    }

} 