Imports System.Data.SqlClient

Partial Class Levels_quest_2
    Inherits System.Web.UI.Page

    Private Shared i As Integer
    Private Shared mint As Integer
    Private Shared sec As Integer
    Private Shared correctAnswers As Integer
    Private Shared WrongAnswers As Integer
    Private Shared QNum As Integer = 1
    Private Shared marke As Integer = 0
    Private Shared tries As Integer = 0
    'define many times because webserver file not found (saving data)
    Private Shared conString As String = ""
    
    Protected Sub Page_Load(sender As Object, e As EventArgs) Handles Me.Load

        If Not IsPostBack Then
            marke = 0
            QNum = 0

        End If

        'عدد الاسئلة 
        If IsPostBack Then
            Txt_quest.Text = QNum & " \ 9"
            tries += 1

        End If


        'فحض عدد المحاولات 


        'اخفاء الأسئلة 
        disablepanel()
        'فتح السؤال الأول
        Q1panel.Visible = True



        'فحض عدد المحاولات 


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
        Q1pane9.Visible = False

        Q1pane11.Visible = False

    End Sub
    Protected Sub nextquest()

        QNum += 1
        Txt_quest.Text = QNum.ToString + " / 9"
        'progBar.Width = progBar.Width.Value + 30%



    End Sub
    Protected Sub correct()
        marke += 1
        '        txt_mark.Text = marke

    End Sub
    Protected Sub studentResult()
        Lbl_totalMark.Text = " الأسئلة الخاطئة : " & 10 - marke
        Lbl_totalCorrect.Text = "الاسئلة الصحيحة : " & marke
        'حفظ التعديلات

        Try
            Using tcon2 As New SqlConnection(conString)

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
        If marke = 8 Or marke = 7 Then
            'البرونزية
            img_gold.ImageUrl = "~/Levels/images/nat.png"

        ElseIf marke = 9 Then
            'الفضية
            img_gold.ImageUrl = "~/Levels/images/plat.png"

        ElseIf marke = 10 Then
            'ال1هبية
            img_gold.ImageUrl = "~/Levels/images/Gold.png"

            Btn_retry.Visible = False
        Else
            img_gold.ImageUrl = "~/Levels/images/wrongtry.png"
            Btn_next.Visible = False
            If tries >= 21 Then
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
        nextquest()

    End Sub
    Protected Sub ImageButton2_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton2.Click

        disablepanel()
        Q1pane2.Visible = True
        correct()

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
        correct()
        nextquest()

    End Sub
    Protected Sub ImageButton6_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton6.Click

        disablepanel()
        Q1pane4.Visible = True
        nextquest()

    End Sub
    '4
    Protected Sub ImageButton7_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton7.Click

        disablepanel()
        Q1pane5.Visible = True

        nextquest()

    End Sub
    Protected Sub ImageButton8_Click(sender As Object, e As ImageClickEventArgs) Handles ImageButton8.Click

        disablepanel()
        Q1pane5.Visible = True
        correct()
        nextquest()

    End Sub
    'اسئلةالاختيار من المتعدد
    '5
    Protected Sub ImageButton9_Click(sender As Object, e As EventArgs) Handles ImageButton9.Click

        If RadioButtonList1.SelectedValue = 4 Then
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
    Protected Sub ImageButton11_Click(sender As Object, e As EventArgs) Handles ImageButton11.Click
      
        If RadioButtonList2.SelectedValue = 1 Then
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
    Protected Sub Button3_Click(sender As Object, e As EventArgs) Handles Button3.Click
       
        If RadioButtonList3.SelectedValue = 1 Then
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

    '8
    Protected Sub Button4_Click(sender As Object, e As EventArgs) Handles Button4.Click
       
        If RadioButtonList4.SelectedValue = 1 Then
            disablepanel()
            Q1pane9.Visible = True
            correct()
            nextquest()

        Else
            disablepanel()
            Q1pane9.Visible = True

            nextquest()

        End If
       
    End Sub
    '9
    Protected Sub Button5_Click(sender As Object, e As EventArgs) Handles Button5.Click
       
        If RadioButtonList5.SelectedIndex = 4 Then
            disablepanel()
            Q1pane11.Visible = True
            correct()
            nextquest()
            studentResult()
            marke = 0
            QNum = 0
        Else
            disablepanel()
            Q1pane11.Visible = True
            nextquest()
            studentResult()
            marke = 0
            QNum = 0
        End If

    End Sub
    Protected Sub btn_ans_Click(sender As Object, e As EventArgs) Handles btn_ans.Click
        Response.Redirect("quest-2sol.aspx")
    End Sub
End Class
