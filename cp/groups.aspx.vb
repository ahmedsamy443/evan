Imports System.Web.Services
Imports System.Data.SqlClient
Imports System.Data

Partial Class cp_groups
    Inherits System.Web.UI.Page

    <WebMethod()> _
    Public Shared Function update_group(Gb_Id As String, Gb_name As String, Gb_Notes As String, Gb_lvl1_activity_score As String, Gb_lvl2_activity_score As String, Gb_lvl3_activity_score As String, Gb_lvl4_activity_score As String, Gb_lvl5_activity_score As String) As Boolean
        Try
            Using gtCon As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                Dim tupdateQuery4 As String = " update Tbl_Group set Gb_name = @Gb_name, Gb_Notes = @Gb_Notes, Gb_lvl1_activity_score = @Gb_lvl1_activity_score , Gb_lvl2_activity_score = @Gb_lvl2_activity_score, Gb_lvl3_activity_score = @Gb_lvl3_activity_score, Gb_lvl4_activity_score = @Gb_lvl4_activity_score, Gb_lvl5_activity_score = @Gb_lvl5_activity_score where Gb_Id = @gbid "

                Dim tSqlCommand24 As New SqlCommand(tupdateQuery4, gtCon)
                With tSqlCommand24
                    .Parameters.AddWithValue("gbid", Gb_Id)
                    .Parameters.AddWithValue("Gb_name", Gb_name)
                    .Parameters.AddWithValue("Gb_Notes", Gb_Notes)
                    .Parameters.AddWithValue("Gb_lvl1_activity_score", Gb_lvl1_activity_score)
                    .Parameters.AddWithValue("Gb_lvl2_activity_score", Gb_lvl2_activity_score)
                    .Parameters.AddWithValue("Gb_lvl3_activity_score", Gb_lvl3_activity_score)
                    .Parameters.AddWithValue("Gb_lvl4_activity_score", Gb_lvl4_activity_score)
                    .Parameters.AddWithValue("Gb_lvl5_activity_score", Gb_lvl5_activity_score)
                End With
                gtCon.Open()
                tSqlCommand24.ExecuteNonQuery()
                gtCon.Close()
            End Using

        Catch ex As Exception
            Return False
        End Try
        Return True
    End Function

    <WebMethod()> _
    Public Shared Function delete_group(Gb_Id As String) As Boolean
        Try

            Using gtCon As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                Dim tupdateQuery4 As String = " Delete FROM Tbl_Group where Gb_Id = @gbid "

                Dim tSqlCommand24 As New SqlCommand(tupdateQuery4, gtCon)
                With tSqlCommand24
                    .Parameters.AddWithValue("gbid", Gb_Id)
                End With
                gtCon.Open()
                tSqlCommand24.ExecuteNonQuery()
                gtCon.Close()
            End Using

        Catch ex As Exception
            Return False
        End Try
        Return True
    End Function
    <WebMethod()> _
    Public Shared Function fillgb_data(Gb_Id As String) As String()
        Dim Rv(12) As String
        Try

            Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                Dim tupdateQuery4 As String = " SELECT * FROM Tbl_Group where Gb_Id = @gbid"

                Dim dt As DataTable = New DataTable

                Dim adp As Data.SqlClient.SqlDataAdapter = New Data.SqlClient.SqlDataAdapter(tupdateQuery4, tcon2)
                adp.SelectCommand.Parameters.AddWithValue("gbid", Gb_Id)
                adp.Fill(dt)
                If dt.Rows.Count > 0 Then


                    Rv(0) = dt.Rows(0)("Gb_Id")
                    Rv(1) = dt.Rows(0)("Gb_name") & ""
                    Rv(2) = dt.Rows(0)("Gb_Notes") & ""
                    Rv(3) = IIf(dt.Rows(0)("Gb_lvl1_activity_file") & "" = "", "لم يحدد", "<a target='_blank' href='../activitiesfiles/1/" + "Group_" + dt.Rows(0)("Gb_Id").ToString() + "_" + dt.Rows(0)("Gb_lvl1_activity_file") & "" + "'>" + dt.Rows(0)("Gb_lvl1_activity_file") & "" + "</a>")
                    Rv(4) = Val(dt.Rows(0)("Gb_lvl1_activity_score") & "")
                    Rv(5) = IIf(dt.Rows(0)("Gb_lvl2_activity_file") & "" = "", "لم يحدد", "<a target='_blank' href='../activitiesfiles/2/" + "Group_" + dt.Rows(0)("Gb_Id").ToString() + "_" + dt.Rows(0)("Gb_lvl2_activity_file") & "" + "'>" + dt.Rows(0)("Gb_lvl2_activity_file") & "" + "</a>")
                    Rv(6) = Val(dt.Rows(0)("Gb_lvl2_activity_score") & "")
                    Rv(7) = IIf(dt.Rows(0)("Gb_lvl3_activity_file") & "" = "", "لم يحدد", "<a target='_blank' href='../activitiesfiles/3/" + "Group_" + dt.Rows(0)("Gb_Id").ToString() + "_" + dt.Rows(0)("Gb_lvl3_activity_file") & "" + "'>" + dt.Rows(0)("Gb_lvl3_activity_file") & "" + "</a>")
                    Rv(8) = Val(dt.Rows(0)("Gb_lvl3_activity_score") & "")
                    Rv(9) = IIf(dt.Rows(0)("Gb_lvl4_activity_file") & "" = "", "لم يحدد", "<a target='_blank' href='../activitiesfiles/4/" + "Group_" + dt.Rows(0)("Gb_Id").ToString() + "_" + dt.Rows(0)("Gb_lvl4_activity_file") & "" + "'>" + dt.Rows(0)("Gb_lvl4_activity_file") & "" + "</a>")
                    Rv(10) = Val(dt.Rows(0)("Gb_lvl4_activity_score") & "")
                    Rv(11) = IIf(dt.Rows(0)("Gb_lvl5_activity_file") & "" = "", "لم يحدد", "<a target='_blank' href='../activitiesfiles/5/" + "Group_" + dt.Rows(0)("Gb_Id").ToString() + "_" + dt.Rows(0)("Gb_lvl5_activity_file") & "" + "'>" + dt.Rows(0)("Gb_lvl5_activity_file") & "" + "</a>")
                    Rv(12) = Val(dt.Rows(0)("Gb_lvl5_activity_score") & "")

                End If
                tcon2.Open()
                tcon2.Close()
            End Using
        Catch ex As Exception

        End Try
        Return Rv
    End Function

End Class
