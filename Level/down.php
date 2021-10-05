<?php
// Database Connection 
session_start(); 

$conn = new mysqli("localhost" , "root" , "", "test");
$down = "SELECT * FROM `tbl_stactivites` WHERE `st_id` = .$_SESSION['id']."
$res = $con->query($down);
$statusMsg = '';

if ($res !='null'){
//Check for connection error
$select = "SELECT * FROM `tbl_group`";
$result = $conn->query($select);
while($row = $result->fetch_object()){
  $pdf = $row->Gb_lvl1_activity_file;
  $path = $row->directory;
  $date = $row->created_date;
  $file = $path.$pdf;
}
// Add header to load pdf file
header('Content-type: application/pdf'); 
header('Content-Disposition: inline; filename="' .$file. '"'); 
header('Content-Transfer-Encoding: binary'); 
header('Accept-Ranges: bytes'); 
@readfile($file); }
else{
    $statusMsg = "من فضلك قم بتحميل النشاط اولا.";
} 
?>