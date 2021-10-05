Imports System.Data.SqlClient
Imports System.Web.Services
Imports System.Data

Partial Class Levels_quest1

    Inherits System.Web.UI.Page
    Private Shared i As Integer
    Private Shared mint As Integer
    Private Shared sec As Integer
    'متغير عدد الاجابات الصحيحة
    Private Shared correctAnswers As Integer
    'متغير عدد الإجابات الخاطئة
    Private Shared WrongAnswers As Integer
    'متغير عدد الأسئلة
    Private Shared QNum As Integer = 1
    'متغير الدرجة النهائية
    Private Shared marke As Integer = 0
    'متغير عدد المحاولات
    Private Shared tries As Integer = 0

    Private Shared ConString As String = ""

    Protected Sub Page_Load(sender As Object, e As EventArgs) Handles Me.Load
        Label1.Text = Session("st_code")


        If Not Session("loged") Then Response.Redirect("~/default.aspx")
          
        If Not IsPostBack Then
            'بداية الاختبار 
            marke = 0
            QNum = 0

        End If

        'عدد الاسئلة 
        If IsPostBack Then
            'Txt_quest.Text = QNum & " \ 10"
            tries += 1

        End If

        'اخفاء الأسئلة 
        disablepanel()
        'فتح السؤال الأول
        'Q1panel.Visible = True




    End Sub
 
    Protected Sub disablepanel()
        'اخفاء كل الاسئلة
        'Q1panel.Visible = False
        'Q1pane2.Visible = False
        'Q1pane3.Visible = False
        'Q1pane4.Visible = False
        'Q1pane5.Visible = False
        'Q1pane6.Visible = False
        'Q1pane7.Visible = False
        'Q1pane8.Visible = False
        'Q1pane9.Visible = False
        'Q1pane10.Visible = False
        'Q1pane11.Visible = False

    End Sub
    <WebMethod()> _
    Public Shared Sub nextquest(st_code As String, answer As Boolean, degree As Decimal, q_id As String, a_id As String)
        'دالة السؤال التالي
        QNum += 1
        'Txt_quest.Text = QNum.ToString + " / 10"
        'progBar.Width = System.Web.UI.WebControls.Unit.Percentage(QNum * 10)


        Try
            Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                Dim tupdateQuery4 As String = "if EXISTS (select Answer from [Tbl_Answers] where St_Id = @stid and Q_Id =  @q_id and A_ID = @a_id) " & _
                " BEGIN " & _
                " update [Tbl_Answers] set Answer = @answer, degree = @degree  where St_Id = @stid and Q_Id = @q_id and A_ID = @a_id; " & _
                " End " & _
                " ELSE " & _
                " BEGIN " & _
                " insert into [Tbl_Answers] (St_Id, Q_Id, A_ID, Answer, degree) values(@stid, @q_id, @a_id, @answer, @degree); " & _
                " END "

                Dim tSqlCommand24 As New SqlCommand(tupdateQuery4, tcon2)
                With tSqlCommand24
                    .Parameters.AddWithValue("@stid", st_code)
                    .Parameters.AddWithValue("@a_id", a_id)
                    .Parameters.AddWithValue("@q_id", q_id)
                    .Parameters.AddWithValue("@degree", degree)
                    .Parameters.AddWithValue("@answer", answer)

                End With
                tcon2.Open()
                tSqlCommand24.ExecuteNonQuery()
                tcon2.Close()
            End Using

        Catch ex As Exception
            ' LBL_Code.Text = ex.Message
        End Try



    End Sub
    Protected Sub correct()
        marke += 1

    End Sub
    'Protected Sub studentResult()

    '    Lbl_totalMark.Text = " الأسئلة الخاطئة : " & 10 - marke
    '    Lbl_totalCorrect.Text = "الاسئلة الصحيحة : " & marke
    '    'حفظ التعديلات
    '    'Try
    '    '    Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
    '    '        Dim tupdateQuery4 As String = "Update [Tbl_StudentData] set st_level1 = @mark  where St_Id = @stid"
    '    '        Dim tSqlCommand24 As New SqlCommand(tupdateQuery4, tcon2)
    '    '        With tSqlCommand24
    '    '            'النقاط = عدد الاسئلة الصحيحة × 5
    '    '            .Parameters.AddWithValue("@mark", marke * 5)
    '    '            .Parameters.AddWithValue("@stid", Session("st_code"))
    '    '        End With
    '    '        tcon2.Open()
    '    '        tSqlCommand24.ExecuteNonQuery()
    '    '        tcon2.Close()
    '    '    End Using
    '    'Catch ex As Exception
    '    '    ' LBL_Code.Text = ex.Message
    '    'End Try

    '    ''''نهاية حفظ التعديلات
    '    btn_ans.Visible = False
    '    If marke = 8 Or marke = 7 Then
    '        'البرونزية
    '        img_gold.ImageUrl = "~/Levels/images/plat.png"

    '    ElseIf marke = 9 Then
    '        'الفضية
    '        img_gold.ImageUrl = "~/Levels/images/nat.png"

    '    ElseIf marke = 10 Then
    '        'الذهبية
    '        img_gold.ImageUrl = "~/Levels/images/Gold.png"

    '        Btn_retry.Visible = False
    '    Else
    '        img_gold.ImageUrl = "~/Levels/images/wrongtry.png"
    '        Btn_next.Visible = False
    '        If tries >= 21 Then
    '            Btn_retry.Visible = False
    '            btn_ans.Visible = True
    '        Else
    '            Btn_retry.Visible = True
    '            btn_ans.Visible = False
    '        End If


    '    End If

    'End Sub
    '1
    'Protected Sub ImageButton1_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton1.Click

    '    disablepanel()
    '    'Q1pane2.Visible = True
    '    nextquest(True, 0)

    'End Sub
    'Protected Sub ImageButton2_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton2.Click

    '    disablepanel()
    '    'Q1pane2.Visible = True
    '    correct()

    '    nextquest(False, 1)

    'End Sub
    '2
    'Protected Sub ImageButton3_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton3.Click

    '    disablepanel()
    '    'Q1pane3.Visible = True

    '    correct()

    '    nextquest(True, 1)

    'End Sub
    'Protected Sub ImageButton4_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton4.Click

    '    disablepanel()
    '    'Q1pane3.Visible = True
    '    nextquest(False, 0)

    'End Sub
    ''3
    'Protected Sub ImageButton5_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton5.Click

    '    disablepanel()
    '    'Q1pane4.Visible = True
    '    nextquest(True, 0)

    'End Sub
    'Protected Sub ImageButton6_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton6.Click

    '    disablepanel()
    '    'Q1pane4.Visible = True
    '    correct()
    '    nextquest(False, 1)
    'End Sub
    ''4
    'Protected Sub ImageButton7_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton7.Click

    '    disablepanel()
    '    'Q1pane5.Visible = True
    '    correct()
    '    nextquest(True, 1)

    'End Sub
    'Protected Sub ImageButton8_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton8.Click

    '    disablepanel()
    '    'Q1pane5.Visible = True
    '    nextquest(False, 0)

    'End Sub
    ''5
    'Protected Sub ImageButton9_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton9.Click

    '    disablepanel()
    '    'Q1pane6.Visible = True
    '    nextquest(True, 0)

    'End Sub
    'Protected Sub ImageButton10_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton10.Click

    '    disablepanel()
    '    'Q1pane6.Visible = True
    '    correct()
    '    nextquest(False, 1)

    'End Sub
    ''6
    'Protected Sub ImageButton11_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton11.Click

    '    disablepanel()
    '    'Q1pane7.Visible = True
    '    correct()
    '    nextquest(True, 1)

    'End Sub
    'Protected Sub ImageButton12_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton12.Click

    '    disablepanel()
    '    'Q1pane7.Visible = True
    '    nextquest(False, 0)

    'End Sub
    ''7
    'Protected Sub ImageButton13_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton13.Click

    '    disablepanel()
    '    'Q1pane8.Visible = True
    '    nextquest(True, 0)

    'End Sub
    'Protected Sub ImageButton14_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton14.Click

    '    disablepanel()
    '    'Q1pane8.Visible = True
    '    correct()
    '    nextquest(False, 1)

    'End Sub
    ''8
    'Protected Sub ImageButton15_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton15.Click

    '    disablepanel()
    '    'Q1pane9.Visible = True
    '    correct()
    '    nextquest(True, 1)

    'End Sub
    'Protected Sub ImageButton16_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton16.Click

    '    disablepanel()
    '    'Q1pane9.Visible = True

    '    nextquest(False, 0)

    'End Sub
    ''9
    'Protected Sub ImageButton17_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton17.Click

    '    disablepanel()
    '    'Q1pane10.Visible = True
    '    nextquest(True, 0)

    'End Sub
    'Protected Sub ImageButton18_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton18.Click

    '    disablepanel()
    '    Q1pane10.Visible = True
    '    correct()
    '    nextquest(False, 1)

    'End Sub
    'Protected Sub Btn_next_Click(sender As Object, e As EventArgs) Handles Btn_next.Click
    '    Response.Redirect("../Dashboard.aspx")
    'End Sub
    '10
    'Protected Sub ImageButton19_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton19.Click
    '    disablepanel()
    '    Q1pane11.Visible = True
    '    correct()
    '    nextquest(True, 1)

    '    studentResult()
    '    marke = 0
    '    QNum = 0

    'End Sub
    'Protected Sub ImageButton20_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton20.Click
    '    disablepanel()
    '    Q1pane11.Visible = True
    '    nextquest(False, 0)

    '    studentResult()

    '    marke = 0
    '    QNum = 0
    'End Sub
    'Protected Sub btn_ans_Click(sender As Object, e As EventArgs) Handles btn_ans.Click
    '    'عرضالإجابات بعد المحاولة 3
    '    Response.Redirect("quest1sol.aspx")
    'End Sub
    <WebMethod()> _
    Public Shared Function SetQLvlRemainingTime(St_Id As String, st_Level1_remaining_time As String, Q_Id As String) As String()
        Try
            Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                'Dim tupdateQuery4 As String = "Update [Tbl_StudentData] set st_Level" + Q_Id + "_remaining_time = @st_Level1_remaining_time, st_Level" + Q_Id + "_curr_attem=st_Level" + Q_Id + "_curr_attem + 1, st_level" + Q_Id + " = (select (sum(degree) / count(Q_Id))*100 from Tbl_Answers where St_Id = @stid and Q_Id = @Q_Id)  where St_Id = @stid "
                Dim tupdateQuery4 As String = "Update [Tbl_StudentData] set st_Level" + Q_Id + "_remaining_time = @st_Level1_remaining_time, st_Level" + Q_Id + "_curr_attem=st_Level" + Q_Id + "_curr_attem + 1, st_level" + Q_Id + " = (select sum(degree) from Tbl_Answers where St_Id = @stid and Q_Id = @Q_Id)  where St_Id = @stid "
                Dim tSqlCommand24 As New SqlCommand(tupdateQuery4, tcon2)
                With tSqlCommand24
                    'النقاط = عدد الاسئلة الصحيحة × 5
                    .Parameters.AddWithValue("@mark", marke * 5)
                    .Parameters.AddWithValue("@st_Level1_remaining_time", st_Level1_remaining_time)
                    .Parameters.AddWithValue("@stid", St_Id)
                    .Parameters.AddWithValue("@Q_Id", Q_Id)
                End With
                tcon2.Open()
                tSqlCommand24.ExecuteNonQuery()
                tcon2.Close()
            End Using
            Return getst_Level1_remaining_time(St_Id, Q_Id)
        Catch ex As Exception
            ' LBL_Code.Text = ex.Message
            Return getst_Level1_remaining_time(St_Id, Q_Id)
        End Try
    End Function
    <WebMethod()> _
    Public Shared Function getst_Level1_remaining_time(St_Id As String, Q_Id As String) As String()
        Dim st_Level1_remaining_time(1) As String
        Try
            Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                Dim tupdateQuery4 As String = "Select st_Level" + Q_Id + "_remaining_time, st_Level" + Q_Id + "_curr_attem from [Tbl_StudentData] where St_Id = @stid  "
                Dim dt As DataTable = New DataTable()
                Dim adp As Data.SqlClient.SqlDataAdapter = New Data.SqlClient.SqlDataAdapter(tupdateQuery4, tcon2)
                adp.SelectCommand.Parameters.AddWithValue("stid", St_Id)
                adp.SelectCommand.Parameters.AddWithValue("Q_Id", Q_Id)
                adp.Fill(dt)
                If dt.Rows.Count > 0 Then
                    st_Level1_remaining_time(0) = dt.Rows(0)("st_Level" + Q_Id + "_remaining_time").ToString()
                    st_Level1_remaining_time(1) = dt.Rows(0)("st_Level" + Q_Id + "_curr_attem").ToString()
                End If
                tcon2.Open()
                tcon2.Close()
            End Using
        Catch ex As Exception

        End Try
        Return st_Level1_remaining_time
    End Function
    <WebMethod()> _
    Public Shared Function studentResult(St_Id As String, Q_id As String) As String()
        Dim Rv_studentResult(3) As String
        Try
            Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                Dim sSql As String = " SELECT St_Id, Q_Id, SUM(degree) AS degree " & _
                                              " FROM Tbl_Answers " & _
                                              " WHERE (St_Id = @stid) AND (Q_Id = @Q_id) " & _
                                              " GROUP BY St_Id, Q_Id "
                Dim dt As DataTable = New DataTable()
                Dim adp As Data.SqlClient.SqlDataAdapter = New Data.SqlClient.SqlDataAdapter(sSql, tcon2)
                With adp.SelectCommand
                    .Parameters.AddWithValue("@Q_id", Q_id)
                    .Parameters.AddWithValue("@stid", St_Id)
                End With
                tcon2.Open()
                adp.Fill(dt)
                If dt.Rows.Count > 0 Then
                    Dim currmarke As Integer = dt.Rows(0)("degree").ToString()
                    Rv_studentResult(0) = dt.Rows(0)("degree").ToString()
                    Rv_studentResult(1) = (dt.Rows(0)("degree") * 10).ToString() + "%"


                    If currmarke = 8 OrElse currmarke = 7 Then
                        'البرونزية
                        Rv_studentResult(2) = "../Levels/images/plat.png"
                        Rv_studentResult(3) = True
                    ElseIf currmarke = 9 Then
                        'الفضية
                        Rv_studentResult(2) = "../Levels/images/nat.png"

                    ElseIf currmarke = 10 Then
                        'الذهبية
                        Rv_studentResult(2) = "../Levels/images/Gold.png"

                        Rv_studentResult(3) = False
                    Else
                        Rv_studentResult(2) = "../Levels/images/wrongtry.png"
                        'Btn_next.Visible = False
                        Rv_studentResult(3) = True
                        'If tries >= 21 Then
                        '    Btn_retry.Visible = False
                        '    btn_ans.Visible = True
                        'Else
                        '    Btn_retry.Visible = True
                        '    btn_ans.Visible = False
                        'End If


                    End If

 
                End If
                    tcon2.Close()
            End Using

        Catch ex As Exception
            ' LBL_Code.Text = ex.Message

        End Try
        Return Rv_studentResult

    End Function

 
End Class
