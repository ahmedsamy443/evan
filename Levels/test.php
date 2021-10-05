<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>	المستوى 1 | حل الألغاز</title>
    <script src="https://kit.fontawesome.com/28ae82ec32.js"></script>
    <meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><link href="../w3.css" rel="stylesheet" /><meta name="viewport" content="width=device-width, initial-scale=1" /><link href="../Fonts/EARLY_ACCESS.css" rel="stylesheet" /><link href="LevelStyle.css" rel="stylesheet" /><link href="css/Bootstratp.min.css" rel="stylesheet" /><link href="../css/loading.css" rel="stylesheet" />
    <!-- <script src="../js/CountDownTimer.js"></script> -->

    <style>

    </style>

</head>
<body dir="rtl"  style="font-family: 'Droid Sans Arabic'; ">
 

       <!-- <div id="UpdateProgress1" style="display:none;">
	
                <div class="loadmodal">
                    <div class="centerload">
                        <img src="../assets/images/loading2.gif" />
                        <span id="lblLoading"> انتظر للتحميل</span>
                    </div>
                </div>            
        </div> -->

        <nav class=" navbar-expand-lg  navbar navbar-dark bg-primary" style="font-family: 'Droid Sans Arabic'; font-size: x-large">
            <a class="navbar-brand" href="#">المستوى : 1</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="nav-item">

                <div class="w3-container" style="width: 300px; font-family: 'Droid Sans Arabic'">
                    <div class="w3-blue text-center ">
                        <div id="progBar" class="w3-green " style="height: 24px; width: 10%"></div>
                    </div>
                    <div class="w3-blue text-center ">
                        <div id="UpdatePanel2">	
                                <span id="txt-num">0 / 10</span>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <h5>الزمن المتبقى</h5>
                        

                        <div id="timUpdatePanel">	
                                <span id="lblCtime" style="color:White;font-family:Verdana;font-weight:bold;"></span>                           
                        </div>

                    </li>
                    <li>
                        <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h3>
                    </li>
                    <li>
                        <div id="UpdatePanel4">
                                <span id="Label1"></span>                           
                        </div>
                    </li>
                    <li>
                        <h6><span id="LBL_Code" style="color:White;"></span></h6>
                    </li>

                </ul>
                <div id="UpdatePanel1"></div>
            </div>

        </nav>
        <br />

        <div id="UpdatePanel3">
	
                <div id="Q1panel">		
                    <div class="text-right" style="padding-right: 30px">
                        <h3>عزيزي التلميذ...<br />
                            قم بالضغط على الإختيار <span style="color: mediumvioletred; font-weight: bold">"صواب"</span> إذا كانت العبارة صحيحة والضغط على الإختيار <span style="color: mediumvioletred; font-weight: bold">"خطأ"</span> إذا كانت العبارة خاطئة.</h3>
                    </div>
                    <div class="center">
                        <div class="text-center">
                            <h3 id="txt-quest" class="text-center"></h3>
                        </div>
                        <div class="row center" style="border: none">
                            <div class="col-6">
                                <input type="image" name="ImageButton1" id="1" onclick="answer_click(this.id)" class="btn btn-success btn-lg" src="images/correct.png" style="height:100px;width:100px;" />
                            </div>
                            <div class="col-6">
                                <input type="image" name="ImageButton2" id="0" onclick="answer_click(this.id)" class="btn btn-success btn-lg" src="images/wrong.png" style="height:100px;width:100px;" />
                            </div>
                        </div>
                        <div class="row"><br /><br /><br /></div>
                    </div>
                </div>
	           
        </div>

            
<script type="text/javascript">

// //timer
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        
        if (--timer < 0) {
            get_result();
            //timer = duration;
        }else{ 
            minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 5,
        display = document.querySelector('#lblCtime');
    startTimer(fiveMinutes, display);
};

