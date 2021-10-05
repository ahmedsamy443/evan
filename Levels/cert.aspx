<%@ Page Language="VB" AutoEventWireup="false" CodeFile="cert.aspx.vb" Inherits="Levels_cert" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet" />
    <style>
        .center-div {
            display: flexbox;
            justify-content: center;
            align-items: center;
            height: 50%;
            border: 3px solid green;
        }
    </style>
</head>
<body dir="rtl" style="font-family: 'Cairo', sans-serif;">

    <form id="form1" runat="server">
              <br />

        <div style="font-size: x-large;" class="center-div" runat="server" id="testpanel">
            <img src="certi.png"  width="100%"/>
            
        </div>
        <div runat="server" id="result" >
            <div class="center-div text-center">
                
                <asp:Button ID="Button1" runat="server" Text="متابعة"  CssClass="btn btn-success"/>
            </div>
            
            
        </div>
    </form>
</body>
</html>
