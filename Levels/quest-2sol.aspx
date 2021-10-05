<%@ Page Language="VB" AutoEventWireup="false" CodeFile="quest-2sol.aspx.vb" Inherits="Levels_quest_2sol" %>

<%@ Import Namespace="System.Data" %>

<%@ Import Namespace="System.Data.SqlClient" %>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>أجوبة المستوى الثاني</title>
    <script src="https://kit.fontawesome.com/28ae82ec32.js"></script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../w3.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../Fonts/EARLY_ACCESS.css" rel="stylesheet" />
    <link href="LevelStyle.css" rel="stylesheet" />
    <link href="css/Bootstratp.min.css" rel="stylesheet" />
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }

        .loadmodal {
            position: fixed;
            z-index: 999;
            height: 100%;
            width: 100%;
            top: 0;
            background-color: Black;
            filter: alpha(opacity=60);
            opacity: 0.6;
            -moz-opacity: 0.8;
        }

        .centerload {
            z-index: 1000;
            margin: 200px auto;
            padding: 10px;
            width: 150px;
            background-color: White;
            border-radius: 10px;
            filter: alpha(opacity=100);
            opacity: 1;
            -moz-opacity: 1;
        }

            .centerload img {
                height: 128px;
                width: 128px;
            }

        body, html {
            height: 100%;
        }

        .bg {
            /* The image used */
            background-image: url("background2020.png");
            /* Full height */
            height: 100%;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Droid Sans Arabic';
        }

        span.green {
            border-radius: 0.8em;
            -moz-border-radius: 0.8em;
            -webkit-border-radius: 0.8em;
            color: #ffffff;
            display: inline-block;
            font-weight: bold;
            line-height: 1.6em;
            margin-right: 15px;
            text-align: center;
            width: 1.6em;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
        }

        .center {
            margin: auto;
            width: 50%;
            border: 3px solid green;
            padding: 70px 0px;
            text-align: center;
            border: 3px solid green;
        }
    </style>
</head>

<body dir="rtl" style="font-family: 'Droid Sans Arabic'">

    <form id="form1" runat="server" class="bg">
        &nbsp;<asp:ScriptManager runat="server"></asp:ScriptManager>
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
        <br />
        <asp:UpdatePanel ID="UpdatePanel3" runat="server">
            <ContentTemplate>
                <asp:Panel runat="server" ID="Q1panel">
                    <div class="text-right" style="padding-right: 30px">
                        </h4>
                    </div>
                    <div class="center">
                        <div class="text-right">
                            <!--
                            <h4 class=" text-right">1- لعمل حركة مستمرة للكائن على المنصة يمكن تركيب امر الحركة<span><img src="img/move10steps.png" /></span>عدة مرات. (<span style="color: green">صواب</span>)</h4>
                            <h4 class=" text-right">2- قيمة الانتظار في الأمر <span><img src="img/wait.png" /></span> 3ثواني ولايمكن تعديلها.(<span style="color: red">خطأ</span>)</h4>
                            <h4 class=" text-right">3- يمكن وضع صورة من ملف كخلفية للمنصة.(<span style="color: green">صواب</span>)</h4>
                            <h4 class=" text-right">4- لا يمكن التحكم فى اتجاة دوران الكائن أثناء التصميم(<span style="color: red">خطأ</span>)</h4>
                             
                            
                            <h4 class="text-right">5- تمكنك (<span style="color: green">خلفية المنصة</span>) من إضافةخلفية للمنصة.</h4>
                            <h4 class=" text-right">6- يستخدم أمر (<span style="color: green">Repeat</span>) لتكرار مقطع برمجي (5) مرات.</h4>
                            <h4 class=" text-right">7- (<span style="color: green">لتنفيذ</span>)المقطع البرمجي للمشروع نستخدم الحدث<span><img src="img/start.png" /></span>في بدايةالمقطع</h4>
                            <h4 class=" text-right">8-	تحتوى مجموعة (<span style="color: green">Motion</span>)على Blocks تستخدم فى حركة الكائنات على المنصة.</h4>
                            <h4 class=" text-right">9-	الأمر البرمجي (<span ><img src="img/goto.png" /></span>)يحدد نقطة انتقال الكائن لمكان معين علي المنصة </h4>
                            -->
                            
                            
                            
                            <div class="row">

                                <%
                                    Try
                                        Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                                            Dim tupdateQuery4 As String = " SELECT dbo.Tbl_Question.quiz_id, dbo.Tbl_Answers.St_Id, dbo.Tbl_Question.q_id, dbo.Tbl_Question.q_title, dbo.Tbl_Question.q_d_answer, dbo.Tbl_Answers.Answer" & _
                                                                          " FROM Tbl_Answers INNER JOIN " & _
                                                                          " dbo.Tbl_Question ON Tbl_Answers.Q_Id = Tbl_Question.quiz_id AND Tbl_Answers.A_Id = Tbl_Question.q_id "
                                            Dim dt As DataTable = New DataTable()
                                            Dim adp As Data.SqlClient.SqlDataAdapter = New Data.SqlClient.SqlDataAdapter(tupdateQuery4, tcon2)
                                            adp.Fill(dt)
                                            If dt.Rows.Count > 0 Then
                                                For xIndx As Integer = 0 To dt.Rows.Count%>

                                                <div class="col-8"><h4 class=" text-right"><%= dt.Rows(xIndx)("q_title").ToString()%></div>
                                                <div class="col-2"><%= IIf(dt.Rows(xIndx)("q_d_answer") = 1 OrElse dt.Rows(xIndx)("q_d_answer") = True, "(<span style='color: green'>صواب</span>)", "(<span style='color: red'>خطأ</span>)")%></div>
                                                <div class="col-2"><%= IIf(dt.Rows(xIndx)("Answer") = 1 OrElse dt.Rows(xIndx)("Answer") = True, "(<span style='color: green'>صواب</span>)", "(<span style='color: red'>خطأ</span>)")%></div>


                                                <%        
                                                Next 
                                            End If
                                            tcon2.Open()
                                            tcon2.Close()
                                        End Using
                                    Catch ex As Exception

                                    End Try
                                    %>
                            </div>
                             
                        </div>

                    </div>
                    <asp:Button ID="Btn_next" runat="server" Text="رجوع" CssClass="btn btn-success " />
                </asp:Panel>
            </ContentTemplate>
        </asp:UpdatePanel>

    </form>
    <div class="footer">
        <p></p>
    </div>
</body>
</html>
