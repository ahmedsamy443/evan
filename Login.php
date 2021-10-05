

<?php
session_start();
$conn = new mysqli("localhost" , "root" , "", "test");
// mysql_select_db("data.sql");
$username=$_POST['username'];
$password=$_POST['password'];
$st_name=''; $st_pass='';
if(!empty($username) && !empty($password))
{
    
    $sql="SELECT * FROM `tbl_studentdata` WHERE `St_Id` ='".$username."'";
    $result = $conn->query($sql) or die($conn->error);
    while($row=$result->fetch_assoc()){
        $st_id = $row['St_Id'];
        $st_name = $row['St_name'];
        $st_pass = $row['St_pass'];
        $st_group = $row['st_group'];
        $st_image = $row['st_notes'];
        $st_Level = $row['st_Level'];
        $st_level1 = $row['st_Level1'];
        $st_level2 = $row['st_Level2'];
        $st_level3= $row['st_Level3'];
        $st_level4 = $row['st_Level4'];
        $st_level5 = $row['st_Level5'];
        $st_level6 = $row['st_Level6'];
        $st_isgame = $row['st_isgame'];
        //$st_code = $row['st_code'];
        $st_pretest = $row['st_Pretest'];
//echo $username.'--'. $row['st_name'] .'--'. $password .'--'. $row['St_pass'];
    }
    echo $st_name .'    '. $st_pass;
     if($username===$st_id && $password===$st_pass){
        $_SESSION['id']=$st_id;
        //$_SESSION['code']=$st_code;
        $_SESSION['name']=$st_name;
        $_SESSION['group']=$st_group;
        $_SESSION['img']=$st_image;
        $_SESSION['level']=$st_Level;
        $_SESSION['level1']=$st_Level1;
        $_SESSION['level2']=$st_Level2;
        $_SESSION['level3']=$st_Level3;
        $_SESSION['level4']=$st_Level4;
        $_SESSION['level5']=$st_Level5;
        $_SESSION['level6']=$st_Level6;
        $_SESSION['pretest']=$st_pretest;
        if($st_pretest === b'1')
        {
            
            header("location:dashboard.php");
        }
        else 
        {
            header("location:pretest.html");
        }

    }
    else {
        echo "error in login";
    }

}










// Imports System.Data
// Imports System.Configuration
// Imports System.Data.SqlClient

// Partial Class Login
//     Inherits System.Web.UI.Page

//     Protected Sub BtnLogin_Click(sender As Object, e As EventArgs) Handles BtnLogin.Click

//         Try
//             Dim conn As New SqlConnection()
//             conn.ConnectionString = ConString
//             Dim sql As String = "SELECT * FROM [Tbl_Students] WHERE st_code like @stid"

//             conn.Open()

//             Dim dt As DataTable = New DataTable()
//             Dim adp As Data.SqlClient.SqlDataAdapter = New Data.SqlClient.SqlDataAdapter(sql, conn)
//             adp.SelectCommand.Parameters.AddWithValue("stid", txtCode.Text)
//             adp.Fill(dt)
//             conn.Close()

//             If dt.Rows.Count > 0 Then
//                 Dim stpass As String = dt.Rows(0)("st_pass").ToString()

//                 If TxtPass.Text = stpass Then
//                     Try
//                         'تخزين البيانات 
//                         'Sessions
//                         Session("st_name") = dt.Rows(0)("st_name").ToString()
//                         Session("st_group") = dt.Rows(0)("st_group").ToString()
//                         Session("st_Level") = dt.Rows(0)("st_Level").ToString()
//                         Session("st_level1") = dt.Rows(0)("st_level1").ToString()
//                         Session("st_level2") = dt.Rows(0)("st_level2").ToString()
//                         Session("st_level3") = dt.Rows(0)("st_level3").ToString()
//                         Session("st_level4") = dt.Rows(0)("st_level4").ToString()
//                         Session("st_level5") = dt.Rows(0)("st_level5").ToString()
//                         Session("st_level6") = dt.Rows(0)("st_level6").ToString()
//                         Session("st_isgame") = dt.Rows(0)("st_isgame").ToString()
//                         Session("st_code") = dt.Rows(0)("st_code").ToString()
//                         Session("st_pretest") = dt.Rows(0)("st_Pretest").ToString()

//                         'تحميل صفحة الطالب

//                         If dt.Rows(0)("st_pretest").ToString() = "0" Then
//                             'في حالة عدم إتمام الاختبار القبلي
//                             Response.Redirect("pretest.aspx")
//                         Else
//                             'في حالة إتمام الاختبار القبلي
//                             Response.Redirect("dashboard.aspx")
//                         End If

//                     Catch ex As Exception
//                         Txt_Message.text = ex.Message

//                     End Try

//                 End If
//             End If
//         Catch ex As Exception
//             Txt_Message.text = ex.Message
//         End Try
//     End Sub
// End Class
?>

