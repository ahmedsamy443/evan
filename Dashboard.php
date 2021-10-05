<?php
session_start();
$conn = new mysqli("localhost" , "root" , "", "test");

    $sql="SELECT * FROM `tbl_studentdata` WHERE `St_Id` =".$_SESSION['id']."";
    $result = $conn->query($sql) or die($conn->error);
   while($row=$result->fetch_assoc()){
        $st_Level = $row['st_Level'];
       // print_r($st_Level);die();
        $st_level1 = $row['st_Level1'];
        $st_level2 = $row['st_Level2'];
        $st_level3= $row['st_Level3'];
        $st_level4 = $row['st_Level4'];
        $st_level5 = $row['st_Level5'];
        $st_level6 = $row['st_Level6'];        
        $st_pretest_score = $row['st_Pretest_Score'];
        $st_last_score = $row['st_Last_Score'];
        $st_image = $row['st_notes'];
        $st_activityLevel = $row['st_activityLevel'];
        $st_activityLevel1 = $row['st_activityLevel1'];
        $st_activityLevel2 = $row['st_activityLevel2'];
        $st_activityLevel3 = $row['st_activityLevel3'];
        $st_activityLevel4 = $row['st_activityLevel4'];
        $st_activityLevel5 = $row['st_activityLevel5'];

    }
    
    $groub = "select Gb_name,Gb_Id from tbl_group";
    $groubres = $conn->query($groub) or die($conn->error);
    $studentid=$_SESSION['id'];
$stardegree="SELECT tbl_group.Gb_lvl1_activity_score,tbl_group.Gb_lvl2_activity_score,tbl_group.Gb_lvl3_activity_score,tbl_group.Gb_lvl4_activity_score,tbl_group.Gb_lvl5_activity_score
,tbl_studentdata.id_group,tbl_group.Gb_name from tbl_group INNER JOIN tbl_studentdata on tbl_studentdata.id_group=tbl_group.Gb_Id AND tbl_studentdata.St_Id= $studentid";
$star=$conn->query($stardegree) or die($conn->error);
while($row2=$star->fetch_assoc())
{
    $firstscore=$row2['Gb_lvl1_activity_score'];
    $secondscore=$row2['Gb_lvl2_activity_score'];
    $thirdscore=$row2['Gb_lvl3_activity_score'];
    $foruth=$row2['Gb_lvl4_activity_score'];
    $fifthscore=$row2['Gb_lvl5_activity_score'];
    $groubname=$row2['Gb_name'];

}
//print_r($row2=$star->fetch_object());die();
//echo $row['Gb_lvl1_activity_score'];die();
   
    ?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>لوحة التحكم</title>
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css" />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="Libraries/sweetalert/css/sweetalert2.css" rel="stylesheet" />


    <script src="Libraries/sweetalert/js/sweetalert2.common.js"></script>
    <script src="Libraries/sweetalert/js/sweetalert2.js"></script>

   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
     <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   




</head>

