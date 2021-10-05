Imports System.Web
Imports System.Web.Services
Imports System.Web.Services.Protocols
Imports System.Data.SqlClient
Imports System.Data

' To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line.
' <System.Web.Script.Services.ScriptService()> _
<WebService(Namespace:="http://tempuri.org/")> _
<WebServiceBinding(ConformsTo:=WsiProfiles.BasicProfile1_1)> _
<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Public Class WebService
    Inherits System.Web.Services.WebService

    <WebMethod()> _
    Public Function HelloWorld() As String
        Return "Hello World"
    End Function
    <WebMethod()> _
    Public Function delete_student(St_Id As String) As Boolean
        Try

            Using gtCon As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                Dim tupdateQuery4 As String = " Delete FROM Tbl_StudentData where St_Id = @stid "

                Dim tSqlCommand24 As New SqlCommand(tupdateQuery4, gtCon)
                With tSqlCommand24
                    .Parameters.AddWithValue("@stid", St_Id)
                End With
                gtCon.Open()
                tSqlCommand24.ExecuteNonQuery()
                gtCon.Close()
            End Using
        Catch ex As Exception

        End Try
    End Function


    <WebMethod()> _
    Public Function fillst_data(St_Id As String) As String()
        Dim Rv(4) As String
        Try



            Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                Dim tupdateQuery4 As String = " SELECT * FROM Tbl_StudentData where St_Id = @stid"

                Dim dt As DataTable = New DataTable()

                Dim adp As Data.SqlClient.SqlDataAdapter = New Data.SqlClient.SqlDataAdapter(tupdateQuery4, tcon2)
                adp.SelectCommand.Parameters.AddWithValue("stid", St_Id)
                adp.Fill(dt)
                If dt.Rows.Count > 0 Then


                    Rv(0) = dt.Rows(0)("St_Id")
                    Rv(1) = dt.Rows(0)("St_name")
                    Rv(2) = dt.Rows(0)("st_username")
                    Rv(3) = dt.Rows(0)("St_pass")
                    Rv(4) = dt.Rows(0)("st_group")

                End If
                tcon2.Open()
                tcon2.Close()
            End Using
        Catch ex As Exception

        End Try
        Return Rv
    End Function
End Class