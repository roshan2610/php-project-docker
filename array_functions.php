<html>
    <body>
        <?php
// array() to crreate an array
echo "<BR><h2 style = 'background-color:lightblue;color:black;'>COMBINE WITH KEYS AND VALUES</h2>";
$fname= array("Omkar", "Nilesh", "Aniket");
$nickname= array("Bheem", "Pappu","Goku"); 
//array_combine($a1,$a2) to combine arrays using keys and values.

$comb= array_combine($fname,$nickname);
print_r($comb);

//array_count_values() gives the count of every array element.
echo "<BR><h2 style = 'background-color:lightblue;color:black;'>COUNT OF EACH ELEMENT</h2><br>";
$a=array("1","3","1","2","5");
echo"</br>";
print_r(array_count_values($a));

//array_merge() merge two arrays
echo "<BR><h2 style = 'background-color:lightblue;color:black;'>MERGE TWO ARRAYS</h2>";
$x= array("WT", "JAVA");
$y= array("DA","DAA");
print_r(array_merge($x,$y));

//array_intersect(): compares the values  of two arrays and returns the matches
echo "<BR><h2 style = 'background-color:lightblue;color:black;'>SAME ELEMENTS IN TWO ARRAYS</h2>";

echo "<BR><BR><b>array_intersect() Function: </b><br>";
$colors1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$colors2=array("e"=>"red","f"=>"green","g"=>"blue");

$merge=array_intersect($colors1,$colors2);
print_r($merge);


echo "<BR><h2 style = 'background-color:lightblue;color:black;'>array_chunk() function</h2>";

$salary=array("roshan"=>"950000","omkar"=>"750000","nil"=>"800000");    
print_r(array_chunk($salary,2));   
  

// count() => Return the number of elements in an array:
echo "<BR><h2 style = 'background-color:lightblue;color:black;'>NO OF ELEMENTS IN ARRAY</h2>";
$friends=array("Om","Nil","Goku");
echo count($friends);



//arsort(array, sorttype), asort=ascending arsort=descending
echo "<BR><h2 style = 'background-color:lightblue;color:black;'>arsort() to sort array:</h2>";

$age=array("Om"=>"22","Nil"=>"23","Goku"=>"20");
asort($age);

foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Age=" . $x_value;
   echo "<br>";
   }

   echo "<BR><h2 style = 'background-color:lightblue;color:black;'>UPPERCASE USING array_change_case(arr, CASE_UPPER); :</h2>";

   $salary=array("roshan"=>"50000","omkar"=>"60000","nilesh"=>"70000");    
   print_r(array_change_key_case($salary,CASE_UPPER));   

//=================================
   echo "<BR><h2 style = 'background-color:lightblue;color:black;'>Reverse:</h2>";
   $bestfriends=array("roshan","ramesh","suresh","rakesh");    
   $reverse=array_reverse($bestfriends);  
   foreach( $reverse as $bfs )    
   {    
     echo "$bfs<br />";    
   }    



   echo "<BR><h2 style = 'background-color:lightblue;color:black;'>search specific value in array </h2>";

$key=array_search("roshan",$bestfriends);  
echo $key;    

?>
</body>

</html>
