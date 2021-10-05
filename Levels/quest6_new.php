
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>	 التطبيق البعدي</title>
    <script src="https://kit.fontawesome.com/28ae82ec32.js"></script>
    <meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><link href="../w3.css" rel="stylesheet" /><meta name="viewport" content="width=device-width, initial-scale=1" /><link href="../Fonts/EARLY_ACCESS.css" rel="stylesheet" /><link href="LevelStyle.css" rel="stylesheet" /><link href="css/Bootstratp.min.css" rel="stylesheet" /><link href="../css/loading.css" rel="stylesheet" />
    <!-- <script src="../js/CountDownTimer.js"></script> -->

    <style>

    </style>

</head>
<body dir="rtl"  style="font-family: 'Droid Sans Arabic'; background-image:url(back.png); background-image :no-repeat; background-size:cover;">
 

       <div id="UpdateProgress1" style="display:none;">
	
                <div class="loadmodal">
                    <div class="centerload">
                        <img src="../assets/images/loading2.gif" />
                        <span id="lblLoading"> انتظر للتحميل</span>
                    </div>
                </div>            
        </div>

        <nav class=" navbar-expand-lg  navbar navbar-dark bg-primary" style="font-family: 'Droid Sans Arabic'; font-size: x-large ; background-color:gray; ">
            <a class="navbar-brand" href="#">التطبيق البعدي</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="nav-item">

                <div class="w3-container" style="width: 300px; font-family: 'Droid Sans Arabic'">
                    <div class="w3-blue text-center ">
                        <div id="progBar" class="w3-green " style="height: 24px; width: 2%"></div>
                    </div>
                    <div class="w3-blue text-center ">
                        <div id="UpdatePanel2">	
                                <span id="txt-num" style="font-size: large;">1 / 39</span>
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
                        <h3> السؤال الأول : اختر الإجابة الصحيحة مما يلى: </h3><br />
                    </div>
                    <div class="center">
                        <div class="text-center">
                            <h3 id="txt-quest" class="text-center"></h3>
                        </div>
                        <div class="row center" style="border: none">
                            <div class="col-12" >
                                <button name="ImageButton1" id="a" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;" ></button>
                            <br>
                            </div>
                            <div class="col-12" >
                            <button name="ImageButton1" id="b" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;" ></button>
                            <br>    
                        </div>
                            <div class="col-12" >
                            <button name="ImageButton1" id="c" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;" ></button>
                            <br>    
                        </div>
                            <div class="col-12" >
                            <button name="ImageButton1" id="d" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;" ></button>
                            <br>    
                        </div>
                        </div>
                        <div class="row"><br /><br /><br /></div>
                    </div>
                </div>
	           
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
    var fiveMinutes = 60 * 48,
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
        qObj = {id:'1', type:'1', question: ' يستخدم برنامج Scratch  فى ..............',
            ansA: 'أ ) عمل قصص تفاعلية.', ansB: 'ب ) تصميم رسومات متحركة.', ansC: 'ج ) تركيب اللبنات مع بعضها البعض.',ansD: 'د ) جميع ماسبق يعد صحيحاً.', correct: 'd', selected:''};
            qArr.push(qObj);
        qObj = {id:'2', type:'1', question: ' يمكنك تشغيل برنامج Scratch وجهاز الكمبيوتر متصل بـــ............',
            ansA: 'أ ) الطابعه.', ansB: 'ب ) الإنترنت.', ansC: 'ج ) الماسح الضوئى.',ansD: 'د ) السماعات.', correct: 'b', selected:''};
            qArr.push(qObj);
       qObj = {id:'3', type:'1', question: 'يوجد فى منطقة  ..........اللبنات المستخدمة فى المشروع.',
            ansA: 'أ ) التكبير.', ansB: 'ب ) الكائنات.', ansC: 'ج ) المنصة.',ansD: 'د ) البرمجة.', correct: 'd', selected:''};
            qArr.push(qObj);   
       qObj = {id:'4', type:'1', question:  'منطقة .............يظهر عليها نتيجة مشروعك.',
            ansA: 'أ ) المنصة.', ansB: 'ب ) البرمجه.', ansC: 'ج ) شريط القوائم.',ansD: 'د ) الكائنات.', correct: 'a', selected:''};   
            qArr.push(qObj);  
       qObj = {id:'5', type:'1', question: 'يستخدم الرمز ...... لتغيير لغة واجهة برنامج scratch إلى اللغه العربيه.',
            ansA: 'أ) <span><img src="../images/1.jpg" /></span>', ansB: 'ب) <span><img src="../images/2.png" /></span>', ansC: 'ج) <span><img src="../images/3.png" /></span>',ansD: 'د) <span><img src="../images/4.jpg" /></span>', correct: 'c', selected:''};   
            qArr.push(qObj);    
       qObj = {id:'6', type:'1', question: 'يستخدم الرمز ......... فى تكرار الكائن على المنصة.',
            ansA: 'أ) <span><img src="../images/2.png" /></span>', ansB: 'ب) <span><img src="../images/9.jpg" /></span>', ansC: 'ج) <span><img src="../images/10.jpg" /></span>',ansD: 'د) <span><img src="../images/11.jpg" /></span>', correct: 'b', selected:''};   
         qArr.push(qObj);   
        qObj = {id:'7', type:'1', question: 'لحفظ المشروع في برنامج  Scratch يتم اختيار الأمر .............من قائمة  File.',
            ansA: 'أ ) Save As', ansB: 'ب )  Delete', ansC: 'ج ) Open',ansD: 'د )   New', correct: 'a', selected:''};   
        qArr.push(qObj);  
       qObj = {id:'8', type:'1', question: '	يستخدم الرمز .......................... لرسم خلفية للمنصة.',
        ansA: 'أ) <span><img src="../images/5.jpg" /></span>', ansB: 'أ) <span><img src="../images/12.jpg" /></span>', ansC: 'أ) <span><img src="../images/1.jpg" /></span>',ansD: 'أ) <span><img src="../images/13.jpg" /></span>', correct: 'a', selected:''};   
        qArr.push(qObj);     
       qObj = {id:'9', type:'1', question: 'لفتح ملف سابق فى برنامجscratch  يتم اختيار الأمر................. من قائمة File.',
            ansA: 'أ )  Save', ansB: 'Open ب )', ansC: 'ج )  New',ansD: 'د ) Exit', correct: 'b', selected:''};   
        qArr.push(qObj); 
        qObj = {id:'10', type:'1', question: 'تستخدم مجموعة..........فى تحديد الأحداث التي تقع علي الكائنات لبدء تنفيذ المشروع.',
            ansA: 'أ) <span><img src="../images/14.jpg" /></span>', ansB: 'أ) <span><img src="../images/15.jpg" /></span>', ansC: 'أ) <span><img src="../images/16.jpg" /></span>',ansD: 'أ) <span><img src="../images/17.jpg" /></span>', correct: 'b', selected:''};   
        qArr.push(qObj); 
        qObj = {id:'11', type:'1', question: 'تستخدم مجموعة ............... فى تحديد حركة الكائنات ودورانها.',
            ansA: 'أ) <span><img src="../images/14.jpg" /></span>', ansB: 'أ) <span><img src="../images/17.jpg" /></span>', ansC: 'أ) <span><img src="../images/16.jpg" /></span>',ansD: 'أ) <span><img src="../images/24.jpg" /></span>', correct: 'a', selected:''};   
        qArr.push(qObj); 
        qObj = {id:'12', type:'1', question: 'تستخدم لبنة  .....................لجعل الكائن يتوقف لثوانى محدده.',
            ansA: 'أ) <span><img src="../images/point.png" /></span>', ansB: 'ب) <span><img src="../images/goto.png" /></span>', ansC: 'ج) <span><img src="../images/wait.png" /></span>',ansD: 'د) <span><img src="../images/25.jpg" /></span>', correct: 'c', selected:''};   
        qArr.push(qObj); 
        qObj = {id:'13', type:'1', question: 'يطلق على صورة أو رسمة أخرى لنفس الكائن فى وضع مختلف بـ...................',
            ansA: 'أ‌)	منطقة المنصة.', ansB: 'ب) المظهر.', ansC: 'ج) خلفية المنصة.',ansD: 'د) منطقة الكائنات.', correct: 'b', selected:''};   
        qArr.push(qObj); 
        qObj = {id:'14', type:'1', question: 'تستخدم لبنة ....... فى إظهار المظهر التالي للكائن على المنصة.',
            ansA: 'أ) <span><img src="../images/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj); 
        qObj = {id:'15', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj); 
        qObj = {id:'16', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj); 
        qObj = {id:'17', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj); 
        qObj = {id:'18', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj); 
        qObj = {id:'19', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj); 
        qObj = {id:'20', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj); 
        qObj = {id:'21', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'22', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'23', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'24', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'25', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'26', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'27', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'28', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'29', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'30', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'31', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'32', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'33', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'34', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'35', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'36', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'37', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'38', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
        qArr.push(qObj);   
        qObj = {id:'39', type:'1', question: 'الأمر البرمجي ...... يحدد نقطة انتقال الكائن لمكان معين علي المنصة.',
            ansA: 'A- <span><img src="img/point.png" /></span>', ansB: 'B- <span><img src="img/turn.png" /></span>', ansC: 'C- <span><img src="img/goto.png" /></span>',ansD: 'D- <span><img src="img/move10steps.png" /></span>', correct: 'd', selected:''};   
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

        if(count === 39)  {
        ans.push(clicked_id) ;
        if (clicked_id === result.correct) last_score += 1;
        get_result();
        }
        else
        {
        ans.push(clicked_id) ;
        if (clicked_id === result.correct) last_score += 1;
         
        count++;
        document.getElementById("txt-num").textContent = count + " / 39";
        var x = count*2.5;
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
                                '<button name="ImageButton1" id="a" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;" ></button>'+
                            '</div>'+
                            '<div class="col-12" >'+
                            '<button name="ImageButton1" id="b" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;" ></button>'+
                            '</div>'+
                            '<div class="col-12" >'+
                            '<button name="ImageButton1" id="c" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;" ></button>'+
                            '</div>'+
                            '<div class="col-12" >'+
                            '<button name="ImageButton1" id="d" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;" ></button>'+
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
// var retry = 0;
    function get_result()
     {
    
    
        var url = new URL(window.location.href);
        if(url.searchParams !== ""){
            retry=url.searchParams.get("r"); 
        } 

        db_query();

        //retry++;
        //alert('re: '+retry+'score: '+last_score);
        if(last_score >= 36){
                document.getElementById('UpdatePanel3').innerHTML =        
                '<div id="Q1pane11">'+
                    '<div class="center" style="padding: 0px">'+
                        '<div class="text-center">'+
                            '<div class="row justify-content-center" style="width: 100%">'+
                                '<img id="img_gold" src="images/try-10.jpg" style="height:400px;width:400px;">'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
                                '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row justify-content-center" style="border: none">'+
                          '<input type="submit" name="Btn_return" value=" تسليم" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'/evan/dashboard.php\',\'_self\');">'+  
                        '</div>'+
                    '</div>'+
                '</div>';
        }
         else {
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
                          '<input type="submit" name="Btn_return" value=" تسليم" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'/evan/dashboard.php\',\'_self\');">'+  
                        '</div>'+
                    '</div>'+
                '</div>';
              }
            
//           }else if(last_score === 5){
//             document.getElementById('UpdatePanel3').innerHTML =        
//                 '<div id="Q1pane11">'+
//                     '<div class="center" style="padding: 0px">'+
//                         '<div class="text-center">'+
//                             '<div class="row justify-content-center" style="width: 100%">'+
//                                 '<img id="img_gold" src="images/nat.png" style="height:400px;width:400px;">'+
//                             '</div>'+
//                             '<div class="row">'+
//                                 '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
//                                 '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
//                             '</div>'+
//                         '</div>'+
//                         '<div class="row justify-content-center" style="border: none">'+
//                             '<input type="submit" name="Btn_retry" value="أعد المحاولة" id="Btn_retry" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'quest4_new.php?r=\'+retry,\'_self\');">'+
//                             '<input type="submit" name="Btn_return" value=" التالي" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'/evan/dashboard.php\',\'_self\');">'+  
//                         '</div>'+
//                     '</div>'+
//                 '</div>';
//           }else if(last_score === 4){
//             document.getElementById('UpdatePanel3').innerHTML =        
//                 '<div id="Q1pane11">'+
//                     '<div class="center" style="padding: 0px">'+
//                         '<div class="text-center">'+
//                             '<div class="row justify-content-center" style="width: 100%">'+
//                                 '<img id="img_gold" src="images/plat.png" style="height:400px;width:400px;">'+
//                             '</div>'+
//                             '<div class="row">'+
//                                 '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
//                                 '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
//                             '</div>'+
//                         '</div>'+
//                         '<div class="row justify-content-center" style="border: none">'+
//                             '<input type="submit" name="Btn_retry" value="أعد المحاولة" id="Btn_retry" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'quest4_new.php?r=\'+retry,\'_self\');">'+
//                             '<input type="submit" name="Btn_return" value=" التالي" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'/evan/dashboard.php\',\'_self\');">'+  
//                         '</div>'+
//                     '</div>'+
//                 '</div>';
//           }
//         else{ 
//             if(retry<4) {
//                 document.getElementById('UpdatePanel3').innerHTML =        
//                 '<div id="Q1pane11">'+
//                     '<div class="center" style="padding: 0px">'+
//                         '<div class="text-center">'+
//                             '<div class="row justify-content-center" style="width: 100%">'+
//                                 '<img id="img_gold" src="images/try-f.jpg" style="height:400px;width:400px;">'+
//                             '</div>'+
//                             '<div class="row">'+
//                                 '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
//                                 '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
//                             '</div>'+
//                         '</div>'+
//                         '<div class="row justify-content-center" style="border: none">'+
//                             '<input type="submit" name="Btn_retry" value="أعد المحاولة" id="Btn_retry" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'quest4_new.php?r=\'+retry,\'_self\');">'+
//                         '</div>'+
//                     '</div>'+
//                 '</div>';
//             }else{

//                 document.getElementById('UpdatePanel3').innerHTML =        
//                 '<div id="Q1pane11">'+
//                     '<div class="center" style="padding: 0px">'+
//                         '<div class="text-center">'+
//                             '<div class="row justify-content-center" style="width: 100%">'+
//                                 '<img id="img_gold" src="images/try-d.jpg" style="height:400px;width:400px;">'+
//                             '</div>'+
//                             '<div class="row">'+
//                                 '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
//                                 '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
//                             '</div>'+
//                         '</div>'+
//                         '<div class="row justify-content-center" style="border: none">'+
// '<input type="submit" name="btn_ans" value="عرض الأجوبة" id="btn_ans" class="btn btn-primary" onclick="window.open(\'sol4_new.php?a1=\'+ ans[0] +\'&a2=\'+ans[1] +\'&a3=\'+ans[2]+\'&a4=\'+ans[3]+\'&a5=\'+ans[4]+\'&a6=\'+ans[5]+\'&a7=\'+ans[6]+\'&a8=\'+ans[7]+\'&a9=\'+ans[8]+\'&a10=\'+ans[9] ,\'_self\' );" >'+
//                         '</div>'+
//                     '</div>'+
//                 '</div>';
//             }             
        // document.getElementById("Lbl_totalCorrect").textContent= 'الاسئلة الصحيحة :' + last_score;
        // document.getElementById("Lbl_totalMark").textContent= 'الأسئلة الخاطئة :' + (6-last_score);               

                

    }



    function db_query(){
        
        var time = document.getElementById("lblCtime").textContent.replace(":", ".");
        var wimg;
        if(last_score>=39) wimg='4';
        // else if(last_score===5) wimg='2';
        // else if(last_score===4) wimg='3';

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //document.getElementById("txtHint").innerHTML = this.responseText;
        }
        }; 
        xmlhttp.open("GET", "query6.php?score=" + last_score /*+ "&try=" + retry*/ + "&time=" + time + "&wimg=" + wimg +"", true);
        xmlhttp.send();
        


    }


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