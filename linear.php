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
    if(i >= $cnt)
    {
      return -1;
    }
  }
