Imports System.Data.SqlClient
Imports System.Data
Imports System.Web.Services

Partial Class cp_students
    Inherits System.Web.UI.Page

    <WebMethod()> _
    Public Shared Function update_student(St_Id As String, St_name As String, St_Class As String, st_username As String, St_pass As String, st_notes As String, st_group As String, st_Level As String, st_activityLevel As String, st_Level1 As String, st_activityLevel1 As String, st_Level1_curr_attem As String, st_Level1_remaining_time As String, st_Level2 As String, st_Level2_curr_attem As String, st_Level2_remaining_time As String, st_activityLevel2 As String, st_Level3 As String, st_Level3_curr_attem As String, st_Level3_remaining_time As String, st_activityLevel3 As String, st_Level4 As String, st_Level4_curr_attem As String, st_Level4_remaining_time As String, st_activityLevel4 As String, st_Level5 As String, st_Level5_curr_attem As String, st_activityLevel5 As String, st_Level6 As String, st_Pretest As String, isadmin As String) As Boolean
        Try

            Using gtCon As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                Dim tupdateQuery4 As String = " UPDATE Tbl_StudentData " & _
                                              " SET St_name =St_name, St_Class = @St_Class, st_username = @st_username, St_pass = @St_pass, st_notes = @st_notes, st_group =@st_group, st_Level =@st_Level, st_activityLevel =@st_activityLevel, st_Level1 =@st_Level1, st_activityLevel1 =@st_activityLevel1, st_Level1_curr_attem = @st_Level1_curr_attem, st_Level1_remaining_time = @st_Level1_remaining_time, st_Level2 =@st_Level2, " & _
                                              " st_Level2_curr_attem = @st_Level2_curr_attem, st_Level2_remaining_time = @st_Level2_remaining_time, st_activityLevel2 = @st_activityLevel2, st_Level3 = @st_Level3, st_Level3_curr_attem =@st_Level3_curr_attem, st_Level3_remaining_time = @st_Level3_remaining_time, st_activityLevel3 = @st_activityLevel3, st_Level4 = @st_Level4, st_Level4_curr_attem = @st_Level4_curr_attem, " & _
                                              " st_Level4_remaining_time = @st_Level4_remaining_time, st_activityLevel4 = @st_activityLevel4, st_Level5 = @st_Level5, st_Level5_curr_attem = @st_Level5_curr_attem, st_Level5_remaining_time = @st_Level5_remaining_time, st_activityLevel5 =@st_activityLevel5, st_Level6 =@st_Level6, st_Pretest = @st_Pretest, isadmin =@isadmin where St_Id = @stid "

                Dim tSqlCommand24 As New SqlCommand(tupdateQuery4, gtCon)
                With tSqlCommand24
                    .Parameters.AddWithValue("@stid", St_Id)
                    .Parameters.AddWithValue("@St_name", St_name)
                    .Parameters.AddWithValue("@St_Class", St_Class)
                    .Parameters.AddWithValue("@st_username", st_username)
                    .Parameters.AddWithValue("@St_pass", St_pass)
                    .Parameters.AddWithValue("@st_notes", st_notes)
                    .Parameters.AddWithValue("@st_group", st_group)
                    .Parameters.AddWithValue("@st_Level", st_Level)
                    .Parameters.AddWithValue("@st_activityLevel", st_activityLevel)
                    .Parameters.AddWithValue("@st_Level1", st_Level1)
                    .Parameters.AddWithValue("@st_activityLevel1", st_activityLevel1)
                    .Parameters.AddWithValue("@st_Level1_curr_attem", st_Level1_curr_attem)
                    .Parameters.AddWithValue("@st_Level1_remaining_time", st_Level1_remaining_time)
                    .Parameters.AddWithValue("@st_Level2", st_Level2)
                    .Parameters.AddWithValue("@st_Level2_curr_attem", st_Level2_curr_attem)
                    .Parameters.AddWithValue("@st_Level2_remaining_time", st_Level2_remaining_time)
                    .Parameters.AddWithValue("@st_activityLevel2", st_activityLevel2)
                    .Parameters.AddWithValue("@st_Level3", st_Level3)
                    .Parameters.AddWithValue("@st_Level3_curr_attem", st_Level3_curr_attem)
                    .Parameters.AddWithValue("@st_Level3_remaining_time", st_Level3_remaining_time)
                    .Parameters.AddWithValue("@st_activityLevel3", st_activityLevel3)
                    .Parameters.AddWithValue("@st_Level4", st_Level4)
                    .Parameters.AddWithValue("@st_Level4_curr_attem", st_Level4_curr_attem)
                    .Parameters.AddWithValue("@st_Level4_remaining_time", st_Level4_remaining_time)
                    .Parameters.AddWithValue("@st_activityLevel4", st_activityLevel4)
                    .Parameters.AddWithValue("@st_Level5", st_Level5)
                    .Parameters.AddWithValue("@st_Level5_curr_attem", st_Level5_curr_attem)
                    .Parameters.AddWithValue("@st_activityLevel5", st_activityLevel5)
                    .Parameters.AddWithValue("@st_Level6", st_Level6)
                    .Parameters.AddWithValue("@st_Pretest", st_Pretest)
                    .Parameters.AddWithValue("@isadmin", isadmin)

                End With
                gtCon.Open()
                tSqlCommand24.ExecuteNonQuery()
                gtCon.Close()
            End Using
        Catch ex As Exception

        End Try
        Return True
    End Function
    <WebMethod()> _
    Public Shared Function delete_student(St_Id As String) As Boolean
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
        Return True
    End Function


    <WebMethod()> _
    Public Shared Function fillst_data(St_Id As String) As String()
        Dim Rv(27) As String
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
                    Rv(5) = dt.Rows(0)("st_notes") & ""

                    Rv(6) = Val(dt.Rows(0)("st_Level") & "")
                    Rv(7) = Val(dt.Rows(0)("st_activityLevel") & "")
                          
                    Rv(8) = Val(dt.Rows(0)("st_Level1") & "")
                    Rv(9) = Val(dt.Rows(0)("st_activityLevel1") & "")
                    Rv(10) = Val(dt.Rows(0)("st_Level1_curr_attem") & "")
                    Rv(11) = Val(dt.Rows(0)("st_Level1_remaining_time") & "")

                    Rv(12) = Val(dt.Rows(0)("st_Level2") & "")
                    Rv(13) = Val(dt.Rows(0)("st_activityLevel2") & "")
                    Rv(14) = Val(dt.Rows(0)("st_Level2_curr_attem") & "")
                    Rv(15) = Val(dt.Rows(0)("st_Level2_remaining_time") & "")

                    Rv(16) = Val(dt.Rows(0)("st_Level3") & "")
                    Rv(17) = Val(dt.Rows(0)("st_activityLevel3") & "")
                    Rv(18) = Val(dt.Rows(0)("st_Level3_curr_attem") & "")
                    Rv(19) = Val(dt.Rows(0)("st_Level3_remaining_time") & "")

                    Rv(20) = Val(dt.Rows(0)("st_Level4") & "")
                    Rv(21) = Val(dt.Rows(0)("st_activityLevel4") & "")
                    Rv(22) = Val(dt.Rows(0)("st_Level4_curr_attem") & "")
                    Rv(23) = Val(dt.Rows(0)("st_Level4_remaining_time") & "")

                    Rv(24) = Val(dt.Rows(0)("st_Level5") & "")
                    Rv(25) = Val(dt.Rows(0)("st_activityLevel5") & "")
                    Rv(26) = Val(dt.Rows(0)("st_Level5_curr_attem") & "")
                    Rv(27) = Val(dt.Rows(0)("st_Level5_remaining_time") & "")
                     

                End If

                tcon2.Close()
            End Using
        Catch ex As Exception

        End Try
        Return Rv
    End Function



End Class
