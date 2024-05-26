<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Show an traveling trips">
    <meta name="author" content="Mark Magdy">
    <link rel="stylesheet" href="ChangSlide.css">
    <link rel="website icon" href="foto/logo.png" type="png">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Change Video</title>
</head>

<body>

    <div class="header1">
        <div class="header">

            <div class="logo">
                <a href="../index.php">Rehalat</a>
            </div>

            <div class="nav">
                <div class="container">
                    <ul class="list">
                        <li class="item"><a href="../index.php">Main Home</a></li>
                        <li class="item"><a href="../Settings.php">Settings</a></li>
                        <li class="item"><a href="../Messages.php">Messages</a></li>
                        <li class="item"><a href="../Trips.php">Trips</a></li>
                        <li class="item" style="margin-right: 0px;"><a href="../Add.php">Add</a></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>


    <div class="section1">
        <div class="boxes">

            <h1>Update Slide_Show</h1>


            <form action="" method="post" enctype="multipart/form-data">

                <div class="box">
                    <label for="caption">Photo Caption</label>
                    <div class="field">
                        <input type="text" id="caption" name="caption" required>
                    </div>
                </div>

                <div class="box">
                    <label for="tripfoto">New Video</label>
                    <div class="field">
                        <input type="file" id="photo" name="photo" required>
                    </div>
                </div>

                <div class="box add">
                    <input type="submit" name="Update" value="Update" class="submit-btn">
                </div>

            </form>

        </div>

    </div>
    </div>

</body>

</html>

<?php

//..... Variable cappital and html small 

if (@$_SERVER['REQUEST_METHOD'] == "POST") {

    include("../connection.php");

    $Caption = $_POST['caption'];

    $ID = $_GET['id'];


    $photo_name = $_FILES['photo']['name'];
    $photo_size = $_FILES['photo']['size'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $photo_error = $_FILES['photo']['error'];


    $random = rand(0, 99);
    $url = "IMG-" . date('d-m-y') . "-" . $photo_name;
    $pohto_directory = dirname(__FILE__) . "/Slides/";
    $data_page = $pohto_directory . $url;

    $destination = $pohto_directory . "IMG-" . date('d-m-y') . "-" . $photo_name;
    move_uploaded_file($tmp_name, $destination);

    $Photo = 'Slides/' . "IMG-" . date('d-m-y') . "-" . $photo_name;


    $quary1 = "UPDATE `slideshow` SET `Slid_Name`='$Photo',`Slid_Caption`='$Caption'  WHERE `slideshow`.`Slid_Id` = '$ID';";

    $sql1 = mysqli_query($con, $quary1);


    if ($sql1) {
        echo "<script> alert('Trip Update Successfully')</script>";
    } else {
        echo "<script> alert('Somthin Wrong Try Again')</script>";
    }

}
?>