<body class="w3-theme-l5" dir="rtl" style="font-family: 'Cairo', sans-serif;">

    <!-- <form id="form1" > -->

        <!-- Navbar -->
    
    <div class="w3-top" >
            <div class="w3-bar w3-theme-black w3-left-align w3-large w3-black" style="width: 100%; height: 50px;">
                <!--a href="default.aspx" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>العب وتعلم</a-->
                <a href="../evan/index2.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" style="padding-top:0%;">
                    <img src="Images/Dashboard/logo-scratch.png" style="width:40px;" />
                </a>
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()" style="width:61px;"><i class="fa fa-bars"></i></a>
                    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" style="height:83px; padding-top: 9px !important;" >المعلمة</a>
                
                <!--
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
                -->
                <div class="w3-dropdown-hover w3-hide-small">
                    <!-- <a href="javascript://" class="w3-button w3-padding-large" title="Notifications" style="height:83px;display:none;"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></a> -->
                    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width: 300px" id="messageslst">

                        <!--a href="#" class="w3-bar-item w3-button">لقد أكملت المستوى الثاني</!--a>
                        <a href="#" class="w3-bar-item w3-button">حصلت مجموعتك على المركز الأول</a>
                        <a href="#" class="w3-bar-item w3-button">أتممت المستوى الأول</a-->
                    </div>
                </div>
                <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
                    <img src="/w3images/avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
                </a> -->
                <a href="../evan/index.html" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" style="float:left;height:83px; padding-top: 8px !important;">خروج</a>
                <label id="LblName"  Text="" style="float:left;height:83px; padding-top: 8px !important;">أهلا :  <?php echo $_SESSION['name']; ?></label>
                <label id="LblName"  Text="" style="float:left;height:83px; padding-top: 8px !important;"><?php echo $_SESSION['img']; ?></label>            </div>
        </div>
        <!-- Page Container -->
        <div class="w3-container w3-content" style="max-width: 1400px; margin-top: 60px">
            <!-- The Grid -->
            <div class="w3-row">
                <!-- Left Column -->
                <div class="w3-col m3">
                    <!-- Profile -->
                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container">
                            <h4 class="w3-center">الملف الشخصي</h4>
                            <p class="w3-center">
                                <img src="Images/students/2.jpg" class="w3-circle" style="height: 106px; width: 106px" alt="Avatar" />
                                
                            </p>
                            <hr />
                            <p>
                                <i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><strong>كود :   </strong>
                                <label id="LblCode"  Text=""><?php echo $_SESSION['id']; ?></label>
                            </p>
                            <p>
                                <i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><strong>الاسم : </strong>
                                <label id="LblName"  Text=""><?php echo $_SESSION['name']; ?></label>
                            </p>

                            <p>
                                <i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i><strong>المجموعة : </strong>
                                <label id="LblGroup"  Text=""><?php echo $groubname ?></label>
                            </p>

                            <p>
                                <i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i><strong>عدد نقاط المستوى الحالى:</strong>
                                <label id="LblScore"  Text=""><?php echo $st_last_score; ?></label>
                            </p>
                            <label id="LblLevel" hidden><?php echo $st_Level ?></label>

                        </div>
                    </div>
                    <br />

                    <!-- Accordion -->
                    <?php if ($_SESSION['id'] == 100) { ?>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>اختر اسم الفرقة</option>
                        <?php while ($rowres = $groubres->fetch_assoc()) { ?>
                            <option value=<?php echo $rowres['Gb_Id'] ?>><?php echo $rowres['Gb_name'] ?></option>
                        <?php } ?>
                    </select>
                    <select class="form-select2" aria-label="Default select example">
                        <option selected>اختر المستوي </option>
                        <option value="Gb_lvl1_activity_score">المستوي الاول</option>
                        <option value="Gb_lvl2_activity_score">السنتوي الثاني</option>
                        <option value="Gb_lvl3_activity_score">المستوي الثالت</option>
                        <option value="Gb_lvl4_activity_score">المستوي الرابع</option>
                        <option value="Gb_lvl5_activity_score">المستوي الخامس</option>
                    </select>
                    <input id="scoredegree" type="text" size="5">

                    </br> </br>
                    <button class="btn btn-primary" id="teacher" style="margin-right:150px;">تحديث</button>
                <?php } else { ?>
                <div class="w3-card w3-round" style="height:400px;">
                    <div class="w3-white" style="height:400px; background-image:url(Level/Wesam.png); background-image :no-repeat;">

                        <ul id="con" style="padding:100px 100px ; font-size:18px;list-style-type:none;"> </ul>

                        <div id="Demo3" class="w3-hide w3-container">
                            <div class="w3-row-padding">
                                <br />
                                <div class="w3-half">
                                    <img src="/w3images/lights.jpg" style="width: 100%" class="w3-margin-bottom" />
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/nature.jpg" style="width: 100%" class="w3-margin-bottom" />
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/mountains.jpg" style="width: 100%" class="w3-margin-bottom" />
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/forest.jpg" style="width: 100%" class="w3-margin-bottom" />
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/nature.jpg" style="width: 100%" class="w3-margin-bottom" />
                                </div>
                                <div class="w3-half">
                                    <img src="/w3images/snow.jpg" style="width: 100%" class="w3-margin-bottom" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br />


<?php }?>


                </div>

                <!-- Middle Column -->

                <div class="w3-col m7">
                    <div class="w3-container">
                        <div class="w3-panel w3-blue w3-card-4">




                            <div class="w3-row">
                                <div class="w3-half w3-container  ">
                                    <img src="Images/Dashboard/Cup.png" class="w3-circle" style="width: 35px; height: 35px" />
                                    <label id="Lbl_Cup" ></label>
                                </div>
                                <div class="w3-half w3-container">
                                    <img src="Images/Dashboard/Points.png" class="w3-circle" style="width: 35px; height: 35px" />
                                    <label id="Lbl_Score" ></label>
                                </div>
                            </div>

                        </div>
                    </div>
                     
                    <div class="w3-row-padding" dir="rtl">
                        <div id="L3" class="w3-col s4" >
                            <div class="w3-card-4 level-section3" id="BtnLevel1">
                                <!--img src="Images/level/003.jpg" style="width: 100%" /-->
                                <div class="w3-container w3-center" style="padding-top: 130px;">
                                    <p>
                                        <button id="Btn3"   Class="w3-button"  disabled>
                                            <a href="level/Level3-3.php"  style="text-decoration: none;">المستوى الثالث</a></button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="L2" class="w3-col s4"  >
                            <div class="w3-card-4 level-section2">
                                <!--img src="Images/level/002.jpg" style="width: 100%" /-->
                                <div class="w3-container w3-center" style="padding-top: 130px;">
                                    <p>
                                        <button id="Btn2" Class="w3-button" disabled ><a href="level/Level2-2.php"  style="text-decoration: none;">المستوى الثاني</a></button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="L1" class="w3-col s4"  >
                            <div class="w3-card-4 level-section1">
                                <!--img src="Images/level/001.jpg" style="width: 100%" /-->
                                <div class="w3-container w3-center" style="padding-top: 130px;">
                                    <p>
                                        <button id="Btn1" Class="w3-button" disabled ><a href="level/Level1-1.php"  style="text-decoration: none;">المستوى الأول</a></button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />

                    
                    <div class="w3-row-padding">
                        <div id="L6" class="w3-col s4"  >
                            <div class="w3-card-4 level-section6">
                                <!--img src="Images/level/level02.png" style="width: 100%" /-->
                                <div class="w3-container w3-center" style="padding-top: 130px;">
                                    <p>
                                        <button id="Btn6"   Class="w3-button" disabled ><a href="Level/Level6-6.php"  style="text-decoration: none;"> التطبيق البعدي</a> </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="L5" class="w3-col s4"  >
                            <div class="w3-card-4 level-section5">
                                <!--img src="Images/level/005.jpg" style="width: 100%" /-->
                                <div class="w3-container w3-center" style="padding-top: 130px;">
                                    <p>
                                        <button id="Btn5" Class="w3-button" disabled ><a href="level/Level5-5.php"  style="text-decoration: none;">المستوى الخامس</a>   </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div id="L4" class="w3-col s4"  >
                            <div class="w3-card-4 level-section4">
                                <!--img src="Images/level/004.jpg" style="width: 100%" /-->
                                <div class="w3-container w3-center" style="padding-top: 130px;">
                                    <p>
                                        <button id="Btn4"  Class="w3-button" disabled ><a href="level/Level4-4.php"  style="text-decoration: none;">المستوى الرابع</a> </button>
                                    </p>
                                </div>
                            </div>
                        
                    </div>
                    </div>
                     
                    <div class="w3-row-padding">
                        
                        <div id="L7" class="w3-col s4"  >
                            <div class="w3-card-4 level-section6">
                                <div class="w3-container w3-center" style="padding-top: 130px;">
                                    <p>
                                        <button id="Btn7"  Class="w3-button" disabled ><a href="level/Level7-7.php" style="text-decoration: none;" > التطبيق البعدي المؤجل</a></button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                     
                    <br />
                    <hr class="w3-green" />

                    
                    <hr class="w3-green" />
                </div>

                <!-- Right Column -->
                <div class="w3-col m2">
                    <div class="w3-card w3-round w3-white w3-center">
                        <div class="w3-container" style="padding-top: 8px;">

                            <img src="Images/Dashboard/men.png" style="width: 100%; height: 10%" />

                            <div class="w3-panel" id="p1" style="margin-bottom: 8px; padding: 0%; margin-top: 0%; backgroundColor:yellow;">
                                <p>
                                    المستوى الأول 
                                </p>
                                <p>
    
                                    <div class="w3-badge w3-black"style="width:80%;desplay:flex;position:relative;">
                                 <label id="Lbl_ActivScore1"  Font-Size="12px">نشاط المجموعه : 
                                 <!-- <div class="text"  style="position: relative ;top:2px ;background:white;width:30px"> -->
                                 <div class="star" style="position: absolute;top:-7px;left:23%">
                                 
                                 <!-- <span style=position:absolute;left:-30px;color:whit> </span> -->
                                 <div class="container">
                                 <img src="Level/favorites_star_icon_png_0@2x.png" style="width:60px;height:40px;position:absolute;left:-70px;top:-5px ">
                                 <span class="centered" style="position:absolute;left:-38px;bottom:5px;color:black;font-size:20px;font-weight: bold;"><?php echo $firstscore?></span>
                                 </div>
                                 
                                </div>         
                                    <!-- <img src="Level/favorites_star_icon_png_0@2x.png" style="width:30px;height:30px; "> -->
                                    
