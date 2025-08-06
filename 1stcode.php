<html>
<head>
<title>1st code</title>
</head>
<body>
<form action=1stcode.php method="GET">
number 1:<input type="number" name="n1"><br>
number 2:<input type="number" name="n2"><br>
submit<input type="submit" name="submit" value="add">
<?php
if(isset($_GET['submit']))
{
$num1=$_GET['n1'];
$num2=$_GET['n2'];
$c=$num1+$num2:
echo("result is:".$c);
}
?>
</body>
</html>
