<%@ Page Language="VB" AutoEventWireup="false" CodeFile="quest5sol.aspx.vb" Inherits="Levels_quest5sol" %>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>أجوبة المستوى الخامس</title>
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
        <br />
        <asp:UpdatePanel ID="UpdatePanel3" runat="server">
            <ContentTemplate>
                <asp:Panel runat="server" ID="Q1panel">
                    <div class="text-right" style="padding-right: 30px">
                        </h4>
                    </div>
                    <div class="center">
                        <div class="text-right">
                            <h4>
                                1.يمكن مسح أي خطوط ورسومات على المنصة.
                                (<span style="color: green">صواب</span>).
                            </h4>
                            <h4>
                                2.	يمكن رسم خط عند تحريك الكائن ولكن لا يمكن التحكم في حجم الخط.
                                (<span style="color: red">خطأ</span>).
                            </h4>
                            <h4>
                                3.	لا يمكن تغيير لون خط الرسومات فى برنامج Scratch.
                                (<span style="color: red">خطأ</span>).
                            </h4>
                            <h4>
                                4.	تستخدم لبنة Turn  للتحكم في زاواية دوران الكائن.
                                (<span style="color: green">صواب</span>).
                            </h4>
                           
                             <h4>
                               5.	تستخدم لبنة (<span><img src="images/5/01.png" /> </span>) لرفع القلم وعدم الرسم أثناء حركة الكائن.
                            </h4>
                            <h4>
                                6. تستخدم لبنة(<span><img src="images/5/05.png" /></span>)فى تغيير حجم خط الرسم..
                                
                            </h4>
                             <h4>
                                7.  تستخدم لبنة (<span><img src="images/5/06.png" /></span>) لمسح خطوط أو رسومات على المنصة.
                                
                            </h4>
                             <h4>
                                 8.استنتج نتيجة تنفيذ المقطع البرمجي الآتي:
                                  <div class="center">
                        <div class="text-center">
                            <img src="images/5/q8.png" />
                            <h3 class="text-right">
                        رسم شكل (<span style="color:green">سداسي</span>)
                            </h3>
                        </div>

                                
                            </h4>
                            
       </div>

                    </div>
                    <asp:Button ID="Btn_next" runat="server" Text="رجوع" CssClass="btn btn-success " />
                    <br />
                    <br />
                    <br />

                </asp:Panel>
            </ContentTemplate>
        </asp:UpdatePanel>

    </form>
    <div class="footer">
        <p></p>
    </div>
</body>
</html>
