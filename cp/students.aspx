<%@ Page Title="" Language="VB" MasterPageFile="~/cp/MasterPage.master" AutoEventWireup="false" CodeFile="students.aspx.vb" Inherits="cp_students" %>

<%@ Import Namespace="System.Data" %>

<%@ Import Namespace="System.Data.SqlClient" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">




    <%
                                    Try
                                        
                                        
                                        Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                Dim tupdateQuery4 As String = " SELECT *, (select Gb_name from Tbl_Group where  Gb_Id = Tbl_StudentData.st_group ) Gb_name FROM Tbl_StudentData"
                                            
                                            
                                            'Response.Write(tupdateQuery4)
                                            
                                            
                                            Dim dt As DataTable = New DataTable()
                                            Dim adp As Data.SqlClient.SqlDataAdapter = New Data.SqlClient.SqlDataAdapter(tupdateQuery4, tcon2)
                                            adp.Fill(dt)
                                            If dt.Rows.Count > 0 Then%>
                                                <table class="table table-bordered table-striped" style="width: 95%; margin: auto;">
                                                    <tr"><td><h6 style="font-weight:bold;">#</h6></td>
                                                        <td><h6 style="font-weight:bold;">إسم الطالب</h6></td>
                                                        <td><h6 style="font-weight:bold;">المجموعه</h6></td>
                                                        <td><h6 style="font-weight:bold;white-space: nowrap;">المستوى الأول</h6></td>
                                                        <td><h6 style="font-weight:bold;white-space: nowrap;">المستوى الثانى</h6></td>
                                                        <td><h6 style="font-weight:bold;white-space: nowrap;">المستوى الثالث</h6></td>
                                                        <td><h6 style="font-weight:bold;white-space: nowrap;">المستوى الرابع</h6></td>
                                                        <td><h6 style="font-weight:bold;white-space: nowrap;">المستوى الخامس</h6></td>
                                                        <td></td>
                                                    </tr>
                                                <%For xIndx As Integer = 0 To dt.Rows.Count - 1%>

                                                    <tr>    <td style="width:10%;"><%= dt.Rows(xIndx)("St_Id")%></td>
                                                            <td style="width:25%;"><%= dt.Rows(xIndx)("St_name")%></td>
                                                            <td style="width:15%;"><%= dt.Rows(xIndx)("Gb_name")%></td>
                                                            <td><h6 style="font-weight:bold;"></h6></td>
                                                            <td><h6 style="font-weight:bold;"></h6></td>
                                                            <td><h6 style="font-weight:bold;"></h6></td>
                                                            <td><h6 style="font-weight:bold;"></h6></td>
                                                            <td><h6 style="font-weight:bold;"></h6></td>
                                                            <td style="width:15%;">
                                                                <a href="javascript://" onclick="shide('id01', '<%= dt.Rows(xIndx)("St_Id")%>')" class="btn btn-info">تعديل</a>
                                                                <a href="javascript://" data-StId="<%= dt.Rows(xIndx)("St_Id")%>" onclick="return confirm('هل أنت متاكد من حذف بيانات <%= dt.Rows(xIndx)("St_name")%>؟')" class="btn btn-warning btndelete">حذف</a>
                                                            </td>
                                                    </tr>

                                                <%        
                                                Next
                                                %>
                                                    <tr><td colspan="3"><asp:Button ID="Btn_next" runat="server" Text="رجوع" CssClass="btn btn-success " /></td></tr>
                                                </table>
                                                    <%
                                            End If
                                            tcon2.Open()
                                            tcon2.Close()
                                        End Using
                                    Catch ex As Exception
                                        Response.Write(ex.Message)
                                    End Try
                                    %>






     <div id="id01" class="w3-modal studentdetails" dir='rtl'>
        <div class="w3-modal-content w3-card-4 w3-animate-zoom">
            <header class="w3-container w3-blue">
                <span onclick="document.getElementById('id01').style.display='none'"
                    class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
                <h2 style="padding-right: 40px" id="studentname"></h2>
            </header>
                <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-top: 20px;">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">بيانات المجموعه</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">المستويات التعليميه</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade " id="home" role="tabpanel" aria-labelledby="home-tab">
                       
                                        <div class="form-group">
                                            <input type="hidden" id="St_Id" />
                                            <label for="St_name">إسم الطالب</label>
                                            <input type="text" class="form-control" id="St_name" placeholder="أدخل إسم الطالب" />
                                        </div>
                                        <div class="form-group">
                                            <label for="st_notes">ملاحظات</label>
                                            <textarea class="form-control" id="st_notes" aria-describedby="emailHelp"></textarea>
                                        </div>
                                        <div class="form-group">
                                             <label for="st_username">إسم المستخدم</label>
                                            <input type="text" class="form-control" id="st_username" placeholder="أدخل إسم المستخدم" />
                                        </div>
                                        <div class="form-group">
                                             <label for="St_pass">كلمة المرور</label>
                                            <input type="text" class="form-control" id="St_pass" placeholder="أدخل كلمة المرور" />
                                        </div>
                                        <div class="form-group">
                                             <label for="st_group">المجموعه</label>
                                             <select id="st_group">
                                                 <option>إختار المجموعه</option>
                                                 <%
                                                     Try
                                                         Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                                                             Dim tupdateQuery4 As String = " select * from Tbl_Group "
                                                             Dim dt As DataTable = New DataTable()
                                                             Dim adp As Data.SqlClient.SqlDataAdapter = New Data.SqlClient.SqlDataAdapter(tupdateQuery4, tcon2)
                                                             adp.Fill(dt)
                                                             If dt.Rows.Count > 0 Then%>
                                                                    <%For xIndx As Integer = 0 To dt.Rows.Count - 1%>
                                                                        <option value="<%=dt.Rows(xIndx)("Gb_Id") %>"><%=dt.Rows(xIndx)("Gb_name") %></option>
                                                                    <%        
                                                                Next
                                                            End If
                                                            tcon2.Open()
                                                            tcon2.Close()
                                                        End Using
                                                    Catch ex As Exception
                                                        Response.Write(ex.Message)
                                                    End Try
                                                %>
                                             </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-3"><label for="st_Level">المستوى الحالى</label><br /><input type="text" id="st_Level" style="width:50px;" /></div>
                                                <div class="col-3"><label for="st_activityLevel">نشاط المجموعه الحالى</label><br /><input type="text" id="st_activityLevel" style="width:50px;" /></div>
                                                <div class="col-3"><label for="st_Pretest">تجاوز التطبيق القبلى</label><br /><input type="checkbox" id="st_Pretest"/></div>
                                                <div class="col-3"><label for="isadmin">مدير للبرنامج</label><br /><input type="checkbox" id="isadmin" /></div>
                                            </div>
                                        </div>
                  </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="height:388px;">
                       <div class="form-group" style="width:120px; float: right;">
                                        <label for="Gb_lvl1_activity_file">المستوى الأول</label>
                                        <div id="Gb_lvl1_activity_score">
                                            <label>اللغز:</label><input type="text" id="st_Level1" class="form-control" style="width:100px;"/><br />
                                            <label>نشاط المجموعه:</label><input type="text" id="st_activityLevel1" class="form-control" style="width:100px;"/><br />
                                            <label>عدد المحاولات:</label><input type="text" id="st_Level1_curr_attem" class="form-control" style="width:100px;"/><br />
                                            <label>الوقت المتبقى:</label><input type="text" id="st_Level1_remaining_time" class="form-control" style="width:100px;"/>
                                        </div>
                                    </div>
                       <div class="form-group" style="width:120px; float: right;">
                                        <label for="Gb_lvl2_activity_file">المستوى الثانى</label>
                                        <div id="Gb_lvl2_activity_file"></div>
                                        <div id="Gb_lvl2_activity_score">
                                            <label>اللغز:</label> <input type="text" id="st_Level2" class="form-control" style="width:100px;"/><br />
                                            <label>نشاط المجموعه:</label><input type="text" id="st_activityLevel2" class="form-control" style="width:100px;"/><br />
                                            <label>عدد المحاولات:</label><input type="text" id="st_Level2_curr_attem" class="form-control" style="width:100px;"/><br />
                                            <label>الوقت المتبقى:</label><input type="text" id="st_Level2_remaining_time" class="form-control" style="width:100px;"/>
                                        </div>
                                    </div>
                       <div class="form-group" style="width:120px; float: right;">
                                        <label for="Gb_lvl3_activity_file">المستوى الثالث</label>
                                        <div id="Gb_lvl3_activity_file"></div>
                                        <div id="Gb_lvl3_activity_score">
                                            <label>اللغز:</label><input type="text" id="st_Level3" class="form-control" style="width:100px;"/><br />
                                            <label>نشاط المجموعه:</label><input type="text" id="st_activityLevel3" class="form-control" style="width:100px;"/><br />
                                            <label>عدد المحاولات:</label><input type="text" id="st_Level3_curr_attem" class="form-control" style="width:100px;"/><br />
                                            <label>الوقت المتبقى:</label><input type="text" id="st_Level3_remaining_time" class="form-control" style="width:100px;"/>
                                        </div>
                                    </div>
                       <div class="form-group" style="width:120px; float: right;">
                                        <label for="Gb_lvl4_activity_file">المستوى الرابع</label>
                                        <div id="Gb_lvl4_activity_file"></div>
                                        <div id="Gb_lvl4_activity_score">
                                            <label>اللغز:</label><input type="text" id="st_Level4" class="form-control" style="width:100px;"/><br />
                                            <label>نشاط المجموعه:</label><input type="text" id="st_activityLevel4" class="form-control" style="width:100px;"/><br />
                                            <label>عدد المحاولات:</label><input type="text" id="st_Level4_curr_attem" class="form-control" style="width:100px;"/><br />
                                            <label>الوقت المتبقى:</label><input type="text" id="st_Level4_remaining_time" class="form-control" style="width:100px;"/>
                                        </div>
                                    </div>
                       <div class="form-group" style="width:120px; float: right;">
                                        <label for="Gb_lvl5_activity_file">المستوى الخامس</label>
                                        <div id="Gb_lvl5_activity_file"></div>
                                        <div id="Gb_lvl5_activity_score">
                                            <label>اللغز:</label><input type="text" id="st_Level5" class="form-control" style="width:100px;"/><br />
                                            <label>نشاط المجموعه:</label><input type="text" id="st_activityLevel5" class="form-control" style="width:100px;"/><br />
                                            <label>عدد المحاولات:</label><input type="text" id="st_Level5_curr_attem" class="form-control" style="width:100px;"/><br />
                                            <label>الوقت المتبقى:</label><input type="text" id="st_Level5_remaining_time" class="form-control" style="width:100px;"/>
                                        </div>
                                    </div>
                  </div>
                </div>
            <div class="w3-container w3-light-grey w3-padding">
                <button type="button" id="btnupdate" class="btn btn-success" style="width:150px;float:left;">حفظ</button>
                <%--&nbsp;&nbsp;
                <button class="w3-button w3-right w3-white w3-border"
                    onclick="document.getElementById('id01').style.display='none'">
                    انهاء</button>&nbsp;&nbsp;--%>
            </div>
        </div>
    </div>





        <script>



            function shide(divid1, St_Id) {
                 
                $.ajax({
                    type: "POST",
                    url: "students.aspx/fillst_data",
                    data: "{'St_Id': '" + St_Id + "'}",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {
                        $("#studentname").text(response.d[1]);
                        $("#St_name").val(response.d[1]);
                        $("#st_username").val(response.d[2]);
                        $("#St_pass").val(response.d[3]);
                        //$("#st_notes").val(response.d[4]);
                        alert('#st_group option[value="' + response.d[4] + '"]')
                        $('#st_group').find('option[value="' + response.d[4] + '"]').attr("selected", "selected");
                        $("#st_notes").val(response.d[5]);

                        $("#st_Level").val(response.d[6]);
                        $("#st_activityLevel").val(response.d[7]);

                        $("#st_Level1").val(response.d[8]);
                        $("#st_activityLevel1").val(response.d[9]);
                        $("#st_Level1_curr_attem").val(response.d[10]);
                        $("#st_Level1_remaining_time").val(response.d[11]);

                        $("#st_Level2").val(response.d[12]);
                        $("#st_activityLevel2").val(response.d[13]);
                        $("#st_Level2_curr_attem").val(response.d[14]);
                        $("#st_Level2_remaining_time").val(response.d[15]);

                        $("#st_Level3").val(response.d[16]);
                        $("#st_activityLevel3").val(response.d[17]);
                        $("#st_Level3_curr_attem").val(response.d[18]);
                        $("#st_Level3_remaining_time").val(response.d[19]);

                        $("#st_Level4").val(response.d[20]);
                        $("#st_activityLevel4").val(response.d[21]);
                        $("#st_Level4_curr_attem").val(response.d[22]);
                        $("#st_Level4_remaining_time").val(response.d[23]);

                        $("#st_Level5").val(response.d[24]);
                        $("#st_activityLevel5").val(response.d[25]);
                        $("#st_Level5_curr_attem").val(response.d[26]);
                        $("#st_Level5_remaining_time").val(response.d[27]);

                        $("#InputStid").val(response.d[0]);

                        var x = document.getElementById(divid1);
                        x.style.display = "block";


                    },
                    failure: function (response) {
                       // alert("failure");
                    },
                    error: function (response) {
                        alert(response.responseText);
                    }
                });


                
            }




            $(function () {
                $(document).on("click", "#btnupdate", function (e) {

                    var St_Id = $("#St_Id").val();
                    var St_name = $("#St_name").val();
                    var st_username = $("#st_username").val();
                    var St_pass = $("#St_pass").val();
                    var st_notes = $("#st_notes").val();
                    var st_group = $("#st_group").val();

                    var st_Level = $("#st_Level").val();
                    var st_activityLevel = $("#st_activityLevel").val();

                    var st_Level1 = $("#st_Level1").val();
                    var st_activityLevel1 = $("#st_activityLevel1").val();
                    var st_Level1_curr_attem = $("#st_Level1_curr_attem").val();
                    var st_Level1_remaining_time = $("#st_Level1_remaining_time").val();

                    var st_Level2 = $("#st_Level2").val();
                    var st_activityLevel2 = $("#st_activityLevel2").val();
                    var st_Level2_curr_attem = $("#st_Level2_curr_attem").val();
                    var st_Level2_remaining_time = $("#st_Level2_remaining_time").val();

                    var st_Level3 = $("#st_Level3").val();
                    var st_activityLevel3 = $("#st_activityLevel3").val();
                    var st_Level3_curr_attem = $("#st_Level3_curr_attem").val();
                    var st_Level3_remaining_time = $("#st_Level3_remaining_time").val();

                    var st_Level4 = $("#st_Level4").val();
                    var st_activityLevel4 = $("#st_activityLevel4").val();
                    var st_Level4_curr_attem = $("#st_Level4_curr_attem").val();
                    var st_Level4_remaining_time = $("#st_Level4_remaining_time").val();

                    var st_Level5 = $("#st_Level5").val();
                    var st_activityLevel5 = $("#st_activityLevel5").val();
                    var st_Level5_curr_attem = $("#st_Level5_curr_attem").val();
                    var st_Level5_remaining_time = $("#st_Level5_remaining_time").val();

                    var st_Pretest = $('#st_Pretest').prop('checked');
                    var isadmin = $('#isadmin').prop('checked');

                    $.ajax({
                        type: "POST",
                        url: "groups.aspx/update_group",
                        data: "{'St_Id': '" + St_Id + "', 'St_name': '" + St_name + "','st_username': '" + st_username + "','St_pass': '" + St_pass + "','st_notes': '" + st_notes + "','st_group': '" + st_group + "','st_Level': '" + st_Level + "','st_activityLevel': '" + st_activityLevel + "','st_Level1': '" + st_Level1 + "','st_activityLevel1': '" + st_activityLevel1 + "','st_Level1_curr_attem': '" + st_Level1_curr_attem + "','st_Level1_remaining_time': '" + st_Level1_remaining_time + "','st_activityLevel2': '" + st_activityLevel2 + "','st_Level2_curr_attem': '" + st_Level2_curr_attem + "','st_Level2_remaining_time': '" + st_Level2_remaining_time + "','st_activityLevel3': '" + st_activityLevel3 + "','st_Level3_curr_attem': '" + st_Level3_curr_attem + "','st_Level3_remaining_time': '" + st_Level3_remaining_time + "','st_activityLevel4': '" + st_activityLevel4 + "','st_Level4_curr_attem': '" + st_Level4_curr_attem + "','st_Level4_remaining_time': '" + st_Level4_remaining_time + "','st_activityLevel5': '" + st_activityLevel5 + "','st_Level5_curr_attem': '" + st_Level5_curr_attem + "','st_Level5_remaining_time': '" + st_Level5_remaining_time + "','st_Pretest': '" + st_Pretest + "','isadmin': '" + isadmin + "'}",
                        contentType: "application/json; charset=utf-8",
                        success: function (response) {
                            alert("تم تعديل بيانات الطالب " + St_name + " بنجاح");
                            document.getElementById('id01').style.display = 'none'
                        },
                        failure: function (response) {
                            alert("failure");
                        },
                        error: function (response) {
                            alert(response.responseText);
                        }
                    });
                });
                $(document).on("click", ".btndelete", function (e) {
                    var St_Id = $(this).attr("data-StId");
                    //alert(St_Id);
                    //return false;
                    $.ajax({
                        type: "POST",
                        url: "students.aspx/delete_student",
                        data: "{'St_Id': '"+ St_Id +"'}",
                        contentType: "application/json; charset=utf-8",
                        success: function (response) {
                        
                        },
                        failure: function (response) {
                            alert("failure");
                        },
                        error: function (response) {
                            alert(response.responseText);
                        }
                    });
                });
            });
        </script>
</asp:Content>

