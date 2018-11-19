<?php
function green_tips_add_viewport()
{
  echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
';
}
add_action("wp_head", "green_tips_add_viewport");