<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Show a traveling trips">
		<meta name="author" content="Mark Magdy">
		<link rel="stylesheet" href="css/Update.css">
		<link rel="icon" href="foto/logo.png" type="image/png">
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
				<h1>Update</h1>
				<form action="" method="post" enctype="multipart/form-data">
					<div class="box">
						<label for="tripname">Trip Name</label>
						<div class="field">
							<input type="text" id="tripname" name="name" required>
						</div>
					</div>
					<div class="box">
						<label for="tripOldPrice">Trip Old Price</label>
						<div class="field">
							<input type="text" id="tripOldPrice" name="oldPrice">
						</div>
					</div>
					<div class="box">
						<label for="tripNewPrice">Trip New Price</label>
						<div class = "field">
							<input type="text" id="tripNewPrice" name="newPrice" required>
						</div>
					</div>
					<div class="box">
						<label for="tripduration">Trip Duration</label>
						<div class="field">
							<input type="text" id="tripduration" name="duration">
						</div>
					</div>
					<div class="box">
						<label for="tripdescription">Trip Description</label>
						<div class="field">
							<textarea id="tripdescription" name="description" required></textarea>
						</div>
					</div>
					<div class="box">
						<label for="Triphighlights1">Highlights 1</label>
						<div class="field">
							<textarea id="Triphighlights1" name="highlights1"></textarea>
						</div>
					</div>
					<div class="box">
						<label for="Triphighlights2">Highlights 2</label>
						<div class="field">
							<textarea id="Triphighlights2" name="highlights2"></textarea>
						</div>
					</div>
					<div class="box">
						<label for="Triphighlights3">Highlights 3</label>
						<div class="field">
							<textarea id="Triphighlights3" name="highlights3"></textarea>
						</div>
					</div>
					<div class="box">
						<label for="Triphighlights4">Highlights 4</label>
						<div class="field">
							<textarea id="Triphighlights4" name="highlights4"></textarea>
						</div>
					</div>
					<div class="box">
						<label for="Triphighlights5">Highlights 5</label>
						<div class="field">
							<textarea id="Triphighlights5" name="highlights5"></textarea>
						</div>
					</div>
					<div class="box">
						<label for="Triphighlights6">Highlights 6</label>
						<div class="field">
							<textarea id="Triphighlights6" name="highlights6"></textarea>
						</div>
					</div>
					<div class="box">
						<label for="Triphighlights7">Highlights 7</label>
						<div class="field">
							<textarea id="Triphighlights7" name="highlights7" required></textarea>
						</div>
					</div>
					<div class="box">
						<label>Hot Offer</label>
						<div class="field" style="margin-left:10px; font-size: 17px;">
							<label for="yes">Yes</label>
							<input type="radio" id="yes" name="hotOffer" style="margin-right:20px;" value="Yes">
							<label for="no">No</label>
							<input type="radio" id="no" name="hotOffer" value="No">
						</div>
					</div>
					<div class="box">
						<label for="tripfoto">Trip Foto</label>
						<div class="field">
							<input type="file" id="tripfoto" name="photo" required>
						</div>
					</div>
					<div class="box">
						<label for="tripfoto2">Trip Foto 2</label>
						<div class="field">
							<input type="file" id="tripfoto2" name="photo2" required>
						</div>
					</div>
					<div class="box">
						<label for="tripfoto3">Trip Foto 3</label>
						<div class="field">
							<input type="file" id="tripfoto3" name="photo3" required>
						</div>
					</div>
					<div class="box add">
						<input type="submit" name="submit" value="Update Now" class="submit-btn">
					</div>
				</form>
			</div>

		</div>


	</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit']) && $_POST['submit'] == "Update Now") {
	include("connection.php");

	$Name = mysqli_real_escape_string($con, $_POST['name']);
	$OldPrice = $_POST['oldPrice'];
	$NewPrice = $_POST['newPrice'];
	$Duration = $_POST['duration'];
	$Description = mysqli_real_escape_string($con, $_POST['description']);
	$Highlights1 = mysqli_real_escape_string($con, $_POST['highlights1']);
	$Highlights2 = mysqli_real_escape_string($con, $_POST['highlights2']);
	$Highlights3 = mysqli_real_escape_string($con, $_POST['highlights3']);
	$Highlights4 = mysqli_real_escape_string($con, $_POST['highlights4']);
	$Highlights5 = mysqli_real_escape_string($con, $_POST['highlights5']);
	$Highlights6 = mysqli_real_escape_string($con, $_POST['highlights6']);
	$Highlights7 = mysqli_real_escape_string($con, $_POST['highlights7']);
	$HotOffer = isset($_POST['hotOffer']) ? mysqli_real_escape_string($con, $_POST['hotOffer']) : "No";

	// Handle file uploads
	$targetDirectory = "uploaded/";
	$Photo = handleFileUpload('photo', $targetDirectory);
	$Photo2 = handleFileUpload('photo2', $targetDirectory);
	$Photo3 = handleFileUpload('photo3', $targetDirectory);
	$ID = $_GET['id'];

	$quary1 = "UPDATE `trip` SET `Trip_name`='$Name', `Trip_old_price`='$OldPrice', `Trip_new_price`='$NewPrice', `Trip_date`='$Duration', `Trip_description`='$Description', `Hot_offer` = '$HotOffer', `Trip_photo`='$Photo', `Highlights1`='$Highlights1', `Highlights2`='$Highlights2', `Highlights3`='$Highlights3', `Highlights4`='$Highlights4', `Highlights5`='$Highlights5', `Highlights6`='$Highlights6', `Highlights7`='$Highlights7', `Trip_photo2`='$Photo2', `Trip_photo3`='$Photo3' WHERE `trip`.`Trip_Id` = '$ID';";

	$sql1 = mysqli_query($con, $quary1);

	if ($sql1) {
		echo "<script> alert('Trip Update Successfully')</script>";
	} else {
		echo "<script> alert('Something Went Wrong. Try Again!')</script>";
	}
	mysqli_close($con);
}

function handleFileUpload($inputName, $targetDirectory)
{
	$file = $_FILES[$inputName];
	$fileName = basename($file['name']);
	$targetPath = $targetDirectory . $fileName;

	if (move_uploaded_file($file['tmp_name'], $targetPath)) {
		return $targetPath;
	} else {
		return "";
	}
}
?>