//variables
    var qObj = {};
    var qArr = new Array();
    var clicked, count=0;
    var  last_score = 0;
         
    console.log(' score=' + last_score); 
        //0: false 1: true- type 0:t/f 1:mcq
        qObj = {id:'1', type:'0', question: ' يعتمد برنامج scratch على كائنات تسمى Backdrop.',
            ansA: '', ansB: '', ansC: '',ansD: '', correct: '0', selected:''};
            qArr.push(qObj);
        qObj = {id:'2', type:'0', question: 'لإنشاء مقطع برمجي بإستخدام برنامج scratch يتم تجميع لبنات رسومية تشبه لعبةPuzzle .',
            ansA: '', ansB: '', ansC: '',ansD: '', correct: '1', selected:''};
            qArr.push(qObj);
       qObj = {id:'3', type:'0', question: 'امتداد ملف المشروع فى برنامج scratchهو doc.',
            ansA: '', ansB: '', ansC: '',ansD: '', correct: '0', selected:''};
            qArr.push(qObj);   
       qObj = {id:'4', type:'0', question:  'لحذف الكائنات من على المنصه نضغط على الرمز. <i class="fas fa-cut" aria-hidden="true"></i>',
            ansA: '', ansB: '', ansC: '',ansD: '', correct: '1', selected:''};   
            qArr.push(qObj);  
       qObj = {id:'5', type:'0', question: 'لرسم الكائن نضغط على الرمز.  <i class="fa fa-folder-open" aria-hidden="true"></i>',
            ansA: '', ansB: '', ansC: '',ansD: '', correct: '0', selected:''};   
            qArr.push(qObj);    
       qObj = {id:'6', type:'0', question: 'برنامج scratch مصمم لتعلم البرمجة بصورة مرئية .',
            ansA: '', ansB: '', ansC: '',ansD: '', correct: '1', selected:''};   
         qArr.push(qObj);   
        qObj = {id:'7', type:'0', question: 'لإيقاف تشغيل المقطع البرمجي نضغط على الرمز <i class="fas fa-flag" aria-hidden="true"></i>.',
            ansA: '', ansB: '', ansC: '',ansD: '', correct: '0', selected:''};   
        qArr.push(qObj);  
       qObj = {id:'8', type:'0', question: 'يمكن تصغير حجم الكائنات على المنصة بالضغط على الرمز<span><img src="img/x.png" /></span>.',
            ansA: '', ansB: '', ansC: '',ansD: '', correct: '0', selected:''};   
        qArr.push(qObj);     
       qObj = {id:'9', type:'0', question: 'لا يمكن وجود أكثر من كائن على المنصة.',
            ansA: '', ansB: '', ansC: '',ansD: '', correct: '0', selected:''};   
        qArr.push(qObj);    
        qObj = {id:'10', type:'0', question: 'المقطع البرمجي عبارة عن مجموعة أوامر يتم تركيبها بترتيب معين.',
            ansA: '', ansB: '', ansC: '',ansD: '', correct: '1', selected:''};   
        qArr.push(qObj);  
        



    //init questions 
    count++;  console.log(' count=' + qArr[count].question); 
    var result = qArr[count-1];//qArr.find(x => Number(x.id) === count-1).question;
    var ans= new Array();
    document.getElementById("txt-quest").innerHTML = '<span>' + result.id +'. '+ result.question + '</span>';
 
    

    function answer_click(clicked_id) 
    {

        if(count === 10)  {
        ans.push(clicked_id) ;
        if (clicked_id === result.correct) last_score += 1;
        get_result();
        }
        else
        {
//
        ans.push(clicked_id) ;
        if (clicked_id === result.correct) last_score += 1;
         
        count++;
        document.getElementById("txt-num").textContent = count + " / 10";
        var x = count*10;
        document.getElementById("progBar").style.width=x+"%";

        if(result.type==='1'){

        }
        // document.getElementById('UpdatePanel3').innerHTML = 
        //         '<div id="Q1panel">'+		
        //             '<div class="text-right" style="padding-right: 30px">'+
        //                 '<h3>عزيزي التلميذ...<br />'+
        //                    ' قم بالضغط على الإختيار <span style="color: mediumvioletred; font-weight: bold">"صواب"</span> إذا كانت العبارة صحيحة والضغط على الإختيار <span style="color: mediumvioletred; font-weight: bold">"خطأ"</span> إذا كانت العبارة خاطئة.</h3>'+
        //             '</div>'+
        //             '<div class="center">'+
        //                 '<div class="text-center">'+
        //                     '<h3 id="txt-quest" class="text-center"></h3>'+
        //                 '</div>'+
        //                 '<div class="row center" style="border: none">'+
        //                     '<div class="col-6">'+
        //                         '<input type="image" name="ImageButton1" id="ImageButton1" class="btn btn-success btn-lg" src="images/correct.png" style="height:100px;width:100px;" />'+
        //                     '</div>'+
        //                     '<div class="col-6">'+
        //                         '<input type="image" name="ImageButton2" id="ImageButton2" class="btn btn-success btn-lg" src="images/wrong.png" style="height:100px;width:100px;" />'+
        //                     '</div>'+
        //                 '</div>'+
        //                 '<div class="row"><br /><br /><br /></div>'+
        //             '</div>'+
        //         '</div>'

        result = qArr[count-1]; //qArr.find(x => x.id === count);
        document.getElementById("txt-quest").innerHTML = '<span>' + result.id +'. '+ result.question + '</span>';


        }
        //alert(i+'/'+temp_score + '/' + last_score);

    }




    
    // var result_clicked = false;
