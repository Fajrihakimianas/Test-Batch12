<?php
countChar("arkademy", "o");

function countChar($param, $letter)
{
  $counter = 0;
  for ($i = 0; $i < strlen($param); $i++) {
    if ($letter == $param[$i) {
        $counter++;
        }
       }
       if ($counter > 0) {
        echo $counter;
       }
       else {
        echo "Not found!";
       }
      }
?>
