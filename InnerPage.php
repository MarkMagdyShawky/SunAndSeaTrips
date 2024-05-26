<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Show traveling trips - Find Trips In Hurghada - Great Offers in Hurghada">
        <meta name="author" content="Mark Magdy">
        <link rel="stylesheet" href="css/innerPage.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="icon" href="foto/logo.png" type="image/png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
        <title>Trip Details</title>
    </head>

    <body>
        <div class="header">
            <div class="logo">
                <a href="index.php"><img src="foto/New_Logo_F4.png" alt="Website Logo" /></a>
            </div>
            <div class="nav" id="myTopnav">
                <a href="index.php#home" class="active item">Home</a>
                <a href="index.php#about-us" class="item">About Us</a>
                <a href="index.php#contact-us" class="item">Contact</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>

        <?php
        include("connection.php");
        $ID = $_GET['id'];
        $query = "SELECT * FROM `trip` WHERE `Trip_Id` = '$ID';";
        $sql = mysqli_query($con, $query);
        ?>

        <div class="section1">
            <div class="boxes">
                <?php if (mysqli_num_rows($sql) > 0) {
                    while ($row = mysqli_fetch_assoc($sql)) {
                        ?>
                        <h1>
                            <?php echo $row['Trip_name']; ?>
                        </h1>
                        <div class="box fotos">
                            <img src="<?php echo "Admin/" . $row['Trip_photo2']; ?>" class="foto" alt="Trip Photo 2">
                            <img src="<?php echo "Admin/" . $row['Trip_photo3']; ?>" class="foto" alt="Trip Photo 3">
                            <img src="<?php echo "Admin/" . $row['Trip_photo']; ?>" class="foto" alt="Trip Photo 1">
                        </div>
                        <h2>Description</h2>
                        <div class="box1">
                            <p>
                                <?php echo $row['Trip_description']; ?>
                            </p>
                        </div>
                        <h2>Highlights</h2>
                        <div class="box1">
                            <p>
                                <?php echo $row['Highlights1']; ?>
                            </p>
                            <p>
                                <?php echo $row['Highlights2']; ?>
                            </p>
                            <p>
                                <?php echo $row['Highlights3']; ?>
                            </p>
                            <p>
                                <?php echo $row['Highlights4']; ?>
                            </p>
                            <p>
                                <?php echo $row['Highlights5']; ?>
                            </p>
                            <p>
                                <?php echo $row['Highlights6']; ?>
                            </p>
                            <p>
                                <?php echo $row['Highlights7']; ?>
                            </p>
                        </div>
                        <span class="rating">
                            <span class="title">Rating</span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </span>
                        <?php
                    }
                }
                ?>
            </div>
        </div>

        <div class="footer">
            <div class="container">

                <div class="boxes">

                    <div class="box">
                        <h1><a href="index.php" id="foter-link">
                                <span class="sun">Sun</span>
                                &
                                <span class="sea">Sea</span>
                                <span class="hurghada">Hurghada</span>
                                Trips
                            </a> </h1>
                        <p>
                            Sun and Sea Hurghada Trips, a premier tourism company based in Hurghada.
                            We specialize in providing top-quality sea trips, safari trips, city tours, and excursions to Hurghada.
                            Our goal is to provide our clients with unforgettable experiences that showcase
                            the beauty and wonder of Egypt’s most spectacular destinations. At Sun and Sea Trips,
                            we believe that tourism is not just about sightseeing and taking photos; it’s about creating meaningful
                            connections with the people and places we visit
                        </p>
                    </div>

                    <div class="box">
                        <!-- <a href="index.php"><img src="Fotos/Logo2.jpeg" alt="image"></a> -->
                        <ul class="links">
                            <li><a href="https://www.facebook.com/marm.mark.54?mibextid=ZbWKwL" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://instagram.com/mark_magdy_s?igshid=MzNlNGNkZWQ4Mg==" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="twitter.com"><i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.linkedin.com/in/mark-magdy-026009236" target="_blank">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <!-- <div class="box admin-icon">
                        <p>Log as An Admin</p>
                        <a href="admin.php"><i class="fa-solid fa-lock "></i></a>
                    </div> -->

                </div>




                <div class="content">
                    <p>If you face any problem while using the website contact with support team on 01556211618</p>
                    <p>© 2023 Sun and Sea Hurghada Trips. All rights reserved</p>
                    <p>web design & development by Mark Magdy</p>
                </div>

            </div>

        </div>

        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "nav") {
                    x.className += " responsive";
                } else {
                    x.className = "nav";
                }
            }
        </script>
    </body>

</html>