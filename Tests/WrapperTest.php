<?php

require_once dirname(__File__) . '/../Wrapper.php';

class WrapperTest extends PHPUnit_Framework_TestCase {  
  function testItShouldWrapAnEmptyString() {
    $wrapper = new Wrapper();
    $this->assertEquals('', $wrapper->wrap(''));
  }
  function testItShouldNotWrapAShortEnoughWord() {
    $wrapper = new Wrapper();
    $this->assertEquals('word', $wrapper->wrap('word', 5));
  }
}

?>