<!-- </div>  -->
                             </div>
                                </label>
                                    
                                </p>
                            </div>
                            <div class="w3-panel" id="p2" style="margin-bottom: 8px; padding: 0%; margin-top: 0%; backgroundColor:yellow;">
                                <p>
                                   المستوى الثاني
                                </p>
                                <p>
                        
                              
                                <div class="w3-badge w3-black"style="width:80%;desplay:flex;position:relative;">
                                 <label id="Lbl_ActivScore2"  Font-Size="12px">نشاط المجموعه : 
                                 <!-- <div class="text"  style="position: relative ;top:2px ;background:white;width:30px"> -->
                                 <div class="star" style="position: absolute;top:-7px;left:23%">
                                 
                                 <!-- <span style=position:absolute;left:-30px;color:whit> </span> -->
                                 <div class="container">
                                 <img src="Level/favorites_star_icon_png_0@2x.png" style="width:60px;height:40px;position:absolute;left:-70px;top:-5px ">
                                 <span class="centered" style="position:absolute;left:-38px;bottom:5px;color:black;font-size:20px;font-weight: bold;"><?php echo $secondscore?></span>
                                 </div>
                                 
                                </div>         
                                    <!-- <img src="Level/favorites_star_icon_png_0@2x.png" style="width:30px;height:30px; "> -->
                                    
