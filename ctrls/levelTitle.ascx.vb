
Partial Class ctrls_levelTitle
    Inherits System.Web.UI.UserControl
    Dim Qid As String
    Public Property _pQid() As String
        Get
            Return Qid
        End Get
        Set(value As String)
            Qid = value
        End Set

    End Property

    Public Function level2Word() As String

        Dim lvl As Integer = _pQid - 1
        Dim Rv(6) As String
        Rv(0) = "الأول"
        Rv(1) = "الثانى"
        Rv(2) = "الثالث"
        Rv(3) = "الرابع"
        Rv(4) = "الخامس"
        Rv(5) = "السادس"


        Return Rv(lvl)
    End Function
End Class
