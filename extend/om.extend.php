<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

add_event('common_header', 'om_test', 10, 3);

function om_test($om1,$om2,$om3) {
  echo $om1." - ".$om2." - ".$om3;
}

?>
