<?php 
$conn = mysqli_connect("localhost","root","","emp");
if($conn)
{
	echo "connected";
}
else
{
    echo "failed";
 }

 ?>