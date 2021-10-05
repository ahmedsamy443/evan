<%@ Control Language="VB" AutoEventWireup="false" CodeFile="uploadactivity.ascx.vb" Inherits="cp_uploadactivity" %>
<form id="Form1" method="post" runat="server" EncType="multipart/form-data" >
    <%--<div class="hiddenFileInput" >--%>
        
 
          
            <%--<input id="oFile" type="file" runat="server" NAME="oFile" />--%>
          <%--<a href="javascript://" id="upfile1">إضغط هنا لتحديد مسار ملف نشاط المجموعه</a>--%>
 
                <asp:FileUpload id="oFile" runat="server" NAME="oFile"  ValidateRequestMode="Enabled" />
                <asp:button id="btnUpload" type="button" text="تحميل" runat="server" onclientclick="openfileDialog()"></asp:button>
                <asp:Panel ID="frmConfirmation" Visible="False" Runat="server">
                    <asp:Label id="lblUploadResult" Runat="server"></asp:Label>
                </asp:Panel>
 

    <%--</div>--%>
</form>

 <%--<script>
     $("#upfile1").click(function () {
         $("#<%= oFile.ClientID %>").trigger('click');

     });
     function openfileDialog() {
         document.getElementById("#<%= oFile.ClientID %>").click();
     }
 </script>--%>