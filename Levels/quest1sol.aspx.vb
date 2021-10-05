
Partial Class Levels_quest1sol
    Inherits System.Web.UI.Page

    Protected Sub Btn_next_Click(sender As Object, e As EventArgs) Handles Btn_next.Click
        Response.Redirect("../Dashboard.aspx")
    End Sub

    Protected Sub Page_Load(sender As Object, e As EventArgs) Handles Me.Load
        If Not IsNothing(Request("quiz_id")) Then
            levelTitle._pQid = Request("quiz_id")
        End If


    End Sub
End Class
