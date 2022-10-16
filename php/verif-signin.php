<?php
$servername = "localhost";
$database = "gomycode";
$username = "root";
$password = "toor";
$conn= mysqli_connect($servername, $username, $password, $database);
mysqli_select_db($conn,$database)or die("error in selecting of the database aaaa");
$user=$_POST["username"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$pwd=$_POST["pwd"];
$tags="";
$mt=$_POST["mt"];
$ph=$_POST["ph"];
$pr=$_POST["pr"];
$rt=$_POST["rb"];

if(isset($mt)){
    $tags = $tags.'/'.$mt;
}

if(isset($ph)){
    $tags = $tags.'/'.$ph;
}

if(isset($pr)) {
    $tags = $tags.'/'.$pr;
}

if(isset($rb)){
    $tags = $tags.'/'.$rb;
}


$res=mysqli_query($conn,"select * from user where email='$email'");
$row=mysqli_num_rows($conn,$res);
echo($type_acc);

if($row>0){
    echo"<!DOCTYPE html>
    <html>
        <!-- PAGE NUMBER 2 -->
        <head>
            <title>Sign in</title>
            <link href='style/sign-in.css' rel='stylesheet' type='text/css'>
        </head>
    
        <body>
            <form action='php/verif-signin.php'>
                <div class='content'>
                    <div class='header'>
                        <p id='log_in'>Create account</p>
                    </div>
        <p class='error'>Email already exist </p>
                    <div class='boxes'>
                        <div class='box1'>
                            <div class='back1'>
                                <input id='input_box1' class='input_name'  name='email' type='text' placeholder='First name'>
                            </div>
        
                            <div class='back2'>
                                <input id='input_box1' class='input_Last'  name='email' type='text' placeholder='Last name'>
                            </div>   
                        </div>
        
                        <div class='box2'>
                            <input id='input_box2' class='email' name='email' type='text' placeholder='Email'>
                        </div>
        
                        <div class='box2'>
                            <input id='input_box2' class='pwd'  name='pwd'type='password' placeholder='Password'>
                        </div>
                        <div class='box2'>
                            <input id='input_box2' class='confpwd'  name='confpwd' type='password' placeholder='Confirm Password'>
                        </div>
                        <div class='box4'>
                            <div class='back4'>
                                <input id='input_box4' class='dd'   name='day' type='text' placeholder='DD'>
                            </div>
        
                            <div class='back4'>
                                <input id='input_box4' class='mm' name='month' type='text' placeholder='MM'>
                            </div>
        
                            <div class='back_4'>
                                <input id='input_box_4' class='year' name='year'  type='text' placeholder='YYYY'>
                            </div>
                        </div>
        
                        <div class='box5'>
                            <input id='check' type='checkbox'>
                            <p class='privacy'>I agree to <a id='link1' href='#'>website name terms of use</a> and acknowledge <a id='link1' href='#'>the Privacy Statement</a></p>
                        </div>
                    </div>
        
                    <div class='btn'>
                        <input  type='submit' id='button' value='Sign In'>
                    </div>
        
                    <div class='link'>
                        <span id='quest'>ALREADY HAVE AN ACCOUNT? </span>
                        <a id='link_quest' href='signin.html'>SIGN IN</a>
                    </div>
        
                    <div>
                        <p id='learn'><a href='#' id='learn'>LEARN MORE</a></p>
                    </div>
                </div>
            </form>
            <script src='function/login.js'></script>
        </body>
    </html>";
}else{
    $add_user = "INSERT INTO `user` (`username`, `name`, `lastname`, `email`, `password`, `types`, `tags`)values('$user','$fname','$lname','$email','$pwd','O','$tags');";
    $conf_add_user = mysqli_query($conn,$add_user)or die("error in selecting of the database");
    header("Location: ../login.html");
    exit;
    /*echo"<!DOCTYPE html>
    <html>
        <head>
            <title>Home</title>
            <link href='../style/home.css' rel='stylesheet' type='text/css'>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width,initial-scale=1.0'> 
            <script defer src='https://kit.fontawesome.com/c939d0e917.js'></script>  
    
        </head>
    
        <body>
            <nav>
                <header class='header1'>
                    <div class='header2'>
                        <div id='icon'>
                            <a href='#' class='a'><i class='fab fa-google'></i></a>
                        </div>
            
                        <div class='header3'>
                            <div id='icon'>
                                <a href='../home.php' class='a'><i class='fas fa-home'></i></a>
                            </div>
                
                            <div id='icon1'>
                                <a href='#' class='a'><i class='fas fa-paper-plane'></i></a>
                            </div>
                
                            <div id='icon2'>
                                <a href='#' class='a'><i class='fas fa-bell'></i></a>
                            </div>
                
                            <div class='input'>
                                <div class='input_box'>
                                    <input id='search_box' type='text' placeholder='Search or enter account name'>
                                </div>
                
                                <div class='icon_box'>
                                    <i class='fas fa-search'></i>
                                </div>
                            </div>
                
                            <div id='iconacc'>
                                <a href='../user.html' class='a'><img src='../media/img3.jpg' class='im'></a>
                            </div>
                
                            <div id='icon3'>
                                <a href='#' class='a'><i class='fas fa-cog'></i></a>
                            </div>
                
                            <div id='icon4'>
                                <a href='#' class='a'><i class='fas fa-question-circle'></i></a>
                            </div>
                        </div>
                    </div>
                </header>
            </nav>
    <!--/////////////////////////-->
            <article class='content_content'>
                <aside class='aside1'>
                    <aside class='aside'>
                        <div class='border'>
                            <div class='list'>
                                <section class='section'>
                                    <div class='divimg'>
                                        <a href='#'><img src='../media/img5.jpg' id='acclimg'></a>
                                    </div>
                                    <div>
                                        <a href='#'><b><p id='p1'>user mane</p></b></a> 
                                        <a href='#'><p id='p2'>Category name</p></a> 
                                    </div>
                                </section>
                                <section class='section'>
                                    <div class='divimg'>
                                        <a href='#'><img src='../media/img5.jpg' id='acclimg'></a>
                                    </div>
                                    <div>
                                        <a href='#'><b><p id='p1'>user mane</p></b></a> 
                                        <a href='#'><p id='p2'>Category name</p></a> 
                                    </div>
                                </section>
                                <section class='section'>
                                    <div class='divimg'>
                                        <a href='#'><img src='../media/img5.jpg' id='acclimg'></a>
                                    </div>
                                    <div>
                                        <a href='#'><b><p id='p1'>user mane</p></b></a> 
                                        <a href='#'><p id='p2'>Category name</p></a> 
                                    </div>
                                </section>
                                <section class='section'>
                                    <div class='divimg'>
                                        <a href='#'><img src='../media/img5.jpg' id='acclimg'></a>
                                    </div>
                                    <div>
                                        <a href='#'><b><p id='p1'>user mane</p></b></a> 
                                        <a href='#'><p id='p2'>Category name</p></a> 
                                    </div>
                                </section>
                                <footer id='footer'>
                                    More
                                </footer>
                            </div>
                        </div>
                    </aside>
        
                    <footer class='fs'>
                        Terms Privacy policy Cookies Ads info More © <br> 2020 website name, Inc.
                    </footer>
                </aside>
        <!--/////////////////////////-->
                <div>
                    <article class='article'>
                        <aside>
                            <div>
                                <div class='imgacccon'>
                                    <a href='#'><img src='../media/img4.jpg' id='imgacccon'></a>
                                </div>
                                <img src='../media/img5.jpg' id='imgcon'>
            
                            </div>
                            
                            <div class='posticon'>
                                <div class='iconn1'>
                                    <i class='fas fa-heart'></i>
                                </div>
                
                                <div class='iconn2'>
                                    <i class='fas fa-bookmark'></i>
                                </div>
                
                                <div class='iconn3'>
                                    <i class='fas fa-ellipsis-h'></i>
                                </div>
                            </div>
            
                            <div>
                                <p id='postdes'>description...</p>
            
                                <div class='comment'>
                                    <b>comments</b>
                                </div>
                            </div>
                            <br>
            
                            <div class='commentacc'>
                                <div class='imgcm'>
                                    <img src='../media/img3.jpg' id='imgcm'>
                                </div>
            
                                <div id='name'>
                                    Name
                                </div>
            
                                <div id='comm'>
                                       comment...
                                </div>
                            </div>
            
                            <div class='com'>
                                <div class='input_com'>
                                    <div class='input_com'>
                                        <input id='com_box' type='text' placeholder='Type your comment...'>
                                    </div>
                    
                                    <div class='icon_com_box'>
                                        <i class='fas fa-arrow-circle-up'></i>
                                    </div>
                                </div>
                            </div>
            
                            <div class='clap'>
                                <div id='clapicon'>
                                    <i class='fas fa-angle-double-down'></i>
                                </div>
            
                                <div id='claptext'>See all comments</div>
                            </div>
                        </aside>
                    </article>
    
                    <article class='article'>
                        <aside>
                            <div>
                                <div class='imgacccon'>
                                    <a href='#'><img src='../media/img4.jpg' id='imgacccon'></a>
                                </div>
                                <img src='../media/img5.jpg' id='imgcon'>
            
                            </div>
                            
                            <div class='posticon'>
                                <div class='iconn1'>
                                    <i class='fas fa-heart'></i>
                                </div>
                
                                <div class='iconn2'>
                                    <i class='fas fa-bookmark'></i>
                                </div>
                
                                <div class='iconn3'>
                                    <i class='fas fa-ellipsis-h'></i>
                                </div>
                            </div>
            
                            <div>
                                <p id='postdes'>description...</p>
            
                                <div class='comment'>
                                    <b>comments</b>
                                </div>
                            </div>
                            <br>
            
                            <div class='commentacc'>
                                <div class='imgcm'>
                                    <img src='../media/img3.jpg' id='imgcm'>
                                </div>
            
                                <div id='name'>
                                    Name
                                </div>
            
                                <div id='comm'>
                                       comment...
                                </div>
                            </div>
            
                            <div class='com'>
                                <div class='input_com'>
                                    <div class='input_com'>
                                        <input id='com_box' type='text' placeholder='Type your comment...'>
                                    </div>
                    
                                    <div class='icon_com_box'>
                                        <i class='fas fa-arrow-circle-up'></i>
                                    </div>
                                </div>
                            </div>
            
                            <div class='clap'>
                                <div id='clapicon'>
                                    <i class='fas fa-angle-double-down'></i>
                                </div>
            
                                <div id='claptext'>See all comments</div>
                            </div>
                        </aside>
                    </article>
    
                    <article class='article'>
                        <aside>
                            <div>
                                <div class='imgacccon'>
                                    <a href='#'><img src='../media/img4.jpg' id='imgacccon'></a>
                                </div>
                                <img src='../media/img5.jpg' id='imgcon'>
            
                            </div>
                            
                            <div class='posticon'>
                                <div class='iconn1'>
                                    <i class='fas fa-heart'></i>
                                </div>
                
                                <div class='iconn2'>
                                    <i class='fas fa-bookmark'></i>
                                </div>
                
                                <div class='iconn3'>
                                    <i class='fas fa-ellipsis-h'></i>
                                </div>
                            </div>
            
                            <div>
                                <p id='postdes'>description...</p>
            
                                <div class='comment'>
                                    <b>comments</b>
                                </div>
                            </div>
                            <br>
            
                            <div class='commentacc'>
                                <div class='imgcm'>
                                    <img src='../media/img3.jpg' id='imgcm'>
                                </div>
            
                                <div id='name'>
                                    Name
                                </div>
            
                                <div id='comm'>
                                       comment...
                                </div>
                            </div>
            
                            <div class='com'>
                                <div class='input_com'>
                                    <div class='input_com'>
                                        <input id='com_box' type='text' placeholder='Type your comment...'>
                                    </div>
                    
                                    <div class='icon_com_box'>
                                        <i class='fas fa-arrow-circle-up'></i>
                                    </div>
                                </div>
                            </div>
            
                            <div class='clap'>
                                <div id='clapicon'>
                                    <i class='fas fa-angle-double-down'></i>
                                </div>
            
                                <div id='claptext'>See all comments</div>
                            </div>
                        </aside>
                    </article>
    
                    <article class='article'>
                        <aside>
                            <div>
                                <div class='imgacccon'>
                                    <a href='#'><img src='../media/img4.jpg' id='imgacccon'></a>
                                </div>
                                <img src='../media/img5.jpg' id='imgcon'>
            
                            </div>
                            
                            <div class='posticon'>
                                <div class='iconn1'>
                                    <i class='fas fa-heart'></i>
                                </div>
                
                                <div class='iconn2'>
                                    <i class='fas fa-bookmark'></i>
                                </div>
                
                                <div class='iconn3'>
                                    <i class='fas fa-ellipsis-h'></i>
                                </div>
                            </div>
            
                            <div>
                                <p id='postdes'>description...</p>
            
                                <div class='comment'>
                                    <b>comments</b>
                                </div>
                            </div>
                            <br>
            
                            <div class='commentacc'>
                                <div class='imgcm'>
                                    <img src='../media/img3.jpg' id='imgcm'>
                                </div>
            
                                <div id='name'>
                                    Name
                                </div>
            
                                <div id='comm'>
                                       comment...
                                </div>
                            </div>
            
                            <div class='com'>
                                <div class='input_com'>
                                    <div class='input_com'>
                                        <input id='com_box' type='text' placeholder='Type your comment...'>
                                    </div>
                    
                                    <div class='icon_com_box'>
                                        <i class='fas fa-arrow-circle-up'></i>
                                    </div>
                                </div>
                            </div>
            
                            <div class='clap'>
                                <div id='clapicon'>
                                    <i class='fas fa-angle-double-down'></i>
                                </div>
            
                                <div id='claptext'>See all comments</div>
                            </div>
                        </aside>
                    </article>
                </div>
    
            </article>
            
        </body>
    </html>";*/
};

?>