<?php include("connection.php"); ?>
<html>
<head>
    <title>Save Image And update</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        رقم الطالب <input type="text" name="Id" > <br><br>
        اسم الطالب <input type="text" name="name" ><br><br>
        صورة الطالب <input type="file" name="upload" ><br><br>
        باسورد الطالب <input type="text" name="pass" ><br><br>
        جروب الطالب <input type="text" name="id_group" ><br><br>
<!-- 
رقم المجموعة <input type="text" name="gr_id" > <br><br>
اسم المجموعة <input type="text" name="gr_name" ><br><br>
صورة المجموعة <input type="file" name="gr_upload" ><br><br>
نشاط المجموعة للمستوى الاول <input type="file" name="gr_upload" ><br><br>
نشاط المجموعة للمستوى الثاني <input type="file" name="gr_upload" ><br><br>
نشاط المجموعة للمستوى الثالث <input type="file" name="gr_upload" ><br><br>
نشاط المجموعة للمستوى الرابع <input type="file" name="gr_upload" ><br><br>
نشاط المجموعة للمستوى الخامس <input type="file" name="gr_upload" ><br><br> -->

        <button type="submit" name="save">حفظ </button>
    </from>
<?php 
    if(isset($_POST["save"]))
    {
        $Id = $_POST["Id"];
        $name = $_POST["name"];
        $filename = $_FILES["upload"]["name"];
        $temp = $_FILES["upload"]["tmp_name"];
        $folder = "Img/".$filename;
        move_uploaded_file($temp,$folder);
        $pass = $_POST["pass"];
        $id_group = $_POST["id_group"];
        if($Id != "" && $name != "")
        {
            $query = "insert into tbl_studentdata (St_Id , St_name , st_notes , St_pass , id_group) values ($Id , '$name' , '$folder', '$pass' , '$id_group' )";
            $data = mysqli_query($con , $query);
            if($data)
            {
                echo "تمت عملية الحفظ بنجاح";
            }
            else{
                echo "فشل ";
            }
        }
    }
   ?>

 
