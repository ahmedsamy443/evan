Imports System
Imports System.Collections
Imports System.ComponentModel
Imports System.Data
Imports System.Drawing
Imports System.Web
Imports System.Web.SessionState
Imports System.Web.UI
Imports System.Web.UI.WebControls
Imports System.Web.UI.HtmlControls
Imports System.IO
Imports System.Data.SqlClient

Partial Class cp_uploadactivity
    Inherits System.Web.UI.UserControl
    Private lvl As String
    Public Property pLvl() As String
        Get
            Return lvl
        End Get
        Set(value As String)
            lvl = value
        End Set
    End Property
    Private Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs)
    End Sub
    Protected Overrides Sub OnInit(ByVal e As EventArgs)
        InitializeComponent()
        MyBase.OnInit(e)
    End Sub
    Private Sub InitializeComponent()
        AddHandler Me.btnUpload.Click, New System.EventHandler(AddressOf Me.btnUpload_Click)
        AddHandler Me.Load, New System.EventHandler(AddressOf Me.Page_Load)
    End Sub
    Private Sub btnUpload_Click(ByVal sender As Object, ByVal e As System.EventArgs)


        If oFile.HasFile Then

            Dim strFileName As String
            Dim strFilePath As String
            Dim strFolder As String
            Dim ofilename As String = oFile.FileName
            strFolder = Server.MapPath("../activitiesfiles/" + pLvl + "/")
            strFileName = "Group_" + Session("st_group").ToString() + "_" + oFile.FileName
            strFileName = Path.GetFileName(strFileName)


            If Not Directory.Exists(strFolder) Then
                Directory.CreateDirectory(strFolder)
            End If

            strFilePath = strFolder & strFileName

            If File.Exists(strFilePath) Then
                lblUploadResult.Text = " الملف موجو من قبل"
            Else
                oFile.PostedFile.SaveAs(strFilePath)
                lblUploadResult.Text = " تم تحميل الملف بنجاح"
            End If




            ''Update filename in Database after uploaded to server
            Try
                Using tcon2 As New SqlConnection(ConfigurationManager.ConnectionStrings("dbconnection").ConnectionString)
                    Dim tupdateQuery4 As String = "Update [Tbl_Group] set Gb_lvl" + pLvl + "_activity_file= @filename where Gb_Id = @gbid "
                    Dim tSqlCommand24 As New SqlCommand(tupdateQuery4, tcon2)
                    With tSqlCommand24
                        .Parameters.AddWithValue("@gbid", Session("st_group").ToString())
                        .Parameters.AddWithValue("@filename", ofilename)
                    End With
                    tcon2.Open()
                    tSqlCommand24.ExecuteNonQuery()
                    tcon2.Close()
                End Using

            Catch ex As Exception
                ' LBL_Code.Text = ex.Message

            End Try








        Else
            lblUploadResult.Text = "Click 'Browse' to select the file to upload."
        End If

        frmConfirmation.Visible = True










    End Sub
End Class
