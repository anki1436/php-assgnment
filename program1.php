<?php
  $sub1=60;
  $sub2=70;
  $sub3=80;
  $sub4=90;
  $sub5=95;
  $total=$sub1+$sub2+$sub3+$sub4+$sub5;
  $per=($total/500)*100;
  echo("Total marks =".$total);
  echo "<br>";
  echo("Total percentage = ".$per ."<br>");
  if($per>=80){
      echo("Result = Grade A");
  }
  elseif( $per<80 && $per>=60){
      echo("Result = Grade B");
  }
  elseif($per<60 && $per>=45 ){
      echo("result = Grade C");
  }
  else{
      echo("fail");
  }
?>