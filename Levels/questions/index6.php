<?php
session_start();

    $all_data = file_get_contents('data.json');
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title> التطبيق البعدي</title>

    <script src="https://kit.fontawesome.com/28ae82ec32.js"></script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link href="../w3.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../Fonts/EARLY_ACCESS.css" rel="stylesheet" />
    <link href="LevelStyle.css" rel="stylesheet" />
    <link href="css/Bootstratp.min.css" rel="stylesheet" />
    <link href="../css/loading.css" rel="stylesheet" /> -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <!-- <script src="../js/CountDownTimer.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
       .navbar {
            border: 1px solid black;
            width: 1300px;
            height: 85px;
            margin-right: 120px;
            text-align: center;
            margin-top: 20px;
            margin-bottom:20px;
        }

        .ques,
        #questions,
        #question2 {
            width: 80%;
            height: 450;
            border: 1px solid black;
            background-color: #f7f3e3;
            padding: 20px;
            font-weight: bold;
            font-size: 20px;
            position: relative;
            margin-right: 130px;
        }
        .ques{
            display: none;
            overflow: hidden;
        }
        .show{
            display: block;
        }
    </style>

</head>

<body dir="rtl">
   

    <div class="navbar" style="background-color:white;">
        <div class="row" style="padding: 15px;">
            <div style="color:#08089e;font-family:Verdana;font-weight:bold;font-size:25px;" class="col-sm-3" id="timer"> المدة الزمنية : <span id="lblCtime" style="color:08089e;font-family:Verdana;font-weight:bold;font-size:25px;"></span> </div>
            <div style="color:#08089e;font-family:Verdana;font-weight:bold;font-size: 27px;background-color:#9999996e " class="col-sm-6"> الاختبار التحصيلى للمعارف المرتبطة بمهارات البرمجة بلغة سكراتش
            </div>
            
            <div class="col-sm-3">
                <div style="margin-top: 10px;" class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="40"></div>
                </div>
            </div>

        </div>

    </div>
    <?php
    foreach (json_decode($all_data) as $key => $data) {
    ?>
        <div  class="ques">
            <div id="UpdatePanel3">

                <div id="Q1panel">
                    <div class="text-right" style="padding-right: 1px">
                        <h1 style="font-weight: bold; "> السؤال الأول : اختر الإجابة الصحيحة مما يلى: </h1>
                    </div>
                    <div class="center">
                        <div>
                            <h3 style="color: #ef03ff; font-size:30px;font-weight: bold;" id="txt-quest"><?php echo  $data->id ."-". $data->question  ?></h3>
                            <input type="text" value="<?php echo $data->id ?>" hidden id="progress">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" data-question-id = "<?php echo $data->id;  ?> "  name="radio<?php echo $key;?>" value="<?php echo $data->ansA;  ?>">
                            <label style="font-size: 25px;margin-right:10px" id="a" class="form-check-label"> <?php echo $data->ansA;  ?> </label>
                        </div><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" data-question-id = "<?php echo $data->id;  ?> " name="radio<?php echo $key;?>" value="<?php echo $data->ansB;  ?>">
                            <label style="font-weight: bold;font-size: 25px;margin-right:10px" id="b" class="form-check-label"><?php echo $data->ansB;  ?> </label>
                        </div><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" data-question-id = "<?php echo $data->id;  ?> " name="radio<?php echo $key;?>" value="<?php echo $data->ansC;  ?>">
                            <label style="font-weight: bold;font-size: 25px;margin-right:10px" id="c" class="form-check-label"><?php echo $data->ansC;  ?> </label>
                        </div><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" data-question-id = "<?php echo $data->id;  ?> " name="radio<?php echo $key;?>" value="<?php echo $data->ansD;  ?>">
                            <label style="font-weight: bold ;font-size: 25px;margin-right:10px" ; id="d" class="form-check-label"><?php echo $data->ansD;  ?> </label>
                        </div><br>
                    </div>
                </div>

            </div>
            <div class="buttonshow">
                <button class='previous' style='float:right' class='btn btn-primary btn-lg'>السابق </button>
                <button class="next" style="margin-right: 100px;" class="btn btn-success btn-lg">التالى </button>
            </div>
        </div>

    <?php
    }
    ?>
    <div class="ques" >
        <div id="UpdatePanel3">
            <div id="Q1panel">
                <div class="text-right" style="padding-right: 1px">
                    <h1 style="font-weight: bold;">السوال الثاني </h1>
                </div>
                <div class="center">
                    <div>
                        <h3 style="color: #ef03ff; font-size:30px;font-weight: bold;">رتب مشروع برمجة اعماق البحار </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6"><img src="../images/سؤال28.gif"alt="this slowpoke moves" style="width: 500px; height:400px" />
                </div>
                <div class="col-sm-6">
                    <table>
                        <tr>
                            <td style="padding: 10px;"><input class="arrange-inputs" type="text" data-index="0"  size="1"></td>
                            <td><img src="../images/exam_images/24.jpg" alt="this slowpoke moves" ></td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input class="arrange-inputs" type="text" data-index="1" size="1"></td>
                            <td><img src="../images/exam_images/51.jpg" alt="this slowpoke moves" ></td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="2" class="arrange-inputs"></td>
                            <td><img src="../images/exam_images/52.jpg" alt="this slowpoke moves" ></td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="3" class="arrange-inputs"></td>
                            <td><img src="../images/exam_images/53.jpg" alt="this slowpoke moves" ></td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="4" class="arrange-inputs"></td>
                            <td><img src="../images/exam_images/31.jpg" alt="this slowpoke moves" ></td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="5" class="arrange-inputs"></td>
                            <td><img src="../images/exam_images/55.jpg" alt="this slowpoke moves" ></td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="6" class="arrange-inputs"></td>
                            <td><img src="../images/exam_images/56.jpg" alt="this slowpoke moves" ></td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="7" class="arrange-inputs"></td>
                            <td><img src="../images/exam_images/57.jpg" alt="this slowpoke moves" ></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="buttonshow">
                <button class='previous' style='float:right' class='btn btn-primary btn-lg'>السابق </button>
                <button class="next" style="margin-right: 100px;" class="btn btn-success btn-lg">التالى </button>
        </div>
    </div>
    <div class="ques">
        <div id="UpdatePanel3">
            <div id="Q1panel">
                <div class="text-right" style="padding-right: 1px">
                    <h1 style="font-weight: bold;"> : السوال الثاني </h1>
                </div>
                <div class="center">
                    <div>
                        <h3 style="color: #ef03ff; font-size:30px;font-weight: bold;">رتب اللبنات الاتية لتصميم حوار القط سكراتش على فترات زمنية مختلفة باستخدام اوامر الرسائل المختلفة ليظهر الاتى وذلك عند :</div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6"><img  src="../images/gggggggggggggg.PNG" alt="this slowpoke moves" style="width: 500px; height:400px;            background-color: #f7f3e3;
            background-color: #f7f3e3;" />
                </div>
                <div class="col-sm-6">
                    <table>
                        <tr>
                            <td style="padding: 10px;"><input class="ahmed11" type="text" id="hello1" data-index="0"  size="1"></td>
                            <td><img src="../images/exam_images/81.jpg" alt="this slowpoke moves" ></td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input class="ahmed11" type="text" data-index="1" size="1"></td>
                            <td><img src="../images/exam_images/75.jpg" alt="this slowpoke moves"> </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="2" class="ahmed11"></td>
                            <td><img src="../images/exam_images/39.jpg" alt="this slowpoke moves"> </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="3" class="ahmed11"></td>
                            <td><img src="../images/exam_images/77.jpg" alt="this slowpoke moves"> </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="4" class="ahmed11"></td>
                            <td><img src="../images/exam_images/78.jpg" alt="this slowpoke moves" ></td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="5" class="ahmed11"></td>
                            <td><img src="../images/exam_images/80.jpg" alt="this slowpoke moves"> </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="6" class="ahmed11"></td>
                            <td><img src="../images/exam_images/82.jpg" alt="this slowpoke moves"> </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="7" class="ahmed11"></td>
                            <td><img src="../images/exam_images/73.jpg" alt="this slowpoke moves"> </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="buttonshow">
                <button class='previous' style='float:right' class='btn btn-primary btn-lg'>السابق </button>
                <button class="next" style="margin-right: 100px;" class="btn btn-success btn-lg">التالى </button>
        </div>
<script>
window.addEventListener("load",function(){

    document.getElementsByClassName("progress-bar")[0].innerHTML=document.getElementById('progress').value;

})

</script>
    <script src="main6.js"></script>
</body>
</html>