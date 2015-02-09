<?php
  function linear_search($array, $search_num)
  {
    $cnt = count($array);
    for($i = 0; $i < $cnt; $i++)
    {
      if($array[$i] == $search_num)
      {
        echo $search_num . "が" . $i . "番目に見つかりました";
        return $i;
        break;
      }
    }
    if($i >= $cnt)
    {
      echo $search_num . "は見つかりませんでした";
    }
  }
?>
