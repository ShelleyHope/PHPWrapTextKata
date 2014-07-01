<?php

require_once dirname(__File__) . '/../Wrapper.php';

class WrapperTest extends PHPUnit_Framework_TestCase {  

  private $wrapper;

  function setUp() {
    $this->wrapper = new Wrapper();
  }

  function testItShouldWrapAnEmptyString() {
    $this->assertEquals('', $this->wrapper->wrap(''));
  }
  function testItShouldNotWrapAShortEnoughWord() {
    $textToBeParsed = 'word';
    $maxLineLength = 5;
    $this->assertEquals('word', $this->wrapper->wrap($textToBeParsed, $maxLineLength));
  }
}

?>