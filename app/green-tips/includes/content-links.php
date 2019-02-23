<?php

add_filter('the_content', 'content_links');

function content_links($content) {
  global $referalString;
  $content = helper_url_regex($content);
  return $content;
}