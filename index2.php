
<?php
session_start();
$conn = new mysqli("localhost" , "root" , "", "test");
if($_SESSION['id'] < 41){
$sql= "SELECT `St_name` , `st_Level1`  FROM `tbl_studentdata` WHERE `st_Level1_curr_attem`=0 AND `St_Id` < 41 ORDER BY`st_Level1`DESC ,`st_Level1_remaining_time`DESC";
$sql2= "SELECT `St_name` , `st_Level2`  FROM `tbl_studentdata` WHERE `st_Level2_curr_attem`=0 AND `St_Id` < 41 ORDER BY`st_Level2`DESC ,`st_Level2_remaining_time`DESC";
$sql3= "SELECT `St_name` , `st_Level3`  FROM `tbl_studentdata` WHERE `st_Level3_curr_attem`=0 AND `St_Id` < 41 ORDER BY`st_Level3`DESC ,`st_Level3_remaining_time`DESC";
$sql4= "SELECT `St_name` , `st_Level4`  FROM `tbl_studentdata` WHERE `st_Level4_curr_attem`=0 AND `St_Id` < 41 ORDER BY`st_Level4`DESC ,`st_Level4_remaining_time`DESC";
$sql5= "SELECT `St_name` , `st_Level5`  FROM `tbl_studentdata` WHERE `st_Level5_curr_attem`=0 AND `St_Id` < 41 ORDER BY`st_Level5`DESC ,`st_Level5_remaining_time`DESC";
$sql6= "SELECT `Gb_name` , `Gb_lvl1_activity_score`  FROM `tbl_group` ORDER BY`Gb_lvl1_activity_score`DESC ";
$sql7= "SELECT `Gb_name` , `Gb_lvl2_activity_score`  FROM `tbl_group` ORDER BY`Gb_lvl2_activity_score`DESC ";
$sql8= "SELECT `Gb_name` , `Gb_lvl3_activity_score`  FROM `tbl_group` ORDER BY`Gb_lvl3_activity_score`DESC ";
$sql9= "SELECT `Gb_name` , `Gb_lvl4_activity_score`  FROM `tbl_group` ORDER BY`Gb_lvl4_activity_score`DESC ";
$sql10= "SELECT `Gb_name` , `Gb_lvl5_activity_score`  FROM `tbl_group` ORDER BY`Gb_lvl5_activity_score`DESC "; 
$result=$conn->query($sql);
$result2=$conn->query($sql2);
$result3=$conn->query($sql3);
$result4=$conn->query($sql4);
$result5=$conn->query($sql5);
$result6=$conn->query($sql6);
$result7=$conn->query($sql7);
$result8=$conn->query($sql8);
$result9=$conn->query($sql9);
$result10=$conn->query($sql10);

for ($set = array();$row = $result->fetch_assoc();$set[] = $row);
for ($set2 = array();$row2 = $result2->fetch_assoc();$set2[] = $row2);
for ($set3 = array();$row3 = $result3->fetch_assoc();$set3[] = $row3);
for ($set4 = array();$row4 = $result4->fetch_assoc();$set4[] = $row4);
for ($set5 = array();$row5 = $result5->fetch_assoc();$set5[] = $row5);
for ($set6 = array();$row6 = $result6->fetch_assoc();$set6[] = $row6);
for ($set7 = array();$row7 = $result7->fetch_assoc();$set7[] = $row7);
for ($set8 = array();$row8 = $result8->fetch_assoc();$set8[] = $row8);
for ($set9 = array();$row9 = $result9->fetch_assoc();$set9[] = $row9);
for ($set10 = array();$row10 = $result10->fetch_assoc();$set10[] = $row10);
}
else {
    $sql= "SELECT `St_name` , `st_Level1`  FROM `tbl_studentdata` WHERE `st_Level1_curr_attem`=0 AND `St_Id` >= 41 ORDER BY`st_Level1`DESC ,`st_Level1_remaining_time`DESC";
$sql2= "SELECT `St_name` , `st_Level2`  FROM `tbl_studentdata` WHERE `st_Level2_curr_attem`=0 AND `St_Id` >= 41 ORDER BY`st_Level2`DESC ,`st_Level2_remaining_time`DESC";
$sql3= "SELECT `St_name` , `st_Level3`  FROM `tbl_studentdata` WHERE `st_Level3_curr_attem`=0 AND `St_Id` >= 41 ORDER BY`st_Level3`DESC ,`st_Level3_remaining_time`DESC";
$sql4= "SELECT `St_name` , `st_Level4`  FROM `tbl_studentdata` WHERE `st_Level4_curr_attem`=0 AND `St_Id` >= 41 ORDER BY`st_Level4`DESC ,`st_Level4_remaining_time`DESC";
$sql5= "SELECT `St_name` , `st_Level5`  FROM `tbl_studentdata` WHERE `st_Level5_curr_attem`=0 AND `St_Id` >= 41 ORDER BY`st_Level5`DESC ,`st_Level5_remaining_time`DESC";
$sql6= "SELECT `Gb_name` , `Gb_lvl1_activity_score`  FROM `tbl_group` ORDER BY`Gb_lvl1_activity_score`DESC ";
$sql7= "SELECT `Gb_name` , `Gb_lvl2_activity_score`  FROM `tbl_group` ORDER BY`Gb_lvl2_activity_score`DESC ";
$sql8= "SELECT `Gb_name` , `Gb_lvl3_activity_score`  FROM `tbl_group` ORDER BY`Gb_lvl3_activity_score`DESC ";
$sql9= "SELECT `Gb_name` , `Gb_lvl4_activity_score`  FROM `tbl_group` ORDER BY`Gb_lvl4_activity_score`DESC ";
$sql10= "SELECT `Gb_name` , `Gb_lvl5_activity_score`  FROM `tbl_group` ORDER BY`Gb_lvl5_activity_score`DESC ";

$result=$conn->query($sql);
$result2=$conn->query($sql2);
$result3=$conn->query($sql3);
$result4=$conn->query($sql4);
$result5=$conn->query($sql5);
$result6=$conn->query($sql6);
$result7=$conn->query($sql7);
$result8=$conn->query($sql8);
$result9=$conn->query($sql9);
$result10=$conn->query($sql10);

for ($set = array();$row = $result->fetch_assoc();$set[] = $row);
for ($set2 = array();$row2 = $result2->fetch_assoc();$set2[] = $row2);
for ($set3 = array();$row3 = $result3->fetch_assoc();$set3[] = $row3);
for ($set4 = array();$row4 = $result4->fetch_assoc();$set4[] = $row4);
for ($set5 = array();$row5 = $result5->fetch_assoc();$set5[] = $row5);
for ($set6 = array();$row6 = $result6->fetch_assoc();$set6[] = $row6);
for ($set7 = array();$row7 = $result7->fetch_assoc();$set7[] = $row7);
for ($set8 = array();$row8 = $result8->fetch_assoc();$set8[] = $row8);
for ($set9 = array();$row9 = $result9->fetch_assoc();$set9[] = $row9);
for ($set10 = array();$row10 = $result10->fetch_assoc();$set10[] = $row10);

}

