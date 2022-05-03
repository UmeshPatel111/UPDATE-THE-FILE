<?php

$con =mysqli_connect("localhost","root","","umesh");

if(isset($_POST['submit'])){
$id=$_POST['id'];
//$addrese=$_POST['address'];


$search="SELECT * FROM `form` WHERE `id`='$id'";


$result=mysqli_query($con,$search);

$row=mysqli_fetch_assoc($result);
$tru=mysqli_num_rows($result);
if($tru>0)
{
   $name=$row['name'];
   $email=$row['email'];
   $password=$row['password'];
   $contact=$row['contact'];
   
   echo "name =".$name ."<br>";
   echo "email =".$email ."<br>";
   echo "password =".$password."<br>";
   echo "contact =".$contact."<br>";

}
else
{
   echo"not found";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
                <input type="text" name="id">
                  <input type="submit" name="submit">
    </form>
</body>
</html>  