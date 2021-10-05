Imports System.Web.Services
Imports System.Data.SqlClient
Imports System.Data

Partial Class cp_lvlsNquizs
    Inherits System.Web.UI.Page



    <WebMethod()> _
    Public Shared Function getQuizs_QuestionList(quiz_id As String) As String
        Dim Rv As String = ""
        If quiz_id = "" Then quiz_id = 1
        Try
            Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                Dim tupdateQuery4 As String = "SELECT * FROM Tbl_Question where quiz_id = @quiz_id order by q_id desc"
                Dim dt As DataTable = New DataTable()
                Dim adp As Data.SqlClient.SqlDataAdapter = New Data.SqlClient.SqlDataAdapter(tupdateQuery4, tcon2)
                adp.SelectCommand.Parameters.AddWithValue("quiz_id", quiz_id)
                adp.Fill(dt)
                If dt.Rows.Count > 0 Then
                    For xIndx As Integer = 0 To dt.Rows.Count
                        Rv += "<tr>"
                        Rv += "<td><a href='javascript://' onclick=""shide('id01', '" + dt.Rows(xIndx)("q_id").ToString() + "')"">" + dt.Rows(xIndx)("q_title").ToString() + "</a></td>"
                        'Rv += "<td>" + dt.Rows(xIndx)("q_title").ToString() + "</td>"

                        If dt.Rows(xIndx)("q_type").ToString() = "0" AndAlso dt.Rows(xIndx)("q_d_answer").ToString() = "1" Then
                            Rv += "<td>صواب</td>"
                        ElseIf dt.Rows(xIndx)("q_type").ToString() = "0" AndAlso dt.Rows(xIndx)("q_d_answer").ToString() = "0" Then
                            Rv += "<td>خطأ</td>"
                        ElseIf dt.Rows(xIndx)("q_type").ToString() = "1" Then
                            'Rv += "<td>" + dt.Rows(xIndx)("q_d_answer").ToString() + "</td>"
                            Rv += "<td>" + dt.Rows(xIndx)("q_choices").ToString().Split("|")(dt.Rows(xIndx)("q_d_answer")) + "</td>"
                        End If
                        If (dt.Rows(xIndx)("q_type").ToString() = "0") Then
                            Rv += "<td>صواب / خطأ</td>"
                        End If
                        If (dt.Rows(xIndx)("q_type").ToString() = "1") Then
                            Rv += "<td>إختيار من متعدد</td>"
                        End If
                        Rv += "<td>" + dt.Rows(xIndx)("q_choices").ToString() + "</td>"
                        Rv += "</tr>"
                    Next
                End If
                tcon2.Open()
                tcon2.Close()
            End Using
        Catch ex As Exception

        End Try
        Return Rv
    End Function
    <WebMethod()> _
    Public Shared Function fillQuestionData(qid As String) As String()
        Dim Rv(4) As String
        Try
            Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                Dim tupdateQuery4 As String = "SELECT * FROM Tbl_Question where q_id = @qid"
                Dim dt As DataTable = New DataTable()
                Dim adp As Data.SqlClient.SqlDataAdapter = New Data.SqlClient.SqlDataAdapter(tupdateQuery4, tcon2)
                adp.SelectCommand.Parameters.AddWithValue("qid", qid)
                adp.Fill(dt)
                If dt.Rows.Count > 0 Then

                    Rv(0) = dt.Rows(0)("q_id")
                    Rv(1) = dt.Rows(0)("q_title")
                    Rv(2) = dt.Rows(0)("q_d_answer")
                    Rv(3) = dt.Rows(0)("q_type")
                    Rv(4) = dt.Rows(0)("q_choices").ToString().Replace("|", ",")

                End If


            End Using
        Catch ex As Exception

        End Try

        Return Rv
    End Function
    <WebMethod()> _
    Public Shared Function updatequestion(quiz_id As String, q_id As String, q_title As String, q_d_answer As String, q_type As String, q_choices As String) As Boolean
        Try
            Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                'Dim sSql As String = " delete from Tbl_Question where q_id = @q_id; Insert INTO Tbl_Question(quiz_id, q_title, q_d_answer, q_type, q_choices) values (@quiz_id, @q_title, @q_d_answer, @q_type, @q_choices) "

                Dim sSql As String = " UPDATE Tbl_Question SET quiz_id = @quiz_id, q_title = @q_title, q_d_answer = @q_d_answer, q_type = @q_type, q_choices =  @q_choices where q_id = @q_id"
                Dim tSqlCommand24 As New SqlCommand(sSql, tcon2)
                With tSqlCommand24
                    .Parameters.AddWithValue("@quiz_id", quiz_id)
                    .Parameters.AddWithValue("@q_id", q_id)
                    .Parameters.AddWithValue("@q_title", q_title)
                    .Parameters.AddWithValue("@q_d_answer", Val(q_d_answer))
                    .Parameters.AddWithValue("@q_type", q_type)
                    .Parameters.AddWithValue("@q_choices", q_choices)
                End With
                tcon2.Open()
                tSqlCommand24.ExecuteNonQuery()
                tcon2.Close()
            End Using
        Catch ex As Exception

        End Try
        Return True
    End Function

End Class
