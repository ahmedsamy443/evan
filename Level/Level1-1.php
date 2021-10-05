<?php
session_start();
if (isset($_GET['path'])) {
    //Read the filename
    $filename = $_GET['path'];
    //Check the file exists or not
    if (file_exists($filename)) {

        //Define header information
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header("Cache-Control: no-cache, must-revalidate");
        header("Expires: 0");
        header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
        header('Content-Length: ' . filesize($filename));
        header('Pragma: public');

        //Clear system output buffer
        flush();

        //Read the size of the file
        readfile($filename);

        //Terminate from the script
        die();
    } else {
        echo "File does not exist.";
    }
} else
    echo "Filename is not defined."
    // $conn = new mysqli("localhost" , "root" , "", "test");

    // $sql="SELECT * FROM `tbl_stactivites` WHERE `st_id` =".$_SESSION['id']."";
    // $result=$conn->query($sql);
    // for ($set = array();$row = $result->fetch_assoc();$set[] = $row);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>المستوى الأول | الاهداف التعليمية</title>
    <link href="../w3.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

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
            float: left;
        }
    </style>
</head>

<body dir="rtl" onload="shide('id01','id3','id3','id4','id5')" style="font-family: 'Droid Arabic Kufi'; background-image: url('2back2.png'); background-repeat: no-repeat; background-size: cover">

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-black w3-left-align w3-large w3-black" style="width: 100%; height: 50px;">
            <!--a href="default.aspx" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>العب وتعلم</a-->
            <a href="../index.html" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" style="padding-top:0%;float:right">
                <img src="../Images/Dashboard/logo-scratch.png" style="width:40px;float:right" />
            </a>
            <!-- <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="../Dashboard.php">الرئيسية</a> -->
            <a href="../Dashboard.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" style="float:right;height:83px; padding-top: 9px !important;">الرئيسية</a>
            <a href="../index.html" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" style="float:right ;height:83px; padding-top: 8px !important;">خروج</a>
            <label id="LblName" Text="" style="float:left;height:83px; padding-top: 8px !important;">أهلا : <?php echo $_SESSION['name']; ?></label>
            <label id="LblName" Text="" style="float:left;height:83px; padding-top: 8px !important;"></label>

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
                    <button id="ahmed" class="w3-bar-item w3-button" style="font-size: 25px;">حل الألغاز </button>

                    <!--<button class="w3-bar-item w3-button " style="float:left;"><a href="javascript://" id="btnsolv"> حل الألغاز </a>  </button>-->
                    <button class="w3-bar-item w3-button " style="float:left;">| </button>
                    <button class="w3-bar-item w3-button " onclick="shide('id3','id2','id1','id4','id5')" style="float:left; font-size: 25px;">تمرن مع سكراتش </button>
                    <!-- <button class="w3-bar-item w3-button " onclick="document.getElementById('id03').style.display='block'"style="font-size: 25px;"> تمرن مع سكراتش </button> -->
                    <button class="w3-bar-item w3-button " style="float:left;">| </button>
                    <button class="w3-bar-item w3-button " onclick="shide('id2','id3','id1','id4','id5')" style="float:left; font-size: 25px;">شاهد وتعلم </button>
                    <button class="w3-bar-item w3-button " style="float:left;">| </button>
                    <!--<button class="w3-bar-item w3-button " onclick="shide('id01','id3','id3','id4','id5')" style="float:left;">الأهداف التعليمية</button>-->


                    <button class="w3-bar-item w3-button " onclick="document.getElementById('id01').style.display='block'" style="font-size: 25px;">الأهداف التعليمية </button>

                    <button class="w3-bar-item w3-button ">| </button>



                    <a href="#" class="w3-bar-item w3-button " style="float:left;"></a>
                    <a href="#" class="w3-bar-item w3-button w3-white" style="float:left; font-size: 25px;">المستوى الأول </a>
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
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
                <h2 style="padding-right: 40px">مستوى 1</h2>
            </header>



            <div id="London" class="w3-container city">
                <h1>الهدف العام</h1>
                <h2>الإلمام بأساسيات البرمجة بلغة سكراتش.</h2>

            </div>

            <div id="Paris" class="w3-container city">
                <h2>الأهداف التعليمية</h2>
                <h3>فى نهاية تدريس هذا المستوى ينبغي أن يكون التلميذ قادر على أن:-</h3>
                <br />
                <h3>
                    <ul>
                        <li>يذكر ماهية برنامج Scratch.
                        </li>
                        <li>يسرد مزايا برنامج Scratch.
                        </li>
                        <li>يشغل برنامج scratch.
                        </li>
                        <li>ينشئ ملف جديد ببرنامج scratch.
                        </li>
                        <li>يشرح مكونات الشاشة الافتتاحية لبرنامج Scratch.
                        </li>
                        <li>يحدد الفرق بين مجموعات البرمجة Scripts والمقاطع البرمجيةBlocks.
                        </li>
                        <li>يغير الواجهه الرئيسية لبرنامج scratch للغة العربية.
                        </li>
                        <li>يضيف كائنات Sprites جديدة للمشروع ببرنامج scratch.
                        </li>
                        <li>يستخدم شريط أدوات التحكم ببرنامج Scratch.
                        </li>
                        <li>يحفظ المشروع بإسم كملف ببرنامج Scratch.
                        </li>
                    </ul>
                </h3>

            </div>


            <div class="w3-container w3-light-grey w3-padding">
                <button class="w3-button w3-right w3-white w3-border" onclick="document.getElementById('id01').style.display='none'">
                    انهاء</button>
            </div>
        </div>
    </div>

    <div id="id02" class="w3-modal" dir='rtl' style="font-family: 'Droid Arabic Kufi';">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom">

            <div id="London" class="w3-container city">
                <br>

                <br>
                <h3 align="center">عليك الحصول علي 40 نقطة فأكثر. <br>
                    أمامك 5 دقائق لنهاية التحدي
                    <br>
                    <br>
                </h3>

            </div>
            <div class="w3-container w3-light-grey w3-padding">

                <button class="w3-button w3-right w3-white w3-border" onclick="document.getElementById('id02').style.display='none'" style="float:left; font-size: 20px;"> تراجع</button>
                <button type="submit" id="hamada" name="submit" class="w3-btn w3-blue " onclick="window.open('/evan/levels/quest1_new.php','_self')" style="float:left; font-size: 20px;"> هيا للتحدي</button>



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
                            المستوى الأول يبدأ بـ<span style="color: blue">لعبة بسيطة</span>
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
                        أمامك مقطع فيديو ، تستطيع من خلاله التعرف على المفاهيم الخاصة ببرنامج Scratch، والتعامل مع الكائنات.
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
                    <h2>تنبية<br>
                        عليكم الحصول علي 25 نقطة فأكثر .

                        <br>
                    </h2>
                    <h2> نشاط 1 : مهمة 1</h2>
                    <div>
                        <h2>1-فتح برنامج Scratch. </h2>
                        <h2>2- إنشاء ملف جديد.</h2>
                        <h2>3- تغيير لغة برنامج Scratch إلى اللغة العربية.</h2>
                        <h2>4- حذف الكائن (القط) من المنصة.</h2>
                        <h2>5- إدرج كائن الكرة (Ball-soccer).</h2>
                        <h2>6- إدرج الكائن هناء ( Hannah).</h2>
                        <h2>7- نسخ الكائن هناء ( Hannah) مرتين.</h2>
                        <h2>8- استخدم أداة التصغير لتصغير الكائن الكرة (Ball-soccer).</h2>
                        <h2>9- حفظ المشروع بإسم " تسديد كرة المرمي".</h2>
                        <div>

                        </div>
                    </div>


                    حدد الملف المطلوب <input type="file" id="filesc" name="file">
                    <!-- <input type="submit" name="submit" value="رفع النشاط" class="w3-btn w3-blue "> -->
                    
                      <button id="btn1"type="submit"  class="w3-btn w3-blue " style="font-size:30px;" >رفع النشاط  </button>  
                      <a style="margin-right: 200px;" href="Level1-1.php?path=مشروع 1 تسديد كرة المرمي.sb2"><button id="btn2"class="w3-btn w3-green" style="font-size:30px;"disabled>الاطلاع علي حل النشاط </button>
