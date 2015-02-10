<?php
require("linear.php");

function message($array, $search_num)
{
  if (linear_search($array, $search_num) == false) {
    echo $search_num . "は見つかりませんでした\n";
  } else {
    echo $search_num . "が" . linear_search($array, $search_num) . "番目に見つかりました\n";
  }
}
message(array(10, 1, 3, 5), 3);
message(array(10, 1, 3, 5), 7);
