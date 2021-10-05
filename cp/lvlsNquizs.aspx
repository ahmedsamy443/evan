<%@ Page Title="" Language="VB" MasterPageFile="~/cp/MasterPage.master" AutoEventWireup="false" CodeFile="lvlsNquizs.aspx.vb" Inherits="cp_lvlsNquizs" %>

<%@ Import Namespace="System.Data" %>

<%@ Import Namespace="System.Data.SqlClient" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server" >
    <div style="padding:30px;">

    <%
                                    Try
                                        
                                        
                                        Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                Dim tupdateQuery4 As String = " select * from Tbl_quizes "
                                            Dim dt As DataTable = New DataTable()
                                            Dim adp As Data.SqlClient.SqlDataAdapter = New Data.SqlClient.SqlDataAdapter(tupdateQuery4, tcon2)
                                            adp.Fill(dt)
                                            If dt.Rows.Count > 0 Then%>
        <div class="row" style="padding:10px;">
                                                <select id="quzLst" name="quzLst" >
                                                    <option value="">إختار المستوى</option>
                                                <%For xIndx As Integer = 0 To dt.Rows.Count - 1%>
                                                     <option value="<%= dt.Rows(xIndx)("quiz_id")%>"><%= dt.Rows(xIndx)("quiz_name")%></option>
                                                <%        
                                                Next
                                                %></select>
        
        
        </div>
        <div class="row">
            <table class="table table-bordered table-striped" style="width: 95%; margin: auto;">
                <thead>
                    <tr><th>السؤال</th><th>الإجابه</th><th>نوع السؤال</th><th>الإختيارات</th></tr>
                </thead>
                <tbody id="questLst">

                </tbody>
            </table>
        </div>
        
        
        
        <%
                                            End If
                                            tcon2.Open()
                                            tcon2.Close()
                                        End Using
                                    Catch ex As Exception
                                        Response.Write(ex.Message)
                                    End Try
                                    %>


    </div>



    <div id="id01" class="w3-modal studentdetails" dir='rtl'>
        <div class="w3-modal-content w3-card-4 w3-animate-zoom">
            <header class="w3-container w3-blue">
                <span onclick="document.getElementById('id01').style.display='none'"
                    class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
                <h2 style="padding-right: 40px" id="q_title"></h2>
            </header>
                 
                    <div class="row" style="padding:50px;">
                       
                                        <div class="form-group">
                                            <input type="hidden" id="Inputqid" />
                                            <label for="exampleInputname">السؤال</label>
                                            <input type="text" class="form-control" id="q_titlet" placeholder="أدخل السؤال" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputname">نوع السؤال</label>
                                            <select id="q_type" name="q_type">
                                                <option value="0" selected="selected">صواب / خطأ</option>
                                                <option value="1">إختيارى</option>
                                                <option value="2">ترتيب</option>
                                            </select>
                                        </div>
                                        <div class="form-group" id="dv_tf">
                                            <label for="q_d_answer">الإجابه</label>
                                            <select id="q_d_answer" name="q_d_answer">
                                                <option value="1" selected="selected">صواب </option>
                                                <option value="0">خطأ</option>
                                            </select>
                                        </div>
                                        <div class="form-group" id="dv_choices" style="display:none;">
                                            <input type="text" class="form-control" id="q_choices" name="q_choices" placeholder="أدخل الإختيارات" />
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

    <link rel="stylesheet" type="text/css" href="../css/amsify.suggestags.css" />

<!-- Amsify Plugin -->
<script type="text/javascript" src="../js/jquery.amsify.suggestags.js"></script>

        <script>
            
            $('#myTab a').on('click', function (e) {
                e.preventDefault()
                $(this).tab('home')
            })

            function shide(divid1, qid) {
                $.ajax({
                    type: "POST",
                    url: "lvlsNquizs.aspx/fillQuestionData",
                    data: "{'qid': '" + qid + "'}",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {

                        $("#q_title").html(response.d[1]);
                        $("#q_titlet").val(response.d[1]);
                        $("#q_d_answer").val(response.d[1]);
                        $("#q_d_answer").val(response.d[2]);
                        $("#q_type").val(response.d[3]);
                        if (response.d[3] == 1) {
                            $("#dv_choices").show();
                            $("#dv_tf").hide();
                        } else if (response.d[3] == 0) {
                            $("#dv_choices").hide();
                            $("#dv_tf").show();
                        }
                        $("#q_choices").val(response.d[4]);
                        $('input[name="q_choices"]').amsifySuggestags({
                            type: 'amsify',
                            tagLimit: 4
                        });
                        $("#Inputqid").val(response.d[0]);

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
                $(document).on("change", "#quzLst", function (e) {
                    var Q_Id = $(this).val();
                     //alert(Q_Id);
                     
                    $.ajax({
                        type: "POST",
                        url: "lvlsNquizs.aspx/getQuizs_QuestionList",
                        data: "{'quiz_id': '" + Q_Id + "'}",
                        contentType: "application/json; charset=utf-8",
                        success: function (response) {
                            $("#questLst").html(response.d);
                        },
                        failure: function (response) {
                            alert("failure");
                        },
                        error: function (response) {
                            alert(response.responseText);
                        }
                    });
                });
                $(document).on("click", "#btnupdate", function (e) {
                    var q_id = $("#Inputqid").val();
                    var quiz_id = $("#quzLst").val();
                    var q_title = $("#q_titlet").val();
                    var q_d_answer = $("#q_d_answer").val();
                    var q_type = $("#q_type").val();
                    var q_choices ="";
                    //alert(Q_Id);

                    $(".amsify-select-tag").each(function () {
                        q_choices += (q_choices==""?"":"|") + $(this).data("val");
                    });
                     
                    //alert(q_choices);
                     
                    $.ajax({
                        type: "POST",
                        url: "lvlsNquizs.aspx/updatequestion",
                        data: "{'quiz_id': '" + quiz_id + "','q_id': '" + q_id + "','q_title': '" + q_title + "','q_d_answer': '" + q_d_answer + "','q_type': '" + q_type + "','q_choices': '" + q_choices + "'}",
                        contentType: "application/json; charset=utf-8",
                        success: function (response) {
                            alert("تم تعديل بيانات السؤال " + q_title + " بنجاح");
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
            });
        </script>
         
</asp:Content>

