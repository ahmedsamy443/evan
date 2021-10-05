<%@ Page Title="" Language="VB" MasterPageFile="~/cp/MasterPage.master" AutoEventWireup="false" CodeFile="groups.aspx.vb" Inherits="cp_groups" %>

<%@ Import Namespace="System.Data" %>

<%@ Import Namespace="System.Data.SqlClient" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    


    <%
                                    Try
                                        
                                        
                                        Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                Dim tupdateQuery4 As String = " select * from Tbl_Group "
                                            
                                            
                                            'Response.Write(tupdateQuery4)
                                            
                                            
                                            Dim dt As DataTable = New DataTable()
                                            Dim adp As Data.SqlClient.SqlDataAdapter = New Data.SqlClient.SqlDataAdapter(tupdateQuery4, tcon2)
                                            adp.Fill(dt)
                                            If dt.Rows.Count > 0 Then%>
                                                <table class="table table-bordered table-striped" style="width: 95%; margin: auto;">
                                                    <tr"><td><h6 style="font-weight:bold;">#</h6></td><td><h6 style="font-weight:bold;">إسم المجموعه</h6></td>
                                                        <td><h6 style="font-weight:bold;">المستوى الأول</h6></td>
                                                        <td><h6 style="font-weight:bold;">المستوى الثانى</h6></td>
                                                        <td><h6 style="font-weight:bold;">المستوى الثالث</h6></td>
                                                        <td><h6 style="font-weight:bold;">المستوى الرابع</h6></td>
                                                        <td><h6 style="font-weight:bold;">المستوى الخامس</h6></td>
                                                        <td></td></tr>
                                                <%For xIndx As Integer = 0 To dt.Rows.Count - 1%>

                                                    <tr>    
                                                            <td style="width:10%;"><%= dt.Rows(xIndx)("Gb_Id")%></td>
                                                            <td style="width:25%;">
                                                                <a href="javascript://" onclick="shide('id01', '<%= dt.Rows(xIndx)("Gb_Id")%>')"><%= dt.Rows(xIndx)("Gb_name")%></a>
                                                            </td>
                                                            <td>
                                                                <table>
                                                                    <tr><td><%= IIf(IsDBNull(dt.Rows(xIndx)("Gb_lvl1_activity_file")), "لم يحدد", "<a target='_blank' href='../activitiesfiles/1/" +"Group_" + dt.Rows(xIndx)("Gb_Id").ToString() + "_" + dt.Rows(xIndx)("Gb_lvl1_activity_file") + "'>" + dt.Rows(xIndx)("Gb_lvl1_activity_file") + "</a>")%></td><td><%= dt.Rows(xIndx)("Gb_lvl1_activity_score")%></td></tr>
                                                                </table>
                                                            </td>
                                                            <td>
                                                                <table>
                                                                    <tr><td><%= IIf(IsDBNull(dt.Rows(xIndx)("Gb_lvl2_activity_file")), "لم يحدد", "<a target='_blank' href='../activitiesfiles/2/Group_" +"/Group_" +  dt.Rows(xIndx)("Gb_Id").ToString() + "_" + dt.Rows(xIndx)("Gb_lvl2_activity_file") + "'>" + dt.Rows(xIndx)("Gb_lvl2_activity_file") + "</a>")%></td><td><%= dt.Rows(xIndx)("Gb_lvl2_activity_score")%></td></tr>
                                                                </table>
                                                            </td>
                                                            <td>
                                                                <table>
                                                                    <tr><td><%= IIf(IsDBNull(dt.Rows(xIndx)("Gb_lvl3_activity_file")), "لم يحدد", "<a target='_blank' href='../activitiesfiles/3/" +"Group_" +  dt.Rows(xIndx)("Gb_Id").ToString() + "_" + dt.Rows(xIndx)("Gb_lvl3_activity_file") + "'>" + dt.Rows(xIndx)("Gb_lvl3_activity_file") + "</a>")%></td><td><%= dt.Rows(xIndx)("Gb_lvl3_activity_score")%></td></tr>
                                                                </table>
                                                            </td>
                                                            <td>
                                                                <table>
                                                                    <tr><td><%= IIf(IsDBNull(dt.Rows(xIndx)("Gb_lvl4_activity_file")), "لم يحدد", "<a target='_blank' href='../activitiesfiles/4/" +"Group_" +  dt.Rows(xIndx)("Gb_Id").ToString() + "_" + dt.Rows(xIndx)("Gb_lvl4_activity_file") + "'>" + dt.Rows(xIndx)("Gb_lvl4_activity_file") + "</a>")%></td><td><%= dt.Rows(xIndx)("Gb_lvl4_activity_score")%></td></tr>
                                                                </table>
                                                            </td>
                                                            <td>
                                                                <table>
                                                                    <tr><td><%= IIf(isDBNull(dt.Rows(xIndx)("Gb_lvl5_activity_file")), "لم يحدد","<a target='_blank' href='../activitiesfiles/5/" +"Group_" +  dt.Rows(xIndx)("Gb_Id").ToString() + "_" + dt.Rows(xIndx)("Gb_lvl5_activity_file") + "'>" + dt.Rows(xIndx)("Gb_lvl5_activity_file") + "</a>")%></td><td><%= dt.Rows(xIndx)("Gb_lvl5_activity_score")%></td></tr>
                                                                </table>
                                                            </td>
                                                            <td style="width:20%;">
                                                                <a href="javascript://" onclick="shide('id01', '<%= dt.Rows(xIndx)("Gb_Id")%>')" class="btn btn-info">تعديل</a>
                                                                <a href="javascript://" data-GbId="<%= dt.Rows(xIndx)("Gb_Id")%>" onclick="return confirm('هل أنت متاكد من حذف بيانات <%= dt.Rows(xIndx)("Gb_name")%>؟')" class="btn btn-warning btndelete">حذف</a>
                                                            </td>
                                                    </tr>

                                                <%        
                                                Next
                                                %>
                                                    <tr><td colspan="8"><asp:Button ID="Btn_next" runat="server" Text="رجوع" CssClass="btn btn-success " /></td></tr>
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
                <h2 style="padding-right: 40px" id="groupname"></h2>
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
                                            <input type="hidden" id="InputStid" />
                                            <label for="exampleInputname">إسم المجموعه</label>
                                            <input type="text" class="form-control" id="exampleInputname" placeholder="أدخل إسم المجموعه" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputusername">ملاحظات</label>
                                            <textarea class="form-control" id="exampleInputnote" aria-describedby="emailHelp"></textarea>
                                        </div>
                                        <div class="form-group">
                                            
                                        </div>
                                     
                  </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="height:268px;">
                       <div class="form-group" style="width:120px; float: right;">
                                        <label for="Gb_lvl1_activity_file">المستوى الأول</label>
                                        <div id="Gb_lvl1_activity_file"></div>
                                        <div id="Gb_lvl1_activity_score">
                                            <input type="text" id="Gb_lvl1_activity_scoretxt" class="form-control" style="width:100px;"/>
                                        </div>
                                    </div>
                       <div class="form-group" style="width:120px; float: right;">
                                        <label for="Gb_lvl2_activity_file">المستوى الثانى</label>
                                        <div id="Gb_lvl2_activity_file"></div>
                                        <div id="Gb_lvl2_activity_score">
                                            <input type="text" id="Gb_lvl2_activity_scoretxt" class="form-control" style="width:100px;" />
                                        </div>
                                    </div>
                       <div class="form-group" style="width:120px; float: right;">
                                        <label for="Gb_lvl3_activity_file">المستوى الثالث</label>
                                        <div id="Gb_lvl3_activity_file"></div>
                                        <div id="Gb_lvl3_activity_score">
                                            <input type="text" id="Gb_lvl3_activity_scoretxt" class="form-control" style="width:100px;" />
                                        </div>
                                    </div>
                       <div class="form-group" style="width:120px; float: right;">
                                        <label for="Gb_lvl4_activity_file">المستوى الرابع</label>
                                        <div id="Gb_lvl4_activity_file"></div>
                                        <div id="Gb_lvl4_activity_score">
                                            <input type="text" id="Gb_lvl4_activity_scoretxt" class="form-control" style="width:100px;" />
                                        </div>
                                    </div>
                       <div class="form-group" style="width:120px; float: right;">
                                        <label for="Gb_lvl5_activity_file">المستوى الخامس</label>
                                        <div id="Gb_lvl5_activity_file"></div>
                                        <div id="Gb_lvl5_activity_score">
                                            <input type="text" id="Gb_lvl5_activity_scoretxt" class="form-control" style="width:100px;" />
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

            $('#myTab a').on('click', function (e) {
                e.preventDefault()
                $(this).tab('home')
            })

            function shide(divid1, Gb_Id) {
                $.ajax({
                    type: "POST",
                    url: "groups.aspx/fillgb_data",
                    data: "{'Gb_Id': '" + Gb_Id + "'}",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {
                        $("#groupname").text(response.d[1]);

                        $("#exampleInputname").val(response.d[1]);
                        $("#exampleInputnote").val(response.d[2]);

                        $("#Gb_lvl1_activity_file").html(response.d[3]);
                        $("#Gb_lvl1_activity_scoretxt").val(response.d[4]);
                        if (response.d[3] == 'لم يحدد') $("#Gb_lvl1_activity_scoretxt").attr("disabled", "disabled");

                        $("#Gb_lvl2_activity_file").html(response.d[5]);
                        $("#Gb_lvl2_activity_scoretxt").val(response.d[6]);
                        if (response.d[5] == 'لم يحدد') $("#Gb_lvl2_activity_scoretxt").attr("disabled", "disabled");

                        $("#Gb_lvl3_activity_file").html(response.d[7]);
                        $("#Gb_lvl3_activity_scoretxt").val(response.d[8]);
                        if (response.d[7] == 'لم يحدد') $("#Gb_lvl3_activity_scoretxt").attr("disabled", "disabled");

                        $("#Gb_lvl4_activity_file").html(response.d[9]);
                        $("#Gb_lvl4_activity_scoretxt").val(response.d[10]);
                        if (response.d[9] == 'لم يحدد') $("#Gb_lvl4_activity_scoretxt").attr("disabled", "disabled");

                        $("#Gb_lvl5_activity_file").html(response.d[11]);
                        $("#Gb_lvl5_activity_scoretxt").val(response.d[12]);
                        if (response.d[11] == 'لم يحدد') $("#Gb_lvl5_activity_scoretxt").attr("disabled", "disabled");

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
                     
                    var Gb_Id = $("#InputStid").val();
                    var Gb_Name = $("#exampleInputname").val();
                    var Gb_Note = $("#exampleInputnote").val();
                    var Gb_lvl1_activity_score = $("#Gb_lvl1_activity_scoretxt").val();
                    var Gb_lvl2_activity_score = $("#Gb_lvl2_activity_scoretxt").val();
                    var Gb_lvl3_activity_score = $("#Gb_lvl3_activity_scoretxt").val();
                    var Gb_lvl4_activity_score = $("#Gb_lvl4_activity_scoretxt").val();
                    var Gb_lvl5_activity_score = $("#Gb_lvl5_activity_scoretxt").val();
                    $.ajax({
                        type: "POST",
                        url: "groups.aspx/update_group",
                        data: "{'Gb_Id': '" + Gb_Id + "', 'Gb_name': '" + Gb_Name + "','Gb_Notes': '" + Gb_Note + "','Gb_lvl1_activity_score': '" + Gb_lvl1_activity_score + "','Gb_lvl2_activity_score': '" + Gb_lvl2_activity_score + "','Gb_lvl3_activity_score': '" + Gb_lvl3_activity_score + "','Gb_lvl4_activity_score': '" + Gb_lvl4_activity_score + "','Gb_lvl5_activity_score': '" + Gb_lvl5_activity_score + "'}",
                        contentType: "application/json; charset=utf-8",
                        success: function (response) {
                            alert("تم تعديل بيانات مجموعه " + Gb_Name + " بنجاح");
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
                    var Gb_Id = $(this).attr("data-GbId");
                    //alert(St_Id);
                    //return false;
                    $.ajax({
                        type: "POST",
                        url: "groups.aspx/delete_group",
                        data: "{'Gb_Id': '" + Gb_Id + "'}",
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

