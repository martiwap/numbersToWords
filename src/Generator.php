<?php

/*

    Martina Natale, 30th April 2018

*/

namespace App;
     
class Generator
{
  public function number2words($num) 
  {
    $array = array (
        0 => 'zero',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'fourteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen',
        20 => 'twenty',
        30 => 'thirty',
        40 => 'fourty',
        50 => 'fifty',
        60 => 'sixty',
        70 => 'seventy',
        80 => 'eighty',
        90 => 'ninety',
        100 => 'one hundred',
        );
    
    

      $unit = $num%10;
      $tens = $num - $unit;
      $number = ''; 

     // var_dump($num, $tens);
      
    
      if($num > 99) {
         $hun = $num/100;
         if($unit == 0) {
            return $array[$hun] . ' hundred';
         }
         if($unit > 0) {
            return $array[$hun] . ' hundred ' . $array[$hun] . ' ' . $array[$unit];
         }
         if($tens > 0) {
            return $array[$hun] . ' hundred ' . $arra[$tens] . '-' .$array[$unit];
         }
         return $array[$hun] . ' hundred ' . $array[$unit];
        }
    
      if($num > 20) {
        if($unit == 0) {
            return $array[$tens];
        }
        return $array[$tens] . '-' .$array[$unit];
      }

      return $array[$num];
        
  }      
}


  
?>
