            <?php 
                    session_start();
                    $conn = new mysqli("localhost" , "root" , "", "test");
                    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
 
                        $sql="INSERT INTO `tbl_answers` (`St_Id` , `A_q1` , `A_q2`,`A_q3` , `A_q4` , `A_q5` , `A_q6` , `A_q7` , `A_q8` , `A_q9` , `A_q10` , `A_q11` , `A_q12` , `A_q13` , `A_q14` , `A_q15` , `A_q16` , `A_q17` , `A_q18` , `A_q19` , `A_q20` , `A_q21` , `A_q22` , `A_q23` , `A_q24` , `A_q25` , `A_q26` , `A_q27` , `A_q28` , `A_q29` ) VALUES (".$_SESSION['id'].", ".$_REQUEST["results[0]"]." , ".$_REQUEST["results[1]"]." , ".$_REQUEST["results[2]"]." , ".$_REQUEST["results[3]"]." , ".$_REQUEST["results[4]"]." , ".$_REQUEST["results[5]"]." , ".$_REQUEST["results[6]"]." , ".$_REQUEST["results[7]"]." , ".$_REQUEST["results[8]"]." , ".$_REQUEST["results[9]"]." , ".$_REQUEST["results[10]"]." , ".$_REQUEST["results[11]"]." , ".$_REQUEST["results[12]"]." , ".$_REQUEST["results[13]"]." , ".$_REQUEST["results[14]"]." , ".$_REQUEST["results[15]"]." , ".$_REQUEST["results[16]"]." , ".$_REQUEST["results[17]"]." , ".$_REQUEST["results[18]"]." , ".$_REQUEST["results[19]"]." , ".$_REQUEST["results[20]"]." , ".$_REQUEST["results[21]"]." , ".$_REQUEST["results[22]"]." , ".$_REQUEST["results[23]"]." , ".$_REQUEST["results[24]"]." ,".$_REQUEST["results[25]"]." , ".$_REQUEST["results[26]"]." , ".$_REQUEST["results[27]"]." , ".$_REQUEST["results[28]"].")";
                        $result = $conn->query($sql) or die($conn->error);
                   
                       
                    
            ?>