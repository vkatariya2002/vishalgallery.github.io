<?php
$con = mysqli_connect('localhost','root');
if($con)
{
    echo "Connection Successful";
}
else
{
    echo "No Connection";
}
mysqli_select_db($con, 'galleryuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];
$pay = $_POST['pay'];


$query = " insert into userinfodata (user, email, mobile, comment, pay)
values ('$user', '$email', '$mobile', '$comment', '$pay')";

echo "$query";

mysqli_query($con, $query);

header('location:index.php');
?>