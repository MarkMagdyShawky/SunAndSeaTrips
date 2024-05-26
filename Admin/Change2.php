<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Show an traveling trips">
		<meta name="author" content="Mark Magdy">
		<link rel="stylesheet" href="css/Change2.css">
		<link rel="website icon" href="foto/logo.png" type="png">
		<link rel="stylesheet" href="css/all.min.css">
		<title>Change Video</title>
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

				<h1>Update Video</h1>


				<form action="" method="post" enctype="multipart/form-data">

					<div class="box">
						<label for="tripfoto">New Video</label>
						<div class="field">
							<input type="file" id="video" name="my_video" required>
						</div>
					</div>

					<div class="box add">
						<input type="submit" name="Upload" value="Upload" class="submit-btn">
					</div>

				</form>

			</div>

		</div>
		</div>

	</body>

</html>

<?php

if (@$_SERVER['REQUEST_METHOD'] == "POST" and @isset($_POST['Upload'])) {
	if (isset($_FILES['my_video'])) {
		include("connection.php");

		$video_name = $_FILES['my_video']['name'];
		$video_type = $_FILES['my_video']['type'];
		$video_temp_name = $_FILES['my_video']['tmp_name'];
		$video_error = $_FILES['my_video']['error'];
		$video_size = $_FILES['my_video']['size'];

		$video_ext = explode(".", $video_name);
		$extension = end($video_ext);

		$arr_extensions = array("mp4", "flv", "avi", "webm");

		$target = "uploaded_videos/";
		$error = "";

		if (!in_array($extension, $arr_extensions)) {
			$error = "Extension  not avilable";
		}

		if ($video_size > 99999940) {
			$error = "Size bigger than required";
		}

		if (empty($error)) {

			$random = rand(0, 99);
			$url = "video" . "$random" . "-" . date('d-m-y') . "." . $extension;
			$video_directory = dirname(__FILE__) . "/uploaded_videos/";
			$data_page = $video_directory . $url;

			$destination = $video_directory . "video" . "$random" . "-" . date('d-m-y') . "." . $extension;
			move_uploaded_file($video_temp_name, $destination);

			$Video = 'uploaded_videos/' . "video" . "$random" . "-" . date('d-m-y') . "." . $extension;

			$quary1 = "UPDATE `settings2` SET `Video_Name`='$Video'; ";

			$sql1 = mysqli_query($con, $quary1);


			if ($sql1) {
				echo "<script> alert('Video Update Successfully')</script>";
			} else {
				echo "<script> alert('Somthing Wrong Try Again')</script>";
			}

		}


	}



}
?>