<?php  

echo "<BR><h2 style = 'background-color:red;color:black;'>ADD SLASHES</h2>";
//addcslashes() to add slash
$str="Hie Good Morning..!";  
echo "Your String : ".$str;  
echo "<br>"."After using 'addcslashes()' your string: ".addcslashes($str,'r')."<br>";  

echo "<BR><h2 style = 'background-color:red;color:black;'>HEXADECIMAL VALUE</h2>";
//bin2hex() function is used to convert string value of ASSCII characters to hexadecimal value
$str2 ="php@09";  
echo "<br><br>Your ASCII character is: ".$str2;  
echo "<br>"."By using 'bin2hex()' Method your hexadecimal value is: ".bin2hex($str2);   

echo "<BR><h2 style = 'background-color:red;color:black;'>JOIN</h2>";
//string join() function:return a string from the elements of an array
$arr = array('Hello','This','is','Join','Function'); 
echo"<br><br><b>string join() function:</b><br>"; 
echo join(" ",$arr)."<br>";  

echo "<BR><h2 style = 'background-color:red;color:black;'>UPPER CASE</h2>";
$na="hello there";
echo "<BR>using uppercase: " . strtoupper($na);

echo "<br>length:" . strlen($na) . "<BR>";

echo "<BR><h2 style = 'background-color:red;color:black;'>ltrim() remove left white spaces</h2>";

$str5 = "               Hello ROSHAN!";  
echo "Without ltrim() Function: " . $str5;  
echo "<br>";  
echo ltrim($str5,"Hello");

echo "<BR><h2 style = 'background-color:red;color:black;'>rtrim() remove right white spaces</h2>";

$str10 = "Hello ROSHAN!            ";  
echo "Without rtrim() Function: " . $str10;  
echo "<br>";  
echo rtrim($str10,"ROSHAN");




echo "<BR><h2 style = 'background-color:red;color:black;'>TRIM</h2>";
$str6 = "GGOOD NIGHT!";  
echo "Your string is: ".$str6 ."<br>";  
echo "By using trim() function :".trim($str6,"GGOOD");  


echo "<BR><h2 style = 'background-color:red;color:black;'>md5 function: To retunr 32 bit character </h2>";
$password = "php@09";  
echo "Your string is:".$password;  
echo "<br>";  
echo "By using md5() functon:".md5($password);  

echo "<BR><h2 style = 'background-color:red;color:black;'>To find length of string </h2>";

$name = 'Roshan Patil';  
echo "Your String is:".$name;  
echo "<br>";  
echo "By using 'strlen()' function:".strlen($name);




?>  