<%@ Page Language="VB" AutoEventWireup="false" CodeFile="quest-2.aspx.vb" Inherits="Levels_quest_2" %>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>المستوى 2 </title>
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
    <script src="../js/CountDownTimer.js"></script>

</head>
<body dir="rtl" style="font-family: 'Droid Sans Arabic'">
    <%-- style="background-image: url('images/Questback.png'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; height: 100%" --%>
    <form id="form1" runat="server" class="bg">
        <asp:ScriptManager runat="server"></asp:ScriptManager>

        <asp:UpdateProgress ID="UpdateProgress1" runat="server" AssociatedUpdatePanelID="UpdatePanel3">
            <ProgressTemplate>
                <div class="loadmodal">
                    <div class="centerload">
                        
                        <img src="../assets/images/loading2.gif" />
                        <asp:Label ID="lblLoading" runat="server" Text=" انتظر للتحميل"></asp:Label>
                    </div>
                </div>
            </ProgressTemplate>
        </asp:UpdateProgress>

        <nav class=" navbar-expand-lg  navbar navbar-dark bg-primary" style="font-family: 'Droid Sans Arabic'; font-size: x-large">
            <a class="navbar-brand" href="#">المستوى : 2</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="nav-item">

                <div class="w3-container" style="width: 300px; font-family: 'Droid Sans Arabic'">
                    <div class="w3-blue text-center ">
                        <asp:Panel ID="progBar" runat="server" CssClass="w3-green " Style="height: 24px; width: 10%"></asp:Panel>
                    </div>
                    <div class="w3-blue text-center ">
                        <asp:UpdatePanel ID="UpdatePanel2" runat="server">
                            <ContentTemplate>
                                <asp:Label ID="Txt_quest" runat="server" Text="0 / 9"></asp:Label>
                                <%--<asp:Label ID="txt_mark" runat="server" Text="0"></asp:Label>--%>
                            </ContentTemplate>

                        </asp:UpdatePanel>


                    </div>
                </div>
                <%--  --%>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <h5>الزمن المتبقى</h5>
                        <%--<asp:Timer ID="Timer1" runat="server" Interval="1000" OnTick="Timer1_Tick"></asp:Timer>--%>

                        <asp:UpdatePanel ID="timUpdatePanel" runat="server">
                            <Triggers>
                                <%--<asp:AsyncPostBackTrigger ControlID="Timer1" />--%>
                            </Triggers>
                            <ContentTemplate>

                               <asp:Label ID="lblCtime" runat="server" Font-Bold="True" Font-Names="Verdana" ForeColor="white"></asp:Label>
                            </ContentTemplate>
                        </asp:UpdatePanel>

                    </li>
                    <li>
                        <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h3>
                    </li>
                    <li>
                        
                                <asp:Label ID="LBL_tries" runat="server" ForeColor="White"></asp:Label>
                           
                    </li>
                    <li>
                        <h6>
                            <asp:Label ID="LBL_Code" runat="server" ForeColor="White"></asp:Label></h6>

                    </li>

                </ul>
                <asp:UpdatePanel ID="UpdatePanel1" runat="server">
                    <ContentTemplate>
                        <%--<asp:Label ID="LblCorrect" runat="server" Text="Label"></asp:Label>--%>
                    </ContentTemplate>
                </asp:UpdatePanel>
            </div>

        </nav>
        <br />

        <asp:UpdatePanel ID="UpdatePanel3" runat="server">
            <ContentTemplate>
                <%-- اسئلة الصواب والخطأ --%>
                <asp:Panel runat="server" ID="Q1panel">
                    <div class="text-right" style="padding-right: 30px">
                        <h3>عزيزي التلميذ... <br /> قم بالضغط على الإختيار <span style="color:mediumvioletred; font-weight:bold">"صواب"</span> إذا كانت العبارة صحيحة والضغط على الإختيار <span style="color:mediumvioletred; font-weight:bold">"خطأ"</span> إذا كانت العبارة خاطئة.</h3>
                    </div>

                    <div class="center">
                        <div class="text-center">
                            <h3 class=" text-center">1- لعمل حركة مستمرة للكائن على المنصة يمكن تركيب امر الحركة<span><img src="img/move10steps.png" /></span>عدة مرات.

                            </h3>
                        </div>
                        <div class="row center" style="border: none">
                            <div class="col-6">

                                <asp:ImageButton ID="ImageButton1" runat="server" ImageUrl="~/Levels/images/correct.png" CssClass="btn btn-success btn-lg" Width="100" Height="100" />

                            </div>
                            <div class="col-6">
                                <asp:ImageButton ID="ImageButton2" runat="server" ImageUrl="~/Levels/images/wrong.png" CssClass="btn btn-success btn-lg" Width="100" Height="100" />

                            </div>
                        </div>
                        <div class="row">

                            <br />
                            <br />

                            <br />
                        </div>
                    </div>

                </asp:Panel>
                <asp:Panel runat="server" ID="Q1pane2">
                    <div class="text-right" style="padding-right: 30px">
                        <h3>عزيزي التلميذ... <br /> قم بالضغط على الإختيار <span style="color:mediumvioletred; font-weight:bold">"صواب"</span> إذا كانت العبارة صحيحة والضغط على الإختيار <span style="color:mediumvioletred; font-weight:bold">"خطأ"</span> إذا كانت العبارة خاطئة.</h3>
                    </div>
                    <div class="center">
                        <div class="text-center">
                            <h3 class=" text-center">2- قيمة الانتظار في الأمر <span>
                                <img src="img/wait.png" /></span> 3ثواني ولايمكن تعديلها.
                            </h3>
                        </div>
                        <div class="row center" style="border: none">
                            <div class="col-6">
                                <%--<asp:Image ID="Image1" runat="server" ImageUrl="~/Levels/images/correct.png" CssClass="btn btn-success btn-lg" width="100" height="100" />--%>
                                <asp:ImageButton ID="ImageButton3" runat="server" ImageUrl="~/Levels/images/correct.png" CssClass="btn btn-success btn-lg" Width="100" Height="100" />
                                <%--<img src="images/correct.png" class="btn btn-success btn-lg" id="img1" runat="server" width="100" height="100" />--%>
                            </div>
                            <div class="col-6">
                                <asp:ImageButton ID="ImageButton4" runat="server" ImageUrl="~/Levels/images/wrong.png" CssClass="btn btn-success btn-lg" Width="100" Height="100" />
                                <%--<asp:Image ID="Image2" runat="server" ImageUrl="~/Levels/images/wrong.png" CssClass="btn btn-success btn-lg" width="100" height="100" />--%>
                                <%--<img src="images/wrong.png" class="btn btn-success btn-lg" id="img2" runat="server" width="100" height="100" />--%>
                            </div>
                        </div>
                        <div class="row">
                            <br />
                            <br />
                            <br />

                        </div>
                    </div>


                </asp:Panel>
                <asp:Panel runat="server" ID="Q1pane3">
                    <div class="text-right" style="padding-right: 30px">
                       <h3>عزيزي التلميذ... <br /> قم بالضغط على الإختيار <span style="color:mediumvioletred; font-weight:bold">"صواب"</span> إذا كانت العبارة صحيحة والضغط على الإختيار <span style="color:mediumvioletred; font-weight:bold">"خطأ"</span> إذا كانت العبارة خاطئة.</h3>
                    </div>
                    <div class="center">
                        <div class="text-center">
                            <h3 class=" text-center">3- يمكن وضع صورة من ملف كخلفية للمنصة.

                            </h3>
                        </div>
                        <div class="row center" style="border: none">
                            <div class="col-6">
                                <%--<asp:Image ID="Image1" runat="server" ImageUrl="~/Levels/images/correct.png" CssClass="btn btn-success btn-lg" width="100" height="100" />--%>
                                <asp:ImageButton ID="ImageButton5" runat="server" ImageUrl="~/Levels/images/correct.png" CssClass="btn btn-success btn-lg" Width="100" Height="100" />
                                <%--<img src="images/correct.png" class="btn btn-success btn-lg" id="img1" runat="server" width="100" height="100" />--%>
                            </div>
                            <div class="col-6">
                                <asp:ImageButton ID="ImageButton6" runat="server" ImageUrl="~/Levels/images/wrong.png" CssClass="btn btn-success btn-lg" Width="100" Height="100" />
                                <%--<asp:Image ID="Image2" runat="server" ImageUrl="~/Levels/images/wrong.png" CssClass="btn btn-success btn-lg" width="100" height="100" />--%>
                                <%--<img src="images/wrong.png" class="btn btn-success btn-lg" id="img2" runat="server" width="100" height="100" />--%>
                            </div>
                        </div>
                        <div class="row">

                            <br />
                            <br />

                            <br />
                        </div>
                    </div>
                </asp:Panel>
                <asp:Panel runat="server" ID="Q1pane4">
                    <div class="text-right" style="padding-right: 30px">
                        <h3>عزيزي التلميذ... <br /> قم بالضغط على الإختيار <span style="color:mediumvioletred; font-weight:bold">"صواب"</span> إذا كانت العبارة صحيحة والضغط على الإختيار <span style="color:mediumvioletred; font-weight:bold">"خطأ"</span> إذا كانت العبارة خاطئة.</h3>
                    </div>
                    <div class="center">
                        <div class="text-center">
                            <h3 class=" text-center">
                                4- لا يمكن التحكم فى اتجاة دوران الكائن أثناء التصميم.

                            </h3>
                        </div>
                        <div class="row center" style="border: none">
                            <div class="col-6">
                                <%--<asp:Image ID="Image1" runat="server" ImageUrl="~/Levels/images/correct.png" CssClass="btn btn-success btn-lg" width="100" height="100" />--%>
                                <asp:ImageButton ID="ImageButton7" runat="server" ImageUrl="~/Levels/images/correct.png" CssClass="btn btn-success btn-lg" Width="100" Height="100" />
                                <%--<img src="images/correct.png" class="btn btn-success btn-lg" id="img1" runat="server" width="100" height="100" />--%>
                            </div>
                            <div class="col-6">
                                <asp:ImageButton ID="ImageButton8" runat="server" ImageUrl="~/Levels/images/wrong.png" CssClass="btn btn-success btn-lg" Width="100" Height="100" />
                                <%--<asp:Image ID="Image2" runat="server" ImageUrl="~/Levels/images/wrong.png" CssClass="btn btn-success btn-lg" width="100" height="100" />--%>
                                <%--<img src="images/wrong.png" class="btn btn-success btn-lg" id="img2" runat="server" width="100" height="100" />--%>
                            </div>
                        </div>
                        <div class="row">
                            <br />
                            <br />
                            <br />

                        </div>
                    </div>


                </asp:Panel>
                <%-- اسئلة الاختياري --%>
                <asp:Panel runat="server" ID="Q1pane5">
                    <div class="text-center" style="padding-right: 30px">
                        <h2>اختر الاجابة الصحيحة
                        </h2>
                    </div>
                    <div class="center">
                        <div class="text-center">
                            <h3 class="text-right">1- تمكنك ............ من إضافةخلفية للمنصة.
                            </h3>
                        </div>
                        <div>
                            <h3 class=" w3-padding-large ">
                                <asp:RadioButtonList ID="RadioButtonList1" runat="server" CssClass="text-right custom-radio">
                                    <asp:ListItem Value="1">منطقة المنصة.</asp:ListItem>
                                    <asp:ListItem Value="2">الكائن.</asp:ListItem>
                                    <asp:ListItem Value="3">منطقةالبرمجة.</asp:ListItem>
                                    <asp:ListItem Value="4">خلفية المنصة.</asp:ListItem>
                                </asp:RadioButtonList>
                            </h3>
                        </div>
                        <div class="row align-content-center" style="border: none">
                            <div class="col-6">
                                <asp:Button ID="ImageButton9" runat="server" CssClass="btn btn-success btn-lg" Width="100" Height="100" Text="التالي" />
                            </div>

                        </div>
                        <div class="row">
                            <br />
                            <br />
                            <br />

                        </div>
                    </div>

                </asp:Panel>

                <asp:Panel runat="server" ID="Q1pane6">
                    <div class="text-right" style="padding-right: 30px">
                        <h2>اختر الاجابة الصحيحة
                        </h2>
                    </div>
                    <div class="center">
                        <div class="text-center">
                            <h3 class=" text-center">2- يستخدم أمر .......... لتكرار مقطع برمجي (5) مرات.
                            </h3>
                        </div>
                        <div>
                            <h3 class=" w3-padding-large ">
                                <asp:RadioButtonList ID="RadioButtonList2" runat="server" CssClass="text-right custom-radio">
                                    <asp:ListItem Value="1">Repeat.</asp:ListItem>
                                    <asp:ListItem Value="2">Add Comment.</asp:ListItem>
                                    <asp:ListItem Value="3">Move.</asp:ListItem>
                                    <asp:ListItem Value="4">Forever .</asp:ListItem>
                                </asp:RadioButtonList>
                            </h3>
                        </div>
                        <div class="row align-content-center " style="border: none">
                            <div class="col-6">
                                <asp:Button ID="ImageButton11" runat="server" CssClass="btn btn-success btn-lg" Width="100" Height="100" Text="التالي" />
                            </div>

                        </div>
                        <div class="row">
                            <br />
                            <br />
                            <br />

                        </div>
                    </div>

                </asp:Panel>

                <asp:Panel runat="server" ID="Q1pane7">
                    <div class="text-right" style="padding-right: 30px">
                        <h2>اختر الاجابة الصحيحة
                        </h2>
                    </div>
                    <div class="center">
                        <div class="text-center">
                            <h3 class=" text-center">3- ..............المقطع البرمجي للمشروع نستخدم الحدث<span><img src="img/start.png" /></span>في بدايةالمقطع
                            </h3>
                        </div>
                        <div>
                            <h3 class=" w3-padding-large ">
                                <asp:RadioButtonList ID="RadioButtonList3" runat="server" CssClass="text-right custom-radio">
                                    <asp:ListItem Value="1">لتنفيذ.</asp:ListItem>
                                    <asp:ListItem Value="2"> لإيقاف.</asp:ListItem>
                                    <asp:ListItem Value="3">لحذف.</asp:ListItem>
                                    <asp:ListItem Value="4">لنسخ .</asp:ListItem>
                                </asp:RadioButtonList>
                            </h3>
                        </div>
                                                <div class="row align-content-center" style="border: none">


                            <div class="col-6">

                                <asp:Button ID="Button3" runat="server" CssClass="btn btn-success btn-lg" Width="100" Height="100" Text="التالي" />

                            </div>

                        </div>
                        <div class="row">
                            <br />
                            <br />
                            <br />

                        </div>
                    </div>

                </asp:Panel>
                <asp:Panel runat="server" ID="Q1pane8">
                    <div class="text-right" style="padding-right: 30px">
                        <h2>اختر الاجابةالصحيحة
                        </h2>
                    </div>
                    <div class="center">
                        <div class="text-center">
                            <h3 class=" text-center">4.	تحتوى مجموعة .....على Blocks تستخدم فى حركة الكائنات على المنصة.
                            </h3>
                        </div>
                        <div>
                            <h3>
                                <h3 class=" w3-padding-large ">
                                    <asp:RadioButtonList ID="RadioButtonList4" runat="server" CssClass="text-right custom-radio">
                                        <asp:ListItem Value="1">Events.</asp:ListItem>
                                        <asp:ListItem Value="2"> Motion.</asp:ListItem>
                                        <asp:ListItem Value="3">Control.</asp:ListItem>
                                        <asp:ListItem Value="4">Looks.</asp:ListItem>
                                    </asp:RadioButtonList>
                                </h3>
                        </div>
                                                <div class="row align-content-center" style="border: none">


                            <div class="col-6">

                                <asp:Button ID="Button4" runat="server" CssClass="btn btn-success btn-lg" Width="100" Height="100" Text="التالي" />

                            </div>

                        </div>
                        <div class="row">
                            <br />
                            <br />
                            <br />

                        </div>
                    </div>

                </asp:Panel>
                <asp:Panel runat="server" ID="Q1pane9">
                    <div class="text-right" style="padding-right: 30px">
                        <h2>اختر الاجابة الصحيحة
                        </h2>
                    </div>
                    <div class="center">
                        <div class="text-center">
                            <h3 class=" text-center">5.	الأمر البرمجي .......يحدد نقطة انتقال الكائن لمكان معين علي المنصة                            </h3>
                        </div>
                        <div>
                            <h3 class=" w3-padding-large ">
                                <asp:RadioButtonList ID="RadioButtonList5" runat="server" CssClass="text-right custom-radio">
                                    <asp:ListItem Text='<img src="img/move10steps.png" />' Value="1" />
