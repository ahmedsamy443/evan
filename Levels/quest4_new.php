<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>	المستوى 4 | حل الألغاز</title>
    <script src="https://kit.fontawesome.com/28ae82ec32.js"></script>
    <meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><link href="../w3.css" rel="stylesheet" /><meta name="viewport" content="width=device-width, initial-scale=1" /><link href="../Fonts/EARLY_ACCESS.css" rel="stylesheet" /><link href="LevelStyle.css" rel="stylesheet" /><link href="css/Bootstratp.min.css" rel="stylesheet" /><link href="../css/loading.css" rel="stylesheet" />
    <!-- <script src="../js/CountDownTimer.js"></script> -->

    <style>

    </style>

</head>
<body dir="rtl"  style="font-family: 'Droid Sans Arabic';background-image:url(bac.png); background-image :no-repeat; background-size:cover; ">
 

       <div id="UpdateProgress1" style="display:none;">
	
                <div class="loadmodal">
                    <div class="centerload">
                        <img src="../assets/images/loading2.gif" />
                        <span id="lblLoading"> انتظر للتحميل</span>
                    </div>
                </div>            
        </div>

        <nav class=" navbar-expand-lg  navbar navbar-dark bg-primary" style="font-family: 'Droid Sans Arabic'; font-size: x-large">
            <a class="navbar-brand" href="#" style="font-size: 30px;">المستوى : 4</a>
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
                                <span id="txt-num">0 / 6</span>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <h2 style="font-color: white;">الزمن المتبقى</h2>
                        

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
                    <h3> عزيزي التلميذ ...اختر الاجابة الصحيحة<br />
                    </div>
                    <div class="center" style="height: 500px;">
                        <div class="text-center">
                            <h3 id="txt-quest" class="text-center"></h3>
                        </div>
                        <div class="row center" style="border: none;height: 40px;">
                            <div class="col-12" >
                                <button name="ImageButton1" id="a" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px; color:white;" ></button>
                            </div><br><br><br>
                            <div class="col-12" >
                            <button name="ImageButton1" id="b" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;color:white;" ></button>
                            </div><br><br><br>
                            <div class="col-12" >
                            <button name="ImageButton1" id="c" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;color:white;" ></button>
                            </div><br><br><br>
                            <div class="col-12" >
                            <button name="ImageButton1" id="d" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;color:white;" ></button>
                            </div>
                        </div>
                        <div class="row"><br /><br /><br /></div>
                    </div>
	           |</div>
        </div>

            
<script type="text/javascript">

