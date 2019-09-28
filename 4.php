<?php
thirdHighest([1,2,3,4,5,6]);
function thirdHighest($param) {
  if (is_array($param)) {
      $lengthOfParam = count($param);
  if ($lengthOfParam > 3) {
      rsort($param);
      $is_not_numeric = 0;
      for ($i=0; $i < $lengthOfParam; $i++) {
        if (!is_numeric($param[$i])) {
        $is_not_numeric++;
        }
       }
       if ($is_not_numeric < 1) {
        echo $param[2];
        }
        else {
        echo "0";
        }
       }
       else {
        echo"Minimal array length is 3!";
        }
       }
       else {
        echo"Parameter should be an array!";
        }
       }
?>
