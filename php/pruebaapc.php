<?php
if ($quote = apc_fetch('starwars')) {
  echo $quote;
  echo " [cached]";
} else { 
  $quote = "Do, or do not. There is no try. -- Yoda, Star Wars";  
  echo $quote; 
  apc_add('starwars', $quote, 120);
}
?>
