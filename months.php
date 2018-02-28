<!DOCTYPE html>
 
<html>
<head>
<title>Month CAT</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<style type="text/css">
		body{
			background-color: white;
			background-image: url(image.jpeg);
			background-size: cover;
			background-repeat: no-repeat;
			color: black;
		}
		.pink {
			color: pink;
		}
</style>
</head>
<body>
	<?php
$months=array (
  'January'=>31,
  'February'=>'28 days, if leap year 29',
  'March'=>31,
  'April'=>30,
  'May'=>31,
  'June'=>30,
  'July'=>31,
  'August'=>31,
  'September'=>30,
  'October'=>31,
  'November'=>30,
  'December'=>31
);
 
function option($str){
  echo "<option value=\"$str\">" .ucfirst($str). "</option>\n";
}
 
?>
<h2 class="pink">My Month</h2>
 
<?php
if(!isset ($_POST['submit'])){
?>
<form method="post" action="months.php">
<p class="pink">Please Select A Month</p>
<select name="month">
<?php
  foreach ($months as $k => $v){
    option($k);
  }
?>
</select>  
<p/>
<br>
<input type="submit" name="submit" value="Submit" class="btn btn-danger">
</form>
<?php
} else {
  $month = $_POST['month'];  
  if ($month == 'February'){
    echo  "The month of February has " . $months['February'] . ".";
  }else{
    echo "The month of $month has $months[$month] days.";
  }
}
?>
 
</body>
</html>