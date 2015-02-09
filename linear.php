<?php
  function linear_search($array, $search_num)
  {
    $cnt = count($array);
    for($i = 0; $i < $cnt; $i++)
    {
      if($array[$i] == $search_num)
      {
        return $i;
        break;
      }
    }
  }

  if(linear_search($array, $search_num) == NULL)
  {
    echo $search_num . "は見つかりませんでした";
  }
  else
  {
    echo $search_num . "が" . $i . "番目に見つかりました";
  }
?>
