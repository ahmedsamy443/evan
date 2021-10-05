<%@ Control Language="VB" AutoEventWireup="false" CodeFile="topbarinlvl.ascx.vb" Inherits="ctrls_topbarinlvl" %>
 <div class="w3-bar w3-black w3-padding w3-card">
            <% If Session("isadmin") Then%>
                <a href="../cp/Default.aspx" class="w3-bar-item w3-button">مدير البرنامج</a>
            <%End If%>
            <a href="../Dashboard.aspx" class="w3-bar-item w3-button">الرئيسية</a>
            <a href="../logout.aspx" class="w3-bar-item w3-button w3-green">خروج</a>
            <a href="#" class="w3-bar-item w3-button" style="float:left">مرحباً: <%= Session("st_name")%></a>
            <img src="../Images/students/5.jpg" class="avatar" />
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-right ">
                <%--<button class="w3-bar-item w3-button " onclick="document.getElementById('id01').style.display='block'"> الاهداف</button>--%>
            </div>
        </div>
<style>
    .w3-bar .w3-bar-item {
        padding: 8px 16px;
        float: right;
        width: auto;
        border: none;
        display: block;
        outline: 0;
    }
</style>