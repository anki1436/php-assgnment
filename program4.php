<?php
 $num=153;
 $sum=0;
 $i=$num;
while($i!=0){
    $rem=$i%10;
    $sum=$sum+$rem*$rem*$rem;
    $i=$i/10;
}
if($sum==$num){
    echo("The given number is armstrong");
}
else{
    echo("The given number is not a armstrong");
}
?>