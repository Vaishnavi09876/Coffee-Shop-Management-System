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
             <form method="POST" action="login.php">
              <div class="container">
               <h1>Login Form</h1>
            </div>
             <h1 align="center">
             <h2 align="center">
                <br>
                <br>
                <br>  
            <input type="text" name="Username" placeholder="Enter your Username" style="width: 35%;height: 30px;"/><br><br>
            <input type="text" name="Upass" placeholder="Enter your Password" style="width: 35%;height: 30px;" /><br>
            <input type="submit" name="login" value="LOGIN" class="btn_login" style="height: 30px;">
</form>     
</body>
</html>

<?php
$connect = mysqli_connect("localhost","root","","Woodbond");
 
if($connect) {
     //echo "Database Connected!";
     if(isset($_POST['login'])) {
        $Username = $_POST['Username'];
        $Upass = $_POST['Upass'];

        $query = "SELECT * FROM login WHERE Username = '$Username' && Upass = '$Upass'";
        $run = mysqli_query($connect, $query);
        $row = mysqli_fetch_array($run);

        if(is_array($row)) {
         $_SESSION["Username"] = $row['0'];
         $_SESSION["Upass"] = $row['1'];
         header("location:http://localhost/cafe/index.php");
            echo "Hello" .  $_SESSION["Username"];
        } else {
            echo '<script type = "text/javascript">';
            echo 'alert("Invalid Username or Password")';
        }
     } 
}     
?>