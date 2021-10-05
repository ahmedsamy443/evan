
let questions = document.querySelectorAll('.ques');
let previousBtns = document.querySelectorAll('.previous');
let nextBtns = document.querySelectorAll('.next');
let inputRadio = document.querySelectorAll('.form-check-input');
let arrange_inputs = document.querySelectorAll('.arrange-inputs');
let num = 1;
let result = '';
let question_id = 0;
let questions_id = [];
let results = [];
let arrange = [];
let arrange_inputs2=document.querySelectorAll('.ahmed11');
let arrange2=[];
let correct_arrange2 = [5,1,4,6,8,2,3,7];
let scores = 0;
let correct_arrange = [1, 6, 4, 8, 2, 3, 5, 7];
let correct_answers = [
    {
        "id": 1,
        "correct":"New.",
    },
    {
        "id": 2,
        "correct":  "المقطع البرمجي.",

    },
    {
        "id": 3,
        "correct": "<span><img src='../images/exam_images/3.jpg' /></span>",
    },
    {
        "id": 4,
        "correct": "<span><img src='../images/exam_images/7.jpg' /></span>",
    },
    {
        "id": 5,
        "correct":"Open.",
    },
    {
        "id": 6,
        "correct": "<span><img src='../images/exam_images/10.jpg' /></span>",
    }
    ,
    {
        "id": 7,
        "correct": "جميع ما سبق يعد صحيحا.",
    }
    ,
    {
        "id": 8,
        "correct":"جميع ما سبق يعد صحيحا .",
    },
    {
        "id": 9,
        "correct": "خلفية المنصة .",
    },
    {
        "id": 10,
        "correct":"جميع ما سبق يعد صحيحا .",
    },
    {
        "id": 11,
        "correct": "<span><img src='../images/exam_images/25.jpg' /></span>",
    },
    {
        "id": 12,
        "correct": "<span><img src='../images/exam_images/40.jpg' /></span>",
    },
    {
        "id": 13,
        "correct": "<span><img src='../images/exam_images/42.jpg' /></span>",
    },
    {
        "id": 14,
        "correct": "Save As.",
    },
    {
        "id": 15,
        "correct": "<span><img src='../images/exam_images/20.jpg' /></span>",
    },
    {
        "id": 16,
        "correct": "يرتد .",
    },
    {
        "id": 17,
        "correct": "<span><img src='../images/exam_images/46.jpg' /></span>",
    },
    {
        "id": 18,
        "correct":"راسيا .",
    },
    {
        "id": 19,
        "correct":"<span><img src='../images/exam_images/60.jpg' /></span>",
    },
    {
        "id": 20,
        "correct": " <span><img src='../images/exam_images/84.jpg' /></span>",
    },
    {
        "id": 21,
        "correct": "turn.",
    },
    {
        "id": 22,
        "correct": "<span><img src='../images/exam_images/65.jpg' /></span>",
    },
    {
        "id": 23,
        "correct": "المنصة .",
    }
    ,
    {
        "id": 24,
        "correct":  "un Delete .",
    }
    ,
    {
        "id": 25,
        "correct": "<span><img src='../images/exam_images/44.jpg' /></span>",
    }
    ,
    {
        "id": 26,
        "correct": "<span><img src='../images/exam_images/46.jpg' /></span>",
    }
    ,
    {
        "id": 27,
        "correct": "<span><img src='../images/exam_images/43.jpg' /></span>",
    }
    ,
    {
        "id": 28,
        "correct": "المظهر.",
    }
    ,
    {
        "id": 29,
        "correct":"الانترنت .",
    }
    ,
    {
        "id": 30,
        "correct":"<span><img src='../images/exam_images/33.jpg' /></span>",
    }
    ,
    {
        "id": 31,
        "correct": "البرمجة.",
    }
    ,
    {
        "id": 32,
        "correct":"<span><img src='../images/exam_images/16.jpg' /></span>",
    }
    ,
    {
        "id": 33,
        "correct":"<span><img src='../images/exam_images/24.jpg' /></span>",
    }
    ,
    {
        "id": 34,
        "correct":"متوافر باللغتين العربية واإلنجليزية.",
    }
    ,
    {
        "id": 35,
        "correct": "<span><img src='../images/exam_images/35.jpg' /></span>",
    }
    ,
    {
        "id": 36,
        "correct":"<span><img src='../images/exam_images/18.jpg' /></span>",
    }
    ,
    {
        "id": 37,
        "correct":"شكل خماسي.",
    }

    
];
function startTimer(duration, display) {
    var timer = duration,
        minutes, seconds;
    setInterval(function() {
        if (--timer < 0) {
            get_result();
            //timer = duration;
        } else {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;
            display.textContent = minutes + ":" + seconds;
        }
    }, 1000);
}

window.onload = function() {
    // let progressss= document.getElementById("progress").value;
    // console.log(progressss)
    // document.getElementsByClassName("progress-bar").innerHTML=progressss.value;
    var fiveMinutes = 60 * 48,
        display = document.querySelector('#lblCtime');
    startTimer(fiveMinutes, display);
    
    setTimeout(function() {

        let show = document.querySelector('.show');
        show.classList.remove('show');
        Swal.fire({
            icon: 'error',
            title: ' عزيزي التلميذ',
            text: 'لقد نفذ وقت الاختبار  ',
        })
    }, fiveMinutes * 1000);
     //let progressss= document.getElementById("progress").value;
    // document.getElementsByClassName("progress-bar").innerText=progressss;

  

    
};

