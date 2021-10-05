            <?php 
                    session_start();
                    $conn = new mysqli("localhost" , "root" , "", "test");
                    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
                    if(isset($_REQUEST['score']))
                    {
                        $sql="UPDATE `tbl_studentdata` SET `st_Level`=1, `st_Level1`=".$_REQUEST["score"] 
                        .", `st_Last_Score`=".$_REQUEST["score"] .", `st_Level1_curr_attem`=". $_REQUEST["try"]
                         ." , `st_Level1_remaining_time`=". $_REQUEST["time"] ."  WHERE `st_id` =".$_SESSION['id']."";
                        $result = $conn->query($sql) or die($conn->error);
                   
                        $sql="INSERT INTO `wesam` (`level`, `st_id`, `img`) VALUES (1,".$_SESSION['id'].",".$_REQUEST["wimg"].") ";
                        $result = $conn->query($sql) or die($conn->error);

                    }
 
                       





                        if(isset($_GET['honor'] )&& !empty($_GET['honor']) &&isset($_GET['remaingtime'])&&!empty($_GET['remaingtime']))
                        {
                            $timeremail=$_GET['remaingtime'];
                            $score=$_GET['honor'];
                            $levelid=$_GET['levelid'];
                            $studentid=$_SESSION['id'];
                           // print_r($timeremail);die();
                           
                            $sqlquery="insert into honor values (null,'$studentid','$score','$timeremail','$levelid')";
                            $result=$conn->query($sqlquery) or die($conn->error);
                            if($result)
                            {
                                echo"added sucessfuly";

                            }
                            else
                            {
                              echo "some thing went wrong ";
                            }
                           
                        }


                        if(isset($_GET['levelnum'])&&!empty($_GET['levelnum']))
                        {
                            
                            $levelnum=$_GET['levelnum'];
                            $sql="select * from honor WHERE levelid=$levelnum ORDER BY score DESC ,remaintime ASC LIMIT 0,6";
                            $queryfet= $conn->query($sql) or die($conn->error);
                            while($row=$queryfet->fetch_assoc())
                            {
                                echo json_encode($row);
                            }

                        }

                        
                    
            ?>