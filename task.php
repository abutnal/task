<?php
function passByValue($num, $divisibleByA, $divisibleByB, $ReturnValueIfTrue){
  try{        
    if(($num % $divisibleByA==0) && ($num % $divisibleByB==0) && (gettype($num)=="integer")){
      return $ReturnValueIfTrue;      
    }  
    return $num;
  } catch(Exception $e){ 
    return $num;
  }
}
;
function excuse($start, $end){
  $returnString = "";
  for ($i = $start;$i <= $end;$i++) {
    $ValueToAdd = $i;
    $ValueToAdd= passByValue($ValueToAdd, 5, 3, "Linianos");
    $ValueToAdd= passByValue($ValueToAdd, 5, 1, "IT");
    $ValueToAdd= passByValue($ValueToAdd, 3, 1, "Linio");
   
    $returnString.= '<table border="1" style="margin-left:300px; padding:"><tr><td>'.$ValueToAdd . "</tr></td></table><br>";
  }
  return $returnString;
}
echo excuse(1, 100);
?>