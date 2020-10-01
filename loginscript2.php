<?php
include('conn2.php');
if(isset($_POST['submit']))
 {
	$name=$_POST['ename'];
	$profile=$_POST['eprofile'];
	$code=$_POST['ecode'];
	$add=$_POST['eadd'];
	$contact=$_POST['econtact'];
	$age=$_POST['eage'];
	$sallary=$_POST['esallary'];
	$d=$_POST['edate'];
	$notice=$_POST['enotice'];
	// echo $name;
	// echo $profile;
	// echo $code;
	// echo $add;
	// echo $contact;
	// echo $age;
	// echo $sallary;
	// echo $d;
	// echo $notice;
	
	 $query=" INSERT INTO empdata(`name`, `profile`, `code`, `addres`, `contact`, `age`, `sallary`, `date`, `notice`) VALUES ('$name', '$profile', '$code', '$add', '$contact', $age, '$sallary', '$d', '$notice')";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo "<br>inserted";
	}
	else{
		echo "not inserted";
	}
}


?>