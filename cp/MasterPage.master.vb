
Partial Class MasterPage
    Inherits System.Web.UI.MasterPage

    Protected Sub Page_Load(sender As Object, e As EventArgs) Handles Me.Load
        If Not Session("loged") Then Response.Redirect("~/default.aspx")
        If Not Session("isadmin") Then Response.Redirect("~/default.aspx")
    End Sub
End Class

