
<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>المستوى الرابع | الاهداف التعليمية</title>
    <link href="../w3.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../Fonts/EARLY_ACCESS.css" rel="stylesheet" />
    <link href="LevelStyle.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <style>
        w3-right {
            float: right !important;
            text-align: right;
        }
        .w3-bar .w3-bar-item {
            float:left;
        }
    </style>
</head>

<body dir="rtl" onload="shide('id01','id3','id3','id4','id5')" style="font-family: 'Droid Arabic Kufi'; background-image: url('2back2.png'); background-repeat: no-repeat; background-size: cover">
    
    <!-- Navbar (sit on top) -->
    <div class="w3-top" >
            <div class="w3-bar w3-theme-black w3-left-align w3-large w3-black" style="width: 100%; height: 50px;">
                <!--a href="default.aspx" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>العب وتعلم</a-->
                <a href="../index.html" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" style="padding-top:0%;float:right">
                    <img src="../Images/Dashboard/logo-scratch.png" style="width:40px;float:right" />
                </a>
                <!-- <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="../Dashboard.php">الرئيسية</a> -->
                    <a href="../Dashboard.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" style="float:right;height:83px; padding-top: 9px !important;" >الرئيسية</a>
                <a href="../index.html" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" style="float:right ;height:83px; padding-top: 8px !important;">خروج</a>
                <label id="LblName"  Text="" style="float:left;height:83px; padding-top: 8px !important;">أهلا :  <?php echo $_SESSION['name']; ?></label>
                <label id="LblName"  Text="" style="float:left;height:83px; padding-top: 8px !important;"><?php echo $_SESSION['img']; ?></label>

            </div>
        </div>
    <!-- <div style="width: 100%; height: 50px; background-color: black;"> 
        <div class="w3-right ">
            <button class="w3-bar-item w3-button " style="font-size:25px; color: cornsilk;"> <a href="#" style="text-decoration: none;" ></a>المعلمة </button>
             <button class="w3-bar-item w3-button " style="font-size:25px; color: cornsilk;"><a href="../Dashboard.html" style="text-decoration: none;">الرئيسية</a> </button>
             <button class="w3-bar-item w3-button w3-green " style="font-size:25px; color: cornsilk;"><a href="../index.html" style="text-decoration: none;">خروج</a> </button>
             <label id="LblName"  Text="" style="float:right ;height:83px; padding-top: 8px !important;">أهلا :  </label>


         </div>
       </div> 
     -->
    <div class="w3-top" style="position: absolute; top: 50px;">
        
         
        <div>
            <div class="w3-bar w3-green w3-padding w3-card text-center w3-center w3-centered ">
                <!-- Right-sided navbar links. Hide them on small screens -->
                <div class="w3-right ">
                <!-- <button class="w3-bar-item w3-button " onclick="window.open('/evan/levels/quest1_new.php','_self')" style="font-size: 25px;"> -->
                    <button class="w3-bar-item w3-button " onclick="document.getElementById('id02').style.display='block'"style="font-size: 25px;">حل الألغاز </button>
                    
                    <!--<button class="w3-bar-item w3-button " style="float:left;"><a href="javascript://" id="btnsolv"> حل الألغاز </a>  </button>--> 
                    <button class="w3-bar-item w3-button " style="float:left;">| </button>
                    <button class="w3-bar-item w3-button " onclick="shide('id3','id2','id1','id4','id5')" style="float:left; font-size: 25px;">تمرن مع سكراتش </button>
                    <!-- <button class="w3-bar-item w3-button " onclick="document.getElementById('id03').style.display='block'"style="font-size: 25px;"> تمرن مع سكراتش </button> -->
                    <button class="w3-bar-item w3-button " style="float:left;">| </button>
                    <button class="w3-bar-item w3-button " onclick="shide('id2','id3','id1','id4','id5')" style="float:left; font-size: 25px;">شاهد وتعلم </button>
                    <button class="w3-bar-item w3-button " style="float:left;">| </button>
                   <!--<button class="w3-bar-item w3-button " onclick="shide('id01','id3','id3','id4','id5')" style="float:left;">الأهداف التعليمية</button>-->
                    

                    <button class="w3-bar-item w3-button " onclick="document.getElementById('id01').style.display='block'"style="font-size: 25px;">الأهداف التعليمية   </button>

                    <button class="w3-bar-item w3-button ">| </button>

                    

                    <a href="#" class="w3-bar-item w3-button " style="float:left;"></a>
                    <a href="#" class="w3-bar-item w3-button w3-white" style="float:left; font-size: 25px;">المستوى الرابع </a>
                </div>
            </div>
        </div>
        <br />
        <br />

        
    </div>
    <br />
    <br />
    
    <!--معاينة الأهداف-->

    <div id="id01" class="w3-modal" dir='rtl' style="font-family: 'Droid Arabic Kufi';">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom">
            <header class="w3-container w3-blue">
                <span onclick="document.getElementById('id01').style.display='none'"
                    class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
                <h2 style="padding-right: 40px">مستوى 4</h2>
            </header>

           

            <div id="London" class="w3-container city">
                <h3>الهدف العام</h3>
                <h4>الإلمام بأساسيات البرمجة بلغة سكراتش.</h4>

            </div>

            <div id="Paris" class="w3-container city">
            <h2>الأهداف التعليمية</h2>
                <h2>فى نهاية تدريس هذا المستوى ينبغي أن يكون التلميذ قادر على أن:-</h2>
                <br />
               <h2>
                   <ul>
                   
                        <li>
                            يُعرف مفهوم المظاهر المختلفة للكائنات
                        
                        
                        </li>                    
                        <li>.يٌحدد مجموعة المظاهر Looks فى برنامج سكراتش.
                        </li>
                        <li>	يَستخدم مجموعة لبنات المظاهر فى عمل قصص تفاعلية .</li>
                        <li>	يٌرتب مجموعة لبنات المظاهر فى مشروع فى برنامج سكراتش. .</li>
                                                                                    
                   
                   </ul>
                   </h2>

            </div>

        
            <div class="w3-container w3-light-grey w3-padding">
                <button class="w3-button w3-right w3-white w3-border"
                    onclick="document.getElementById('id01').style.display='none'">
                    انهاء</button>
            </div>
        </div>
    </div>

    <div id="id02" class="w3-modal" dir='rtl' style="font-family: 'Droid Arabic Kufi';">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom">

            <div id="London" class="w3-container city">
            <br>
            
            <br>
                <h3 algin="center">عليك الحصول علي 20 نقطة فأكثر. <br>
            أمامك 5 دقائق لنهاية التحدي
            <br>
            <br>
            </h3>

            </div> 
            <div class="w3-container w3-light-grey w3-padding">
            
            <button class="w3-button w3-right w3-white w3-border" onclick="document.getElementById('id02').style.display='none'" style="float:left; font-size: 20px;" > تراجع</button> 
            <button type="submit" name="submit" class="w3-btn w3-blue " onclick="window.open('/evan/levels/quest4_new.php','_self')" style="float:left; font-size: 20px;"> هيا للتحدي</button>    
             

    
            </div>
        </div>
    </div>
    <!-- <div id="id03" class="w3-modal" dir='rtl' style="font-family: 'Droid Arabic Kufi';">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom">

            <div id="London" class="w3-container city">
            <br>
            <br>
            <h3>زد حصيلتك العلمية بالتحدي .<br>
            و شارك أصدقائك الاثارة و التشويق .<br>
            عليكم الحصول علي 25 نقطة فأكثر .
            <br>
            <br>
            </h3>

            </div> 
            <div class="w3-container w3-light-grey w3-padding">
            
            <button type="submit" name="submit" class="w3-btn w3-blue " onclick="shide('id3','id2','id1','id4','id5')" style="float:left; font-size: 20px;"> تمرن مع سكراتش</button>    
             
            <button class="w3-button w3-right w3-white w3-border" onclick="document.getElementById('id03').style.display='none'" style="float:left; font-size: 20px;"> تراجع</button>

    
            </div>
        </div>
    </div> -->
    <script>
        document.getElementsByClassName("tablink")[0].click();

        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].classList.remove("w3-light-grey");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.classList.add("w3-light-grey");
        }
    </script>

    <!--نهاية معاينة الأهداف-->

    
    <br />
    <div class="row">
        <div class="w3-col s3" style="padding-top: 65px;">
            <div class="card" style="background-image: url('Wesam.png'); background-repeat: no-repeat; padding-right: 55px; background-size: cover; width:342px; height: 377px;">
                <br />
                <br />
                
               
            </div>
             
            
              
            

        </div>
        
        
        <div class="w3-col s9">
            <div class="card">
                
                <div id="id1" class="fakeimg" style="height: 200px; display: none">
                    <div class="w3-cell-row">
                        <div class="w3-container  w3-cell">
                            مرحباً بك 
                        <br />
                            المستوى الرابع يبدأ بـ<span style="color: blue">لعبة بسيطة</span>
                            قم بإتمامها قبل البدء في المستوى<br />

                            <br />

                            <a class="w3-btn w3-blue" onclick="shide('id5','id2','id3','id1','id4')">ابدأ اللعب</a>
                        </div>
                        <div class="w3-container  w3-cell">
                        </div>
                    </div>

                </div>

               
                <div id="id2" class="fakeimg w3-center w3-centered" style="height: 200px">

                   <br />
                    <h3>
                    أمامك مقطع فيديو، تستطيع من خلالة التعرف على كيفية استخدام مجموعة المظاهر Looks  في إنتاج قصة تفاعلية.
                    </h3>
            
                    <div class="w3-row">


                        <div class="w3-col l10 m6 s6 ">
                            
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/gOcrdV44lJI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                                                

                    </div>
                    <div class="w3-row w3-center">
                        <h3>الدرس</h3>
                    </div>
                    <div class="w3-row">
                        <div class="w3-col l10 m6 s6">
                                                    
                            <iframe width="560" height="315" src="https://online.fliphtml5.com/ckgzq/kvku/?fbclid=IwAR08yn-itRo2mpO1lvQwYQl-ZUMqyzSM0txOLDXSvb0TTEYsbh66bRAU-18#p=1" frameborder="0" allowfullscreen="true"></iframe>
                                                                  
                            
                        </div>
                    </div>
             </div>
               

                <div id="id3" class="fakeimg" style="height: 200px; display: none">
                    
                    <br />

                    <h3>الآن : وبعد أن شاهدت مقطع الفيديو ، بإمكانك تنفيذ المهمات الآتية بالتعاون مع مجموعتك:</h3>
                    <br />
                    نشاط 4 : مهمة 4 . عليك الحصول علي 55 نقطة فأكثر .أمامكم 40 دقيقة لنهاية التحدي.
                    <div >
                    <h1>
                            أولاً:قم بتصميم حوار نصى بين Averyو Mori على فترات زمنية مختلفة وذلك عند الضغط على الكائن بإستخدام اوامر الرسائل المختلفة ليظهر الأتى :
                        </h1>
                                                    <h2>
                                                        الكائن Avery ..<br />
                                1.	أضف مؤثر صوتى يناسب المشروع.<br />
                                2.	أضف أمر الانتظار.<br />
                                3.	" اسمى هدير  "<br />
                                4.	" أنا فى الصف الأول الإعدادى".<br />
                                5.	" عمرى 12 عام"<br />
                                6.	" أحب استخدام الإنترنت".<br />
                                7.	" أود أن أكون مهندسة".<br />
                                8. "غير نمط شكل الكائن وعدل قيم التأثير".<br />
                                
                                                    </h2>
                                                    <h2>
                                                        كائن Mori:<br />
                                1.	ظهور الكائن Mori.<br />
                                2.أضف مؤثر صوتى يناسب المشروع. <br />
                                2.	أضف أمر الانتظار. <br />
                                3.	"مرحبا بك"".<br />
                                4.	" اسمى أحمد  "<br />
                                5.	" عمرى 12 عام"<br />
                                6.	"أحب قراءة القصص والرسم".<br />
                                7.	" أود أن أكون طبيباً".<br />
                                .8. غير نمط شكل الكائن وعدل قيم التأثير.<br />
                                
                                                    </h2>
                                                    <h2>
                                      ثانيا:اختبر المشروع ثم قم بحفظ المشروع باسم “حوار نصي”.</h2>
                        
                    </div>
                   
                    
                    <form action="upload.php" method="post" enctype="multipart/form-data">
