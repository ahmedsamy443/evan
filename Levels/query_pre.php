<?php
session_start();
                    $conn = new mysqli("localhost" , "root" , "", "test");
                    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
                    $sql="UPDATE `tbl_studentdata` SET `st_Pretest`='1', `st_Pretest_Score`= ".$_REQUEST["score"]
                    .", `st_Last_Score`=".$_REQUEST["score"]." WHERE `St_Id` =".$_SESSION['id']."";
                    $result = $conn->query($sql) or die($conn->error);

            ?>