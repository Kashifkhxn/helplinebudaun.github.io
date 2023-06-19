<?php
require('connection.inc.php');
require('functions.inc.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') 

{
$d_name=get_safe_value($con,$_POST['d_name']);
$d_mobile=get_safe_value($con,$_POST['d_mobile']);
$d_amount=get_safe_value($con,$_POST['d_amount']);

mysqli_query($con, "INSERT INTO donation (m_name, mobile, email) values ('$m_name', '$mobile', '$email')");
// mysqli_query($con,"insert into donation(d_name,d_mobile,d_amount) values ('$d_name','$d_mobile','$d_amount')");
echo "Thank you";
// echo '<script>alert("Thank You!..")</script>';
header('Location:https://rzp.io/l/qAGZMPgav');
}
?>