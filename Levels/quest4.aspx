<%@ Page Language="VB" AutoEventWireup="false" CodeFile="quest4.aspx.vb" Inherits="Levels_quest4" %>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>المستوى 4 </title>
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
            <a class="navbar-brand" href="#">المستوى : 4</a>
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
                                <asp:Label ID="Txt_quest" runat="server" Text="0 / 6"></asp:Label>
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
                        <asp:UpdatePanel ID="UpdatePanel4" runat="server">
                            <ContentTemplate>
                                <asp:Label ID="LBL_tries" runat="server" ForeColor="White"></asp:Label>
                            </ContentTemplate>
                        </asp:UpdatePanel>


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

                <%-- q1 --%>
                <asp:Panel runat="server" ID="Q1panel">
                    <div class="text-center" style="padding-right: 30px">
                        <h4>اختر الاجابةالصحيحة
                        </h4>
                    </div>
                    <div class="center">
                        <div class="text-center">
                            <h3 class="text-right">1.	الأمر Say  ينتمي للمجموعة(.........).
                            </h3>
                        </div>
                        <div>
                            <h3 class=" w3-padding-large ">
                                <asp:RadioButtonList ID="R1" runat="server" CssClass="text-right custom-radio">
                                    <asp:ListItem Value="1">Pen</asp:ListItem>
                                    <asp:ListItem Value="2">Sensing</asp:ListItem>
                                    <asp:ListItem Value="3">looks</asp:ListItem>
                                    <asp:ListItem Value="4">events</asp:ListItem>

                                </asp:RadioButtonList>
                            </h3>
                        </div>
                        <div class="row align-content-center" style="border: none">
                            <div class="col-6">
                                <asp:Button ID="b1" runat="server" CssClass="btn btn-success btn-lg" Width="100" Height="100" Text="التالي" />
                            </div>

                        </div>
                        <div class="row">
                            <br />
                            <br />
                            <br />

                        </div>
                    </div>

                </asp:Panel>
                <%-- q2 --%>
                <asp:Panel runat="server" ID="Q1pane2">
                    <div class="text-center" style="padding-right: 30px">
                        <h4>اختر الاجابةالصحيحة
                        </h4>
                    </div>
                    <div class="center">
                        <div class="text-center">
                            <h3 class="text-right">2. لإظهار رسالة" السلام عليكم" ثم تختفي نستخدم لبنة.............
                            </h3>
                        </div>
                        <div>
                            <h3 class=" w3-padding-large ">
                                <asp:RadioButtonList ID="R2" runat="server" CssClass="text-right custom-radio">
                                    <asp:ListItem Text='<img src="images/4/01.png" />' Value="1" />
                                    <asp:ListItem Text='<img src="images/4/02.png" />' Value="2" />
                                    <asp:ListItem Text='<img src="images/4/03.png" />' Value="3" />
                                    <asp:ListItem Text='<img src="images/4/04.png" />' Value="4" />

                                </asp:RadioButtonList>
                            </h3>
                        </div>
                        <div class="row align-content-center" style="border: none">
                            <div class="col-6">
                                <asp:Button ID="b2" runat="server" CssClass="btn btn-success btn-lg" Width="100" Height="100" Text="التالي" />
                            </div>

                        </div>
                        <div class="row">
                            <br />
                            <br />
                            <br />

                        </div>
                    </div>

                </asp:Panel>
                <%-- q3 --%>
                <asp:Panel runat="server" ID="Q1pane3">
                    <div class="text-center" style="padding-right: 30px">
                        <h4>اختر الاجابةالصحيحة
                        </h4>
                    </div>
                    <div class="center">
                        <div class="text-center">
                            <h3 class="text-right">3. لإخفاء الكائن من على المنصة نستخدم لبنة.............
                            </h3>
                        </div>
                        <div>
                            <h3 class=" w3-padding-large ">
                                <asp:RadioButtonList ID="R3" runat="server" CssClass="text-right custom-radio">
                                    <asp:ListItem Text='<img src="images/4/05.png" />' Value="1" />
                                    <asp:ListItem Text='<img src="images/4/06.png" />' Value="2" />
                                    <asp:ListItem Text='<img src="images/4/07.png" />' Value="3" />
                                    <asp:ListItem Text='<img src="images/4/08.png" />' Value="4" />

                                </asp:RadioButtonList>
                            </h3>
                        </div>
                        <div class="row align-content-center" style="border: none">
                            <div class="col-6">
                                <asp:Button ID="b3" runat="server" CssClass="btn btn-success btn-lg" Width="100" Height="100" Text="التالي" />
                            </div>

                        </div>
                        <div class="row">
                            <br />
                            <br />
                            <br />

                        </div>
                    </div>

                </asp:Panel>
                <%-- q4 --%>
                <asp:Panel runat="server" ID="Q1pane4">
                    <div class="text-center" style="padding-right: 30px">
                        <h4>اختر الاجابةالصحيحة
                        </h4>
                    </div>
                    <div class="center">
                        <div class="text-center">
                            <h3 class="text-right">4.	مجموعة تحتوي على لبنات لتحديد مظاهر الكائنات
                            </h3>
                        </div>
                        <div>
                            <h3 class=" w3-padding-large ">
                                <asp:RadioButtonList ID="R4" runat="server" CssClass="text-right custom-radio">
                                    <asp:ListItem Value="1">Sencing</asp:ListItem>
                                    <asp:ListItem Value="2">Looks</asp:ListItem>
                                    <asp:ListItem Value="3">Sound</asp:ListItem>
                                    <asp:ListItem Value="4">Pen</asp:ListItem>

                                </asp:RadioButtonList>
                            </h3>
                        </div>
                        <div class="row align-content-center" style="border: none">
                            <div class="col-6">
                                <asp:Button ID="B4" runat="server" CssClass="btn btn-success btn-lg" Width="100" Height="100" Text="التالي" />
                            </div>

                        </div>
                        <div class="row">
                            <br />
                            <br />
                            <br />

                        </div>
                    </div>

                </asp:Panel>

                <%-- q5 --%>
                <asp:Panel runat="server" ID="Q1pane5">
                    <div class="text-center" style="padding-right: 30px">
                        <h4>اختر الاجابةالصحيحة
                        </h4>
                    </div>
                    <div class="center">
                        <div class="text-center">
                            <h3 class="text-right">لإظهار هذا النمط من الرسائل لمدة (2) ثانية<span><img src="images/4/00.png" width="50" height="70" /></span>نستخدم لبنة 
                            </h3>
                        </div>
                        <div>
                            <h3 class=" w3-padding-large ">
                                <asp:RadioButtonList ID="R5" runat="server" CssClass="text-right custom-radio">
                                    <asp:ListItem Text='<img src="images/4/09.png" />' Value="1" />
                                    <asp:ListItem Text='<img src="images/4/10.png" />' Value="2" />
                                    <asp:ListItem Text='<img src="images/4/11.png" />' Value="3" />
                                    <asp:ListItem Text='<img src="images/4/12.png" />' Value="4" />

                                </asp:RadioButtonList>
                            </h3>
                        </div>
                        <div class="row align-content-center" style="border: none">
                            <div class="col-6">
                                <asp:Button ID="b5" runat="server" CssClass="btn btn-success btn-lg" Width="100" Height="100" Text="التالي" />
                            </div>

                        </div>
                        <div class="row">
                            <br />
                            <br />
                            <br />

                        </div>
                    </div>

                </asp:Panel>

                <%-- q6 --%>
                <asp:Panel runat="server" ID="Q1pane6">
                    <div class="text-center" style="padding-right: 30px">
                        <h4>اختر الاجابةالصحيحة
                        </h4>
                    </div>
                    <div class="center">
                        <div class="text-center">
                            <h3 class="text-right">6.	لظهور الكائن على المنصة نستخدم لبنة...................
                            </h3>
                        </div>
                        <div>
                            <h3 class=" w3-padding-large ">
                                <asp:RadioButtonList ID="R6" runat="server" CssClass="text-right custom-radio">
                                    <asp:ListItem Text='<img src="images/4/05.png" />' Value="1" />
                                    <asp:ListItem Text='<img src="images/4/06.png" />' Value="2" />
                                    <asp:ListItem Text='<img src="images/4/13.png" />' Value="3" />
                                    <asp:ListItem Text='<img src="images/4/08.png" />' Value="4" />

                                </asp:RadioButtonList>
                            </h3>
                        </div>
                        <div class="row align-content-center" style="border: none">
                            <div class="col-6">
                                <asp:Button ID="b6" runat="server" CssClass="btn btn-success btn-lg" Width="100" Height="100" Text="التالي" />
                            </div>

                        </div>
                        <div class="row">
                            <br />
                            <br />
                            <br />

                        </div>
                    </div>

                </asp:Panel>
                <%-- result --%>
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
