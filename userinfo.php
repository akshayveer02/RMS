<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo"connection successful";
}else{ 
echo "no connection";
}
mysqli_select_db($con, 'rms1');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$subject = $_POST['subject'];
$query = "insert into userinfodata (firstname,lastname,country,subject)
values ('$firstname','$lastname','$country','$subject')";

mysqli_query($con,$query );


?>