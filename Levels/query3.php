            <?php 
                    session_start();
                    $conn = new mysqli("localhost" , "root" , "", "test");
                    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
 
                        $sql="UPDATE `tbl_studentdata` SET `st_Level`=3, `st_Level3`=".$_REQUEST["score"] 
                        .", `st_Last_Score`=".$_REQUEST["score"] .", `st_Level3_curr_attem`=". $_REQUEST["try"]
                         ." , `st_Level3_remaining_time`=". $_REQUEST["time"] ."  WHERE `st_id` =".$_SESSION['id']."";
                        $result = $conn->query($sql) or die($conn->error);
                   
                        $sql="INSERT INTO `wesam` (`level`, `st_id`, `img`) VALUES (3,".$_SESSION['id'].",".$_REQUEST["wimg"].") ";
                        $result = $conn->query($sql) or die($conn->error);
                    
            ?>