<!-- </div>  -->
                             </div>
                                </label>
                                </p>

                                 
                            </div>
                            <div class="w3-panel" id="p3" style="margin-bottom: 8px; padding: 0%; margin-top: 0%; backgroundColor:yellow;">
                                <p>
                                    المستوى الثالث
                                </p>
                                <p>
                                   
                              
                                <div class="w3-badge w3-black"style="width:80%;desplay:flex;position:relative;">
                                 <label id="Lbl_ActivScore3"  Font-Size="12px">نشاط المجموعه : 
                                 <!-- <div class="text"  style="position: relative ;top:2px ;background:white;width:30px"> -->
                                 <div class="star" style="position: absolute;top:-7px;left:23%">
                                 
                                 <!-- <span style=position:absolute;left:-30px;color:whit> </span> -->
                                 <div class="container">
                                 <img src="Level/favorites_star_icon_png_0@2x.png" style="width:60px;height:40px;position:absolute;left:-70px;top:-5px ">
                                 <span class="centered" style="position:absolute;left:-38px;bottom:5px;color:black;font-size:20px;font-weight: bold;"><?php echo $thirdscore?></span>
                                 </div>
                                 
                                </div>         
                                    <!-- <img src="Level/favorites_star_icon_png_0@2x.png" style="width:30px;height:30px; "> -->
                                    
<!-- </div>  -->
                             </div>
                                </label>
                                </p>
                            </div>
                            <div class="w3-panel" id="p4" style="margin-bottom: 8px; padding: 0%;margin-top: 0%; backgroundColor:yellow;">
                                <p>
                                    المستوى الرابع
                                </p>
                               
                                <div class="w3-badge w3-black"style="width:80%;desplay:flex;position:relative;">
                                 <label id="Lbl_ActivScore4"  Font-Size="12px">نشاط المجموعه : 
                                 <!-- <div class="text"  style="position: relative ;top:2px ;background:white;width:30px"> -->
                                 <div class="star" style="position: absolute;top:-7px;left:23%">
                                 
                                 <!-- <span style=position:absolute;left:-30px;color:whit> </span> -->
                                 <div class="container">
                                 <img src="Level/favorites_star_icon_png_0@2x.png" style="width:60px;height:40px;position:absolute;left:-70px;top:-5px ">
                                 <span class="centered" style="position:absolute;left:-38px;bottom:5px;color:black;font-size:20px;font-weight: bold;"><?php echo $foruth?></span>
                                 </div>
                                 
                                </div>         
                                    <!-- <img src="Level/favorites_star_icon_png_0@2x.png" style="width:30px;height:30px; "> -->
                                    
