            <?php 
                    session_start();
                    $conn = new mysqli("localhost" , "root" , "", "test");
                    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
 
                        $sql="UPDATE `tbl_studentdata` SET `st_Level`=7, `st_Level7`=".$_REQUEST["score"] 
                        .", `st_Last_Score`=".$_REQUEST["score"] ."  WHERE `st_id` =".$_SESSION['id']."";
                        $result = $conn->query($sql) or die($conn->error);
                   
                        $sql="INSERT INTO `wesam` (`level`, `st_id`, `img`) VALUES (7,".$_SESSION['id'].",".$_REQUEST["wimg"].") ";
                        $result = $conn->query($sql) or die($conn->error);
                    
            ?>