<asp:ListItem Text='<img src="img/point.png" />' Value="2" />
<asp:ListItem Text='<img src="img/turn.png" />' Value="3" />
<asp:ListItem Text='<img src="img/goto.png" />' Value="4" />
                                    <%--<asp:ListItem><img src="img/move10steps.png" /></asp:ListItem>
                                    <asp:ListItem> <img src="img/point.png" /></asp:ListItem>
                                    <asp:ListItem><img src="img/turn.png" /></asp:ListItem>
                                    <asp:ListItem><img src="img/goto.png" /></asp:ListItem>--%>
                                </asp:RadioButtonList>
                            </h3>
                        </div>
                                                <div class="row align-content-center" style="border: none">


                            <div class="col-6">

                                <asp:Button ID="Button5" runat="server" CssClass="btn btn-success btn-lg" Width="100" Height="100" Text="التالي" />
                                
                            </div>
                            <div class="col-6">
                            </div>
                        </div>
                        <div class="row">
                            <br />
                            <br />
                            <br />

                        </div>
                    </div>

                </asp:Panel>

          
                <asp:Panel runat="server" ID="Q1pane11">

                    <div class="center" style="padding: 0px">
                        <div class="text-center">
                            <h1>نتيجة حل الألغاز</h1>
                            <div class="row justify-content-center" style="width: 100%">
                                <asp:Image ID="img_gold" runat="server" ImageUrl="~/Levels/images/Gold.png" Width="250" Height="250" />


                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h3>
                                        <asp:Label ID="Lbl_totalCorrect" runat="server" Text=""></asp:Label>
                                </div>
                                <div class="col-6">
                                    <h3>
                                        <asp:Label ID="Lbl_totalMark" runat="server" Text=""></asp:Label>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center" style="border: none">
                            <asp:Button ID="btn_ans" runat="server" Text="عرض الأجوبة" CssClass="btn btn-primary" />
                            <asp:Button ID="Btn_retry" runat="server" Text="أعد المحاولة" CssClass="btn btn-primary" />
                            <asp:Button ID="Btn_next" runat="server" Text="التالي" CssClass="btn btn-success " />
                        </div>

                    </div>
                </asp:Panel>
            </ContentTemplate>
        </asp:UpdatePanel>

    </form>
    <div class="footer">
        <p></p>
    </div>
</body>
</html>
