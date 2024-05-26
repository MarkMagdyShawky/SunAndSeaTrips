<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Show an traveling trips">
		<meta name="author" content="Mark Magdy">
		<link rel="stylesheet" href="css/Change1.css">
		<link rel="website icon" href="foto/logo.png" type="png">
		<link rel="stylesheet" href="css/all.min.css">
		<title>Update Trip</title>
	</head>

	<body>

		<div class="header1">
			<div class="header">

				<div class="logo">
					<a href="../index.php">Sun&Sea</a>
				</div>

				<div class="nav">
					<div class="container">
						<ul class="list">
							<li class="item"><a href="../index.php">Main Home</a></li>
							<li class="item"><a href="Settings.php">Settings</a></li>
							<li class="item"><a href="Messages.php">Messages</a></li>
							<li class="item"><a href="Trips.php">Trips</a></li>
							<li class="item" style="margin-right: 0px;"><a href="Add.php">Add</a></li>
						</ul>
					</div>
				</div>


			</div>
		</div>


		<div class="section1">
			<div class="boxes">

				<h1>Update Settings 1</h1>


				<form action="" method="post" enctype="multipart/form-data">

					<div class="box">
						<label for="phone">Phone Number</label>
						<div class="field">
							<input type="text" id="phone" name="phone">
						</div>
					</div>

					<div class="box">
						<label for="whatsapp">WhatsApp link</label>
						<div class="field">
							<input type="text" id="whatsapp" name="whatsapp">
						</div>
					</div>
					<div class="box">
						<label for="offer_part1">Offer Part2</label>
						<div class="field">
							<textarea id="offer_part1" name="offer_part1"></textarea>
						</div>
					</div>


					<div class="box">
						<label for="offer_part2">Offer Part2</label>
						<div class="field">
							<textarea id="offer_part2" name="offer_part2"></textarea>
						</div>
					</div>


					<div class="box add">
						<input type="submit" name="submit" value="Update Now" class="submit-btn">
					</div>

				</form>

			</div>

		</div>
		</div>

	</body>

</html>

<?php

//..... Variable cappital and html small 

if (@$_SERVER['REQUEST_METHOD'] == "POST" and @isset($_POST['submit']) and @$_POST['submit'] == "Update Now") {

	include("connection.php");

	$Phone = $_POST['phone'];
	$Whatsapp = $_POST['whatsapp'];
	$Offer_part1 = $_POST['offer_part1'];
	$Offer_part2 = $_POST['offer_part2'];


	$quary1 = "UPDATE `settings1` SET `Offer_part1`='$Offer_part1',`Offer_part2`='$Offer_part2',`Phone`='$Phone',`Whatsapp`='$Whatsapp' WHERE 1 ; ";

	$sql1 = mysqli_query($con, $quary1);


	if ($sql1) {
		echo "<script> alert('Settings Update Successfully')</script>";
	} else {
		echo "<script> alert('Somthin Wrong Try Again')</script>";
	}
}
?>