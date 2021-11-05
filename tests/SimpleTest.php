<?php

use PHPUnit\Framework\TestCase;

require_once "WordCount.php";

class SimpleTest extends TestCase
{
    public function testCountWords()
    {
        $Wc = new WordCount();

        $TestSentence = "My Name is Qolby Fawzan";
        $WordCount = $Wc->countWords($TestSentence);

        $this->assertEquals(4, $WordCount);
    }
}