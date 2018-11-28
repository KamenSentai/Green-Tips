<?php

function helper_url_regex($url) {
  $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
  return preg_replace($regex, '<a href="$0" target="_blank" title="$2.$3">$2.$3</a>', $url);
}

function helper_concat_text($text, $number = 0) {
  $words = explode(' ', $text);
  for ($i = 0; $i < $number; $i++) {
    echo helper_url_regex($words[$i]);
    if ($i == $number) echo '...';
    else echo ' ';
  }
}