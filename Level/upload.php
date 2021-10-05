<?php 
session_start(); 
$conn = new mysqli("localhost" , "root" , "", "test");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
// Include the database configuration file
//include 'dbConfig.php';
// File upload path
if(isset($_FILES["file"]["name"]) && !empty($_FILES["file"]["name"])){
    
    $targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    
    $targetFilePath = $targetDir . $fileName;
    
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
        // Insert image file name into database
        // $insert = $conn->query("INSERT into tbl_group (Gb_Id, Gb_name, Gb_Img, Gb_Notes, Gb_lvl1_activity_file, Gb_lvl1_activity_score, Gb_lvl2_activity_file, Gb_lvl2_activity_score, Gb_lvl3_activity_file, Gb_lvl3_activity_score, Gb_lvl4_activity_file, Gb_lvl4_activity_score, Gb_lvl5_activity_file, Gb_lvl5_activity_score) VALUES ('".$id_group."','','','','".$fileName."','','','','','','','','','')");
       // echo "file has been ";
        $insert = $conn->query("INSERT into tbl_stactivites (st_id , ac_activity ,ac_date ) VALUES ('".$_SESSION['id']."' , '".$fileName."' , 1) ");
        if($insert){
            
            echo "1";
            // header("location:Level1-1.php");
       }
    }

}
else
{
    echo"2";
}

/*
if(isset($_FILES["file"]["name"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            // $insert = $conn->query("INSERT into tbl_group (Gb_Id, Gb_name, Gb_Img, Gb_Notes, Gb_lvl1_activity_file, Gb_lvl1_activity_score, Gb_lvl2_activity_file, Gb_lvl2_activity_score, Gb_lvl3_activity_file, Gb_lvl3_activity_score, Gb_lvl4_activity_file, Gb_lvl4_activity_score, Gb_lvl5_activity_file, Gb_lvl5_activity_score) VALUES ('".$id_group."','','','','".$fileName."','','','','','','','','','')");
           // echo "file has been ";
            $insert = $conn->query("INSERT into tbl_stactivites (st_id , ac_activity ,ac_date ) VALUES ('".$_SESSION['id']."' , '".$fileName."' , 1) ");
            if($insert){
                
                echo " تمت العملية بنجاح ";
                // header("location:Level1-1.php");
           }
           else
           {
               echo "لقد حدث شي خطا ";
           }
        
    }
}
*/
// Display status message
?>