حدد الملف المطلوب                        <input type="file" name="file">
                        <!-- <input type="submit" name="submit" value="رفع النشاط" class="w3-btn w3-blue "> -->
                        <pre>
                        <button id="btn1"type="submit" name="submit" class="w3-btn w3-blue " style="font-size:30px;" >رفع النشاط  </button>                              <button id="btn2"type="submit" name="submit" class="w3-btn w3-green" style="font-size:30px;"disabled>الاطلاع علي حل النشاط </button>
                        
                        
                        </pre>
                    </form>
                </div>

                
                
                
               
            </div>

       



    </div>

    <script>
        function shide(divid1, divid2, divid3, divid4, divid5) {
            var x = document.getElementById(divid1);
            var y = document.getElementById(divid2);
            var z = document.getElementById(divid3);
            var q = document.getElementById(divid4);
            var w = document.getElementById(divid5);

            x.style.display = "block";
            y.style.display = "none";
            z.style.display = "none";
            q.style.display = "none";
            w.style.display = "none";

            //if (x.style.display === "none") {
            //    x.style.display = "block";
            //} else {
            //    x.style.display = "none";
            //}
        }
    </script>

    
    <script>
        function qhide(q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) {
            var a = document.getElementById(q1);
            var b = document.getElementById(q2);
            var c = document.getElementById(q3);
            var d = document.getElementById(q4);
            var e = document.getElementById(q5);
            var f = document.getElementById(q6);
            var g = document.getElementById(q7);
            var h = document.getElementById(q8);
            var i = document.getElementById(q9);
            var j = document.getElementById(q10);

            a.style.display = "block";
            b.style.display = "none";
            c.style.display = "none";
            d.style.display = "none";
            e.style.display = "none";
            f.style.display = "none";
            g.style.display = "none";
            h.style.display = "none";
            i.style.display = "none";
            j.style.display = "none";           
        }
    </script>
          <!--Start of Tawk.to Script-->
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
<!--End of Tawk.to Script-->
</body>

</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

    if(document.getElementById("btn1").textContent==='1'){
            
            for (let i = 1; i <= 2; i++) {
                document.getElementById("btn"+i).disabled = true;
            }
        }else{
            document.getElementById("btn1").disabled = false;
        }
 

</script>
