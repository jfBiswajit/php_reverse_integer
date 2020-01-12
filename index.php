<?php
function reverse($x) {
  $inputArr = str_split($x);
  $resultArr = array();
  
  function getReversed($inputArr) {
    for ($i = count($inputArr) - 1; $i >= 0; $i--) {
      $resultArr[] = $inputArr[$i];
    }
    return $resultArr;
  }

  if ($inputArr[0] == '-') {
    array_splice($inputArr, 0, 1);
    return (int) implode(array_merge(['-'], getReversed($inputArr)));
  } else {
    return (int )implode(getReversed($inputArr));
  }
}

echo "<pre>";
print_r(reverse(120));