<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Mark Magdy">
		<link rel="stylesheet" href="css/Messages.css">
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
				<h1>Messages</h1>
			</div>
		</div>

		<?php
		include("connection.php");
		$quary = "SELECT * FROM `message` ORDER BY `Cust_Id` ASC;";
		$sql = mysqli_query($con, $quary);
		?>


		<div class="section1">
			<div class="boxes">
				<?php
				if (mysqli_num_rows($sql) > 0) {
					while ($row = mysqli_fetch_assoc($sql)) {
						?>
						<div class="box">
							<div class="item">
								<p><span>Name:></span>
									<?php echo $row['Cust_Name']; ?>
								</p>
								<p><span>Email: </span>
									<?php echo $row['Cust_Email']; ?>
								</p>
								<p><span>Phone Number:</span>
									<?php echo $row['Cust_Phone']; ?>
								</p>
								<p><span>Review: </span>
									<?php echo $row['Review']; ?>
								</p>
								<p><span>Compline: </span>
									<?php echo $row['Complain']; ?>
								</p>
							</div>

							<div>
								<form action="" method="post">
									<input type="submit" name="<?php echo $row['Cust_Id']; ?>" value="Delete">
								</form>
							</div>
						</div>

						<?php

						if (isset($_POST[$row['Cust_Id']])) {

							$ID = $row['Cust_Id'];
							$quary2 = "DELETE FROM `message` WHERE `Cust_Id`='$ID';";
							$sql2 = mysqli_query($con, $quary2);

							if ($sql2) {
								echo "<script type='text/javascript'>
						alert('Messa Deleted')
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