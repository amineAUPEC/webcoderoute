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
     */
    public function readFile($file){

        $file_handle = fopen($file, "r");
        while (!feof($file_handle)) {
            $line = fgets($file_handle);
            echo $line;
        }
        fclose($file_handle);
    }

} 