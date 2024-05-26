<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Mark Magdy">
        <link rel="stylesheet" href="css/Settings.css">
        <link rel="website icon" href="foto/logo.png" type="png">
        <link rel="stylesheet" href="css/all.min.css">
        <title>Settings</title>
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

        <?php
        include("connection.php");
        $quary = "SELECT * FROM `settings1`;";
        $sql = mysqli_query($con, $quary);
        ?>

        <div class="section1">

            <div class="title">
                <h1>Settings1</h1>
            </div>
            <div class="boxes">
                <?php
                if (mysqli_num_rows($sql) > 0) {
                    while ($row = mysqli_fetch_assoc($sql)) {
                        ?>
                        <div class="box">
                            <p class="item line">
                                <span>Offer part1 : </span>
                                <?php echo $row['Offer_part1']; ?>
                            </p>

                            <p class="item line">
                                <span>Offer patr2 : </span>
                                <?php echo $row['Offer_part2']; ?>
                            </p>

                            <p class="item line">
                                <span>Phone Numbers : </span>
                                <?php echo $row['Phone']; ?>
                            </p>

                            <p class="item">
                                <span>WhatsApp Link : </span>
                                <?php echo $row['Whatsapp']; ?>
                            </p>

                            <a href="Change1.php?id=<?php echo $row['Settings1_Id']; ?>">Change</a>
                        </div>

                        <?php
                    }
                }
                ?>

            </div>

        </div>

        <?php
        include("connection.php");
        $quary2 = "SELECT * FROM `settings2`ORDER BY `Video_Id` ASC;";
        $sql2 = mysqli_query($con, $quary2);
        ?>

        <div class="section2">
            <div class="title">
                <h1>Settings2</h1>
            </div>

            <?php
            if (mysqli_num_rows($sql2) > 0) {
                while ($row2 = mysqli_fetch_assoc($sql2)) {
                    ?>

                    <div class="boxes">

                        <div class="box">
                            <div class="video">
                                <video muted controls>
                                    <source src="<?php echo $row2['Video_Name']; ?>">
                                </video>
                            </div>

                            <a href="Change2.php?id=<?php echo $row2['Video_Id']; ?>">Change Video</a>

                        </div>

                        <?php
                }
            }

            ?>

            </div>
        </div>


        <?php

        include("connection.php");

        $quary = "SELECT * FROM `slideshow` ORDER BY `Slid_Id` ASC;";
        $sql = mysqli_query($con, $quary);

        ?>

        <div class="slideShow">
            <div class="title">
                <h1>Slide Show</h1>
            </div>
            <div class="boxes">
                <?php
                if (mysqli_num_rows($sql) > 0) {
                    while ($row6 = mysqli_fetch_assoc($sql)) {
                        ?>

                        <div class="box">
                            <img src="Slide_Show/<?php echo $row6['Slid_Name']; ?>" />

                            <p> <span>Caption: </span>
                                <?php echo $row6['Slid_Caption']; ?>
                            </p>

                            <div class="links">

                                <a href="Slide_Show/ChangSlide.php?id=<?php echo $row6['Slid_Id']; ?>">Update</a>
                            </div>

                        </div>

                        <?php
                    }
                }
                ?>

            </div>
        </div>


    </body>

</html>