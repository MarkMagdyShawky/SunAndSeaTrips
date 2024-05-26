<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Show traveling trips">
        <meta name="author" content="Mark Magdy">
        <link rel="stylesheet" href="css/admin.css">
        <link rel="icon" href="foto/logo.png" type="image/png">
        <link rel="stylesheet" href="css/all.min.css">
        <title>Admin</title>
    </head>

    <body>
        <?php

        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
            $errors = [];

            if (empty($_POST['Admin_username'])) {
                array_push($errors, "Username is required.");
            }

            if (empty($_POST['Admin_password'])) {
                array_push($errors, "Password is required.");
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
            include("connection.php");
            $Admin_Username = $_POST['Admin_username'];
            $Admin_PassWord = $_POST['Admin_password'];

            $query = "SELECT * FROM `admin` WHERE `Admin_name` = '$Admin_Username' and `Admin_password` = '$Admin_PassWord';";
            $sql = mysqli_query($con, $query);
            $row = mysqli_fetch_array($sql);

            if ($row) {
                session_start();
                $_SESSION['Admin_username'] = $Admin_Username;
                echo '<script type = "text/javascript"> 
                    alert("Welcome! Login Successfully") 
                </script>';
                header("location:Admin/add.php");
            } else {
                array_push($errors, "This Admin Does Not Exist.");
            }
        }
        ?>

        <div class="header1">
            <div class="header">
                <div class="logo">
                    <a href="index.php">Sun&Sea</a>
                </div>
                <div class="nav">
                    <div class="container">
                        <ul class="list">
                            <li class="item"><a href="index.php">Back Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="backgr"></div>

        <div class="section1">
            <div class="boxes">
                <p>Login As Admin</p>
                <hr>

                <?php if (!empty($errors)) { ?>
                    <div class="errors">
                        <ul>
                            <?php foreach ($errors as $error) { ?>
                                <li>
                                    <?php echo $error; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>

                <form method="post" action="#">
                    <div class="box">
                        <label for="username">Username</label>
                        <div class="input">
                            <input type="text" class="input" name="Admin_username" id="username">
                        </div>
                    </div>
                    <div class="box">
                        <label for="password">Password</label>
                        <div class="input">
                            <input type="password" class="input" name="Admin_password" id="password">
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" name="submit" value="Login" class="btn">
                    </div>
                </form>
            </div>
        </div>

    </body>

</html>