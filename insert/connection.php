<?php


$server = "localhost";


$dbname = "test";


$user = "root"; 


$pass = ""; 


$con = mysqli_connect($server , $user , $pass ,$dbname);


if($con)


{


    echo "connect";


}


else{


    echo "No Connection";


}
