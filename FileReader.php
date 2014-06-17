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
        file($file, FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
        return file($file, FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);;
    }

    public function countLine($file){
        $linecount = 0;
        $handle = fopen($file, "r");
        while(!feof($handle)){
            $line = fgets($handle);
            $linecount++;
        }

        fclose($handle);

        return $linecount;
    }

} 