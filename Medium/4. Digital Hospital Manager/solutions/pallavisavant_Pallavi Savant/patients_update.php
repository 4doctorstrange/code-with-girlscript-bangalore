
<?php
include_once('connect.php');
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$comments=$_POST['comments'];
	$date=$_POST['date'];
	$discharge=$_POST['comments1'];
	$sql=mysqli_query($con,"update `patient_details` set `Date Of Discharge`='$date',`Medical Details/Comments`='$comments',`Discharge Comments`='$discharge' where `Full Name`='$name'");
	if($_POST['date1']){
		$date1=$_POST['date1'];
		$sql=mysqli_query($con,"update `patient_details` set `Date And Time Of Death`='$date1' where `Full Name`='$name'");
	}

	
	
}

?>
<!DOCTYPE html>
<html>
</html>
<head>
	<link rel="stylesheet" href="index.css"/>
	</head>
<body>
	<div class="content2">
		<div class="content1">
	<form action="patients_update.php" method="post">
		<div class="block">
		<label>Name: </label>
		<input type="text" name="name" placeholder="Name" required="required">
	</div>
		<div class="block">
		<label>Medical Details/Comments: </label>
		<input type="text" name="comments" placeholder="Medical Comments" required="required">
	</div>
		<div class="block">
		<label>Discharge Date: </label>
		<input type="date" name="date" placeholder="Discharge Date" required="required">
	</div>
	<div class="block">
		<label>Discharge Comments: </label>
		<select name="comments1" required="required">
		<option value="Decreased">Decreased</option>
		<option value="cured">Cured</option>
			</select>
	</div>
	<div class="block">
		<label>Date And Time Of Death</label>
		<input type="datetime-local" name="date1" placeholder="Date">(If Decreased then enter the date of death)</input>
	</div>
	<input name="submit" style="color:white;background-color: black;height:30px;width:55px;text-align: center;transform: translate(200px, 20px);" type="submit" value="Submit"/>
</form>
</form>
</div>
</div>

	</form>
	</body>
	</html>