//timer
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
        qObj = {id:'1', type:'1', question: ' الأمر Say  ينتمي للمجموعة(.........).',
            ansA: 'أ) <img src="images/4/1.jpg" />', ansB: 'ب) <img src="images/4/2.jpg" />', ansC: 'ج) <img src="images/4/3.jpg" />',ansD: 'د) <img src="images/4/4.jpg" />', correct: 'a', selected:''};
            qArr.push(qObj);
        qObj = {id:'2', type:'1', question: ' لإظهار رسالة" السلام عليكم" ثم تختفي نستخدم لبنة............. ',
            ansA: 'أ) <img src="images/4/01.png" />', ansB: 'ب) <img src="images/4/9.png" />', ansC: 'ج) <img src="images/4/19.png" />',ansD: 'د) <img src="images/4/6.png" />', correct: 'a', selected:''};
            qArr.push(qObj);
       qObj = {id:'3', type:'1', question: 'لإخفاء الكائن من على المنصة نستخدم لبنة.............',
            ansA: 'أ) <img src="images/4/05.png" />', ansB: 'ب) <img src="images/4/06.png" />', ansC: 'ج) <img src="images/4/07.png" />',ansD: 'د) <img src="images/4/08.png" />', correct: 'b', selected:''};
            qArr.push(qObj);   
       qObj = {id:'4', type:'1', question:  'تستخدم مجموعة ...... في تصميم قصص تفاعلية',
        ansA: 'أ) <img src="images/4/13.jpg" />', ansB: 'ب) <img src="images/4/14.jpg" />', ansC: 'ج) <img src="images/4/15.jpg" />',ansD: 'د) <img src="images/4/16.jpg" />', correct: 'b', selected:''};
            qArr.push(qObj);  
       qObj = {id:'5', type:'1', question: 'لإظهار هذا النمط من الرسائل لمدة (2) ثانية<span><img src="images/4/00.png" width="50" height="70" /></span>نستخدم لبنة ',
            ansA: 'أ) <img src="images/4/09.png" />', ansB: 'ب) <img src="images/4/18.png" />', ansC: ' ج) <img src="images/4/19.png" />',ansD: 'د) <img src="images/4/20.png" />', correct: 'd', selected:''};   
            qArr.push(qObj);    
       qObj = {id:'6', type:'1', question: 'لظهور الكائن على المنصة نستخدم لبنة....................',
            ansA: 'أ) <img src="images/4/05.png" />', ansB: 'ب) <img src="images/4/22.png" />', ansC: 'ج) <img src="images/4/23.png" />',ansD: 'د) <img src="images/4/08.png" />', correct: 'c', selected:''};   
         qArr.push(qObj);
        
        



    //init questions 
    count++;  console.log(' count=' + qArr[count].question); 
    var result = qArr[count-1];//qArr.find(x => Number(x.id) === count-1).question;
    var ans= new Array();
    document.getElementById("txt-quest").innerHTML = '<span>' + result.id +'. '+ result.question + '</span>';
    document.getElementById("a").innerHTML = result.ansA;
    document.getElementById("b").innerHTML = result.ansB;
    document.getElementById("c").innerHTML = result.ansC;
    document.getElementById("d").innerHTML = result.ansD;
    

    function answer_click(clicked_id) 
    {

        if(count === 6)  {
        ans.push(clicked_id) ;
        if (clicked_id === result.correct) last_score += 1;
        get_result();
        }
        else
        {
        ans.push(clicked_id) ;
        if (clicked_id === result.correct) last_score += 1;
         
        count++;
        document.getElementById("txt-num").textContent = count + " / 6";
        var x = count*16.5;
        document.getElementById("progBar").style.width=x+"%";

        result = qArr[count-1];
        if(result.type==='1'){ 
document.getElementById('UpdatePanel3').innerHTML = 
'<div id="Q1panel">'+		
                    '<div class="text-right" style="padding-right: 30px">'+
                    '<h3> عزيزي التلميذ ...اختر الاجابة الصحيحة<br />'+
                    '</div>'+
                    '<div class="center">'+
                        '<div class="text-center">'+
                            '<h3 id="txt-quest" class="text-center"></h3>'+
                        '</div>'+
                        '<div class="row center" style="border: none; style="height: 40px;"">'+
                            '<div class="col-12" >'+
                                '<button name="ImageButton1" id="a" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px; color:white;" ></button>'+
                            '</div>'+'<br>'+'<br>'+'<br>'+
                            '<div class="col-12" >'+
                            '<button name="ImageButton1" id="b" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;color:white;" ></button>'+
                            '</div>'+'<br>'+'<br>'+'<br>'+
                            '<div class="col-12" >'+
                            '<button name="ImageButton1" id="c" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;color:white;" ></button>'+
                            '</div>'+'<br>'+'<br>'+'<br>'+
                            '<div class="col-12" >'+
                            '<button name="ImageButton1" id="d" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;color:white;" ></button>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row"><br /><br /><br /></div>'+
                    '</div>'+
                '</div>';
                
         //qArr.find(x => x.id === count);
        document.getElementById("txt-quest").innerHTML = '<span>' + result.id +'. '+ result.question + '</span>';
        document.getElementById("a").innerHTML = result.ansA;
        document.getElementById("b").innerHTML = result.ansB;
        document.getElementById("c").innerHTML = result.ansC;
        document.getElementById("d").innerHTML = result.ansD;

        }else{
            
         //qArr.find(x => x.id === count);
        document.getElementById("txt-quest").innerHTML = '<span>' + result.id +'. '+ result.question + '</span>';
        }
        

        }
        //alert(i+'/'+temp_score + '/' + last_score);

    }




    
    // var result_clicked = false;
