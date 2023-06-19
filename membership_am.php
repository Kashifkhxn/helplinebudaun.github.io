<?php
require('connection.inc.php');
require('functions.inc.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST')
 {
  $m_name = get_safe_value($con, $_POST['m_name']);
  $mobile = get_safe_value($con, $_POST['mobile']);
  $email = get_safe_value($con, $_POST['email']);
  mysqli_query($con, "INSERT INTO membership (m_name, mobile, email) values ('$m_name', '$mobile', '$email')");
  echo "Thank you";
  header('Location:https://rzp.io/l/qAGZMPgav');
}
?>