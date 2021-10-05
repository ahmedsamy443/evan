
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>المستوى 1 | حل الألغاز</title>
    <script src="https://kit.fontawesome.com/28ae82ec32.js"></script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../w3.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../Fonts/EARLY_ACCESS.css" rel="stylesheet" />
    <link href="LevelStyle.css" rel="stylesheet" />
    <link href="css/Bootstratp.min.css" rel="stylesheet" />
    <link href="../css/loading.css" rel="stylesheet" />
    <!--script src="../js/CountDownTimer.js"></script-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <style>
        .hiddenCls{
            display:none;
        }
    </style>

</head>
<body dir="rtl" style="font-family: 'Droid Sans Arabic'">
    <form id="form1" runat="server" class="bg">
        <asp:ScriptManager runat="server"></asp:ScriptManager>

        <
            <UpdateProgress id="UpdateProgress1" AssociatedUpdatePanelID="UpdatePanel3">
            <ProgressTemplate>
                <div class="loadmodal">
                    <div class="centerload">
                        <img src="../assets/images/loading2.gif" />
                        <Label ID="lblLoading" Text=" انتظر للتحميل"><Label>
                    </div>
                </div>
            </ProgressTemplate>
            <ProgressTemplate>

            </ProgressTemplate>
        </UpdateProgress>

        <nav class=" navbar-expand-lg  navbar navbar-dark bg-primary" style="font-family: 'Droid Sans Arabic'; font-size: x-large">
            <a class="navbar-brand" href="#">المستوى : 1</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="nav-item">

                <div class="w3-container" style="width: 300px; font-family: 'Droid Sans Arabic'">
                    <div class="w3-blue text-center ">
                        <Panel ID="progBar" runat="server" CssClass="w3-green " Style="height: 24px;width:0"><Panel>
                    </div>
                    <div class="w3-blue text-center ">
                        <UpdatePanel ID="UpdatePanel2">
                            <ContentTemplate>
                                <Label ID="Txt_quest" runat="server" Text="0 / 10"></Label>

                                <span id="Txt_quest" style="display:none;">0 / 10</span>
                            </ContentTemplate>

                        </UpdatePanel>


                    </div>
                </div>
            
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <h5>الزمن المتبقى</h5>
                        <Timer id="Timer1" Interval="1000" OnTick="Timer1_Tick"></Timer>

                         <h5>الزمن المتبقى
                                 <Label ID="lblCtime"  Font-Bold="True" Font-Names="Verdana" ForeColor="white"></Label></h5>
                         
                    </li>
                    <li>
                        <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h3>
                    </li>
                    <li>
                        <UpdatePanel ID="UpdatePanel4">
                            <ContentTemplate>
                                <Label ID="LBL_tries" ForeColor="White"></Label>
                                <Label ID="Label1"  Text="Label" visible="false"></Label>
                            </ContentTemplate>
                        </UpdatePanel>


                    </li>
                    <li>
                        <h6>
                            <Label ID="LBL_Code"  ForeColor="White"></Label></h6>

                    </li>

                </ul>
                <asp:UpdatePanel ID="UpdatePanel1">
                    <ContentTemplate>
                        <Label ID="LblCorrect"  Text="Label"></Label>
                    </ContentTemplate>
                </asp:UpdatePanel>
            </div>

        </nav>
        <br />
        <div class="text-right" style="padding-right: 30px">
            <h3>عزيزي التلميذ...
                <br />
                قم بالضغط على الإختيار <span style="color: mediumvioletred; font-weight: bold">"صواب"</span> إذا كانت العبارة صحيحة والضغط على الإختيار <span style="color: mediumvioletred; font-weight: bold">"خطأ"</span> إذا كانت العبارة خاطئة.</h3>
        </div>
        <asp:UpdatePanel ID="UpdatePanel3" runat="server">
            <ContentTemplate>

                <div id="Q1pane1result" style="display:none;">
                    <div class="center" style="padding: 0px">
                        <div class="text-center">
                            <h1>نتيجة حل الألغاز</h1>
                            <div class="row justify-content-center" style="width: 100%">
                                <Image ID="img_gold"  ImageUrl="~/Levels/images/Gold.png" Width="400" Height="400" />
                                <img src="../Levels/images/Gold.png" id="img_gold"  style="width:400px; height:400px;" />
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h3><Label ID="Lbl_totalCorrect"  Text=""></asp:Label></h3>
                                    <h3><span id="Lbl_totalCorrect"></span></h3>
                                </div>
                                <div class="col-6">
                                    <h3><Label ID="Lbl_totalMark" runat="server" Text=""></Label></h3>
                                    <h3><span id="Lbl_totalMark"></span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center" style="border: none">
                            <a href="quest1sol.aspx?quiz_id=<%= request("quiz_id") %>" id="btn_ans" class="btn btn-primary hiddenCls" >عرض الأجوبة</a>
                            <a href="javascript://" id="Btn_retry" onclick="location.reload();" class="btn btn-primary hiddenCls" >أعد المحاولة</a>
                            <a href="../Dashboard.aspx" id="Btn_next"  class="btn btn-success" >التالى</a>
                        </div>

                    </div>
                </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            </ContentTemplate>
        </asp:UpdatePanel>

    </form>
