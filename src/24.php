<?php
  function randomCode() {
    $randomChar = mb_convert_encoding(bf_random("0123456789"), "UTF-8", "ASCII");
    $randomCode = $randomChar . randomCode();
    return $randomCode;
  }
?>
