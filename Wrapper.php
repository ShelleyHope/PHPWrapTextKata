<?php

class Wrapper {

  function wrap($text, $lineLength) {
    if (substr($text, $lineLength - 1, 1) == ' ')
        return substr ($text, 0, strpos($text, ' ')) . "\n" . $this->wrap(substr($text, strpos($text, ' ') + 1), $lineLength);
    if (strlen($text) > $lineLength)
        return substr ($text, 0, $lineLength) . "\n" . $this->wrap(substr($text, $lineLength), $lineLength);
    return $text;
  }
}

?>