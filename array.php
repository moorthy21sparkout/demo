<?php    #associative array.
$cars=array("brand=>tata<br>","modal=>swift<br>","year=>2004<br>");
var_dump($cars);
?>  
<?php
$local=array(
        array(1,"ram",43898),
        array(2,"faiz",6543),
        array(3,"jose",8765)

);
for($row=0;$row<3;$row++)
{
    for($col=0;$col<3;$col++)
    {
     echo $local[$row][$col]." ";   
    }
    echo "<br>";
  
}







?>
