<?php

 $counter=0;     
 $dagen =array("zondag", "mandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag");
 

 
 for ($counter=0; $counter < 7; $counter++){
 echo $dagen[$counter];
 echo "<br>";
 
 }
 echo "<br>";
 
 foreach($dagen as $i)
 {
     
     echo $i;
     echo "<br>";
 }
     
 
?>

