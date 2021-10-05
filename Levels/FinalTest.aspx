<%@ Page Language="vb" AutoEventWireup="false" CodeBehind="~/Levels/FinalTest.aspx.vb"  %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>الاختبار البعدي</title>
    <link href="w3.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Changa|Lalezar&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@300;400&display=swap" rel="stylesheet" />

    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }
    </script>
    <%-- نهاية --%>
</head>
<body dir="rtl" style="font-family: 'Changa', sans-serif;">
    <form id="form1" runat="server">

        <asp:ScriptManager runat="server"></asp:ScriptManager>

        <asp:UpdateProgress ID="UpdateProgress1" runat="server" AssociatedUpdatePanelID="UpdatePanel2">
            <ProgressTemplate>
                <div class="loadmodal">
                    <div class="centerload">
                        <img src="assets/images/loading2.gif" />

                        <asp:Label ID="lblLoading" runat="server" Text=" انتظر للتحميل"></asp:Label>
                    </div>
                </div>
            </ProgressTemplate>
        </asp:UpdateProgress>




        <asp:Panel ID="Panel2" runat="server">
            <div class="w3-container w3-blue">
                <div class="w3-col s12 w3-cell-middle w3-center  ">
                    <h1 style="font-family: 'Changa', sans-serif;">الاختبار التحصيلي البعدي</h1>


                </div>
            </div>
            <div class="w3-container w3-blue">

                <div class="w3-col s12 ">
                    <div class="w3-card-4 ">
                        <header class="w3-container w3-light-grey w3-center ">
                            <h3>
                                <asp:Label ID="Lbl_name" runat="server"></asp:Label>

                            </h3>
                        </header>
                        <div class="w3-margin-right">
                            <h2 style="font-family: 'Changa', sans-serif;">تعليمات الاختبار</h2>
                            <h3 style="font-family: 'Changa', sans-serif;">عزيزي التلميذ......<br />
                                1.	يهدف هذا الاختبار إلى قياس مستوى تحصيلك للجوانب المعرفية المرتبط بلغة البرمجة ٍScratch.<br />
                                2.	يحتوي هذا الاختبار على ( 41 ) سؤال تغطي كل أهداف البرنامج.                               
                                <br />
                                3.	اختر الإجابة المناسبة بالضغط عليها.<br />
                                4.	لا تضغط على أكثر من إجابة واحدة فقط للسؤال.<br />
                                5. اكتب الترتيب المناسب لـ(لبنات)المشروع<br />
                                6.	تأكد فى نهاية الأختبار أنك أجبت عن جميع الأسئلة.<br />
                            </h3>
                            <hr />
                            <img src="img_avatar3.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width: 80px" />
                            <br />
                        </div>
                        <asp:Button ID="Button1" CssClass="w3-button w3-block w3-dark-grey" runat="server" Text="واصل الطريق" />

                    </div>

                </div>
            </div>
            <br />
        </asp:Panel>



    </form>
</body>
</html>
