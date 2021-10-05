
Partial Class Levels_Syrvy
    Inherits System.Web.UI.Page
    Protected Sub Wizard1_FinishButtonClick(sender As Object, e As WizardNavigationEventArgs)
      
        testpanel.Visible = False
        Wizard1.Visible = False

        result.Visible = True

    End Sub

    Protected Sub Page_Load(sender As Object, e As EventArgs) Handles Me.Load

        result.Visible = False
        testpanel.Visible = True

        Wizard1.Visible = True


    End Sub
    Protected Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Response.Redirect("dashboard.aspx")

    End Sub

End Class