<!-- </div>  -->
                             </div>
                                </label>
                                </p>





                            </div>
                            <div class="w3-panel" id="p5" style="margin-bottom: 8px; padding: 0%; margin-top: 0%; backgroundColor:yellow;">
                                <p>
                                    المستوى الخامس
                                </p>
                                <p>
                                   
                               
                                <div class="w3-badge w3-black"style="width:80%;desplay:flex;position:relative;">
                                 <label id="Lbl_ActivScore5"  Font-Size="12px">نشاط المجموعه : 
                                 <!-- <div class="text"  style="position: relative ;top:2px ;background:white;width:30px"> -->
                                 <div class="star" style="position: absolute;top:-7px;left:23%">
                                 
                                 <!-- <span style=position:absolute;left:-30px;color:whit> </span> -->
                                 <div class="container">
                                 <img src="Level/favorites_star_icon_png_0@2x.png" style="width:60px;height:40px;position:absolute;left:-70px;top:-5px ">
                                 <span class="centered" style="position:absolute;left:-38px;bottom:5px;color:black;font-size:20px;font-weight: bold;"><?php echo $fifthscore?></span>
                                 </div>
                                 
                                </div>         
                                    <!-- <img src="Level/favorites_star_icon_png_0@2x.png" style="width:30px;height:30px; "> -->
                                    
<!-- </div>  -->
                             </div>
                                </label>
                                </p>




                            </div>
                            <div class="w3-panel" id="p6" style="margin-bottom: 8px; padding: 0%; margin-top: 0%; backgroundColor:yellow;"
                            onclick="openCert();" >
                                <p>الشهادة</p>
                            </div>
                            <div id="p7"  hidden></div>
                            <br />

                        </div>
                    </div>
                    <br />
                    <br />


                    <!-- End Right Column -->
                </div>

                <!-- End Grid -->
            </div>
            <input type="hidden" name="mysession" id="11" value="$session_value1" >
            <!-- End Page Container -->
        </div>
        <br />

        <!-- Footer -->
        <footer class="w3-container w3-theme-d3 w3-padding-16">
            <h5 style="text-align:center;">بيئة تعلم إلكترونية قائمة على محفزات الألعاب وأثرها فى تنمية التحصيل والانخراط فى التعلم وبقاء أثرة لدى تلاميذ المرحلة الاعدادية منخفضى ومرتفعى الدافعية للإنجاز</h5>
        </footer>

        <!--footer class="w3-container w3-theme-d5">
            <p>نص </p>
        </!--footer-->

        <!-- <script>
            // Accordion
            function myFunction(id) {
                var x = document.getElementById(id);
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                    x.previousElementSibling.className += " w3-theme-d1";
                } else {
                    x.className = x.className.replace("w3-show", "");
                    x.previousElementSibling.className =
                    x.previousElementSibling.className.replace(" w3-theme-d1", "");
                }
            }

            // Used to toggle the menu on smaller screens when clicking on the menu button
            function openNav() {
                var x = document.getElementById("navDemo");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script> -->



<!--Start of Tawk.to Script-->
<script type="text/javascript">


            /*if(document.getElementById("LblLevel").textContent==='8'){
                for (let i = 1; i <= 8; i++) {
                    
                    document.getElementById("Btn"+i).disabled = false;
                    if(i < 8) {
                        document.getElementById("p"+i).style.backgroundColor = "green";
                        appendWesam(i);
                    }
                }
            }else*/ if(document.getElementById("LblLevel").textContent==='7'){
                for (let i = 1; i <= 7; i++) {
                    
                    document.getElementById("Btn"+i).disabled = false;
                    if(i <= 7) {
                        document.getElementById("p"+i).style.backgroundColor = "green";
                        appendWesam(i);
                    }
                }
            }else if(document.getElementById("LblLevel").textContent==='6'){
                
                for (let i = 1; i <= 7; i++) {                    
                    document.getElementById("Btn"+i).disabled = false; 
                    if(i < 6) {                        
                        document.getElementById("p"+i).style.backgroundColor = "green";
                    }
                    if(i <= 6) {                        
                        appendWesam(i);
                    }
                }
            }else if(document.getElementById("LblLevel").textContent==='5'){
                for (let i = 1; i <= 6; i++) {
                    
                    document.getElementById("Btn"+i).disabled = false;
                    if(i !== 6){
                        appendWesam(i);
                        document.getElementById("p"+i).style.backgroundColor = "green";
                    } 
                }
            }else if(document.getElementById("LblLevel").textContent==='4'){
                for (let i = 1; i <= 5; i++) {
                    
                    document.getElementById("Btn"+i).disabled = false;
                    if(i !== 5){
appendWesam(i);
document.getElementById("p"+i).style.backgroundColor = "green";
                    } 
                }
            }else if(document.getElementById("LblLevel").textContent==='3'){
                for (let i = 1; i <= 4; i++) {
                    
                    document.getElementById("Btn"+i).disabled = false;
                    if(i !== 4){
appendWesam(i);
                        document.getElementById("p"+i).style.backgroundColor = "green";
                    } 
                }
            }else if(document.getElementById("LblLevel").textContent==="2"){
                for (let i = 1; i <= 3; i++) {
                    
                    document.getElementById("Btn"+i).disabled = false;
                    if(i !== 3){
                        appendWesam(i);
                        document.getElementById("p"+i).style.backgroundColor = "green";
                    } 
                }
            }else if(document.getElementById("LblLevel").textContent==='1'){
            
                for (let i = 1; i <= 2; i++) {
                    if(i !== 2) appendWesam(i);
                    document.getElementById("Btn"+i).disabled = false;
                    document.getElementById("p1").style.backgroundColor = "green";
                }
            }else{
                document.getElementById("Btn1").disabled = false;
            }
     

function appendWesam(i){
var imgname;
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            imgname = this.responseText;console.log(this.responseText);
             var node ; var textnode; var wimg; var wsp;
            node = document.createElement("LI");                 // Create a <li> node
            textnode = document.createTextNode(i+"   :  ");         // Create a text node
            node.appendChild(textnode);   
            // wsp = document.createElement("SPAN");
            // node.appendChild(wsp);
            wimg = document.createElement("IMG");
            if(imgname==='1'){console.log('1');wimg.src='/evan/gold.png';}  
            else if(imgname==='2') {console.log('2'); wimg.src='/evan/selver.png';}
            else if(imgname==='3') { console.log('3');  wimg.src='/evan/plat.png';} //console.log(wimg.src);
            else if(imgname==='4') { console.log('4');  wimg.src='/evan/4.png';}
            else if(imgname==='5') { console.log('5');  wimg.src='/evan/5.png';}
            wimg.width=30;
            wimg.height=30;         // Create a text node
            node.appendChild(wimg);                            // Append the text to <li>
            document.getElementById("con").appendChild(node); 

        }
        };
        xmlhttp.open("GET", "wesam.php?level=" + i , true);
        xmlhttp.send();
   
}

