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
    $addVal = $i;
    $addVal= passByValue($addVal, 5, 3, "Linianos");
    $addVal= passByValue($addVal, 5, 1, "IT");
    $addVal= passByValue($addVal, 3, 1, "Linio");
   
    $returnString.= '<table border="1" style="margin-left:300px; padding:"><tr><td>'.$addVal . "</tr></td></table><br>";
  }
  return $returnString;
}
echo excuse(1, 100);
?>
