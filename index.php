<!DOCTYPE html>
<html>
    <!-- re7alat.wuaze.com -->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Show an traveling trips -- Finde Trips In Hurghada -- Great Offers in Hurghada">
        <!-- Font for Whole -->
        <!-- Header font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marhey&display=swap" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
        <meta name="author" content="Mark Magdy">
        <link rel="stylesheet" href="css/index.css">
        <script src="index.js"></script>
        <link rel="website icon" href="foto/logo.png" type="png">
        <link rel="stylesheet" href="css/all.min.css">
        <title>Sun & Sea</title>
    </head>

    <body>


        <div class="header">
            <div class="logo">
                <a href="index.php"><img src="foto/New_Logo_F4.png" /></a>
            </div>

            <div class="nav" id="myTopnav">
                <a href="#home" class="active item">Home</a>
                <a href="#about-us" class="item">About Us</a>
                <a href="#contact-us" class="item">Contact</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
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



        <div class="homeInfo" id="home">
            <div class="boxes">
                <div class="box">

                    <div class="info">
                        <h1>
                            Welecome To
                            <span class="sun">Sun </span> And
                            <span class="sea">Sea</span>
                            <span class="trips">Trips</span>
                            in
                            <span class="hurghada">Hurghada</span>
                        </h1>
                    </div>

                    <img src="foto/New Logo F4png.png" class="logo" />

                    <div class="info">
                        <p>
                            <span>
                                <img src="Icons/calendar.png" class="icon" />
                            </span>
                            Don't let your busy schedule stop you from enjoying
                        </p>
                        <p>
                            <span>
                                <img src="Icons/beach.png" class="icon" />
                            </span>
                            Explore Hurghada with amazing tours and trips
                        </p>

                        <p>
                            <span>
                                <img src="Icons/travelling.png" class="icon" />
                            </span>
                            Hurghada has something for everyone, whether you are
                            looking for relaxation, adventure, culture, or
                            entertainment.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include("connection.php");
        $quary1 = "SELECT * FROM `trip` ORDER BY `Trip_Id` ASC;";
        $sql1 = mysqli_query($con, $quary1);
        ?>

        <div class="section2" id="sec-two">
            <div class="boxes">
                <?php
                if (mysqli_num_rows($sql1) > 0) {
                    while ($row = mysqli_fetch_array($sql1)) {

                        ?>

                        <div class="box">

                            <img src="<?php echo "Admin/" . $row['Trip_photo']; ?>">

                            <?php
                            if ($row['Hot_offer']   == 'Yes') {
                                echo "<div class='hotOffer'>Hot Offer</div>";
                            }
                            ?>

                            <div class="price">
                                <span class="oldPrice"><del>
                                        <?php echo $row['Trip_old_price']; ?>
                                    </del></span>
                                <span class="newPrice">&euro;
                                    <?php echo $row['Trip_new_price']; ?>
                                </span>
                            </div>

                            <div class="info">
                                <h2>
                                    <?php echo $row['Trip_name']; ?>
                                </h2>

                                <p>
                                    <?php echo $row['Trip_description']; ?>
                                </p>

                                <p class="Highlights"> Highlights</p>

                                <p>
                                    <?php echo $row['Highlights7']; ?>

                                </p>


                            </div>

                            <div class="moreInfo">
                                <a href="InnerPage.php?id=<?php echo $row['Trip_Id']; ?>"> More details.......</a>
                            </div>

                            <div class="rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>

                            <span class="duration">
                                <?php echo $row['Trip_date']; ?>
                                </sapn>


                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>

        <?php
        $quary = "SELECT * FROM `settings1`;";
        $sql = mysqli_query($con, $quary);
        if (mysqli_num_rows($sql) > 0) {
            while ($row = mysqli_fetch_assoc($sql)) {
                ?>

                <div class="section3" id="sec-three">
                    <div class="boxes">
                        <h1>The Best Way to Finde Trips in Hurghada</h2>
                            <div class="box">
                                <h3 class="book-now">Choose Now</h3>
                                <h2 class="discount">
                                    <?php echo $row['Offer_part1']; ?>
                                </h2>
                                <h3 class="On-All-Travel"></span>
                                    <?php echo $row['Offer_part2']; ?>
                                </h3>
                            </div>

                            <div class="box-second">
                                <a href="#sec-two"><button class="btn-one">Choose Trip</button></a>
                            </div>
                    </div>
                </div>


                <?php
            }
        }
        ?>


        <?php

        $quary7 = "SELECT * FROM `slideshow` ORDER BY `Slid_Id` ASC;";
        $sql7 = mysqli_query($con, $quary7);

        ?>

        <div class="slidSection">
            <!-- Slideshow container -->

            <div class="slideshow-container">
                <?php
                if (mysqli_num_rows($sql7) > 0) {
                    while ($row7 = mysqli_fetch_array($sql7)) {
                        ?>
                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">

                            <img src="Admin/Slide_Show/<?php echo $row7['Slid_Name']; ?>" style="width: 100%" alt="Your browser dose not support this photo " />

                            <!-- <div class="text">
                            <?php echo $row7['Slid_Caption']; ?>
                        </div> -->

                        </div>
                        <?php
                    }
                }
                ?>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>


            <br />

            <!-- The dots/circles -->
            <div style="text-align: center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

            <script>
                let slideIndex = 0;
                showSlides();

                function showSlides() {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {
                        slideIndex = 1;
                    }
                    slides[slideIndex - 1].style.display = "block";
                    setTimeout(showSlides, 3500); // Change image every 2 seconds
                }
            </script>

        </div>

        <div class="ff">

        </div>

        <div class="section4" id="about-us">
            <!--aboutUs -->
            <div class="about">
                <!-- Container-->
                <h1>About Us</h1>
                <h2>Why Choose Us ?</h2>
                <p id="about-detials">
                    Welcome to our world of adventure! With a passion for exploration
                    and a deep love for the destinations we cover,
                    we started our journey as tour company. Over the years,
                    we've grown, but our commitment to providing extraordinary
                    travel experiences remains unwavering. Our mission is to connect you
                    with the world's wonders, offering a gateway to unforgettable memories.
                </p>

                <div class="boxes">

                    <div class="box">
                        <i class="fa-solid fa-face-laugh-beam" id="icon"></i>
                        <h2>Comfort and safety</h2>
                        <p>
                            Your safety and comfort are our top priorities.
                            Our modern, air-conditioned buses are equipped with plush seats,
                            and our drivers are extensively trained to ensure a secure and pleasant journey.
                        </p>
                    </div>

                    <div class="box">
                        <i class="fa-solid fa-calendar-day" id="icon"></i>
                        <h2>Extensive Coverage</h2>
                        <p>
                            We're proud to provide comprehensive coverage across key regions, including coastal areas,
                            deserts, and popular tourist destinations. We offer round-the-clock support to meet your travel needs
                        </p>
                    </div>
                    <div class="box">
                        <i class="fa-regular fa-face-smile-beam" id="icon"></i>
                        <h2>Your comfort is important to us</h2>
                        <p>We understand the importance of your comfort during your trip. That's why we offer a range of services,
                            including air-conditioned vehicles and high-class amenities. Our VIP buses feature spacious
                        </p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-ticket" id="icon"></i>
                        <h2>Convenient Choosing</h2>
                        <p>
                            Planning your adventure has never been easier. You can handpick your dream trip from anywhere, whether you're traveling solo or with friends.
                            Simply visit our website to choose your journey online and <a href="#contact-us"> Contact Us Now</a>
                        </p>
                    </div>

                </div>
            </div>

        </div>

        <?php
        // $quary4 = "SELECT * FROM `settings2` ORDER BY 'Video_Id' ASC;";
        // $sql4 = mysqli_query($con, $quary4);
        // if (mysqli_num_rows($sql4) > 0) {
        //     while ($row4 = mysqli_fetch_assoc($sql4)) {
        ?>

        <!-- <div class="video">
                    <center>
                        <video autoplay loop muted>
                            <source src="Admin/
                            <?php //echo $row4['Video_Name']; ?>
                            ">
                            Your browser does not support the video tag.
                        </video>
                    </center>
                </div> -->

        <?php
        //     }
        // }
        ?>


        <?php
        $quary3 = "SELECT * FROM `settings1`";
        $sql3 = mysqli_query($con, $quary3);

        if (!$sql3) {
            die("Error in SQL query: " . mysqli_error($con));
        }

        if (mysqli_num_rows($sql3) > 0) {
            while ($row3 = mysqli_fetch_assoc($sql3)) {
                ?>
                <div class="section5" id="contact-us">
                    <div class="contact">
                        <h1>Contact Us</h1>
                        <div class="info">
                            <p>You can book your trip by Calling or Messaging us.</p>
                        </div>
                    </div>
                    <div class="boxes">

                        <div class="box whats">
                            <span class="icon">
                                <a href="tel:<?php echo htmlspecialchars($row3['Phone']); ?>">
                                    <i class="fa-brands fa-whatsapp fa-lg"></i>
                                </a>
                            </span>
                            <span>
                                <p>Our WhatsApp</p>
                            </span>
                        </div>

                        <div class="box face">
                            <span class="icon">
                                <a href="<?php echo htmlspecialchars($row3['Facebook']); ?>" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </span>
                            <span>
                                <p>Our Facebook</p>
                            </span>
                        </div>

                        <div class="box insta">
                            <span class="icon">
                                <a href="<?php echo htmlspecialchars($row3['Instagram']); ?>" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </span>
                            <span>
                                <p>Our Instagram</p>
                            </span>
                        </div>

                        <div class="box email">
                            <span class="icon">
                                <a href="mailto: <?php echo htmlspecialchars($row3['Email']); ?>">
                                    <i class="fa-solid fa-envelope" target="_blank"></i>
                                </a>
                            </span>
                            <span>
                                <p>Our Email</p>
                            </span>
                        </div>
                    </div>

                    <div class="call">
                        <h2>Call us Now on</h2>
                        <p>
                            <a href="tel:<?php echo htmlspecialchars($row3['Phone']); ?>" class="copy-phone">
                                <?php echo htmlspecialchars($row3['Phone']); ?>
                            </a>
                        </p>

                        <p>
                            <a href="tel:01556211618" class="copy-phone">01556211618</a>
                        </p>
                    </div>
                </div>

                <script>
                    // Function to copy phone numbers to the clipboard and display "Copied" message
                    function copyPhoneNumber(phoneNumber) {
                        const el = document.createElement('textarea');
                        el.value = phoneNumber;
                        document.body.appendChild(el);
                        el.select();
                        document.execCommand('copy');
                        document.body.removeChild(el);

                        const copiedMessage = document.createElement('span');
                        copiedMessage.className = 'copied-message';
                        copiedMessage.textContent = 'Copied';
                        document.body.appendChild(copiedMessage);

                        setTimeout(() => {
                            document.body.removeChild(copiedMessage);
                        }, 2000);
                    }

                    // Add click event listeners to phone numbers
                    const phoneLinks = document.querySelectorAll('.copy-phone');
                    phoneLinks.forEach((link) => {
                        link.addEventListener('click', (event) => {
                            event.preventDefault();
                            const phoneNumber = event.target.textContent.trim();
                            copyPhoneNumber(phoneNumber);
                            alert("Number is copied")
                        });
                    });
                </script>

                <?php
            }
        }
        ?>





        <div class="section6">
            <div class="boxes">
                <h1>Message Now</h1>
                <div class="box">
                    <form method="post" action="#">
                        <div class="item">
                            <label for="custName">Name</label>
                            <input type="text" name="custName" id="custName" required>
                        </div>
                        <div class="item">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="item">
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" id="phone" required>
                        </div>
                        <div class="item">
                            <label for="review">Review</label>
                            <textarea name="review" id="review" required></textarea>
                        </div>
                        <div class="item">
                            <label for="complain">Comment</label>
                            <textarea name="complain" id="complain"></textarea>
                        </div>
                        <div class="item">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                    <?php
                    include("connection.php");
                    if ($_SERVER['REQUEST_METHOD'] === "POST") {
                        $Customer_name = mysqli_real_escape_string($con, $_POST['custName']);
                        $Customer_email = mysqli_real_escape_string($con, $_POST['email']);
                        $Customer_phone = mysqli_real_escape_string($con, $_POST['phone']);
                        $Review = mysqli_real_escape_string($con, $_POST['review']);
                        $Complain = mysqli_real_escape_string($con, $_POST['complain']);

                        $quary4 = "INSERT INTO `message` (`Cust_Name`, `Cust_Email`, `Cust_Phone`, `Review`, `Complain`) 
                           VALUES ('$Customer_name', '$Customer_email', '$Customer_phone', '$Review', '$Complain')";

                        if (mysqli_query($con, $quary4)) {
                            echo "<script> alert('Done! Thank you. You will receive a message from us.')</script>";
                        } else {
                            echo "<script> alert('Something went wrong. Please try again.')</script>";
                        }
                        mysqli_close($con);
                    }
                    ?>
                </div>
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



    </body>

</html>