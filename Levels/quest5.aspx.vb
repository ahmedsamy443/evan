Imports System.Data.SqlClient

Partial Class Levels_quest5
    Inherits System.Web.UI.Page
    Private Shared i As Integer
    Private Shared mint As Integer
    Private Shared sec As Integer
    Private Shared correctAnswers As Integer
    Private Shared WrongAnswers As Integer
    Private Shared QNum As Integer = 1
    Private Shared marke As Integer = 0
    Private Shared tries As Integer = 1

    Private Shared ConString As String = ""

    Protected Sub Page_Load(sender As Object, e As EventArgs) Handles Me.Load
        tries += 1
        If Not IsPostBack Then
            marke = 0
            QNum = 0
        End If
        'عدد الاسئلة 
        If IsPostBack Then
            Txt_quest.Text = QNum & " \ 8"
            tries += 1

        End If

        'اخفاء الأسئلة 
        disablepanel()
        'فتح السؤال الأول
        Q1panel.Visible = True

    End Sub

    Protected Sub disablepanel()
        Q1panel.Visible = False
        Q1pane2.Visible = False
        Q1pane3.Visible = False
        Q1pane4.Visible = False
        Q1pane5.Visible = False
        Q1pane6.Visible = False
        Q1pane7.Visible = False
        Q1pane8.Visible = False

        ' Q1Pane10.Visible = False
        Q1pane11.Visible = False

    End Sub
    Protected Sub nextquest()

        QNum += 1
        Txt_quest.Text = QNum.ToString + " / 6"
        'progBar.Width = progBar.Width.Value + 30%



    End Sub
    Protected Sub correct()
        marke += 1
        '        txt_mark.Text = marke

    End Sub
    Protected Sub studentResult()
        Lbl_totalMark.Text = " الأسئلة الخاطئة : " & 8 - marke
        Lbl_totalCorrect.Text = "الاسئلة الصحيحة : " & marke
        'حفظ التعديلات

        Try
            Using tcon2 As New SqlConnection("")

                'Dim tupdateQuery4 As String = "Update [Tbl_Students] set st_level1=@01 where st_code like @stid"
                Dim tupdateQuery4 As String = "Update [Tbl_Students] set st_level3 = @mark  where st_code = @stid"

                Dim tSqlCommand24 As New SqlCommand(tupdateQuery4, tcon2)
                With tSqlCommand24
                    .Parameters.AddWithValue("@mark", marke * 5)
                    .Parameters.AddWithValue("@stid", Session("st_code"))
                End With

                tcon2.Open()
                tSqlCommand24.ExecuteNonQuery()
                tcon2.Close()
            End Using
        Catch ex As Exception
            ' LBL_Code.Text = ex.Message
        End Try

        ''''نهاية حفظ التعديلات
        If marke = 6 Then
            'البرونزية
            img_gold.ImageUrl = "~/Levels/images/plat.png"
            Btn_next.Visible = True
        ElseIf marke = 7 Then
            'الفضية
            img_gold.ImageUrl = "~/Levels/images/nat.png"
            Btn_next.Visible = True
        ElseIf marke = 8 Then
            'الذهبية
            img_gold.ImageUrl = "~/Levels/images/Gold.png"
            Btn_next.Visible = True

            Btn_retry.Visible = False
        Else
            img_gold.ImageUrl = "~/Levels/images/wrongtry.png"
            Btn_next.Visible = False
            If tries >= 17 Then
                Btn_retry.Visible = False
                btn_ans.Visible = True
            Else
                Btn_retry.Visible = True
                btn_ans.Visible = False
            End If

        End If

    End Sub

    '1
    Protected Sub ImageButton1_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton1.Click
        disablepanel()
        Q1pane2.Visible = True
        correct()
        nextquest()

    End Sub
    Protected Sub ImageButton2_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton2.Click

        disablepanel()
        Q1pane2.Visible = True


        nextquest()

    End Sub
    '2
    Protected Sub ImageButton3_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton3.Click

        disablepanel()
        Q1pane3.Visible = True



        nextquest()

    End Sub
    Protected Sub ImageButton4_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton4.Click

        disablepanel()
        Q1pane3.Visible = True

        correct()

        nextquest()

    End Sub
    '3
    Protected Sub ImageButton5_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton5.Click

        disablepanel()
        Q1pane4.Visible = True
        nextquest()

    End Sub
    Protected Sub ImageButton6_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton6.Click

        disablepanel()
        Q1pane4.Visible = True

        correct()

        nextquest()

    End Sub
    '4
    Protected Sub ImageButton7_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton7.Click

        disablepanel()
        Q1pane5.Visible = True

        correct()

        nextquest()

    End Sub
    Protected Sub ImageButton8_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton8.Click

        disablepanel()
        Q1pane5.Visible = True
        nextquest()

    End Sub

    '5
    Protected Sub b5_Click(sender As Object, e As EventArgs) Handles b5.Click
        If R5.SelectedValue = 1 Then
            disablepanel()
            Q1pane6.Visible = True
            correct()
            nextquest()
        Else
            disablepanel()
            Q1pane6.Visible = True

            nextquest()
        End If

    End Sub

    '6
    Protected Sub b6_Click(sender As Object, e As EventArgs) Handles b6.Click
        If R6.SelectedValue = 1 Then
            disablepanel()
            Q1pane7.Visible = True
            correct()
            nextquest()
        Else
            disablepanel()
            Q1pane7.Visible = True

            nextquest()
        End If

    End Sub
    '7
  

    '8 result
    Protected Sub b8_Click(sender As Object, e As EventArgs) Handles b8.Click
        If R8.SelectedValue = 4 Then
            disablepanel()
            Q1pane11.Visible = True
            correct()
            nextquest()
            Lbl_totalMark.Text = "الأسئلة الصحيحة : " & marke
            studentResult()
            marke = 0
            QNum = 0
        Else
            disablepanel()
            Q1pane11.Visible = True
            nextquest()
            Lbl_totalMark.Text = "الأسئلة الصحيحة : " & marke
            studentResult()
            marke = 0
            QNum = 0
        End If

    End Sub


    Protected Sub Btn_next_Click(sender As Object, e As EventArgs) Handles Btn_next.Click
        Response.Redirect("~/Dashboard.aspx")
    End Sub
   
   
    Protected Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        If R7.SelectedValue = 1 Then

            disablepanel()

            Q1pane8.Visible = True

            correct()

            nextquest()

        Else
            disablepanel()
            Q1pane8.Visible = True

            nextquest()
        End If
    End Sub
    Protected Sub btn_ans_Click(sender As Object, e As EventArgs) Handles btn_ans.Click
        Response.Redirect("quest5sol.aspx")
    End Sub
End Class