function openCert(){
    if(document.getElementById("p6").style.backgroundColor === "green"){
        window.open("cert.php");
    }
}
document.getElementById("teacher").addEventListener("click", function() {
            let x = document.getElementsByClassName("form-select2")[0];
            let value = x.options[x.selectedIndex].value;
            let y = document.getElementsByClassName("form-select")[0];
            let w = document.getElementById("scoredegree").value;
            value2 = y.options[y.selectedIndex].value;
            $.ajax({
                type: "post",
                url: "http://localhost/evan/scoredegree.php",
                data: {

                    value: value,
                    value2: value2,
                    w: w
                },
                success: function(resposne) {
                    if (resposne == "updated sucessfuly") {
                        Swal.fire('تمت العملية بنجاح')
                    } else {
                        Swal.fire('حدث شي خطا ')

                    }
                }
            })
        })


        </script>



        <!-- Start of Tawk.to Script-->
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
<!-- End of Tawk.to Script --> 


        <!--End of Tawk.to Script

     </form> -->
    <style>
        .container {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
        .w3-badge {
            border-radius: 50%;
            margin: 5px;
        }
        .w3-bar-block .w3-bar-item {
            text-align: right;
        }
            .w3-bar .w3-dropdown-hover, .w3-bar .w3-dropdown-click {
        position: static;
        float: right;
    }
    .w3-bar .w3-button {
        white-space: normal;
        float: right;
    }
    .level-section1
    {
        background: url(Images/level/001.jpg);
        background-size: cover;
        height: 200px;
    }
    .level-section2
    {
        background: url(Images/level/002.jpg);
        background-size: cover;
        height: 200px;
    }
    .level-section3
    {
        background: url(Images/level/003.jpg);
        background-size: cover;
        height: 200px;
    }
    .level-section4
    {
        background: url(Images/level/004.jpg);
        background-size: cover;
        height: 200px;
    }
    .level-section5
    {
        background: url(Images/level/005.jpg);
        background-size: cover;
        height: 200px;
    }
    .level-section6
    {
        background: url(Images/level/006.jpg);
        background-size: cover;
        height: 200px;
    }
    .w3-panel
    {
        background-color: yellow; 
    }
    </style>
</body>
</html>