<%--    <div class="footer" style="display:none;">
        <p></p>
    </div>--%>
    



   



</body>

</html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   
     <script type="text/javascript" language="javascript">




         // Set the date we're counting down to

         // Update the count down every 1 second
         var remainingTime = 5;
         var minutes = 5;
         var seconds = 0;
         var currattem = 0;
         var days = 0;
         var hours = 0;
         var x
         $.ajax({
             type: "POST",
             url: "quest1.aspx/getst_Level1_remaining_time",
             data: "{'St_Id': '<%= Session("st_code")%>', 'Q_Id':'<%= Request("quiz_id") %>'}",
             contentType: "application/json; charset=utf-8",
             dataType: "json",
             async: false,
             success: function (response) {

                 remainingTime = response.d[0];

                 checkPanelStatus(response.d[1]);
                 currattem = response.d[1];

             },
             failure: function (response) {
                  
                 alert("failure");
             },
             error: function (response) {
                 
                 alert("error");
             }
         });
         if (currattem < 3) {
             var countDownDate = new Date(new Date().getTime() + remainingTime * 60000);
             x = setInterval(function () {

                 // Get today's date and time
                 var now = new Date().getTime();
                 //alert(now)
                 // Find the distance between now and the count down date
                 var distance = countDownDate - now;

                 // Time calculations for days, hours, minutes and seconds
                 //var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                 //var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                 minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                 seconds = Math.floor((distance % (1000 * 60)) / 1000);

                 // Output the result in an element with id="demo"
                 //document.getElementById("<%= lblCtime.ClientID%>").innerHTML  = days + ":" + hours + "h "
                 //+ minutes + "m " + seconds + "s ";







                 document.getElementById("<%= lblCtime.ClientID%>").innerHTML = minutes + ":" + seconds;



                 // If the count down is over, write some text 
                 if (distance <= 0) {
                     clearInterval(x);
                     Swal.fire(
                        'تنبيه!',
                        'لقد تخطيت الوقت المسموح به للإجابه!',
                        'warning'
                      )
                 }
             }, 1000);
         } else {
             document.getElementById("<%= lblCtime.ClientID%>").innerHTML = "لقد استنزفت عدد المحاولات";
         }
         function ActionofSelected(progress_width, currpnl_id, nxtpnl_id, answer, choiceanswer, totalQuistions) {
            var progBar = document.getElementById('<%= progBar.ClientID%>');
             progBar.style.width = progress_width + "%";

              //alert(progress_width)

             $("#Txt_quest").text((progress_width / totalQuistions) + " / " + totalQuistions);
            $("#Txt_quest").show();
            $('#<%= progBar.ClientID%>').show();
             if (progress_width/10 >= totalQuistions ) {
                  
                 $(currpnl_id).hide();
                 $("#Q1pane11").show();
                 $("#Q1pane1result").show();
                 //alert(currpnl_id)
 
                   //إظهار النتيجه
 
                   $.ajax({
                       type: "POST",
                       url: "quest1.aspx/studentResult",
                       data: "{'St_Id': '<%= Session("st_code")%>', 'Q_id':'<%= Request("quiz_id")%>'}",
                       contentType: "application/json; charset=utf-8",
                       dataType: "json",
                       success: function (response) {
                           $("#img_gold").attr("src", response.d[2]);
                           $("#Lbl_totalCorrect").text("الاسئلة الصحيحة : " + response.d[1]);
                           $("#Lbl_totalMark").text(" الأسئلة الخاطئة : " + 10 - response.d[0]);


                           if (response.d[0] == 10) {
                               $("#Btn_retry").hide();
                           }
                           if (response.d[0] <= 9 && response.d[0] >= 7 ){
                               $("#btn_ans").removeClass("hiddenCls");
                           }
                           if (response.d[0] <= 6) {
                               $("#btn_ans").hide();
                               $("#Btn_retry").removeClass("hiddenCls");
                           }

                       },
                       failure: function (response) {
                           alert("failure");
                       },
                       error: function (response) {
                           alert(response.responseText);
                       }
                 });



                   clearInterval(x);
                   var remainingTime = minutes + (seconds / 60) //$('#<%= lblCtime.ClientID%>').text();
                   //alert(remainingTime)
                   $.ajax({
                       type: "POST",
                       url: "quest1.aspx/SetQLvlRemainingTime",
                       data: "{'St_Id': '<%= Session("st_code")%>', 'st_Level1_remaining_time':'" + remainingTime + "', 'Q_Id':'<%= Request("quiz_id")%>'}",
                       contentType: "application/json; charset=utf-8",
                       dataType: "json",
                       success: function (response) {
                           checkPanelStatus(response.d[1])
                       },
                       failure: function (response) {
                           alert("failure");
                       },
                       error: function (response) {
                           alert(response.responseText);
                       }
                   });
               } else {
                   $(currpnl_id).hide();
                   $(nxtpnl_id).show();
                 //alert(nxtpnl_id)

                   var aid = $(currpnl_id).data("aid");
                   var degree = (answer == choiceanswer? 1 : 0);
                   //alert(degree);
                    $.ajax({
                       type: "POST",
                       url: "quest1.aspx/nextquest",
                       data: "{'st_code': '<%= Session("st_code")%>', 'answer':'" + (choiceanswer == 0 ? false : true) + "','degree':'" + degree + "', 'q_id':'<%= Request("quiz_id") %>', 'a_id':'" + aid + "'}",
                       contentType: "application/json; charset=utf-8",
                       success: function (response) {},
                       failure: function (response) {
                           alert("failure");
                       },
                       error: function (response) {
                           alert(response.responseText);
                       }
                   });





               }
           }

 

           function checkPanelStatus(currattempt) {
               if (currattempt >= 3) {
                   window.location.href = "quest1sol.aspx?quiz_id=<%= Request("quiz_id")%>";
               }
           }


           //$(function () {
           //    $(document).on("click", ".btn_true", function (e) {
           //        document.querySelector("#Q1panel").style.display = "none";
           //        //document.querySelector("#Q1pane2").style.display = "none";
           //        //document.querySelector("#Q1pane3").style.display = "none";
           //        //document.querySelector("#Q1pane4").style.display = "none";
           //        //document.querySelector("#Q1pane5").style.display = "none";
           //        //document.querySelector("#Q1pane6").style.display = "none";
           //        //document.querySelector("#Q1pane7").style.display = "none";
           //        //document.querySelector("#Q1pane8").style.display = "none";
           //        //document.querySelector("#Q1pane9").style.display = "none";
           //        //document.querySelector("#Q1pane10").style.display = "none";
           //        //document.querySelector($(this).data("previewection")).style.display = "block";
           //        alert($(this).data("previewection"));
           //    })
           //})


   </script>