<?php
$size=7;
//data awal
$data=array(4,9,7,5,8,9,3);
$data[0]=4; $data[4]=8;
$data[1]=9; $data[5]=9;
$data[2]=7; $data[6]=3;
$data[3]=5;
echo("<b>Data Awal :</b>");
tampildata();
insert_sort();
function tampildata()
{
global $data;
for($i=0;$i<=6;$i++)
{
echo"$data[$i] ";
}
echo"<br>";
}
//=======================
function insert_sort()
{
global $data,$size;
for($i=0;$i<=$size-1;$i++)
{
$value=$data[$i];
$j=$i-1; 
echo"</font>";
while(($j>=0)&&($data[$j]>$value))
{
$data[$j+1]=$data[$j];
$j=$j-1;
$data[$j+1]=$value;
tampildata();
}
}
}
?>
