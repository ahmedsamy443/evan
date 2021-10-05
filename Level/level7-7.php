
<?php session_start(); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> التطبيق البعدي المؤجل</title>
    <link href="../w3.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../Fonts/EARLY_ACCESS.css" rel="stylesheet" />
    <link href="LevelStyle.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
</head>
<body>

<body style="background-image: url(bck.png); background-image: no-repeat; background-size:cover; height:1000px;width:540" >
<div class="w3-top" >
            <div class="w3-bar w3-theme-black w3-left-align w3-large w3-black" style="width: 100%; height: 50px;">
                
    <!-- Navbar (sit on top) -->
            <div class="w3-right ">
        <a href="../Dashboard.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" style="float:right;height:83px; padding-top: 9px !important;" >الرئيسية</a>
                <a href="../index7.html" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" style="float:right ;height:83px; padding-top: 8px !important;">خروج</a>
                <label id="LblName"  Text="" style="float:right;height:83px; padding-top: 8px !important;">أهلا :  <?php echo $_SESSION['name']; ?></label>
                <label id="LblName"  Text="" style="float:left;height:83px; padding-top: 8px !important;"></label>

        </div>
    </div>
    </div>

    <div class="content" >
        <div class="btn">
        <a href="../PreTest3.html"  style="text-decoration: none;"><button  style="float:left; font-size: large; height:80px; width: 200px;background-image: url(btn.png);background-image: no-repeat;background-size: cover;margin-left:300px;cursor: pointer;"> الإختبار التحصيلي </button></a> 
        <a href="../PreTest3st.htm"  style="text-decoration: none;"><button  style="float:left; font-size: large; height:80px;width:200px;background-image: url(btn.png);background-image: no-repeat;background-size: cover;margin-left:600px;cursor: pointer;"> مقياس الإنخراط في التعلم </button></a>
    </div> 


     </div>
    <br />
    <br />
    <!-- <div style="width:100%;height:200px;display:flex;margin-top:260px;">
    <div style="width:800px;height:200px;"> <button class="w3-bar-item w3-button " style="background-image:url(btn.png)background-image:url(btn.png);background-repeat:no-repeat;background-size=cover;opacity: 0.4; outline-style: none;border: none;"><a href="https://www.youtube.com/watch?v=5jVnLbdqR6U" style="text-decoration: none;">مقياس الإنخراط في التعلم</a> </button></div>
    <div style="width:800px;height:200px;;background-image:url(btn.png);background-repeat:no-repeat;background-position: 50%;"><a href="../PreTest2.html"  style="text-decoration: none;"> الإختبار التحصيلي</a></div>
</div>
     -->
    <!--معاينة الأهداف-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61374393d6e7610a49b40b75/1fevtvu75';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
   </body>
   <style>
       .content
       {
           width: 100%;
           height: 300px;
           margin-left: 10%;
           margin-top:10%;
           position: relative;
       }
       .btn{
        width: 100%;
           height: 70px;
           position: absolute;
           top:50%;
           /* bottom:50%; */
           left:40%;
           transform: translate(-50%, -50%);
         
           padding:10px;
       }

       </style>
   </html>
