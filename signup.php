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
                <h1>SignUp and become a Member..!</h1>

<?php 
session_start();

	include("cont_db_process.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
        $email = $_POST['email'];
		$password = $_POST['password'];
        $phone = $_POST['phone'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(11);
			$query = "insert into users (user_id,user_name,email, password, phone) values ('$user_id','$user_name','$email','$password','$phone')";

			mysqli_query($con, $query);

			header("Location: work.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" placeholder="Enter your Username" name="user_name"><br><br>

            <input id="text" type="email" placeholder="Enter your Email" name="email"><br><br>

			<input id="text" type="password" placeholder="Enter Password" name="password"><br><br>

            <input id="text" type="phone" placeholder="Enter Contact Number" name="phone"><br><br>


			<input id="button" type="submit" value="Signup"><br><br>

			<a href="work.php">Click to Login</a><br><br>
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