<?php

 //Integer
 $score = 99;
 $mount = -44;
 $mun1 = 0x111; //273
 $num2 = 0111; //73
 $exx  = 2e10; //200000000000

 //Float
 $aa = 2.22;
 $bb = -1.11;
 $ee = 6E+5; //60000

 echo $score + $aa;
 echo "<br>";
 echo $score + (int)$aa;
 echo "<br>";
 echo (float)$score + $aa;

?>