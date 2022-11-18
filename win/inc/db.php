<?php 
 
$conn = mysqli_connect('localhost','root','root','win_0898');

if(!$conn){



    echo 'error: ' . mysqli_connect_error();

}
?>