<?php

add_action('wp_head', 'aside_add_viewport');

function aside_add_viewport() {
  echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
}