</a>
                        
                </div>





            </div>





        </div>

<div class="container">
        <div id="dispaly" class="w3-modal">
            <div class="w3-modal-content w3-card-4">
                <header class="w3-container w3-teal">
                    <span onclick="document.getElementById('dispaly').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <h3 style="margin-right: 400px;">المستوي الاول </h3>
                    
                    <table class="table">
                        <thead>
                            <tr class="row" >
                                <th class="col-3" >السوال</th>
                                <th class="col-3" >اجابة الصيحية</th>
                                <th class="col-3" >اجابة الطالب</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1. يعتمد برنامج scratch على كائنات تسمى Backdrop.</td>
                                <td>خطا</td>
                                <td>صح</td>
                            </tr>
                           
                        </tbody>
                    </table>
                            
            </div>

        </div>
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

        $(function() {


            document.getElementById("ahmed").addEventListener("click", function() {

                //$(this).prop("disabled",true)
                $.ajax({

                    url: "http://localhost/evan/Levels/getnswer.php?getdata=" + 1,
                    type: "get",
                    success: function(res) {
                        console.log(res)

                        if (res != "data not found") {
                            var data = JSON.parse(res);
                            document.getElementById('dispaly').style.display = 'block'

                        } else {

                            $("#id02").css("display", "block")


                        }




                    }
                })


            })
        });

        // get the item 
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
        document.getElementById("btn1").addEventListener("click", function() {
            let file_data = $("#filesc").prop("files")[0];
            let form_data = new FormData();
            form_data.append("file", file_data);
            $.ajax({
                url: "http://localhost/evan/level/upload.php",
                dataType: 'script',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(res) {
                    if (res == "1") {
                        Swal.fire("تمت العملية بنجاح")
                        document.getElementById("btn2").disabled = false;

                    } else {
                        Swal.fire("حدث شي حطا ")

                    }
                }

            })


        })
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/61374393d6e7610a49b40b75/1fevtvu75';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <!--End of Tawk.to Script-->
</body>

