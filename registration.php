<html>
<head><title>REGISTRATION</title>
<style>
.button1 {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  border: none;
  border-radius: 100px;
}
.button1:hover {background-color: pink;}
</style>
</head>
<body background="cake.jpg">
<form action="registration.php" method="POST">
<table width="30%" height="70%" align="center">
<br/>
<br/>
<center><h1>REGISTRATION FORM</h1></center>
<tr>
<td>NAME</td>
<td><input type="text" id="name" name="name" value="" required></td>
</tr>
<tr>
<td>AGE</td>
<td><input type="text" id="age" name="age" value="" required></td>
</tr>
<tr>
<td>ADDRESS</td>
<td><input type="text" id="addr" name="addr" value="" required></td>
</tr>
<tr>
<td>E-MAIL</td>
<td><input type="email" id="email" name="email" value="" required></td>
</tr>
<tr>
<td>USERID</td>
<td><input type="text" id="uid" name="uid" value="" required></td>
</tr>

<tr>
<td>PASSWORD</td>
<td><input type="password" id="pass" name="pass" value="" required></td>
</tr>
<tr>
<td>CONTACT NO</td>
<td><input type="text"  id="contact" name="contact" value="" required></td>
</tr>
<tr>
<td>NAME OF BAKERY</td>
<td><input type="text" id="nob" name="nob" value="" required></td>
</tr>  
<tr>
<td>BAKERY ADDRESS</td>
<td><input type="text" id="ba" name="ba" value="" required></td>
</tr>
<tr>
<td><input type="submit" class="button1" name="submit" value="SUBMIT"/></td>
<td><input type="button" class="button1" name="cancel" value="CANCEL"/></td>
</tr>
</table>
<br>
<CENTER><input type="button" class="button1" name="login" value="LOGIN" onclick="lo();"/></CENTER>
</form>
<?php
if(isset($_POST['submit']))
{
//	echo "dffdg";
$name=$_POST['name'];
$age=$_POST['age'];
$addr=$_POST['addr'];
$email=$_POST['email'];
$uid=$_POST['uid'];
$pass=$_POST['pass'];
$contact=$_POST['contact'];
$nob=$_POST['nob'];
$ba=$_POST['ba'];

$servername="localhost";
$username="root";
$password="";
$dbname="efactory";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$stmt="insert into reg(name,age,addr,email,uid,pass,contact,nob,ba)values('$name','$age','$addr','$email','$uid','$pass','$contact','$nob','$ba')";
$result=mysqli_query($conn,$stmt);
if($result) {
	echo "SUCCESSFULLY INSERTED!";
	}
else
{
	die(mysqli_error());
}
}
?>
</body>
</html>
<script language="text/javascript">
function lo()
{
window.location="frame1.html";
}
</script>