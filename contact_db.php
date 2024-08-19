<?php
    include 'cont_db_process.php';
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enquiry = $_POST['enquiry'];

    $query = "insert into contact(name, email, phone, enquiry) values('$name','$email','$phone','$enquiry')";

    if(mysqli_query($con, $query))
    {
        echo"<BR><h2 style = 'background-color:lightblue;color:black;text-align:center'>Thanks for contacting us...!";

    }
    else
    {
        echo "error:" .mysqli_error($con);
    }
    mysqli_close($con);
}



?>