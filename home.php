<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link href="../style/home.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="https://raw.githubusercontent.com/magrogovich/media/main/logo.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"> 
        <script defer src="https://kit.fontawesome.com/c939d0e917.js"></script>  

    </head>

    <body>
        <nav>
            <header class="header1">
                <div class="header2">
                    <div id="icon">
                        <a href="#" class="a"><i class="fab fa-google"></i></a>
                    </div>
        
                    <div class="header3">
                        <div id="icon">
                            <a href="#" class="a"><i class="fas fa-home"></i></a>
                        </div>
            
                        <div id="icon1">
                            <a href="#" class="a"><i class="fas fa-paper-plane"></i></a>
                        </div>
            
                        <div id="icon2">
                            <a href="#" class="a"><i class="fas fa-bell"></i></a>
                        </div>
            
                        <div class="input">
                            <div class="input_box">
                                <input id="search_box" type="text" placeholder="Search or enter account name">
                            </div>
            
                            <div class="icon_box">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
            
                        <div id="iconacc">
                            <a href="#" class="a"><img src="https://images.unsplash.com/photo-1665687002482-8bcc38faceba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" class="im"></a>
                        </div>
            
                        <div id="icon3">
                            <a href="#" class="a"><i class="fas fa-cog"></i></a>
                        </div>
            
                        <div id="icon4">
                            <a href="#" class="a"><i class="fas fa-question-circle"></i></a>
                        </div>
                    </div>
                </div>
            </header>
        </nav>
<!--/////////////////////////-->
        <article class="content_content">
            <aside class="aside1">
                <aside class="aside">
                    <div class="border">
                        <div class="list">
                            <?php
                                $servername = "localhost";
                                $database = "gomycode";
                                $username = "root";
                                $password = "toor";
                                $conn = mysqli_connect($servername, $username, $password, $database);
                                mysqli_select_db( $conn, $database )or die("error in selecting of te database");
                                $req="SELECT username,tags,icon FROM user WHERE types ='O'; ";
                                $listname=mysqli_query($conn,$req) or die("could not find the client");
                                while ($name=mysqli_fetch_array($listname))
                                {
                                    echo '<section class="section">
                                    <div class="divimg">
                                        <a href="#"><img src="data:image/png;base64,'.base64_encode($name['icon']).'"  id="acclimg"></a>
                                    </div>
                                    <div>
                                        <a href="#"><b><p id="p1">'.$name["username"].'</p></b></a> 
                                        <a href="#"><p id="p2">'.$name["tags"].'</p></a> 
                                    </div>
                                    </section>';
                                }
                            
                            ?>
                            
                            <footer id="footer">
                                More
                            </footer>
                        </div>
                    </div>
                </aside>
            <div class="scroll">
            <footer class="fs">
                    Terms Privacy policy Cookies Ads info More © <br> 2020 website name, Inc.
                </footer>
            </aside>
            <!--/////////////////////////-->
            <div>
            <article class="article">
                <?php
                $req="SELECT DISTINCT (e.title) as title, u.username as username, e.username , e.image as img, u.icon as icon
                    FROM events as e, user as u
                    WHERE u.username = e.username ;";
                $res=mysqli_query($conn,$req);
                while($list=mysqli_fetch_array($res, MYSQLI_NUM)){

                echo'
                    <aside>
                        <div>
                            <div class="imgacccon">
                                <a href="#"> <img src="data:image/jpg;base64,'.base64_encode($list[4]).'" id="imgacccon"/></a>
                            </div>
                            <img src="data:image/png;base64,'.base64_encode($list[3]).'"  id="imgcon">
        
                        </div>
                        
                        <div class="posticon">
                            <div class="iconn1">
                                
                            </div>
            
                            <div class="iconn2">
                                <i class="fas fa-bookmark"></i>
                            </div>
            
                            <div class="iconn3">
                                <i class="fas fa-ellipsis-h"></i>
                            </div>
                        </div>
        
                        <div>
                            <p id="postdes">description...</p>
        
                            <div class="comment">
                                <b>comments</b>
                            </div>
                        </div>
                        <br>
        
                        <div class="commentacc">
                            <div class="imgcm">
                                <img src="https://images.unsplash.com/photo-1665687002482-8bcc38faceba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" id="imgcm">
                            </div>
        
                            <div id="name">
                                Name
                            </div>
        
                            <div id="comm">
                                   comment...
                            </div>
                        </div>
        
                        <div class="com">
                            <div class="input_com">
                                <div class="input_com">
                                    <input id="com_box" type="text" placeholder="Type your comment...">
                                </div>
                
                                <div class="icon_com_box">
                                    <i class="fas fa-arrow-circle-up"></i>
                                </div>
                            </div>
                        </div>
        
                        <div class="clap">
                            <div id="clapicon">
                                <i class="fas fa-angle-double-down"></i>
                            </div>
        
                            <div id="claptext">See all comments</div>
                        </div>
                    </aside>';}?>
                </article>
            </div>

            </div>                     
        </article>
                
        
    </body>
</html>
