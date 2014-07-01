<?php

require_once dirname(__File__) . '/../Wrapper.php';

class WrapperTest extends PHPUnit_Framework_TestCase {  

  private $wrapper;

  function setUp() {
    $this->wrapper = new Wrapper();
  }

  function testItShouldWrapAnEmptyString() {
    $this->assertEquals('', $this->wrapper->wrap('', 0));
  }

  function testItShouldNotWrapAShortEnoughWord() {
    $textToBeParsed = 'word';
    $maxLineLength = 5;
    $this->assertEquals($textToBeParsed, $this->wrapper->wrap($textToBeParsed, $maxLineLength));
  }

  function testItWrapsAWordLongerThanLineLength() {
    $textToBeParsed = 'alongword';
    $maxLineLength = 5;
    $this->assertEquals("along\nword", $this->wrapper->wrap($textToBeParsed, $maxLineLength));
  }

  function testItWrapsAWordContinuallyIfItIsTooLong() {
    $textToBeParsed = 'averyverylongword';
    $maxLineLength = 5;
    $this->assertEquals("avery\nveryl\nongwo\nrd", $this->wrapper->wrap($textToBeParsed, $maxLineLength));
  }

}

?>