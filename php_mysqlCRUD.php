<?php
$con= mysqli_connect("localhost", "root", "", "roshan26");

$rollno = $_GET["rollno"];
echo "<BR> rollno: " .$rollno;

if(!isset($rollno))
$rollno=1;

$query= "select * from students where rollno= '$rollno'";

$res = mysqli_query($con, $query);

if(mysqli_num_rows($res)<1)
{    
    echo "<bR> No record found for this rollno...<br>";
}
else
{
    while($record = mysqli_fetch_assoc($res))
    {
        echo "<br> record found:    ";
        print_r($record);        
        echo "<br>";
?>








    <h2>This is CRUD Operations</h2>
<div style= " align:center; height:400px;padding:200px;">
    <fieldset style="background-color:gray;border:2px solid red;">

    <legend> Insert Record Into MySQL </legend>
    <form name="form1" method= "get"> 

    RollNo:<input type="text" name="rollno" value="<?php echo $record["rollno"]; ?>" /><br><br>
    Name:<input type="text" name="name" value="<?php echo $record["name"]; ?>" /><br><br>
    Email:<input type="email" name="email" value= "<?php echo $record["email"]; ?>"/><br><br>
    City:<input type="text" name="city" value="<?php echo $record["city"]; ?>"/><br><br>

        
        <input type= "submit" name="action" value="search"/>
        <input type= "submit" name="action" value="insert" onclick="form1.action='php_dbaction.php'; return true"/>
        <input type= "submit" name="action" value="update" onclick="form1.action='php_dbaction.php'; return true"/>
        <input type= "submit" name="action" value="delete" onclick="form1.action='php_dbaction.php'; return true"/>
        <input type= "submit" name="action" value="showAllRecords" onclick="form1.action='php_dbaction.php'; return true"/>
        
    </form>
    </fieldset>
</div>



<?php

    } //closing of while
} //closing of else


?>

        