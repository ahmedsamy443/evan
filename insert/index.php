<?php


include("connection.php");


error_reporting(0);


$q = "SELECT `St_Id` ,`St_name` , `st_notes` from `tbl_studentdata`";


$data = mysqli_query($con , $q);


$display = mysqli_num_rows($data);


if($display != 0)


{


    ?>


        <table >


            <tr>


                <th>رقم الطالب</th>


                <th>اسم الطالب</th>


                <th>صورة الطالب</ht>


             </tr>


     <?php


        while($result = mysqli_fetch_assoc($data))


        {


            "<tr>


                    <td> echo ".$result['id']."</td>


                    <td>".$result["name"]."</td>


                    <td><img src=".$result['img']." height = '50' width ='50' /></td>


                    <td><a href='update.php?Id=$result[id]&name=$result[name]'>تعديل </a></td>


                  </tr>";  


        }         


}
?>
