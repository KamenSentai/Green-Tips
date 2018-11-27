<?php

function helper_url_regex($url) {
  $regex = '@(http(s)?)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';
  return preg_replace($regex, '<a href="http$2://$4" target="_blank" title="$0">$0</a>', $url);
}

function helper_concat_text($text, $number = 0) {
  $words = explode(' ', $text);
  for ($i = 0; $i < $number; $i++) {
    echo helper_url_regex($words[$i]);
    if ($i == $number) echo '...';
    else echo ' ';
  }
}