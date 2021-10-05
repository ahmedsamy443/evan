<?php

$conn = new mysqli("localhost", "root", "", "test");

$value=$_POST['value'];
$value2=$_POST['value2'];
$w=$_POST['w'];
$updated="update tbl_group set $value ='$w' where Gb_Id = $value2";
$result = $conn->query($updated) or die($conn->error);
if($result)
{
    echo "updated sucessfuly";
}
else{
    echo " something went wrong";
}
//print_r($updated);

?>