<?php
use PHPUnit\Framework\TestCase;
require("StringUtils.php");

class StringUtilsTest extends TestCase
{
    private $stringUtils;

    protected function setUp(): void
    {
        $this->stringUtils = new StringUtils("");
    }

    public function testToUpper()
    {
        $this->stringUtils->__construct("hello world");
        $result = $this->stringUtils->toUpper();
        $this->assertEquals("HELLO WORLD", $result);
    }

    public function testToToggle()
    {
        $this->stringUtils->__construct("hello world");
        $result = $this->stringUtils->toToggle();
        $this->assertEquals("hElLo wOrLd", $result);
    }

    public function testGenerateCsv()
    {
        $this->stringUtils->__construct("hello world");
        $csv_file = $this->stringUtils->generateCsv("testing_string_utils.csv");
        $expected_csv_content = "h,e,l,l,o, ,w,o,r,l,d";
        $csv_content = file_get_contents($csv_file);
        $this->assertEquals($expected_csv_content, $csv_content);
        unlink($csv_file);
    }
}