// foreach($result as $row) {
//     $name="";
//     $name = $row['St_name'];
//     echo $name ;

// };
?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>البرمجة بلغة سكراتش</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="css/Cards.css" rel="stylesheet" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Custom stlylesheet -->
    <!--<link type="text/css" rel="stylesheet" href="css/style.css" />-->
    <link href="css/style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <style>
     .main-menu nav navbar-nav navbar-right{
     font-size: 14px;
 }
     .nav-tabs > li {
    float:none;
    display:inline-block;
    zoom:1;
}

.nav-tabs {
    text-align:center;
}
.card {
    width: 420px;
}
.card .additional .coords {
    margin: 0 6rem;
    color: #fff;
    font-size: 1rem;
}
/* Dropdown Button */
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
 </style>
</head>
<body dir="rtl" style="font-family: 'Droid Arabic Kufi';">

    <!-- Header -->
    <header id="header" class="transparent-nav">
        <div class="container">

            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a class="logo" >
                        <!-- <img src="./img/logo-alt.png" alt="logo"> -->
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Mobile toggle -->
                <button class="navbar-toggle">
						<span></span>
					</button>
                <!-- /Mobile toggle -->
            </div>

            <!-- Navigation -->
            <nav>
            <ul class="main-menu nav navbar-nav navbar-right " >
                
                <li><a href="index.html" class="w3-bar-item w3-button w3-green">خروج</a></li>
                
                <li><a href="#about" style="font-size: large;"> عن البيئة </a></li>
                <li><a href="#contact"style="font-size: large;">تواصل معنا</a></li>
                
                <li><a href="#inst"style="font-size: large;">التعليمات</a></li>
                <li><a href="#quest"style="font-size: large;">القواعد</a></li>
                <li><a href="#mainaid"style="font-size: large;">الهدف العام</a></li>
                <li><a href="Dashboard.php"style="font-size: large;" >الرئيسية</a></li>
            </ul>
            </nav>
            <!-- /Navigation -->

        </div>
    </header>
    <!-- /Header -->

    <!-- Home -->
    <div id="home" class="hero-area">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/maxresdefault2.jpg) ; background-size:cover;"></div>
        <!-- /Backgound Image -->

        <div class="home-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 style="color: white;font-family: 'Droid Arabic Kufi' ;font-size:35px;">

                            البرمجة بلغة سكراتش

                        </h1>
                        <p class=" white-text" style="direction:rtl">
                            <div >
                                <h1 style="color:white;font-family:'Arial, Helvetica, sans-serif';font-size:30px">
                                    أعزائي المبرمجين الصغار هيا لتضعوا خطواتكم الأولي فى عالم البرمجة بواسطة محفزات الألعاب.
                                </h1>
                            </div>
                            
                        </p>
                        <a class="main-button icon-button" href="login.html" style="font-size:large">انطلق</a>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Home -->
    <!-- لوحةالصدارة -->
    <div>
        <br><br>
       <center> <h2 style="margin:auto;">تحدى اصدقائك وشاركهم النتائج</h2></center><br><br>
       
      <center> <div style="margin:auto;width:50%;">
       <span style="width:700px;text-align:center;font-size:30px" >لوحه الصداره</span>

           <!-- <select name="sel" id="" value="choose"style="width:70%;display:inline;height:20px;">
            <option value="egypt"></option>
             <option value="egypt" id="btn1"><button  style="background:black" >المستوى الاول</button></option>
             <option value="irqe">المستوى الثانى</option>
             <option value="syrai">المستوى الثالث</option>
             <option value="irqe">المستوى</option>
             <option value="syrai">المستوى</option>
         </select>
          -->
          <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"style="width:200px;display:inline;height:25px;padding:5px;font-size:18px;border-radias:5%">اختر المستوى </button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#"id="btn1"style="width:200px;text-align:center;">المستوى الاول</a>
    <a href="#"id="btn2"style="width:200px;text-align:center">المستوى الثانى</a>
    <a href="#"id="btn3"style="width:200px;text-align:center">المستوى الثالث</a>
    <a href="#"id="btn4"style="width:200px;text-align:center">المستوى الرابع</a>
    <a href="#"id="btn5"style="width:200px;text-align:center">المستوى الخامس</a>
  </div>
