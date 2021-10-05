<%@ Control Language="VB" AutoEventWireup="false" CodeFile="honoraryboard.ascx.vb" Inherits="ctrls_honoraryboard" %>
<%@ Import Namespace="System.Data" %>
<%@ Import Namespace="System.Data.SqlClient" %>
<%--<h3 style="text-align:center;">لوحة الشرف</h3>--%>
<div class=" w3-container w3-center" style="background-image: url('Wesam.png'); background-size: cover; background-repeat: no-repeat; background-position: center; padding: 80px;height:350px;">

                                <br />
                                <%--<img src="Images/Dashboard/Welcome.png" style="width: 42px; height: 42px" />--%>
                                
                                


                                <%
                                    
                                    
                                    Try
                                    
                                    
                                        Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                                            
                                            
                                            
                                            Dim sSql As String = "select top 1 * From Tbl_StudentData where St_Id = " + Session("st_code")
                                            
                                            
                                            
                                            
                                            
                                            'Response.Write(tupdateQuery4)
                            
                            
                                            Dim dt As DataTable = New DataTable()
                                            Dim adp As Data.SqlClient.SqlDataAdapter = New Data.SqlClient.SqlDataAdapter(sSql, tcon2)
                                            adp.Fill(dt)
                                            If dt.Rows.Count > 0 Then%>
    
                                            <table>                                        
        
                                                <%
                                                     
                                                    'If dt.Rows(0)("St_Id") = Session("st_code") AndAlso Val(dt.Rows(0)("st_Level1")) >= 80 Then
                                                    If Val(dt.Rows(0)("st_Level1")) >= 80 Then%>
                                                            
                                                    <%--<img src="http://<%=HttpContext.Current.Request.Url.Authority%>/Images/Dashboard/cup.png" style="width: 42px; height: 42px" />--%>
                                                        <tr><td>1</td><td><img src="http://<%=HttpContext.Current.Request.Url.Authority%>/Images/Dashboard/W1.png" style="width: 42px; height: 42px" /></td><td><%= check_rank(Session("st_code"), "1")%></td></tr>
                                                    <%End If%>
                                                <%
                                                     
                                                    'If dt.Rows(0)("St_Id") = Session("st_code") AndAlso Val(dt.Rows(0)("st_Level1")) >= 80 Then
                                                    If Val(dt.Rows(0)("st_Level2")) >= 80 Then%>
                                                            
                                                    <%--<img src="http://<%=HttpContext.Current.Request.Url.Authority%>/Images/Dashboard/cup.png" style="width: 42px; height: 42px" />--%>
                                                        <tr><td>2</td><td><img src="http://<%=HttpContext.Current.Request.Url.Authority%>/Images/Dashboard/W1.png" style="width: 42px; height: 42px" /></td><td><%= check_rank(Session("st_code"), "2")%></td></tr>
                                                    <%End If%>
                                                
                                                <%
                                                     
                                                    'If dt.Rows(0)("St_Id") = Session("st_code") AndAlso Val(dt.Rows(0)("st_Level1")) >= 80 Then
                                                    If Val(dt.Rows(0)("st_Level3")) >= 80 Then%>
                                                            
                                                    <%--<img src="http://<%=HttpContext.Current.Request.Url.Authority%>/Images/Dashboard/cup.png" style="width: 42px; height: 42px" />--%>
                                                        <tr><td>3</td><td><img src="http://<%=HttpContext.Current.Request.Url.Authority%>/Images/Dashboard/W1.png" style="width: 42px; height: 42px" /></td><td><%= check_rank(Session("st_code"), "3")%></td></tr>
                                                    <%End If%>
                                                <%
                                                     
                                                    'If dt.Rows(0)("St_Id") = Session("st_code") AndAlso Val(dt.Rows(0)("st_Level1")) >= 80 Then
                                                    If Val(dt.Rows(0)("st_Level4")) >= 80 Then%>
                                                            
                                                    <%--<img src="http://<%=HttpContext.Current.Request.Url.Authority%>/Images/Dashboard/cup.png" style="width: 42px; height: 42px" />--%>
                                                        <tr><td>4</td><td><img src="http://<%=HttpContext.Current.Request.Url.Authority%>/Images/Dashboard/W1.png" style="width: 42px; height: 42px" /></td><td><%= check_rank(Session("st_code"), "4")%></td></tr>
                                                    <%End If%>
                                                <%
                                                     
                                                    'If dt.Rows(0)("St_Id") = Session("st_code") AndAlso Val(dt.Rows(0)("st_Level1")) >= 80 Then
                                                    If Val(dt.Rows(0)("st_Level5")) >= 80 Then%>
                                                            
                                                    <%--<img src="http://<%=HttpContext.Current.Request.Url.Authority%>/Images/Dashboard/cup.png" style="width: 42px; height: 42px" />--%>
                                                        <tr><td>5</td><td><img src="http://<%=HttpContext.Current.Request.Url.Authority%>/Images/Dashboard/W1.png" style="width: 42px; height: 42px" /></td><td><%= check_rank(Session("st_code"), "5")%></td></tr>
                                                    <%End If%>

                                                </table>
                                                <%
                                            End If
                                            tcon2.Open()
                                            tcon2.Close()
                                        End Using
                                Catch ex As Exception

                                End Try
                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    %>









                            </div>