let submit = nextBtns[nextBtns.length -1];
questions[0].classList.add('show');
previousBtns[0].style.display='none';

function inArray(value, array) {
    for(let i = 0 ; i < array.length ; i++){
        if (array[i] == value) {
            return true;
        }
    }
}

inputRadio.forEach(radio => {
    radio.addEventListener('change', function () {
        result = this.value;
        question_id = this.getAttribute('data-question-id');
    });
});

nextBtns.forEach(btn => {
    btn.addEventListener('click', function (e) {
        if (results.length == 0) {
            results.push({ 'id': question_id, 'result': result });
            questions_id.push(parseInt(question_id));
        } else {
            if (!inArray(question_id, questions_id)) {
                results.push({ 'id': question_id, 'result': result });
                questions_id.push(parseInt(question_id));
                
            }
            else
            {
               s= results.findIndex((obj => obj.id == question_id));                
                results[s].result=result;
                
            }
              //  console.log(results)
        }

        if (num >= questions.length) {
            return;
        }
        num++;
        let show = document.querySelector('.show');
        show.classList.remove('show');
        show.nextElementSibling.classList.add('show');
        

       // result = '';
    });

});

previousBtns.forEach(btn => {
    btn.addEventListener('click', function () {
        if (num <= 1) {
            return;
        }
        num--;
       
        let show = document.querySelector('.show');

        show.classList.remove('show');
        show.previousElementSibling.classList.add('show');
        
    });
});

let submit2=nextBtns[nextBtns.length -2];

submit2.onclick=function()
{
    
    
    // console.log("index is "+qw)

     
    
}

submit.onclick = function(){
    
    
    for(let x = 0; x < arrange_inputs.length ; x++)
    {
            arrange.push(arrange_inputs[x].value)
     }
    for(let i = 0; i < results.length ; i++){
        if(results[i].result == correct_answers[i].correct){
            scores++;
        }
    }
    for(let y = 0; y < arrange_inputs2.length ; y++){
        arrange2.push(arrange_inputs2[y].value)
     }

     for(let w = 0; w < correct_arrange2.length ; w++){
        if(arrange2[w] == correct_arrange2[w]){
            scores++;
        }
    }
    for(let a = 0; a < correct_arrange.length ; a++){
        if(arrange[a] == correct_arrange[a]){
            scores++;
        }
    }
    

    alert(scores)



   // alert(scores)
   // console.log("score"+scores)
    var divconition= document.getElementsByClassName("ques").length
   // console.log(divconition)
if(scores>=40)
{
    document.getElementsByClassName("ques")[divconition-1].innerHTML =
    '<div id="Q1pane11">' +
    '<div class="center" style="padding: 0px">' +
    '<div class="text-center">' +
    '<div class="row justify-content-center" style="width: 100%">' +
    '<img id="img_gold" src="../images/tmiz.jpg" style="height:400px;width:400px;">' +
    '</div>' +
    '<div class="row">' +
    '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>' +
    '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>' +
    '</div>' +
    '</div>' +
    '<div class="row justify-content-center" style="border: none">' +
    '<input type="submit" name="Btn_return" value=" تسليم" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;"  onclick="hello();window.open(\'/evan/Level/level7-7.php\',\'_self\');">' +
    '</div>' +
    '</div>' +
    '</div>';
}    
else
{
   // alert("sdasdsdas")
  // console.log("ahmed")

    document.getElementsByClassName("ques")[divconition-1].innerHTML =
    '<div id="Q1pane11">' +
    '<div class="center" style="padding: 0px">' +
    '<div class="text-center">' +
    '<div class="row justify-content-center" style="width: 100%">' +
    '<img id="img_gold" src="" style="height:400px;width:400px;">' +
    '</div>' +
    '<div class="row">' +
    '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>' +
    '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>' +
    '</div>' +
    '</div>' +
    '<div class="row justify-content-center" style="border: none">' +

    '<input type="submit" name="Btn_return" value=" تسليم" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;" onclick="hello();window.open(\'/evan/Level/level7-7.php\',\'_self\');" >' +
    '</div>' +
    '</div>' +
    '</div>';
}
 

}
function hello()
{

    var time = document.getElementById("lblCtime").textContent.replace(":", ".");
    var wimg;
        if (scores >= 40) 
    {
        wimg = '5'; alert(wimg+'/'+scores);
        var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) { alert(wimg+'/'+scores);
           //document.getElementById("txtHint").innerHTML = this.responseText;
       }
       };
       xmlhttp.open("GET", "query7.php?score=" + scores + "&wimg=" + wimg +"", true);
       xmlhttp.send();
}
    else
    {
        $.ajax(
            {
                type:"get",
                url:"query7.php?score="+scores/*+"&time="+time*/,
                
                success:function()
                {
                    window.open();
                }
            })

    }
    // else if(last_score===5) wimg='2';l4_new.php?a1=\'+ ans[0] +\'&
    // else if(last_score===4) wimg='3';
    //var xmlhttp = new XMLHttpRequest();
   // xmlhttp.onreadystatechange = function() {
       // if (this.readyState == 5 && this.status == 200) {
            //document.getElementById("txtHint").innerHTML = this.responseText;
       // }
   // };
    //xmlhttp.open("GET", "query6.php?score=" + last_score /*+ "&try=" + retry*/ + "&time=" + time + "&wimg=" + wimg + "", true);
    //xmlhttp.send();
    
}