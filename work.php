<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charset = "UTF-8">
    <meta http-equi="X-UA-Compatible" content="IE=edge">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
    <title>Roshan Patil - Web Develepoer, Cloud, Linux Enthusiast</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="sidebar sidebarGo">
            
            <nav>
                <ul>
                    <li><a href="first.html">Home</a></li>
                    <li><a href="about.html">AboutMe</a></li>
                    <li><a href="work.php">MyWork</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.php">ContactMe</a></li>
                </ul>
            </nav>
        </div>
        <div class="main">
            <div class="hamburger">
                <img class="ham" src="ham1.png" alt="" width="23px">
                <img class="cross" src="cross.png" alt="" width="23px">
            </div>


            <div class="workContainer">
                <h1> To access please login and become a member..!</h1>
            <?php

            session_start();
            
                include("cont_db_process.php");
                include("functions.php");
            
            
                if($_SERVER['REQUEST_METHOD'] == "POST")
                {
                    //something was posted
                    $user_name = $_POST['user_name'];
                    $password = $_POST['password'];
            
                    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
                    {
            
                        //read from database
                        $query = "select * from users where user_name = '$user_name' limit 1";
                        $result = mysqli_query($con, $query);
            
                        if($result)
                        {
                            if($result && mysqli_num_rows($result) > 0)
                            {
            
                                $user_data = mysqli_fetch_assoc($result);
                                
                                if($user_data['password'] === $password)
                                {
            
                                    $_SESSION['user_id'] = $user_data['user_id'];
                                    header("Location: member.php");
                                    die;
                                }
                            }
                        }
                        
                        echo "wrong username or password!";
                    }else
                    {
                        echo "wrong username or password!";
                    }
                }
            
            ?>
            
            
            <!DOCTYPE html>
            <html>
            <head>
                <title>Login</title>
            </head>
            <body>
            
                <div id="box">
                    
                    <form method="post">
                        <div style="font-size: 20px;margin: 10px;color: white;">Login</div>
            
                        <input id="text" type="text" placeholder="Enter your Username"  name="user_name"><br><br>
                        <input id="text" type="password" placeholder="Enter Password" name="password"><br><br>
            
                        <input id="button" type="submit" value="Login"><br><br>
            
                        <a href="signup.php">Click to SignUp</a><br><br>
                    </form>
                </div>














                
                <script type="text/javascript">

    document.querySelector('.cross').style.display = 'none';
    document.querySelector('.hamburger').addEventListener("click",()=>{
        document.querySelector('.sidebar').classList.toggle('sidebarGo');
        if(document.querySelector('.sidebar').classList.contains('sidebarGo'))
        {
            document.querySelector('.ham').style.display = 'inline'
            document.querySelector('.cross').style.display = 'none'
        }
        else{
            document.querySelector('.ham').style.display = 'none'
            setTimeout(() => { 
                document.querySelector('.cross').style.display = 'inline'
            }, 300);
        }
    })
</script>
            </body>
            </html>