</div>
        
        </div>
    </div></center>
    <br><br>
    <center><div id="ff"style="display:none;width:90%;height:650px;background:red;position :relative">

        <div style="background-color:#f1f1f1;width:50%;height:650px;position :absolute; padding:15px">
            <h3>الطلاب</h3>
            
     <div style="width:250px;background:white;height:175px;display: flex;float:center">
            <div style="background:white;width:150px">
            <h3 style="text-align:center;color:gold">المركز الأول :</h3>
            <h3 id="l1"style="text-align:right;"><?php  $string = implode("," , $set[0]);
            echo $string;?></h3>
            <h3 id="l12" style="text-align:right;"><?php  $string2 = implode("," , $set2[0]);
            echo $string2;?></h3> 
            <h3 id="l13" style="text-align:right;"><?php  $string3 = implode("," , $set3[0]);
            echo $string3;?></h3> 
            <h3 id="l14" style="text-align:right;"><?php  $string4 = implode("," , $set4[0]);
            echo $string4;?></h3> 
            <h3 id="l15" style="text-align:right;"><?php  $string5 = implode("," , $set5[0]);
            echo $string5;?></h3> 

        </div>
           <div style="width:100px"> <img src="Images/students/5.jpg"style="float:left;w; height:175px;width:100px" />    </div>    <br>              
            
            
                
            </div>
    
            <div style="width:250px;background:white;height:175px;display: flex;float:right;margin-top:10px">
            <div style="background:white;width:150px">
            <h3  style="text-align:center">المركز الثاني </h3>
            <h3  id="l2"style="text-align:right"><?php  $string = implode("," , $set[1]);
            echo $string;?></h3> 
            <h3 id="l22"style="text-align:right"><?php  $string2 = implode("," , $set2[1]);
            echo $string2;?></h3> 
            <h3 id="l23" style="text-align:right;"><?php  $string3 = implode("," , $set3[1]);
            echo $string3;?></h3> 
            <h3 id="l24" style="text-align:right;"><?php  $string4 = implode("," , $set4[1]);
            echo $string4;?></h3> 
            <h3 id="l25" style="text-align:right;"><?php  $string5 = implode("," , $set5[1]);
            echo $string5;?></h3> 
        </div>
           <div style="width:100px"> <img src="Images/students/2.jpg"style="float:left;w; height:175px;width:100px" />    </div>    <br>              
            
            
                
            </div>
                   
     <div style="width:250px;background:white;height:175px;display: flex;float:left;margin-top:10px">
            <div style="background:white;width:150px">
            <h3 style="text-align:center">المركز الثالث </h3>
            <h3  id="l3"style="text-align:right"><?php  $string = implode("," , $set[2]);
            echo $string;?></h3> 
            <h3 id="l32"style="text-align:right"><?php  $string2 = implode("," , $set2[2]);
            echo $string2;?></h3> 
            <h3 id="l33" style="text-align:right;"><?php  $string3 = implode("," , $set3[2]);
            echo $string3;?></h3> 
            <h3 id="l34" style="text-align:right;"><?php  $string4 = implode("," , $set4[2]);
            echo $string4;?></h3> 
            <h3 id="l35" style="text-align:right;"><?php  $string5 = implode("," , $set5[2]);
            echo $string5;?></h3> 
        </div>
           <div style="width:100px"> <img src="Images/students/3.jpg"style="float:left;w; height:175px;width:100px" />    </div>    <br>              
            
            
                
            </div>
            <div style="width:250px;background:white;height:175px;display: flex;float:right;margin-top:10px">
            <div style="background:white;width:150px">
            <h3 style="text-align:center;">المركز الرابع </h3>
            <h3  id="l4"style="text-align:right"><?php  $string = implode("," , $set[3]);
            echo $string;?></h3> 
            <h3 id="l42"style="text-align:right"><?php  $string2 = implode("," , $set2[3]);
            echo $string2;?></h3> 
            <h3 id="l43" style="text-align:right;"><?php  $string3 = implode("," , $set3[3]);
            echo $string3;?></h3> 
            <h3 id="l44" style="text-align:right;"><?php  $string4 = implode("," , $set4[3]);
            echo $string4;?></h3> 
            <h3 id="l45" style="text-align:right;"><?php  $string5 = implode("," , $set5[3]);
            echo $string5;?></h3> 
        </div>
           <div style="width:100px"> <img src="Images/students/4.jpg"style="float:left;w; height:175px;width:100px" />    </div>    <br>              
            
            
                
            </div>
                   
     <div style="width:250px;background:white;height:175px;display: flex;float:left;margin-top:10px">
            <div style="background:white;width:150px">
            <h3 style="text-align:center;">المركز الخامس</h3>
            <h3  id="l5"style="text-align:right"><?php  $string = implode("," , $set[4]);
            echo $string;?></h3> 
            <h3 id="l52"style="text-align:right"><?php  $string2 = implode("," , $set2[4]);
            echo $string2;?></h3> 
            <h3 id="l53" style="text-align:right;"><?php  $string3 = implode("," , $set3[4]);
            echo $string3;?></h3> 
            <h3 id="l54" style="text-align:right;"><?php  $string4 = implode("," , $set4[4]);
            echo $string4;?></h3> 
            <h3 id="l55" style="text-align:right;"><?php  $string5 = implode("," , $set5[4]);
            echo $string5;?></h3> 
        </div>
           <div style="width:100px"> <img src="Images/students/6.jpg"style="float:left;w; height:175px;width:100px" />    </div>    <br>              
            
            
                
            </div>
            <!-- <div style="width:250px;background:white;height:175px;display: flex;float:left;margin-top:10px">
            <div style="background:white;width:150px">
            <h3 style="text-align:center;">المركزالسادس</h3>
            <h3  id="l6"style="text-align:right"><?php  $string = implode("," , $set[5]);
            echo $string;?></h3>
            <h3 id="l62"style="text-align:right"><?php  $string2 = implode("," , $set2[5]);
            echo $string2;?></h3> 
            <h3 id="l63" style="text-align:right;"><?php  $string3 = implode("," , $set3[5]);
            echo $string3;?></h3> 
            <h3 id="l64" style="text-align:right;"><?php  $string4 = implode("," , $set4[5]);
            echo $string4;?></h3> 
            <h3 id="l65" style="text-align:right;"><?php  $string5 = implode("," , $set5[5]);
            echo $string5;?></h3> 
        </div>
           <div style="width:100px"> <img src="Images/students/5.jpg"style="float:left;w; height:175px;width:100px" />    </div>    <br>              
            
            
                
            </div> -->

        </div>
        
        <div style=" background-color: #f1f1f1;width:50%;height:650px;position :absolute;margin-right:50%;padding:15px">
            <h3>المجموعات</h3>
                
     <div style="width:250px;background:white;height:175px;display: flex;float:center">
            <div style="background:white;width:150px">
            <h3 style="text-align:center;color:gold">المركز الاول :</h3>
            <h3 id="g1" style="text-align:right;"><?php  $string6 = implode("," , $set6[0]);
            echo $string6;?></h3>
            <h3 id="g12"style="text-align:right;"><?php  $string7 = implode("," , $set7[0]);
            echo $string7;?></h3>
            <h3 id="g13"style="text-align:right;"><?php  $string8 = implode("," , $set8[0]);
            echo $string8;?></h3>
            <h3 id="g14"style="text-align:right;"><?php  $string9 = implode("," , $set9[0]);
            echo $string9;?></h3>
            <h3 id="g15"style="text-align:right;"><?php  $string10 = implode("," , $set610[0]);
            echo $string10;?></h3>

        </div>
           <div style="width:100px"> <img src="Images/students/5.jpg"style="float:left;w; height:175px;width:100px" />    </div>    <br>              
            
            
                
            </div>
            <div style="width:250px;background:white;height:175px;display: flex;float:right;margin-top:10px">
            <div style="background:white;width:150px">
            <h3 style="text-align:center">المركز الثاني </h3>
            <h3 id="g2" style="text-align:right;"><?php  $string6 = implode("," , $set6[1]);
            echo $string6;?></h3>
            <h3 id="g22"style="text-align:right;"><?php  $string7 = implode("," , $set7[1]);
            echo $string7;?></h3>
            <h3 id="g23"style="text-align:right;"><?php  $string8 = implode("," , $set8[1]);
            echo $string8;?></h3>
            <h3 id="g24"style="text-align:right;"><?php  $string9 = implode("," , $set9[1]);
            echo $string9;?></h3>
            <h3 id="g25"style="text-align:right;"><?php  $string10 = implode("," , $set10[1]);
            echo $string10;?></h3>

        </div>
           <div style="width:100px"> <img src="Images/students/5.jpg"style="float:left;w; height:175px;width:100px" />    </div>    <br>              
            
            
                
            </div>
                   
     <div style="width:250px;background:white;height:175px;display: flex;float:left;margin-top:10px">
            <div style="background:white;width:150px">
            <h3 style="text-align:center">المركز الثالث </h3>
            <h3 id="g3" style="text-align:right;"><?php  $string6 = implode("," , $set6[2]);
            echo $string6;?></h3>
            <h3 id="g32"style="text-align:right;"><?php  $string7 = implode("," , $set7[2]);
            echo $string7;?></h3>
            <h3 id="g33"style="text-align:right;"><?php  $string8 = implode("," , $set8[2]);
            echo $string8;?></h3>
            <h3 id="g34"style="text-align:right;"><?php  $string9 = implode("," , $set9[2]);
            echo $string9;?></h3>
            <h3 id="g35"style="text-align:right;"><?php  $string10 = implode("," , $set10[2]);
            echo $string10;?></h3>

        </div>
           <div style="width:100px"> <img src="Images/students/5.jpg"style="float:left;w; height:175px;width:100px" />    </div>    <br>              
            
            
                
            </div>
            <div style="width:250px;background:white;height:175px;display: flex;float:right;margin-top:10px">
            <div style="background:white;width:150px">
            <h3 style="text-align:center;">المركز الرابع </h3>
            <h3 id="g4" style="text-align:right;"><?php  $string6 = implode("," , $set6[3]);
            echo $string6;?></h3>
            <h3 id="g42"style="text-align:right;"><?php  $string7 = implode("," , $set7[3]);
            echo $string7;?></h3>
            <h3 id="g43"style="text-align:right;"><?php  $string8 = implode("," , $set8[3]);
            echo $string8;?></h3>
            <h3 id="g44"style="text-align:right;"><?php  $string9 = implode("," , $set9[3]);
            echo $string9;?></h3>
            <h3 id="g45"style="text-align:right;"><?php  $string10 = implode("," , $set10[3]);
            echo $string10;?></h3>

        </div>
           <div style="width:100px"> <img src="Images/students/5.jpg"style="float:left;w; height:175px;width:100px" />    </div>    <br>              
            
            
                
            </div>
                   
     <div style="width:250px;background:white;height:175px;display: flex;float:left;margin-top:10px">
            <div style="background:white;width:150px">
            <h3 style="text-align:center;">المركز الخامس</h3>
            <h3 id="g5" style="text-align:right;"><?php  $string6 = implode("," , $set6[4]);
            echo $string6;?></h3>
            <h3 id="g52"style="text-align:right;"><?php  $string7 = implode("," , $set7[4]);
            echo $string7;?></h3>
            <h3 id="g53"style="text-align:right;"><?php  $string8 = implode("," , $set8[4]);
            echo $string8;?></h3>
            <h3 id="g54"style="text-align:right;"><?php  $string9 = implode("," , $set9[4]);
            echo $string9;?></h3>
            <h3 id="g55"style="text-align:right;"><?php  $string10 = implode("," , $set10[4]);
            echo $string10;?></h3>

        </div>
           <div style="width:100px"> <img src="Images/students/5.jpg"style="float:left;w; height:175px;width:100px" />    </div>    <br>              
            
            
                
            </div>
            <!-- <div style="width:250px;background:white;height:175px;display: flex;float:left;margin-top:10px">
            <div style="background:white;width:150px">
            <h3 style="text-align:center;">المركزالسادس</h3>
            <h3 id="g6" style="text-align:right;"><?php  $string6 = implode("," , $set6[5]);
            echo $string6;?></h3>
            <h3 id="g62"style="text-align:right;"><?php  $string7 = implode("," , $set7[5]);
            echo $string7;?></h3>
            <h3 id="g63"style="text-align:right;"><?php  $string8 = implode("," , $set8[5]);
            echo $string8;?></h3>
            <h3 id="g64"style="text-align:right;"><?php  $string9 = implode("," , $set9[5]);
            echo $string9;?></h3>
            <h3 id="g65"style="text-align:right;"><?php  $string10 = implode("," , $set10[5]);
            echo $string10;?></h3>

        </div>
           <div style="width:100px"> <img src="Images/students/5.jpg"style="float:left;w; height:175px;width:100px" />    </div>    <br>              
            
            
                
            </div> -->
        </div>
