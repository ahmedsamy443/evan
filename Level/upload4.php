<?php 
session_start(); 
$conn = new mysqli("localhost" , "root" , "", "test");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
// Include the database configuration file
//include 'dbConfig.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','sb2','sb3');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            // $insert = $conn->query("INSERT into tbl_group (Gb_Id, Gb_name, Gb_Img, Gb_Notes, Gb_lvl1_activity_file, Gb_lvl1_activity_score, Gb_lvl2_activity_file, Gb_lvl2_activity_score, Gb_lvl3_activity_file, Gb_lvl3_activity_score, Gb_lvl4_activity_file, Gb_lvl4_activity_score, Gb_lvl5_activity_file, Gb_lvl5_activity_score) VALUES ('".$id_group."','','','','".$fileName."','','','','','','','','','')");
            
            $insert = $conn->query("INSERT into tbl_stactivites (st_id , ac_activity ,ac_date ) VALUES ('".$_SESSION['id']."' , '".$fileName."' , 4) ");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                 header("location:Level4-4.php");
            }else{
                $statusMsg = "File upload failed, please try again.";
                 header("location:Level4-4.php");
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>