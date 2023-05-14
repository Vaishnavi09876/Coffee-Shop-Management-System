<!DOCTYPE html>
<html>
    <head>
        <title>Woodbond</title>

        <meta charset="UTF-8">
        <link rel="stylesheet" href= "style1.css"/>
        <style>
            h1{text-align: center;}
            body{
                background-image: url("nowbg.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                height: 700px;
                }
        </style>
    </head>
    <body>
             <form method="POST" action="register.php">
              <div class="container">
               <h1>Register</h1>
            </div>
             <h1 align="center">
             <h2 align="center">
                <br>
                <br>
                <br>  
            <input type="text" name="Username" placeholder="Enter your Name" style="width: 35%;height: 30px;"/><br><br>
            <input type="text" name="Email" placeholder="Enter your Email" style="width: 35%;height: 30px;" /><br><br>
            <input type="password" name="Upass" placeholder="Create a Upass" style="width: 35%;height: 30px;" /><br><br>
            <input type="password" name="Confirmpassword" placeholder="Confirmpassword" style="width: 35%;height: 30px;" /><br><br>
            <input type="submit" name="register" value="REGISTER NOW" class="btn_register" style="height: 30px;">
</form>     
</body>
</html>

<?php
error_reporting(0);
$connect = mysqli_connect("localhost","root","","Woodbond");
 

     //echo "Welcome!";
     if(isset($_POST['register'])) {
        $Username = $_POST['Username'];
        $Email = $_POST['Email'];
        $Upass = $_POST['Upass'];
        $Confirmpassword = $_POST['Confirmpassword'];

        $query = "INSERT INTO register (`Username`, `Email`, `Upass`, `Confirmpassword`) VALUES ('$Username','$Email','$Upass','$Confirmpassword')";
        $run = mysqli_query($connect, $query);
        if($run){
        header("location:http://localhost/cafe/login.php");  }
         $row = mysqli_fetch_array($run);

        if(is_array($row)) {
          $_SESSION["Username"] = $row['0'];
          $_SESSION["Email"] = $row['1'];
          $_SESSION["Upass"] = $row['2'];
          $_SESSION["Confirmpassword"] = $row['3'];
          header("location:http://localhost/cafe/login.php");
          echo "Welcome" . $_SESSION["Username"];
         } else {
             echo '<script type = "text/javascript">';
             echo 'alert("Invalid Username or Password")';
         }
        }
?>