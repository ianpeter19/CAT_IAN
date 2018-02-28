<!DOCTYPE html>
 
<html>
<head>
<title>User Input Added to Array</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<style type="text/css">
	body{
		background-color: silver;
	}
</style>
</head>
 
<body>
<h2>How Are You Traveling?</h2>
 
<?php
if (!isset($_POST['submit'])){
$travel=array (
  "Automobile",
  "Jet",
  "Train",
  "Ferry"
);
 
?>
 
<p>Travel takes many forms, whether across town, across the country, or
 around the world. Here is a list of some common modes of transportation:</p>
<ul>
 
<?php
foreach ($travel as $t){
  echo "<li>$t</li>\n"; 
}
?>
 
</ul>
<form method="post" action="transportation.php">
<p>Please add your favorite, local, or even imaginary modes of travel 
to the list, separated by commas:</p>
<input type="text" name="added" size="80" />
<p />
 
<?php
foreach ($travel as $t){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\" />\n";
}
?>
 
<input type="submit" name="submit" value="Submit" class="btn btn-info">
</form>
 
<?php
}else{
$travel=($_POST['travel']);
$added=explode (',',$_POST['added']);
 
array_splice ($travel, count ($travel), 0, $added);
echo "<p>Here is the list with your additions:</p>\n<ul>\n";
foreach($travel as $t){
  echo "<li>".trim ($t)."</li>\n";  
}
echo"</ul>";  
 
?>
<p>Add more?</p>
<form method="post" action="transportation.php">
<input type="text" name="added" size="80" />
<p />
<?php
foreach ($travel as $t){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\" />\n";
}
?>
<input type="submit" name="submit" value="Submit" class="btn btn-info" />
</form>
<?php
}
?>
</body>
</html>