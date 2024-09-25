<?php 
    //567=5+6+7=18
    $n=567;
    $sum=0;
    for ($i=0;$i<=strlen($n);$i++)
    {
        $rem=$n%10;
        $sum=$sum+$rem;
        $n=$n/10;
    }
    echo "sum of digit=".$sum;
?>