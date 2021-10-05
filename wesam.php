<?php 
                    session_start();
                    $conn = new mysqli("localhost" , "root" , "", "test");
                    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
 
                    $sql="SELECT * FROM `wesam` WHERE `St_Id` =".$_SESSION['id']." and `level` =".$_REQUEST["level"]."";
                    $result = $conn->query($sql) or die($conn->error);
                    while($row=$result->fetch_assoc()){
                        
                        echo $row['img'];                        
                
                    }
                    
            ?>