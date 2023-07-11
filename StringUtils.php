<?php

class StringUtils {
    private $string;

    public function __construct($string) {
        $this->string = $string;
    }

    public function toUpper() {
        return strtoupper($this->string);
    }

    public function toAlternate() {
        $result = '';
        $length = strlen($this->string);
        for ($i = 0; $i < $length; $i++) {
            $char = $this->string[$i];
            if ($i % 2 == 0) {
                $result .= strtolower($char);
            } else {
                $result .= strtoupper($char);
            }
        }
        return $result;
    }

    public function generateCSV($filename = "output.csv") {
        $sentences = implode(',', str_split($this->string));
        file_put_contents($filename, $sentences);
        return $filename;
    }
}