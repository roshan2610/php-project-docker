<?php 
session_start();

	include("cont_db_process.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
	<title>My Work</title>
	


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
		<div class="intro">
	<h2>Assignemnt No. 01</h2>
	<h#>PHP CRUD Functions</h3>
	<div class="buttons">
        <a href="php_mysqlCRUD.php" target="_blank">
        <button class="btn" id="btn">View</button></a>

		<br><br>
	<div class="hello">
	<h2>Assignemnt No. 02</h2>
	<h#>PHP pagination</h3>
	<div class="buttons">
        <a href="php_pagination.php" target="_blank">
        <button class="btn" id="btn">View</button></a>
		<br><br>

		<div class="hello">
	<h2>Assignemnt No. 03</h2>
	<h#>PHP Array Functions</h3>
	<div class="buttons">
        <a href="array_functions.php" target="_blank">
        <button class="btn" id="btn">View</button></a>
<br><br>

		<div class="hello">
	<h2>Assignemnt No. 04</h2>
	<h#>PHP String Functions</h3>
	<div class="buttons">
        <a href="stringfunction.php" target="_blank">
        <button class="btn" id="btn">view</button></a>

	
	
	<br></div>
	
	<div class="buttons">
        <a href="logout.php">
        <button class="btn" id="btn">LogOut</button></a>


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