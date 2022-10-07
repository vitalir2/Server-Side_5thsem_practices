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

$test_arr = array();
for ($i = 0; $i < 10; $i++) {
  array_push($test_arr, mt_rand(1, 100));
}

echo "Original Array: ";
echo implode(", ", $test_arr);
echo "<br>";

echo "\n Sorted array : ";
echo implode(", ", insertionSort($test_arr));
?>

