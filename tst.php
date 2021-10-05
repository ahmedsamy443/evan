
<?php
session_start();
$conn = new mysqli("localhost" , "root" , "", "test");

    $sql="SELECT * FROM `tbl_studentdata` WHERE `St_Id` =".$_SESSION['id']."";
    $result = $conn->query($sql) or die($conn->error);
    while($row=$result->fetch_assoc()){
        
        $st_Level = $row['st_Level'];
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
                
                <li><a href="../logout.aspx" class="w3-bar-item w3-button w3-green">خروج</a></li>
                
                <li><a href="#about" style="font-size: large;"> عن البيئة </a></li>
                <li><a href="#contact"style="font-size: large;">تواصل معنا</a></li>
                
                <li><a href="#inst"style="font-size: large;">التعليمات</a></li>
                <li><a href="#quest"style="font-size: large;">القواعد</a></li>
                <li><a href="#mainaid"style="font-size: large;">الهدف العام</a></li>
                <li><a href="../index.html"style="font-size: large;" >الرئيسية</a></li>
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
                        <h2 style="color: white;font-family: 'Droid Arabic Kufi' ;font-size:large;">

                            البرمجة بلغة سكراتش

                        </h2>
                        <p class=" white-text" style="direction:rtl">
                            <div >
                                <h3 style="color:white;font-family:'Arial, Helvetica, sans-serif';font-size:large">
                                    أعزائي المبرمجين الصغار هيا لتضعوا خطواتكم الأولي فى عالم البرمجة بواسطة محفزات الألعاب.
                                </h3>
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
    <!-- <div>
        <br><br>
       <center> <h2 style="margin:auto;">تحدى اصدقائق وشاركهم النتائج</h2></center><br><br>
       
       <div style="margin:auto;width:50%;">
       <h3 style="width:25%;display: inline;" >لوحه الصداره</h3>

           <select name="sel" id="" value="choose"style="width:70%;display:inline;height:20px;">
            <option value="egypt"></option>
             <option value="egypt"><button style="background:black"id="btn1">المستوى الاول</button></option>
             <option value="irqe">المستوى الثانى</option>
             <option value="syrai">المستوى الثالث</option>
             <option value="irqe">المستوى</option>
             <option value="syrai">المستوى</option>
         </select>
        
        </div>
    </div>
    <br><br>
    <center><div style="display: flex;width:80%;height:650px">

        <div style=" background-color: #f1f1f1;width:580px;height:650px">
            <h3>الطلاب</h3><hr><br>
            <img src="Images/students/5.jpg" />
        </div>
        <div style=" background-color: #f1f1f1;width:580px;height:600px">
            <h3>المجموعات</h3><hr>
        </div>
</div></center>
    
    
           -->

    <div class="section">
        
        <div class="row" >
            <div class="section-header text-center" >
                <h1>تحد أصدقائك وشاركهم النتائج</h1>

                <h2>لوحة الصدارة</h2>
               
            </div>
     

            
                            <ul class="nav nav-tabs" style="padding-right: 200px;">
                                    <li class="<%= IIf(xIndx = 0, "active", "")%>" style="float: right;"><a data-toggle="tab" href="#tab<%= xIndx+1%>"></a></li>
                                
                            </ul>
                            <div class="tab-content">
                               
                                    <div id="tab<%= xIndxd + 1%>" class="tab-pane fade in <%= IIf(xIndxd = 0, "active", "")%>" >
                                        <div class="row" style="padding: 0 20px;">
                                    
                                                    <div class="col-lg-4" style="float: right;">
                                                        <div class="card">
                                                            <div class="additional">
                                                                <div class="user-card">
                                                                    
                                                                    <div class="points center">
                                                                         نقطة
                                                                    </div>
                                                                    <svg width="110" height="110" viewBox="0 0 250 250" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="title desc" class="center">
                                                                        <title id="title">Teacher</title>
                                                                        <desc id="desc">
                                                                            Cartoon of a Caucasian woman smiling, and wearing black glasses and a purple shirt with white collar drawn by Alvaro Montoro.
                                                                        </desc>
                                                                        <img src="Images/students/5.jpg" />
                                                                        <style>
                                                                            .skin {
                                                                                fill: #eab38f;
                                                                            }

                                                                            .eyes {
                                                                                fill: #1f1f1f;
                                                                            }

                                                                            .hair {
                                                                                fill: #2f1b0d;
                                                                            }

                                                                            .line {
                                                                                fill: none;
                                                                                stroke: #2f1b0d;
                                                                                stroke-width: 2px;
                                                                            }
                                                                        </style>
                                                                        <defs>
                                                                            <clipPath id="scene">
                                                                                <circle cx="125" cy="125" r="115" />
                                                                            </clipPath>
                                                                            <clipPath id="lips">
                                                                                <path d="M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z" />
                                                                            </clipPath>
                                                                        </defs>
                                                                        <circle cx="125" cy="125" r="120" fill="rgba(0,0,0,0.15)" />
                                                                        <g stroke="none" stroke-width="0" clip-path="url(#scene)">
                                                                            <rect x="0" y="0" width="250" height="250" fill="#b0d2e5" />
                                                                            <g id="head">
                                                                                <path fill="none" stroke="#111111" stroke-width="2" d="M 68,103 83,103.5" />
                                                                                <path class="hair" d="M 67,90 67,169 78,164 89,169 100,164 112,169 125,164 138,169 150,164 161,169 172,164 183,169 183,90 Z" />
                                                                                <circle cx="125" cy="100" r="55" class="skin" />
                                                                                <ellipse cx="102" cy="107" rx="5" ry="5" class="eyes" id="eye-left" />
                                                                                <ellipse cx="148" cy="107" rx="5" ry="5" class="eyes" id="eye-right" />
                                                                                <rect x="119" y="140" width="12" height="40" class="skin" />
                                                                                <path class="line eyebrow" d="M 90,98 C 93,90 103,89 110,94" id="eyebrow-left" />
                                                                                <path class="line eyebrow" d="M 160,98 C 157,90 147,89 140,94" id="eyebrow-right" />
                                                                                <path stroke="#111111" stroke-width="4" d="M 68,103 83,102.5" />
                                                                                <path stroke="#111111" stroke-width="4" d="M 182,103 167,102.5" />
                                                                                <path stroke="#050505" stroke-width="3" fill="none" d="M 119,102 C 123,99 127,99 131,102" />
                                                                                <path fill="#050505" d="M 92,97 C 85,97 79,98 80,101 81,104 84,104 85,102" />
                                                                                <path fill="#050505" d="M 158,97 C 165,97 171,98 170,101 169,104 166,104 165,102" />
                                                                                <path stroke="#050505" stroke-width="3" fill="rgba(240,240,255,0.4)" d="M 119,102 C 118,111 115,119 98,117 85,115 84,108 84,104 84,97 94,96 105,97 112,98 117,98 119,102 Z" />
                                                                                <path stroke="#050505" stroke-width="3" fill="rgba(240,240,255,0.4)" d="M 131,102 C 132,111 135,119 152,117 165,115 166,108 166,104 166,97 156,96 145,97 138,98 133,98 131,102 Z" />
                                                                                <path class="hair" d="M 60,109 C 59,39 118,40 129,40 139,40 187,43 189,99 135,98 115,67 115,67 115,67 108,90 80,109 86,101 91,92 92,87 85,99 65,108 60,109" />
                                                                                <path id="mouth" fill="#d73e3e" d="M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z" />
                                                                                <path id="smile" fill="white" d="M125,141 C 140,141 143,132 143,132 143,132 125,133 125,133 125,133 106.5,132 106.5,132 106.5,132 110,141 125,141 Z" clip-path="url(#lips)" />
                                                                            </g>
                                                                            <g id="shirt">
                                                                                <path fill="#8665c2" d="M 132,170 C 146,170 154,200 154,200 154,200 158,250 158,250 158,250 92,250 92,250 92,250 96,200 96,200 96,200 104,170 118,170 118,170 125,172 125,172 125,172 132,170 132,170 Z" />
                                                                                <path id="arm-left" class="arm" stroke="#8665c2" fill="none" stroke-width="14" d="M 118,178 C 94,179 66,220 65,254" />
                                                                                <path id="arm-right" class="arm" stroke="#8665c2" fill="none" stroke-width="14" d="M 132,178 C 156,179 184,220 185,254" />
                                                                                <path fill="white" d="M 117,166 C 117,166 125,172 125,172 125,182 115,182 109,170 Z" />
                                                                                <path fill="white" d="M 133,166 C 133,166 125,172 125,172 125,182 135,182 141,170 Z" />
                                                                                <circle cx="125" cy="188" r="4" fill="#5a487b" />
                                                                                <circle cx="125" cy="202" r="4" fill="#5a487b" />
                                                                                <circle cx="125" cy="216" r="4" fill="#5a487b" />
                                                                                <circle cx="125" cy="230" r="4" fill="#5a487b" />
                                                                                <circle cx="125" cy="244" r="4" fill="#5a487b" />
                                                                                <path stroke="#daa37f" stroke-width="1" class="skin hand" id="hand-left" d="M 51,270 C 46,263 60,243 63,246 65,247 66,248 61,255 72,243 76,238 79,240 82,243 72,254 69,257 72,254 82,241 86,244 89,247 75,261 73,263 77,258 84,251 86,253 89,256 70,287 59,278" />
                                                                                <path stroke="#daa37f" stroke-width="1" class="skin hand" id="hand-right" d="M 199,270 C 204,263 190,243 187,246 185,247 184,248 189,255 178,243 174,238 171,240 168,243 178,254 181,257 178,254 168,241 164,244 161,247 175,261 177,263 173,258 166,251 164,253 161,256 180,287 191,278" />
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div class="more-info">
                                                                    <h1>المركز </h1>

                                                                    <div class="coords">
                                                                        <span><h3></h3></span>

                                                                    </div>
                                                                    <div class="coords">
                                                                        <span><h4></h4></span>
                               
                                                                    </div>
                                                                    <div class="stats">
                                                                        <div>
                                                                            <div class="title">كأس</div>
                                                                            <i class="fa fa-trophy" style="font-size: 70px;"></i>
                                                                            <div class="value">2</div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="title">مستوى</div>
                                                                            <i class="fa fa-gamepad"></i>
                                                                            <div class="value">27</div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="title">أنشطة</div>
                                                                            <i class="fa fa-group"></i>
                                                                            <div class="value">123</div>
                                                                        </div>
                                

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="general">
                                                                <h1> </h1>
                                                                <p>
                            
                                                                </p>
                                                                <span class="more">المزيد</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                            

                                        </div>
                                    </div>
                               
                            </div>
             
                   




        </div>
            
            
            
            
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
                    <a class="main-button icon-button" href="#">تواصل معنا</a>
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
                <div class="col-md-6">
                    <div class="footer-logo">
                        <a class="logo" href="index.html">
                            <img src="./img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
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
                $("p").css({"background-color": "yellow", "font-size": "200%"});
});

        })
    </script>

</body>
</html>
