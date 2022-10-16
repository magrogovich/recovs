<?php
$servername = "localhost";
$database = "gomycode";
$username = "root";
$password = "toor";
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_select_db( $conn, $database )or die("error in selecting of te database");
$email=$_POST["email"];
$pwd=$_POST["pwd"];
$res=mysqli_query($conn,"select * from user where email='$email' and password='$pwd';");
$row=mysqli_num_rows($res);
if($row<1){
    echo"<!DOCTYPE html>
    <html>
    <head>
        <title>Sign in</title>
        <link href='../style/log-in.css' rel='stylesheet' type='text/css'>
    </head>
<body>
<form action='php/verif-login.php' name='f' method='post'>
    <div class='content'>
        <div class='header'>
            <p id='sign_in'>Log In</p>
        </div>
        <div class='error'>
        <p> Email or Password is incorrect</p>
        </div>
        <div class='boxes'>
            <div class='input_box'>
                <span class='email'>Email</span>
                <div class='box1'>
                    <input id='input_box' name ='email' type='text' placeholder='name@example.com'>
                </div>
                <span class='email'>Password</span>
                <div class='box1'>
                    <input id='input_box' name ='pwd' type='text' placeholder='************'>
                </div>
                <div class='btn'>
                    <input  type='submit' value='Log In'>
                </div>
            </div>

            <div class='link'>
                <span id='quest'>NEW IN HERE?</span>
                <a id='link_quest' href='login.html'>CREATE ACCOUNT</a>
            </div>
        </div>
    </div>
</form>
     </body>
    </html>";
}else{
    include_once('../home.php');

}

?>