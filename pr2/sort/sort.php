<?php
function insertionSort($arr) {
  for ($i = 0; $i < count($arr); $i++) {
    $val = $arr[$i];
    $j = $i - 1;
    while ($j >= 0 && $arr[$j] > $val) {
      $arr[$j + 1] = $arr[$j];
      $j--;
    }
    $arr[$j + 1] = $val;
  }
  return $arr;
}

$test_arr = array(1, 5, 2, 3, 19, 10);
echo "Original Array: \n";
echo implode(', ', $test_arr);
echo "\n Sorted array :\n";
print_r(insertionSort($test_arr));
?>

