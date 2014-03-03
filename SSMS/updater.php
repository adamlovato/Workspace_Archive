<?php
include "db.php";



$sql="Select * from items";

$result = mysqli_query($con,$sql);
$i=0;
while ($row = mysqli_fetch_array($result))
{
$itemid["$i"] = $row['ITEM_ID'];
$name["$i"] = $row['ITEM_NAME'];
$sql2="update bills SET Item_Name='{$name[$i]}'
 where ITEM_ID='$itemid[$i]'";
$result2= mysqli_query($con,$sql2);
$i++;
}
?>