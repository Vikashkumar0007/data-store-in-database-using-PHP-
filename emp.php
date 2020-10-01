<!DOCTYPE html>
<html>
<head>
	<title>Emp_data</title>
</head>
<style type="text/css">
	 body{

	 
	 	margin-left: 25%;
	 	background-color: #ccc;
	 }
	 h1
	 {

	 	margin-left: 150px;
	 	font-size: 50px;
	 	color: red;
	 }
	table{
         border: 5px;
        height:400px;
         width :50%;
         border: 3px solid black;
         padding: 50px;
         border-radius: 20px;
         font-size: 20px;
         }
        td
        {
        	height: 30px;
        	padding: 10px;
        }
         input
         {

         	border-radius: 10px;
         	height: 30px;
         	width: 300px;
         }

</style>
<body>
	<form method="post" action="loginscript2.php">
		<h1>Employ Data</h1>
		<table cellspacing="0">

			<tr>
				<td>Emp_Name<td>
				<td><input type="text" name="ename"></td>	
			</tr>
			<tr>
				<td>Emp_Profile<td>
				<td><input type="text" name="eprofile"></td>	
			</tr>
			<tr>
				<td>Emp_Code<td>
				<td><input type="text" name="ecode"></td>	
			</tr>
			<tr>
				<td>Emp_Add<td>
				<td><input type="text" name="eadd"></td>	
			</tr>
			<tr>
				<td>Emp_contact<td>
				<td><input type="tel" name="econtact"></td>	
			</tr>
			<tr>
				<td>Emp_Age<td>
				<td><input type="number" name="eage"></td>	
			</tr>
			<tr>
				<td>Emp_sallary<td>
				<td><input type="text" name="esallary"></td>	
			</tr>
			<tr>
				<td>Emp_Joining Date<td>
				<td><input type="date" name="edate"></td>	
			</tr>
			<tr>
				<td>Emp_Notice_period<td>
				<td><input type="text" name="enotice"></td>	
			</tr>
            <tr>
				
				<td colspan="2" align="center"><input type="submit" name="submit" value="save"></td>	
			</tr>

	   </table>
	</form>
</body>
</html>