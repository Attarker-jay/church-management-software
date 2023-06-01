<?php
//Config File
require '../conf/config.php';
//Database Class
require '../classes/database.php';
//Set Timezone
date_default_timezone_set('America/New_York');

$database = new Database;
?>

<?php
if (isset($_POST['register_submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $location = $_POST['location'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $amount = $_POST['amount'];
    $prayer = $_POST['prayer'];
    $errors = array();

    //Check first name
    if (empty($first_name)) {
        $errors[] = "first name is Required";
    }
    if (empty($last_name)) {
        $errors[] = "last name is Required";
    }
    //Check first name
    if (empty($location)) {
        $errors[] = "Location is Required";
    }
    //Check email
    if (empty($email)) {
        $errors[] = "Email is Required";
    }
    //Check username
    if (empty($tel)) {
        $errors[] = "Telephone number is Required";
    }
    //Check username
    if (empty($prayer)) {
        $errors[] = "prayer details is Required";
    }
    //Match passwords
    if (empty($amount)) {
        $errors[] = "Amount is Required";
    }

    //Instantiate Database object
    $database = new Database;


    /* Check to see if email has been used */

    //Query
    $database->query('SELECT email FROM tight WHERE email = :email');
    $database->bind(':email', $email);
    //Execute
    $database->execute();
    if ($database->rowCount() > 0) {
        $errors[] = "Sorry, that email is taken";
    }

    //If there are no errors, proceed with registration
    if (empty($errors)) {

        //Query
        $database->query('INSERT INTO tight (first_name,last_name,location,email,tel,amount,prayer)
          VALUES(:first_name,:last_name,:location,:email,:tel,:amount,:prayer)');
        //Bind Values
        $database->bind(':first_name', $first_name);
        $database->bind(':last_name', $last_name);
        $database->bind(':location', $location);
        $database->bind(':email', $email);
        $database->bind(':tel', $tel);
        $database->bind(':amount', $amount);
        $database->bind(':prayer', $prayer);

        //Execute
        $database->execute();

        //If row was inserted
        if ($database->lastInsertId()) {
            $checkSuccess = 1;
        } else {
            echo '<p class="error">Sorry, something went wrong.</p>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Church Of Pentecost Panel</title>

    <!-- using online links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- using local links -->
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"> -->

    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/sidebar-themes.css">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png" />
</head>

<body style="background-image: url('../img/bg-01.jpg'); background-size: cover;">
    <div class="page-wrapper default-theme sidebar-bg bg1 toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <!-- sidebar-brand  -->
                <div class="sidebar-item sidebar-brand">
                    <a href="Logout.php">Logout</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>

                <!-- sidebar-header function -->
                <?php include "sidebarMenu.php" ?>
                <!-- sidebar-menu  function-->

            </div>
            <!-- sidebar-footer  -->
            <div class="sidebar-footer">
                <div class="dropdown">

                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="badge badge-pill badge-warning notification">3</span>
                    </a>
                    <div class="dropdown-menu notifications" aria-labelledby="dropdownMenuMessage">
                        <div class="notifications-header">
                            <i class="fa fa-bell"></i>
                            Notifications
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-check text-success border border-success"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">New members and pastors added</div>
                                    <div class="notification-time">
                                        6 minutes ago
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-exclamation text-info border border-info"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">Details may not be found</div>
                                    <div class="notification-time">
                                        Today
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-exclamation-triangle text-warning border border-warning"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">Information not found</div>
                                    <div class="notification-time">
                                        Yesterday
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="#">View all notifications</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        <span class="badge badge-pill badge-success notification">1</span>
                    </a>
                    <div class="dropdown-menu messages" aria-labelledby="dropdownMenuMessage">
                        <div class="messages-header">
                            <i class="fa fa-envelope"></i>
                            Messages
                        </div>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="#">
                            <div class="message-content">
                                <div class="pic">
                                    <img src="../img/user.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="message-title">
                                        <strong> Administrator</strong>
                                    </div>
                                    <div class="message-detail">Online</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="#">View all messages</a>

                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i>
                        <span class="badge-sonar"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuMessage">
                        <a class="dropdown-item" href="../index.php">My profile</a>
                        <a class="dropdown-item" href="#">Help</a>
                        <a class="dropdown-item" href="editAdministrator.php">Setting</a>
                    </div>
                </div>
                <div>
                    <a href="logout.php">
                        <i class="fa fa-power-off">

                        </i>
                    </a>
                </div>
            </div>
        </nav>
        <!-- sidebar-content  -->
        <main class="page-content">
            <div class="container-fluid">

                <h3 style="font-variant: small-caps;font-size: 40px; padding-left: 150px"><strong>Add Individual
                        Tithe</strong></h3>
                <hr>
                <p style="font-size: 20px"><b>Please use the form below to register individual's tithe<b></p>
                <?php
               if (!empty($errors)) {
                echo "<ul>";
                foreach ($errors as $error) {
                    echo '<div class="alert alert-danger" role="alert">
                    <li class="error"> ' . $error . ' </li>
                    </div>';
                }
                echo "</ul>";
            }elseif ($checkSuccess == 1) {
               echo '<div class="alert alert-success" role="alert">
               <p class="error">Thank you Mr/Mrs ' . strtoupper($last_name) . ' for your Tithe!</p>
               </div>';
           }
           ?>

                <form class="form-horizontal" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form">

                        <div class="form">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="first_name">First Name:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="first_name"
                                        value="<?php if ($_POST['first_name']) echo $_POST['first_name'] ?>"
                                        placeholder="enter individual's name"><br />
                                </div>
                            </div>

                            <div class="form">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="last_name">Last Name:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="last_name"
                                            value="<?php if ($_POST['last_name']) echo $_POST['last_name'] ?>"
                                            placeholder="enter individual's name"><br />
                                    </div>
                                </div>

                                <div class="form">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Email:</label>
                                        <div class="col-sm-3">
                                            <input type="email" class="form-control" name="email"
                                                value="<?php if ($_POST['email']) echo $_POST['email'] ?>"
                                                placeholder="enter individual's email"><br />
                                        </div>
                                    </div>

                                    <div class="form">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="prayer">Prayer:</label>
                                            <div class="col-sm-4">
                                                <textarea rows="5" cols="50" class="form-control" name="prayer"
                                                    value="<?php if ($_POST['prayer']) echo $_POST['prayer'] ?>"
                                                    placeholder="Things needed to be prayed for, to manifest in your life"><?php if ($_POST['prayer']) echo $_POST['prayer'] ?></textarea><br />
                                            </div>
                                        </div>

                                        <div class="form">
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="location">Location:</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" name="location"
                                                        value="<?php if ($_POST['location']) echo $_POST['location'] ?>"
                                                        placeholder="enter individual's location"><br />
                                                </div>
                                            </div>

                                            <div class="form">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="tel">Telephone:</label>
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control" name="tel"
                                                            value="<?php if ($_POST['tel']) echo $_POST['tel'] ?>"
                                                            placeholder="enter individual's contact"><br />
                                                    </div>
                                                </div>


                                                <div class="form">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2"
                                                            for="amount">Amount:</label>
                                                        <div class="col-sm-2">
                                                            <input type="number" class="form-control" name="amount"
                                                                value="<?php if ($_POST['amount']) echo $_POST['amount'] ?>"
                                                                placeholder="enter Amount"><br />
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <input
                                                                style="font-weight: bold;margin-left: 300px;background-color: #4CAF50;font-size: 20px;padding: 12px 35px;color: white;border-radius: 15px"
                                                                type="submit" value="Register" name="register_submit" />
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                </form>

            </div>
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- using online scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- using local scripts -->
    <!-- <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->
    <script src="../js/main.js"></script>
</body>

</html>