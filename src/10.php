<?php
function getRandomCode() {
  $length = 6;
  $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, strlen($characters) - 1)];
  }
  return $randomString;
}
?>
