Imports System.Data
Imports System.Data.SqlClient

Partial Class ctrls_honoraryboard
    Inherits System.Web.UI.UserControl
    Public Function level2Word(lvl As Integer) As String
        Dim Rv(6) As String
        Rv(0) = "الأول"
        Rv(1) = "الثانى"
        Rv(2) = "الثالث"
        Rv(3) = "الرابع"
        Rv(4) = "الخامس"
        Rv(5) = "السادس"


        Return Rv(lvl)
    End Function


    Public Function check_rank(St_Id As String, Lvl As String) As String
        Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
            Dim sSql As String = " SELECT TOP 1 St_Id, MAX(st_Level" + Lvl + ") AS st_Level" + Lvl + " FROM Tbl_StudentData GROUP BY St_Id order by st_Level" + Lvl + " desc "

            Dim dt As DataTable = New DataTable()
            Dim adp As Data.SqlClient.SqlDataAdapter = New Data.SqlClient.SqlDataAdapter(sSql, tcon2)
            adp.Fill(dt)
            If dt.Rows.Count > 0 Then
                If (dt.Rows(0)("St_Id") = St_Id) Then
                    Return "<img src='http://" + HttpContext.Current.Request.Url.Authority + "/Images/Dashboard/cup.png' style='width: 42px; height: 42px' />"
                Else
                    Return ""
                End If
            End If
        End Using

        Return ""
         
    End Function






End Class
