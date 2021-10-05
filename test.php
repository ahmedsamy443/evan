<?php
$conn = new mysqli("localhost" , "root" , "", "test");
$sql="SELECT * FROM `tbl_studentdata` WHERE `st_Level` = 50";
$result = $conn->query($sql) or die($conn->error);
while($row=$result->fetch_assoc()){
    $st_name = $row['St_name'];
    $st_Level = $row['st_Level'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div style="width: 500px;height: 500px;background-color: aquamarine;">
    <p><span>الاسم:</span>echo</p>
    <p><span>الدرجه</span>echo</p>
    <span>hhhhh</span>
    <span>lllll</span>
    <span>uuuuu</span>
    </div>
</body>
</html>