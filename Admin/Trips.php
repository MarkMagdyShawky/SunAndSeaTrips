<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Mark Magdy">
		<link rel="stylesheet" href="css/Trips.css">
		<link rel="website icon" href="foto/logo.png" type="png">
		<link rel="stylesheet" href="css/all.min.css">
		<title>Trips</title>
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

		<div class="title">
			<div class="boxes">
				<h1>All Trips</h1>
			</div>
		</div>

		<?php

		include("connection.php");

		$quary = "SELECT * FROM `trip` ORDER BY `Trip_Id` ASC;";
		$sql = mysqli_query($con, $quary);


		?>

		<div class="section1">
			<div class="boxes">
				<?php
				if (mysqli_num_rows($sql) > 0) {
					while ($row = mysqli_fetch_assoc($sql)) {
						?>
						<div class="box">

							<img src="<?php echo $row['Trip_photo']; ?>">
							<img src="<?php echo $row['Trip_photo2']; ?>">
							<img src="<?php echo $row['Trip_photo3']; ?>">

							<div class="info1">
								<h2 class="TripName">
									<?php echo $row['Trip_name']; ?>
								</h2>

								<p class="description">
									<?php echo $row['Trip_description']; ?>
								</p>

								<p>
									Highlights1:
									<?php echo $row['Highlights1']; ?>
								</p>

								<p>
									Highlights2:
									<?php echo $row['Highlights2']; ?>
								</p>

								<p>
									Highlights3:
									<?php echo $row['Highlights3']; ?>
								</p>

								<p>
									Highlights4:
									<?php echo $row['Highlights4']; ?>
								</p>

								<p>

									Highlights5:
									<?php echo $row['Highlights5']; ?>
								</p>
								<p>
									Highlights6:
									<?php echo $row['Highlights6']; ?>

								</p>
								<p>
									Highlights7:
									<?php echo $row['Highlights7']; ?>

								</p>
							</div>

							<div class="info2">
								<p class="price">Old Price:
									<?php echo $row['Trip_old_price']; ?>
								</p>
								<p class="price">New Price:
									<?php echo $row['Trip_new_price']; ?>
								</p>
								<p class="duration">Duration:
									<?php echo $row['Trip_date']; ?>
								</p>
								<p class="hotOffer">Hot Offer:
									<?php echo $row['Hot_offer']; ?>
								</p>
							</div>

							<div class="action">
								<a href="Update.php?id=<?php echo $row['Trip_Id']; ?>">
									<span class="btn">Update</span>
								</a>

								<form action="" method="post">
									<input type="submit" name="<?php echo $row['Trip_Id']; ?>" value="Delete">
								</form>
							</div>

						</div>
						<?php

						if (isset($_POST[$row['Trip_Id']])) {

							$ID = $row['Trip_Id'];
							$quary2 = "DELETE FROM `trip` WHERE `trip`.`Trip_Id` = '$ID';";
							$sql2 = mysqli_query($con, $quary2);

							if ($sql2) {
								echo "<script type='text/javascript'>
						alert('Trip Deleted')
						location.reload()
					</script>";
							} else {
								echo "<script type='text/javascript'>
						alert('Somthing Error cannot Delete!')
					</script>";
							}

						}


					}
				}
				?>
			</div>
		</div>

	</body>

</html>