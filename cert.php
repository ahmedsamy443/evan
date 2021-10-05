<?php
session_start();
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>الشهادة</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="css/Cards.css" rel="stylesheet" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
   
    <link href="css/style.css" rel="stylesheet" />
    <style>
        h2{
            width:250px;
          position:absolute;
          top:56px;
          right: 280px;
          color:white
        }
        h1{
            width:250px;
          position:absolute;
          top:430px;
          right: 550px;
          color:white
        }
    </style>
   
</head>
<body dir="rtl" style="font-family: 'Droid Arabic Kufi'; background-image:url(img/cert.jpg); ; background-image :no-repeat;background-size:cover;">

<h2 ><?php echo $_SESSION['id']; ?></h2>
<h1><?php echo $_SESSION['name']; ?></h1>



</body>
</html>
