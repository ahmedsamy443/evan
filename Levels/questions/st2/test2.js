let questions = document.querySelectorAll('.ques');
let previousBtns = document.querySelectorAll('.previous');
let nextBtns = document.querySelectorAll('.next');
console.log(nextBtns[0])
let inputRadio = document.querySelectorAll('.form-check-input');
questions[0].classList.add('show');
previousBtns[0].style.display='none';

let num = 1;
let result = '';
let question_id = 0;
let questions_id = [];
let results = [];
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
    btn.addEventListener('click', function () {
        
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
               // console.log(results)
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
    var fiveMinutes = 60 * 15,
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



    document.getElementsByClassName("next")[28].innerHTML ="تسليم";
   //console.log(cccc)




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
let submit=nextBtns[nextBtns.length -1];




submit.onclick = function(){
    
    
    $( document ).ready(function() {
     //  var jsonString = JSON.stringify(results);

        // console.log("asdddddddd"+results)
       $.ajax({
             
        type:"post",
        url:"inserting.php",
        data:{data:results},
        
        success:function(res)
        {
            let show = document.querySelector('.show');
            questions[28].classList.remove('show');
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'عزيزي التلميذ ..... لقد انتهيت من اداء المقياس ......شكرا لك',
                width:200,
                timer:10000,
                showConfirmButton: false,
              })
        }
       })
    });

}
    }
    
