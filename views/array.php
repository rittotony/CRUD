<?php

  $literClassBikes = ["Panigale V4", "S1000RR", "Ninja H2R", "RC8", "Hayabuza", "Yamaha R1", "CBR Fireblade"];
  
  $commutingBikes = ["splendor","platina","unicorn","star city","pulsar","RC8"];
  
  
  print_r($literClassBikes); echo "<br>";
  
  $resversedArray = array_reverse($literClassBikes);
  
  print_r($resversedArray); echo "<br>";
  
  $mergedArray = array_merge($literClassBikes, $commutingBikes);
  
  print_r($mergedArray); echo "<br>";
  
  $mergedArray = array_unique(array_merge($literClassBikes, $commutingBikes));
  
  print_r($mergedArray); echo "<br>";
  
  $slice = array_slice($literClassBikes, 2,6);
  
  print_r($slice); echo "<br>";
  
  $splice = array_splice($literClassBikes, 1,2);
  
  print_r($splice); echo "<br>";
 
?>