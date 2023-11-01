<html>
    <head><title>Delete</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h2{
            text-align: center;
            margin-top: 100px;
        }
    </style>
</head>
<?php
$sn="localhost";
$un="root";
$ps="";
$db="testdb";
$a=$_POST['email'];
$b=$_POST['password'];
$con=new mysqli($sn,$un,$ps,$db);
$query="select * from login where email='$a'and password='$b'";
$res=$con->query($query);
$count=mysqli_num_rows($res);
if($count==0)
{
	echo '<h2>Try again!<h2>';
}
else
{
	header("location:home.html");
}
?>
</html>