var retry = 0;
    function get_result()
     {
    alert(last_score*5);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        //document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "Dashboard.php?q=" + last_score*5, true);
    xmlhttp.send();

            <?php 
        session_start();
                    $conn = new mysqli("localhost" , "root" , "abcd@1234", "data");
                    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
                    $q = $_REQUEST["q"];
                    $sql="UPDATE `tbl_studentdata` SET `st_Level`=1, `st_Level1`=". $q ."  WHERE `st_id` =".$_SESSION['id']."";
                    $result = $conn->query($sql) or die($conn->error);

            ?>

        var url = new URL(window.location.href);
        if(url.searchParams !== ""){
            retry=url.searchParams.get("r"); 
        }                
        retry++;

       


        if(last_score === 10){

            
            document.getElementById('UpdatePanel3').innerHTML =        
                '<div id="Q1pane11">'+
                    '<div class="center" style="padding: 0px">'+
                        '<div class="text-center">'+
                            '<div class="row justify-content-center" style="width: 100%">'+
                                '<img id="img_gold" src="images/wrongtry.png" style="height:400px;width:400px;">'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
                                '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row justify-content-center" style="border: none">'+
                          '<input type="submit" name="Btn_return" value=" رجوع" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'/evan/dashboard.php\',\'_self\');">'+  
                        '</div>'+
                    '</div>'+
                '</div>'
          }
        else{ //alert('re: '+retry+'score: '+last_score);
            if(retry<4) {
                document.getElementById('UpdatePanel3').innerHTML =        
                '<div id="Q1pane11">'+
                    '<div class="center" style="padding: 0px">'+
                        '<div class="text-center">'+
                            '<div class="row justify-content-center" style="width: 100%">'+
                                '<img id="img_gold" src="images/try-f.jpg" style="height:400px;width:400px;">'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
                                '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row justify-content-center" style="border: none">'+
                            '<input type="submit" name="Btn_retry" value="أعد المحاولة" id="Btn_retry" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'quest1_new.php?r=\'+retry,\'_self\');">'+
                        '</div>'+
                    '</div>'+
                '</div>'
            }else{

                document.getElementById('UpdatePanel3').innerHTML =        
                '<div id="Q1pane11">'+
                    '<div class="center" style="padding: 0px">'+
                        '<div class="text-center">'+
                            '<div class="row justify-content-center" style="width: 100%">'+
                                '<img id="img_gold" src="images/try-d.jpg" style="height:400px;width:400px;">'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
                                '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row justify-content-center" style="border: none">'+
'<input type="submit" name="btn_ans" value="عرض الأجوبة" id="btn_ans" class="btn btn-primary" onclick="window.open(\'sol1_new.php?a1=\'+ ans[0] +\'&a2=\'+ans[1] +\'&a3=\'+ans[2]+\'&a4=\'+ans[3]+\'&a5=\'+ans[4]+\'&a6=\'+ans[5]+\'&a7=\'+ans[6]+\'&a8=\'+ans[7]+\'&a9=\'+ans[8]+\'&a10=\'+ans[9] ,\'_self\' );" >'+
                        '</div>'+
                    '</div>'+
                '</div>'
            }     
            
       
             
        }
        
        document.getElementById("Lbl_totalCorrect").textContent= 'الاسئلة الصحيحة :' + last_score;
        document.getElementById("Lbl_totalMark").textContent= 'الأسئلة الخاطئة :' + (10-last_score);               

                

    }







    </script>
</body>
</html>