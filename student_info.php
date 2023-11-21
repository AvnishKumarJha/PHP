<html>
<body>
	<h1>Student Information</h1>
	<form action="" method="post">
		Enter Roll No : <br>
		<input type="text" name="r1"><br>
		Enter your Name : <br>
		<input type="text" name="n1"><br>
		<input type="submit" name="submit" value="submit">
	</form>
	<?php
		
		$conn=mysqli_connect("localhost","root","","college");
		
	if  (isset($_POST['submit']))
	{
		$roll_num=$_POST['r1'];
		$name=$_POST['n1'];
		$sql="INSERT INTO student (roll_num,name) VALUES ('$roll_num', '$name')";
		$result = mysqli_query($conn,$sql);
		
		if ($result)
		{
			echo "Data inserted";
		}
		else
		{
			echo "Not inserted";
		}
	}
	
	?>
	
</body>
</html>