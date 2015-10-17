<?php

class stringManipulation {
    public function bin2hex($query) {
        $output = dechex(bindec($query));
        echo "\"" . $query . "\" in binary is \"" . $output . "\" in hexidecimal.";
    }

    public function charCount($query) {
        foreach (count_chars($query, 1) as $i => $val) {
            echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.</br>";
        }
    }

    public function spaceExplode($query) {
        $pieces = explode(" ", $query);
        foreach ($pieces as $str) {
            echo $str . "</br>";
        }
    }

    public function hex2bin($query) {
        $output = hex2bin($query);
        echo "\"" . $query . "\" in hexidecimal is \"" . $output . "\" in binary.";
    }

    public function md5hash($query) {
        $output = md5($query);
        echo "\"" . $output . "\" is the md5 hash of \"" . $query . "\".";
    }

    public function shahash($query) {
        $output = sha1($query);
        echo "\"" . $output . "\" is the sha1 hash of \"" . $query . "\".";
    }

    public function shuffle($query) {
        $output = str_shuffle($query);
        echo "\"" . $query . "\" was shuffled to: " . $output . ".";
    }

    public function wordCount($query) {
        $output = str_word_count($query);
        echo "There were " . $output . " word(s) in \"" . $query . "\".";
    }

    public function reverse($query) {
        $output = strrev($query);
        echo "\"" . $query . "\" in reverse is: " . $output . ".";
    }

    public function lowercase($query) {
        $output = strtolower($query);
        echo $output;
    }

    public function uppercase($query) {
        $output = strtoupper($query);
        echo $output;
    }

    public function capWords($query) {
        $output = ucwords($query, " \t\r\n\f\v");
        echo $output;
    }
}








?>
