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

    
    <script>
function submit() {
  alert("I am an alert box!");
}
</script>

<div class="main">
        <div class="hamburger">
            <img class="ham" src="ham1.png" alt="" width="23px">
            <img class="cross" src="cross.png" alt="" width="23px">
        </div>
            <div class="contactform">
                <h1>Contact me for further queries...</h1><br>

            <form id="myForm" action="contact_db.php" method="post">
                <div class="mb-3">
                <label for="clientemail" class="form-label">Name</label><br>
                <input type="text" id="myInput" class="form-control1" aria-describedby="emailHelp" name ="name">
                    <br><br>
                <label for="clientemail" class="form-label">Email Address</label><br>
                <input type="email" class="form-control1" aria-describedby="emailHelp" name ="email">
            </div><br>
                <div id="emailHelp" class ="form-text"></div>
                <div class="mb-2">
                    <label for="clientphone" class="form-label1">Phone</label><br>
                    <input type="phone" class="form-control" id="clientphone" name ="phone">
                    
                </div><br>
                <div class="mb-2">
                <label for="clientemail" class="form-label">Enquiry</label><br>
                <input type="text" class="form-control1" aria-describedby="emailHelp" name ="enquiry">
                </div><br>
                
                <button type="submit" class="btn btn-sm" name="submit" onclick="submit()">Submit</button>


                <script type="text/javascript">

                var x = document.getElementById("myForm");
                x.addEventListener("focusin", myFocusFunction);
                x.addEventListener("focusout", myBlurFunction);

                function myFocusFunction() {
                document.getElementById("myInput").style.backgroundColor = "yellow";
                }

                function myBlurFunction() {
                 document.getElementById("myInput").style.backgroundColor = "";  
                }
                </script>

            </form>
            </div>
    </div>
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

