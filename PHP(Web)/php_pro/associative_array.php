<?php
//first way
$sdata=array("sid"=>101,"sname"=>"AKCR7","sadd"=>"Kashi");
echo $sdata["sid"]."<br>";
echo $sdata["sname"]."<br>";
echo $sdata["sadd"]."<br>";

//second way
$edata["eid"]=7;
$edata["dept"]="bhakti";
$edata["salary"]="mokasha";
echo "eid=" .$edata["eid"]."<br>";
echo "department=" .$edata["dept"]."<br>";
echo "salary=" .$edata["salary"]."<br>";
?>