</html>
<!-- <script>
      $(document).ready(function(){
          $("#btn1").click(function(){
            $("#btn1").attr('disabled',false); 
            $("#btn2").attr('disabled',true); 
          });
          $("#btn2").click(function(){
            $("#btn2").attr('disabled',false); 
            $("#btn1").attr('disabled',true); 
          });


      });
</script> -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(function() {

        $(document).on("click", "#btnsolv", function() {


            var currattem = 0;
            var x
            $.ajax({
                type: "POST",
                url: "../levels/quest1.aspx/getst_Level1_remaining_time",
                data: "{'St_Id': '<%= Session("
                st_code ")%>', 'Q_Id':'1'}",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                async: false,
                success: function(response) {
                    // console.log("lourasdasd"+response)

                    remainingTime = response.d[0];
                    var countDownDate = new Date(new Date().getTime() + remainingTime * 60000);
                    var now = new Date().getTime();
                    //alert(now)
                    // Find the distance between now and the count down date
                    var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds
                    //var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    //var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    seconds = Math.floor((distance % (1000 * 60)) / 1000);





                    currattem = response.d[1];

                    if (currattem >= 3) {

                        window.location.href = "../levels/quest1sol.aspx?quiz_id=1";

                    } else {
                        Swal.fire({
                            title: '<strong>تنبيه</strong>',
                            icon: 'warning',
                            html: 'زد حصيلتك العلمية بالتحدى, ' +
                                '<br />' +
                                'وشارك أصدقائك الاثارة والتشويق' + '<br />' +
                                'أمامك ' + '<br /><div class="swal2-icon swal2-success swal2-icon-show"><div class="swal2-icon-content" style="font-size: 2.5em;">' + minutes + ":" + seconds + '</div></div><br />' + ' دقائق لنهاية التحدى',
                            showCloseButton: true,
                            showCancelButton: true,
                            focusConfirm: false,
                            confirmButtonText: 'هيا للتحدى  ',
                            confirmButtonAriaLabel: 'Thumbs up, great!',
                            cancelButtonText: 'تراجع',
                            cancelButtonAriaLabel: 'Thumbs down',
                        }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */

                            if (result.isConfirmed) {
                                window.location.href = "../levels/quest1.aspx?quiz_id=1";
                            }
                        })


                    }

                },
                failure: function(response) {
                    alert("failure");
                },
                error: function(response) {
                    alert(response.responseText);
                }
            });

        })

    });
</script>