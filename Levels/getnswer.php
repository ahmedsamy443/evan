<?php
session_start();
$conn = new mysqli("localhost" , "root" , "", "test");

if(isset($_GET['answer'])&& !empty($_GET['answer']))
{
   // print_r($_SESSION['id']);die();
    //var_dump($_GET['answer']);die();
    $levelnum=$_GET['levelnum'];
    $studentid=$_SESSION['id'];
    $val1=$_GET['answer'][0];
    $val2=$_GET['answer'][1];
       // var_dump($val2);die();

    $val3=$_GET['answer'][2];
    $val4=$_GET['answer'][3];
    $val5=$_GET['answer'][4];
    $val6=$_GET['answer'][5];
    $val7=$_GET['answer'][6];
    $val8=$_GET['answer'][7];
    $val9=$_GET['answer'][8];
    $val10=$_GET['answer'][9];

$sql="insert into answersatemp values(null,'$val1','$val2','$val3','$val4','$val5','$val6','$val7','$val8','$val9','$val10','$levelnum','$studentid')";

$result = $conn->query($sql) or die($conn->error);
if($result)
{
    echo "added sucessfly";
}
else{
    echo "some thing went wrong";
}

}



if(isset($_GET['getdata']))
{
    $studentid=$_SESSION['id'];
    $stdlevel=$_GET['getdata'];
    $sql2="select * from answersatemp where studentid='$studentid' and levelnum = '$stdlevel' ";
    //print_r($sql2);die();
    $result2 = $conn->query($sql2) or die($conn->error);
  $row=$result2->fetch_assoc();

  if($row!==null)
  {
    echo json_encode($row);
  }
  else
  {
    echo  "data not found";
  }
   // print_r(count(result));
  // $levelsarr=array();
   //while($row=$result->fetch_assoc())
  // {
   //   echo array_push($levelsarr,$row['levelnum']);
  // }


}
?>