var retry = 0;
    function get_result()
     {
    
    
        var url = new URL(window.location.href);
        if(url.searchParams !== ""){
            retry=url.searchParams.get("r"); 
        } 

        db_query();

        retry++;
        //alert('re: '+retry+'score: '+last_score);
        if(last_score === 6){
            if(retry>0){
                document.getElementById('UpdatePanel3').innerHTML =        
                '<div id="Q1pane11">'+
                    '<div class="center" style="padding: 0px">'+
                        '<div class="text-center">'+
                            '<div class="row justify-content-center" style="width: 100%">'+
                                '<img id="img_gold" src="images/Gold.png" style="height:400px;width:400px;">'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
                                '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row justify-content-center" style="border: none">'+
                          '<input type="submit" name="Btn_return" value=" التالي" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'/evan/dashboard.php\',\'_self\');">'+  
                        '</div>'+
                    '</div>'+
                '</div>';

         } else {
             document.getElementById('UpdatePanel3').innerHTML =        
                '<div id="Q1pane11">'+
                    '<div class="center" style="padding: 0px">'+
                        '<div class="text-center">'+
                            '<div class="row justify-content-center" style="width: 100%">'+
                                '<img id="img_gold" src="images/Gold.png" style="height:400px;width:400px;">'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
                                '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row justify-content-center" style="border: none">'+
                          '<input type="submit" name="Btn_return" value=" التالي" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'/evan/dashboard.php\',\'_self\');">'+  
                        '</div>'+
                    '</div>'+
                '</div>';
         }
            
          }else if(last_score === 5){
            document.getElementById('UpdatePanel3').innerHTML =        
                '<div id="Q1pane11">'+
                    '<div class="center" style="padding: 0px">'+
                        '<div class="text-center">'+
                            '<div class="row justify-content-center" style="width: 100%">'+
                                '<img id="img_gold" src="images/nat.png" style="height:400px;width:400px;">'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
                                '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row justify-content-center" style="border: none">'+
                            '<input type="submit" name="Btn_retry" value="أعد المحاولة" id="Btn_retry" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'quest4_new.php?r=\'+retry,\'_self\');">'+
                            '<input type="submit" name="Btn_return" value=" التالي" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'/evan/dashboard.php\',\'_self\');">'+  
                        '</div>'+
                    '</div>'+
                '</div>';
          }else if(last_score === 4){
            document.getElementById('UpdatePanel3').innerHTML =        
                '<div id="Q1pane11">'+
                    '<div class="center" style="padding: 0px">'+
                        '<div class="text-center">'+
                            '<div class="row justify-content-center" style="width: 100%">'+
                                '<img id="img_gold" src="images/plat.png" style="height:400px;width:400px;">'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
                                '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row justify-content-center" style="border: none">'+
                            '<input type="submit" name="Btn_retry" value="أعد المحاولة" id="Btn_retry" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'quest4_new.php?r=\'+retry,\'_self\');">'+
                            '<input type="submit" name="Btn_return" value=" التالي" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'/evan/dashboard.php\',\'_self\');">'+  
                        '</div>'+
                    '</div>'+
                '</div>';
          }
        else{ 
            if(retry<3) {
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
                            '<input type="submit" name="Btn_retry" value="أعد المحاولة" id="Btn_retry" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'quest4_new.php?r=\'+retry,\'_self\');">'+
                        '</div>'+
                    '</div>'+
                '</div>';
            }else{

                document.getElementById('UpdatePanel3').innerHTML =        
                '<div id="Q1pane11">'+
                    '<div class="center" style="padding: 0px">'+
                        '<div class="text-center">'+
                            '<div class="row justify-content-center" style="width: 100%">'+
                                '<img id="img_gold" src="images/try-d.png" style="height:400px;width:400px;">'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
                                '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row justify-content-center" style="border: none">'+
'<input type="submit" name="btn_ans" value="عرض الأجوبة" id="btn_ans" class="btn btn-primary" onclick="window.open(\'sol4_new.php?a1=\'+ ans[0] +\'&a2=\'+ans[1] +\'&a3=\'+ans[2]+\'&a4=\'+ans[3]+\'&a5=\'+ans[4]+\'&a6=\'+ans[5]+\'&a7=\'+ans[6]+\'&a8=\'+ans[7]+\'&a9=\'+ans[8]+\'&a10=\'+ans[9] ,\'_self\' );" >'+
                        '</div>'+
                    '</div>'+
                '</div>';
            }     
            
       
             
        }
        
        document.getElementById("Lbl_totalCorrect").textContent= 'الاسئلة الصحيحة :' + last_score;
        document.getElementById("Lbl_totalMark").textContent= 'الأسئلة الخاطئة :' + (6-last_score);               

                

    }



    function db_query(){
        
        var time = document.getElementById("lblCtime").textContent.replace(":", ".");
        var wimg;
        if(last_score===6) wimg='1';
        else if(last_score===5) wimg='2';
        else if(last_score===4) wimg='3';

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //document.getElementById("txtHint").innerHTML = this.responseText;
        }
        }; 
        xmlhttp.open("GET", "query4.php?score=" + last_score*5 + "&try=" + retry + "&time=" + time + "&wimg=" + wimg +"", true);
        xmlhttp.send();
        


    }


    // function finish() {

    //  $.ajax({
    //             url: hostString + "api/score/UpdateCustomer?id=" + Number(@ViewBag.Id) +"&total=" + last_score,
    //             method: "POST",
    //            // data: {   }
    //         })
    //             .done(function () {})
    //             .fail(function () { alert("error save data");})

    //     if (success) {
    //         //success_sound.play();
    //         window.open("Success?score=" + last_score, "_self");
    //          //alert("مبرووك !  حصلت على " + last_score + " نقطة");            
    //     }
    //     else {
    //         //wrong_sound.play();
    //         window.open("Fail?score=" + last_score,"_self");
    //         // alert("حظ أوفر !  حصلت على " + last_score + " نقطة");
    //     }

                    
       
    // }

    </script>
    <style>
       #a, #b, #c, #d
       {
           background-color: white;
           color : black;
           border : 0px;
       } 
    </style>
</body>
</html>