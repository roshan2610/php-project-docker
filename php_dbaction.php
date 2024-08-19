<?php
    //1.db connectivity
    //2.fetch all form values with $_GET
    //3.Decide the control by identifying action call respective fun
    //4.define php fun to persorm respective db operation

    $con = mysqli_connect("localhost","root","","roshan26");

    if($con)
    echo "<br><h2 style = 'background-color:green;color:black;'>connection successful</h2>";
    else
    echo "<br><h2 style = 'background-color:green;color:black;'>connection unsuccessful</h2>".mysqli_error.($con);

    $action = $_GET["action"];
    $rollno = $_GET["rollno"];
    $name = $_GET["name"];
    $email = $_GET["email"];
    $city = $_GET["city"];

    if($action == "insert")
        db_insert($rollno,$name,$email,$city);
    else if($action == "update")
        db_update($rollno,$name,$email,$city);
    else if($action == "delete")
        db_delete($rollno);
    else if($action == "showAllRecords")
        db_showAllRecords();

    function db_insert($rollno,$name,$email,$city)
    {
        global $con;

        $em = "SELECT * FROM students WHERE (email = '$email');";
        $res = mysqli_query($con,$em);
        //check if roll number exists in database

        if(mysqli_num_rows($res)>0)
        {
            $row = mysqli_fetch_assoc($res);
            if($email==isset($row['email'])&&$rollno==isset($row['rollno']))
            {
                echo "<h2 style = 'background-color:red;color:black;' >Email And Roll No already exists.<br> Records not inserted. <br>Try again with new Email id and roll no</h2>";
               
            }
            elseif($rollno==isset($row['rollno']))
            {
                echo "<h2 style = 'background-color:red;color:black;'>Roll No already exists.<br> Records not inserted. <br>Try again with new Roll No</h2>";
            }
            elseif($email==isset($row['email']))
            {
                echo "<h2 style = 'background-color:red;color:black;'>Email already exists.<br> Records not inserted. <br>Try again with new Email id</h2>";
            }
            else{
                echo "</h2 style = 'background-color:red;color:black;'>some other database issue</h2>";
            }
        }
    else{


        $query ="INSERT into students (rollno,name,email,city) values ('$rollno','$name', '$email','$city') ";

        if(mysqli_query($con,$query))
            echo "<br> record inserted successfully !!! <br>";
        else    
            echo "<br> insert operation failed: " . mysqli_error($con);
    }
}

    function db_update($rollno,$name,$email,$city)
    {
        global $con;
        $update ="UPDATE students set name='$name', email='$email', city='$city' where rollno='$rollno' ";

        if(mysqli_query($con,$update))
            echo "<br> updated successfully !!! <br>";
        else    
            echo "<br> update operation failed: " . mysqli_error($con);
    }

    function db_delete($rollno)
    {
        global $con;
        $delete ="DELETE from students where rollno='$rollno' ";

        if(mysqli_query($con,$delete))
            echo "<br> deleted  successfully !!! <br>";
        else    
            echo "<br> delete operation failed: " . mysqli_error($con);
    }

    function db_showAllRecords()
    {
        global $con;
        $select ="SELECT * from students";

        $res = mysqli_query($con,$select);

        echo "<br>total students records: " .mysqli_num_rows($res)."<br>";

        if(mysqli_num_rows($res)<1)
            echo "<br>No students records found!!! <br>";
        else    
           {
               while($rec = mysqli_fetch_assoc($res))
               {
                ?>
                <table style='border-radius:2px;'>
                    <tr><td><input type="text" value="<?php echo $rec["rollno"]; ?>" /> </td>
                    <td><input type="text" value="<?php echo $rec["name"]; ?>" /> </td>
                    <td><input type="text" value="<?php echo $rec["email"]; ?>" /> </td>
                    <td><input type="text" value="<?php echo $rec["city"]; ?>" /> </td>
                    </tr>
                </table>
        
                <?php
               }
           }
           function db_check_email()
           {
               global $con;
               $select = mysqli_query($con, "SELECT email FROM students WHERE email = '".$_POST['email']."'") or exit(mysqli_error($con));
               if(mysqli_num_rows($select)) {
               exit('This email is already being used');
            }
    }


    function db_check_email()
    {
        global $con;
        $em=mysqli_query($con, "select email from students where email='".$_POST['email']."'") or exit(mysqli_error($con));
        if(mysqli_num_rows($em)) {
            exit('<br><h2> This email is already being used <h2> <br>');
    }
}

if(isset($_POST['email']))
{
    db_check_email();
}
}
?>