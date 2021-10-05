<?php
                    session_start();
    $conn = new mysqli("localhost" , "root" , "", "test");

   // $data = json_decode(stripslashes($_POST['data']));

                   
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    if(isset($_POST['data']))
    {

    
             foreach($_POST['data'] as $d=>$value)
             {
             
           $ques_num=$value['id'];
           $ques_ans=$value['result'];
       $sql="insert into answers values('".$_SESSION['id']."','$ques_num', '$ques_ans')";
      // var_dump($sql);die();
         $result = $conn->query($sql) or die($conn->error);
               if($result)
               {
                   echo "inserted sucessfuly";
               }
               else
               {
                echo " not inserted sucessfuly";

               }
         
             }
            }
            else
            {
                echo"not found";
            }

             
?>