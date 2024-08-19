<html>
    <head>
        <style>
            table, tr, td{
                border: 2px solid red;
                background-color:lightgreen;
                padding: 20px;
            }
            a{
                padding:10px;
                background-color:lightgreen;
                font-size:25px;
            }
        </style>
    </head>






<?php
$con = mysqli_connect("localhost","root","","roshan26");


if($con)
    echo "<br> connected to roshan26 DataBase<br>";

if(!isset($_GET["page"]))
{
    $page = 1;
    $_GET["page"]=1;
}
else
{
    $page = $_GET["page"];
    
    echo "<br> current page no: " . $_GET["page"];
}



    $query= "select * from students";

    $res = mysqli_query($con, $query);

    $total_records = mysqli_num_rows($res);

    echo"<br> Total records in table: " . $total_records . "<br>";

    $records_per_page = 3;
    $number_of_pages = ceil($total_records/$records_per_page);

    echo"<br> Total pages:" . $number_of_pages . "<br>";



    // select * from students limit 0, 3  // limit is a sql fn 
// page 1 2-1 *3 = 3,3 
    $page_first_records = ($_GET["page"]-1) * $records_per_page;

    $limit_query="select * from students limit " . $page_first_records . "," .$records_per_page;

    $result = mysqli_query($con, $limit_query);

    if(mysqli_num_rows($result)<1)
    {
        echo"<br> There are no records in students table<br>";
    }
    else
    {
        ?>
        <table>
        <tr><th>ROLL NO</TH><TH>NAME</TH><TH>EMAIL</TH><TH>CITY</TH></TR>
        <?php
        while($records = mysqli_fetch_assoc($result))
        {
        ?>
                <TR>
                    <TD><?php ECHO $records["rollno"] ?></td>
                    <TD><?php ECHO $records["name"] ?></td>
                    <TD><?php ECHO $records["email"] ?></td>
                    <TD><?php ECHO $records["city"] ?></td>
                </TR>

            <?PHP
            
        }//while close
        ?>
            </TABLE>
        <?php
    } //else close

    //pagination links..
    //echo'<a href="php_pagination.php?php='.($page-1).'"> Previous</a>';
    echo"<br><br>";
    
    if($_GET["page"]>=2)
        echo '<a href="php_pagination.php?php='.($_GET["page"]-1).'"> Previous</a>';
    
    for($i=1;$i<$number_of_pages;$i++)
        echo '<a href="php_pagination.php?page='.$i.'" >'."page: " .$i. '</a>';

    if($_GET["page"]<$number_of_pages)
        echo '<a href="php_pagination.php?php='.($_GET["page"]+1).'"> Next</a>';


?>