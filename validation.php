<?php
$nameErr = $ageErr = $emailErr = $typeErr = $deptErr = $phoneErr = "";
if(isset($_POST['submit']))
{
   if(empty($_POST['name']))
       $nameErr = "Name is required";
   else if(!preg_match("/^[a-zA-Z ]+$/", $_POST['name']))
       $nameErr = "Only letters and spaces are allowed";
   if(empty($_POST['age']))
       $ageErr = "Age is required";
   else if($_POST['age'] < 18 || $_POST['age'] > 30)
       $ageErr = "Age must be between 18 and 30";
   if(empty($_POST['email']))
       $emailErr = "Email is required";
   else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
       $emailErr = "Invalid email format";
   if(!isset($_POST['type']))
       $typeErr = "Please select a membership type";
   if($_POST['department'] == "")
       $deptErr = "Please select your department";
   if(empty($_POST['phone']))
       $phoneErr = "Phone number is required";
   else if(!preg_match("/^[0-9]{11}$/", $_POST['phone']))
       $phoneErr = "Phone number must contain exactly 11 digits";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Club Registration</title>
</head>
<body>
<h2>Student Technology Club Registration Form</h2>
<form method="post">
Name:
<input type="text" name="name">
<span style="color:red"><?php echo $nameErr; ?></span>
<br><br>
Age:
<input type="number" name="age">
<span style="color:red"><?php echo $ageErr; ?></span>
<br><br>
Email:
<input type="text" name="email">
<span style="color:red"><?php echo $emailErr; ?></span>
<br><br>
Membership Type:
<input type="radio" name="type" value="Regular"> Regular
<input type="radio" name="type" value="Executive"> Executive
<input type="radio" name="type" value="Volunteer"> Volunteer
<span style="color:red"><?php echo $typeErr; ?></span>
<br><br>
Department:
<select name="department">
<option value="">-- Select Department --</option>
<option>CSE</option>
<option>EEE</option>
<option>BBA</option>
<option>English</option>
<option>Architecture</option>
</select>
<span style="color:red"><?php echo $deptErr; ?></span>
<br><br>
Contact Number:
<input type="text" name="phone">
<span style="color:red"><?php echo $phoneErr; ?></span>
<br><br>
<input type="submit" name="submit" value="Register">
</form>
</body>
</html>