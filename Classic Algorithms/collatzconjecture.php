<?php

/*
 * Basic implementation of the Collatz Conjecture Algorithm.
 */

  function collatzConjecture(int $num) {   
    if($num === 1) {
      echo $num . "\n";
      return;
    }

    if($num % 2 === 0) {
      echo $num . "\n"; 
      return collatzConjecture($num / 2);
    }
    
    else {
      echo $num . "\n";
      return collatzConjecture($num * 3 + 1);
    }
  }

  collatzConjecture($argv[1]);