</div></center>
    
    
          

    <!-- About -->
    
    <div id="mainaid" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-6">
                    <div class="section-header">
                        <h1 >الهدف العام</h1>
                        <h3 style="color:darkred">
                            يهدف هذا الموقع إلي تنمية التحصيل ومهارات الانخراط وبقاء أثر التعلم لدى تلاميذ المرحلة الإعدادية منخفضى ومرتفعى الدافعية للإنجاز من خلال بيئة تعلم إلكترونية قائمة على محفزات الألعاب لتعلم محتوى البرمجة بلغة سكراتش للصف الأول الإعدادى وذلك من خلال تحقيق الأهداف الآتية:
                        </h3>
                    </div>

                    <!-- feature -->
                    <div class="feature">

                        <div class="feature-content">
                            <h3>
                                <i class="fa fa-dot-circle-o"></i>
                                أن يتعرف  التلميذ على المفاهيم الخاصة ببرنامج  Scratch والتعامل مع الكائنات.
                            </h3>
                        </div>
                    </div>
                    <!-- /feature -->
                    <!-- feature -->
                    <div class="feature">

                        <div class="feature-content">
                            <h3>
                                <i class="fa fa-dot-circle-o"></i>
                                أن يتعرف التلميذ على كيفية تغيير الخلفيات واستخدام مجموعات الاحداث والحركة والتحكم ببرنامج  Scratch.

                            </h3>
                        </div>
                    </div>
                    <!-- /feature -->
                    <!-- feature -->
                    <div class="feature">

                        <div class="feature-content">
                            <h3>
                                <i class="fa fa-dot-circle-o"></i>
                                أن يتعرف التلميذ على كيفية استخدام المظاهر المختلفة للكائنات ومجموعة الأصوات في انتاج صور ورسوم متحركة.

                            </h3>
                        </div>
                    </div>
                    <!-- /feature -->
                    <!-- feature -->
                    <div class="feature">

                        <div class="feature-content">
                            <h3>
                                <i class="fa fa-dot-circle-o"></i>
                                أن يتعرف التلميذ على كيفية استخدام مجموعة المظاهر Looks فى إنتاج قصص تفاعلية.

                            </h3>
                        </div>
                    </div>
                    <!-- /feature -->
                    <!-- feature -->
                    <div class="feature">

                        <div class="feature-content">
                            <h3>
                                <i class="fa fa-dot-circle-o"></i>
                                أن يتعرف التلميذ على كيفية استخدام مجموعة  القلم  Pen فى رسم أشكال هندسيه.
                            </h3>
                        </div>
                    </div>
                    <!-- /feature -->
                    

                </div>

                <div class="col-md-6">
                    <div class="about-img">
                        <img src="./img/General.jpg" alt="">
                    </div>
                </div>

            </div>
            <!-- row -->

        </div>
        <!-- container -->
    </div>
    <!-- /About -->

   
  
    <!-- Why us -->
    <div id="quest" class="section">

        <!-- container -->
        <div class="container">

            <!-- التعليمان صف 1 -->
            <div class="row">
                <div class="section-header text-center">
                    <h2>القواعد</h2>
                    <h3>
                        <span style="color:blue">عزيزي التلميذ</span> :<span style="color:darkred">أهلاً بك معنا في تعلم البرمجة بلغة Scratch، عليك اتباع القواعد الآتية:-</span>
                         
                    </h3>
                </div>

                <!-- feature -->
                <div class="col-md-3" style="float:right">
                    <div class="feature">
                        <i class="feature-icon fa fa-list"></i>
                        <div class="feature-content">
                            <!--<h4>المستويات  </h4>-->
                            <h3>
                               يقوم كل تلميذ بأداء دوره داخل المستويات بالترتيب من المستوى الأول حتى المستوى الخامس .                            </h3>
                        </div>
                    </div>
                </div>
                <!-- /feature -->
                <!-- feature -->
                <div class="col-md-3" style="float:right">
                    <div class="feature">
                        <i class="feature-icon fa fa-users"></i>

                        <div class="feature-content">
                            <!--<h4>التلميذ</h4>-->
                            <h3>
                             كل إجابة صحيحة تحصل من خلالها على (5) نقاط .                             </h3>
                        </div>
                    </div>
                </div>
                <!-- /feature -->
                <!-- feature -->
                <div class="col-md-3">
                    <div class="feature">
                        <i class="feature-icon fa fa-comments"></i>
                        <div class="feature-content">
                            <!--<h4>المهام </h4>-->
                            <h3>
                                الإلتزام التام بتوقيتات تسليم المهمات في موعدها المحدد.
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- /feature -->
                <!-- feature -->
                <div class="col-md-3">
                    <div class="feature">
                        <i class="feature-icon fa fa-comments"></i>
                        <div class="feature-content">
                            <!--<h4>المهام </h4>-->
                            <h3>
                                يجب أن تحصل على 80% من النقاط لكي تحصل علي الشارة .
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- /feature -->

            </div>
            <!-- /row -->

            <!-- التعليمان صف 2 -->
            <div class="row">
                

                <!-- feature -->
                <div class="col-md-3" style="float:right">
                    <div class="feature">
                        <i class="feature-icon fa fa-arrow-circle-o-up"></i>
                        <div class="feature-content">
                            <!--<h4>الترتيب</h4>-->
                            <h3>
                                راقب ترتيبك وترتيب فرقتك في لوحة الصدارة بعد كل مستوى
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- /feature -->
                <!-- feature -->
                <div class="col-md-3" style="float:right">
                    <div class="feature">
                        <i class="feature-icon fa fa-users"></i>

                        <div class="feature-content">
                            <!--<h4>حل الألغاز</h4>-->
                            <h3>
                                يسمح بتكرار حل الألغاز ثلاث مرات .
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- /feature -->
                <!-- feature -->
                <!-- feature -->
                <div class="col-md-3">
                    <div class="feature">
                        <i class="feature-icon fa fa-question-circle"></i>
                        <div class="feature-content">
                            <!--<h4>التطبيق البعدي المؤجل </h4>-->
                            <h3>
                                بعد مرور خمسةعشر يوماً ستقوم بالإجابة على الاختبار التحصيلي البعدى المؤجل.
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- /feature -->
                <div class="col-md-3">
                    <div class="feature">
                        <i class="feature-icon fa fa-question"></i>
                        <div class="feature-content">
                            <!--<h4>التطبيق البعدي  </h4>-->
                            <h3>
                                بعد الانتهاء من دراسة و حل مهام جميع المستويات قم بالإجابة على الاختبار التحصيلي البعدي ومقياس الانخراط في التعلم.
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- /feature -->
              

            </div>
            <!-- /row -->

            <hr class="section-hr">

            <!-- row -->
            <div class="row">

                <div class="col-md-6" id="inst">
                    <h2 style="color:blue">
                        شاهد التعليمات
                    </h2>
                    <h3 style="color:darkred">
                        شاهد كيفية تسجيل الدخول ومتابعة المستويات وحل الألغاز وتسليم الأنشطة في الفيديو ....
                    </h3>
                </div>

                <div class="col-md-5 col-md-offset-1">
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/2VDsjR4hltc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Why us -->


    <!-- عن البيئة -->
    <div id="about" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">
                <div class="col-lg-2">
                    <img src="img/logo2.jpg" />
                </div>
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <h2 style="color:blue">عن البيئة</h2>
                        <h3 style="color:darkred">
                            جامعة المنيا - كلية التربية النوعية
                        </h3>

                    </div>
                </div>
                <div class="col-lg-2">
                    <img src="img/logo1.png" />
                </div>
            </div>
            <div class="row">
                

                <h3>
                    بيئة تعلم إلكترونية قائمة على محفزات الألعاب وأثرها فى تنمية التحصيل والانخراط فى التعلم وبقاء أثرة  لدى تلاميذ المرحلة الاعدادية منخفضى ومرتفعى الدافعية للإنجاز
                </h3>
                
                <h3>
                    E_learning environment based on gamification and its impact in achievement enhancement and learning engagement, and preserving its effect among prepartory pupils with low and high motivation for achievement
                </h3>
                <!-- feature -->
                <div class="col-md-4" style="float:right">
                    <div class="feature">
                        <!--<i class="feature-icon fa fa-users"></i>-->
                        
                        <div class="row">
                            <div class="col-lg-2" style="float:right">
                                <img src="GroupsIcon/001.png" class="feature-icon" />
                            </div>
                            <div class="col-lg-10">
                                <div class="feature-content">
                                    <h3>اعداد </h3>
                                    <h4 style="color:blue">
                                        رحاب خلف محمد حسن
                                    </h4>
                                    <h4>
                                        معلم حاسب آلي بمدرسة دمشير الاعدادية
                                    </h4>
                                </div>
                            </div>
                        </div>


                        
                        
                    </div>
                </div>
                <!-- /feature -->
                <!-- feature -->
                <div class="col-md-4" style="float:right">
                    <div class="feature">
                        <!--<i class="feature-icon fa fa-users"></i>-->

                        <div class="row">
                            <div class="col-lg-2" style="float:right">
                                <img src="GroupsIcon/002.png" class="feature-icon" />
                            </div>
                            <div class="col-lg-10">
                                <div class="feature-content">
                                    <h3 >اشراف </h3>
                                    <h4 style="color:blue">
                                        أ.د / وليد يوسف محمد
                                    </h4>
                                    <h4>
                                        أستاذ تكنولوجيا التعليم - كلية التربية - جامعة حلوان                                    </h4>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>

                <div class="col-md-4" style="float:right">
                    <div class="feature">
                        <!--<i class="feature-icon fa fa-users"></i>-->

                        <div class="row">
                            <div class="col-lg-2" style="float:right">
                                <img src="images/nisreen.jpg" class="feature-icon" />
                            </div>
                            <div class="col-lg-10">
                                <div class="feature-content">
                                    <h3>اشراف </h3>
                                    <h4 style="color:blue" >
                                        د / نسرين عزت ذكى
                                    </h4>
                                    <h4>
                                        مدرس  تكنولوجيا التعليم - كلية التربية النوعيه - جامعة المنيا                                    </h4>
                        </div>




                    </div>
                </div>
            </div>
            <!-- /row -->

            <hr class="section-hr">

          
        </div>
        <!-- /container -->

    </div>
    <!-- عن البيئة نهاية -->

    <!-- Contact CTA -->
    <div id="contact" class="section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
        <!-- Backgound Image -->

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="white-text">تواصل معنا</h2>
                    <p class="lead white-text">
                        تواصل مع المعلم ومع اصدقائك في حال وجود استفسار أو مناقشة
                    </p>
                    <a class="main-button icon-button" href="contact-form/index.html">تواصل معنا</a>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Contact CTA -->

    <!-- Footer -->
    <footer id="footer" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- footer logo -->
                <!-- <div class="col-md-6">
                    <div class="footer-logo">
                        <a class="logo" href="index.html">
                            <img src="./img/logo.png" alt="logo">
                        </a>
                    </div>
                </div> -->
                <!-- footer logo -->

               
            </div>
            <!-- /row -->

            <!-- row -->
            <div id="bottom-footer" class="row">

                <!-- social -->
                <div class="col-md-4 col-md-push-8">
                    <ul class="footer-social">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- /social -->

                <!-- copyright -->
                <div class="col-md-8 col-md-pull-4">
                    <div class="footer-copyright">
                        <span>&copy; Copyright 2018. All Rights Reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com">Colorlib</a></span>
                    </div>
                </div>
                <!-- /copyright -->

            </div>
            <!-- row -->

        </div>
        <!-- /container -->

    </footer>
    <!-- /Footer -->

    <!-- preloader -->
    <div id='preloader'>
        <div class='preloader'></div>
    </div>
    <!-- /preloader -->


    <!-- jQuery Plugins -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#btn1").click(function(){
                $("#ff").css('display','block');
                $("#l1").css('display','block');
                $("#l12").css('display','none');
                $("#l13").css('display','none');
                $("#l14").css('display','none');
                $("#l15").css('display','none');
                $("#l2").css('display','block');
                $("#l22").css('display','none');
                $("#l23").css('display','none');
                $("#l24").css('display','none');
                $("#l25").css('display','none');
                $("#l3").css('display','block');
                $("#l32").css('display','none');
                $("#l33").css('display','none');
                $("#l34").css('display','none');
                $("#l35").css('display','none');
                $("#l4").css('display','block');
                $("#l42").css('display','none');
                $("#l43").css('display','none');
                $("#l44").css('display','none');
                $("#l45").css('display','none');
                $("#l5").css('display','block');
                $("#l52").css('display','none');
                $("#l53").css('display','none');
                $("#l54").css('display','none');
                $("#l55").css('display','none');
                $("#l6").css('display','block');
                $("#l62").css('display','none');
                $("#l63").css('display','none');
                $("#l64").css('display','none');
                $("#l65").css('display','none');
                $("#g1").css('display','block');
                $("#g12").css('display','none');
                $("#g13").css('display','none');
                $("#g14").css('display','none');
                $("#g15").css('display','none');
                $("#g2").css('display','block');
                $("#g22").css('display','none');
                $("#g23").css('display','none');
                $("#g24").css('display','none');
                $("#g25").css('display','none');
                $("#g3").css('display','block');
                $("#g32").css('display','none');
                $("#g33").css('display','none');
                $("#g34").css('display','none');
                $("#g35").css('display','none');
                $("#g4").css('display','block');
                $("#g42").css('display','none');
                $("#g43").css('display','none');
                $("#g44").css('display','none');
                $("#g45").css('display','none');
                $("#g5").css('display','block');
                $("#g52").css('display','none');
                $("#g53").css('display','none');
                $("#g54").css('display','none');
                $("#g55").css('display','none');
                $("#g6").css('display','block');
                $("#g62").css('display','none');
                $("#g63").css('display','none');
                $("#g64").css('display','none');
                $("#g65").css('display','none');

});

                $("#btn2").click(function(){
                $("#ff").css('display','block');
                $("#l1").css('display','none');
                $("#l12").css('display','block');
                $("#l13").css('display','none');
                $("#l14").css('display','none');
                $("#l15").css('display','none');
                $("#l2").css('display','none');
                $("#l22").css('display','block');
                $("#l23").css('display','none');
                $("#l24").css('display','none');
                $("#l25").css('display','none');
                $("#l3").css('display','none');
                $("#l32").css('display','block');
                $("#l33").css('display','none');
                $("#l34").css('display','none');
                $("#l35").css('display','none');
                $("#l4").css('display','none');
                $("#l42").css('display','block');
                $("#l43").css('display','none');
                $("#l44").css('display','none');
                $("#l45").css('display','none');
                $("#l5").css('display','none');
                $("#l52").css('display','block');
                $("#l53").css('display','none');
                $("#l54").css('display','none');
                $("#l55").css('display','none');
                $("#l6").css('display','none');
                $("#l62").css('display','block');
                $("#l63").css('display','none');
                $("#l64").css('display','none');
                $("#l65").css('display','none');
                $("#g1").css('display','none');
                $("#g12").css('display','block');
                $("#g13").css('display','none');
                $("#g14").css('display','none');
                $("#g15").css('display','none');
                $("#g2").css('display','none');
                $("#g22").css('display','block');
                $("#g23").css('display','none');
                $("#g24").css('display','none');
                $("#g25").css('display','none');
                $("#g3").css('display','none');
                $("#g32").css('display','block');
                $("#g33").css('display','none');
                $("#g34").css('display','none');
                $("#g35").css('display','none');
                $("#g4").css('display','none');
                $("#g42").css('display','block');
                $("#g43").css('display','none');
                $("#g44").css('display','none');
                $("#g45").css('display','none');
                $("#g5").css('display','none');
                $("#g52").css('display','block');
                $("#g53").css('display','none');
                $("#g54").css('display','none');
                $("#g55").css('display','none');
                $("#g6").css('display','none');
                $("#g62").css('display','block');
                $("#g63").css('display','none');
                $("#g64").css('display','none');
                $("#g65").css('display','none');

                // $('button').html("show");
          });
          
          $("#btn3").click(function(){
                $("#ff").css('display','block');
                $("#l1").css('display','none');
                $("#l12").css('display','none');
                $("#l13").css('display','block');
                $("#l14").css('display','none');
                $("#l15").css('display','none');
                $("#l2").css('display','none');
                $("#l22").css('display','none');
                $("#l23").css('display','block');
                $("#l24").css('display','none');
                $("#l25").css('display','none');
                $("#l3").css('display','none');
                $("#l32").css('display','none');
                $("#l33").css('display','block');
                $("#l34").css('display','none');
                $("#l35").css('display','none');
                $("#l4").css('display','none');
                $("#l42").css('display','none');
                $("#l43").css('display','block');
                $("#l44").css('display','none');
                $("#l45").css('display','none');
                $("#l5").css('display','none');
                $("#l52").css('display','none');
                $("#l53").css('display','block');
                $("#l54").css('display','none');
                $("#l55").css('display','none');
                $("#l6").css('display','none');
                $("#l62").css('display','none');
                $("#l63").css('display','block');
                $("#l64").css('display','none');
                $("#l65").css('display','none');
                $("#g1").css('display','none');
                $("#g12").css('display','none');
                $("#g13").css('display','block');
                $("#g14").css('display','none');
                $("#g15").css('display','none');
                $("#g2").css('display','none');
                $("#g22").css('display','none');
                $("#g23").css('display','block');
                $("#g24").css('display','none');
                $("#g25").css('display','none');
                $("#g3").css('display','none');
                $("#g32").css('display','none');
                $("#g33").css('display','block');
                $("#g34").css('display','none');
                $("#g35").css('display','none');
                $("#g4").css('display','none');
                $("#g42").css('display','none');
                $("#g43").css('display','block');
                $("#g44").css('display','none');
                $("#g45").css('display','none');
                $("#g5").css('display','none');
                $("#g52").css('display','none');
                $("#g53").css('display','block');
                $("#g54").css('display','none');
                $("#g55").css('display','none');
                $("#g6").css('display','none');
                $("#g62").css('display','none');
                $("#g63").css('display','block');
                $("#g64").css('display','none');
                $("#g65").css('display','none');
          });
          $("#btn4").click(function(){
                $("#ff").css('display','block');
                $("#l1").css('display','none');
                $("#l12").css('display','none');
                $("#l13").css('display','none');
                $("#l14").css('display','block');
                $("#l15").css('display','none');
                $("#l2").css('display','none');
                $("#l22").css('display','none');
                $("#l23").css('display','none');
                $("#l24").css('display','block');
                $("#l25").css('display','none');
                $("#l3").css('display','none');
                $("#l32").css('display','none');
                $("#l33").css('display','none');
                $("#l34").css('display','block');
                $("#l35").css('display','none');
                $("#l4").css('display','none');
                $("#l42").css('display','none');
                $("#l43").css('display','none');
                $("#l44").css('display','block');
                $("#l45").css('display','none');
                $("#l5").css('display','none');
                $("#l52").css('display','none');
                $("#l53").css('display','none');
                $("#l54").css('display','block');
                $("#l55").css('display','none');
                $("#l6").css('display','none');
                $("#l62").css('display','none');
                $("#l63").css('display','none');
                $("#l64").css('display','block');
                $("#l65").css('display','none');                // $('button').html("show");
                $("#g1").css('display','none');
                $("#g12").css('display','none');
                $("#g13").css('display','none');
                $("#g14").css('display','block');
                $("#g15").css('display','none');
                $("#g2").css('display','none');
                $("#g22").css('display','none');
                $("#g23").css('display','none');
                $("#g24").css('display','block');
                $("#g25").css('display','none');
                $("#g3").css('display','none');
                $("#g32").css('display','none');
                $("#g33").css('display','none');
                $("#g34").css('display','block');
                $("#g35").css('display','none');
                $("#g4").css('display','none');
                $("#g42").css('display','none');
                $("#g43").css('display','none');
                $("#g44").css('display','block');
                $("#g45").css('display','none');
                $("#g5").css('display','none');
                $("#g52").css('display','none');
                $("#g53").css('display','none');
                $("#g54").css('display','block');
                $("#g55").css('display','none');
                $("#g6").css('display','none');
                $("#g62").css('display','none');
                $("#g63").css('display','none');
                $("#g64").css('display','block');
                $("#g65").css('display','none'); 
          });

          $("#btn5").click(function(){
                $("#ff").css('display','block');
                $("#l1").css('display','none');
                $("#l12").css('display','none');
                $("#l13").css('display','none');
                $("#l14").css('display','none');
                $("#l15").css('display','block');
                $("#l2").css('display','none');
                $("#l22").css('display','none');
                $("#l23").css('display','none');
                $("#l24").css('display','none');
                $("#l25").css('display','block');
                $("#l3").css('display','none');
                $("#l32").css('display','none');
                $("#l33").css('display','none');
                $("#l34").css('display','none');
                $("#l35").css('display','block');
                $("#l4").css('display','none');
                $("#l42").css('display','none');
                $("#l43").css('display','none');
                $("#l44").css('display','none');
                $("#l45").css('display','block');
                $("#l5").css('display','none');
                $("#l52").css('display','none');
                $("#l53").css('display','none');
                $("#l54").css('display','none');
                $("#l55").css('display','block');
                $("#l6").css('display','none');
                $("#l62").css('display','none');
                $("#l63").css('display','none');
                $("#l64").css('display','none');
                $("#l65").css('display','block');                // $('button').html("show");
                $("#g1").css('display','none');
                $("#g12").css('display','none');
                $("#g13").css('display','none');
                $("#g14").css('display','none');
                $("#g15").css('display','block');
                $("#g2").css('display','none');
                $("#g22").css('display','none');
                $("#g23").css('display','none');
                $("#g24").css('display','none');
                $("#g25").css('display','block');
                $("#g3").css('display','none');
                $("#g32").css('display','none');
                $("#g33").css('display','none');
                $("#g34").css('display','none');
                $("#g35").css('display','block');
                $("#g4").css('display','none');
                $("#g42").css('display','none');
                $("#g43").css('display','none');
                $("#g44").css('display','none');
                $("#g45").css('display','block');
                $("#g5").css('display','none');
                $("#g52").css('display','none');
                $("#g53").css('display','none');
                $("#g54").css('display','none');
                $("#g55").css('display','block');
                $("#g6").css('display','none');
                $("#g62").css('display','none');
                $("#g63").css('display','none');
                $("#g64").css('display','none');
                $("#g65").css('display','block');
          });
        });
        
        function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
    </script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61374393d6e7610a49b40b75/1fevtvu75';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
?>