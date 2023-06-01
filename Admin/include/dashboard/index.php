<?php 
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
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

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sidebar-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
</head>

<body style="background-color: snow">
    <div class="page-wrapper default-theme sidebar-bg bg1 toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <!-- sidebar-brand  -->
                <div class="sidebar-item sidebar-brand">
                    <a href="classes/logout.php">Logout</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-item sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">

                        </span>
                        <span class="user-role"><?php echo "Administrator " . ucfirst($username)  ?></span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-item sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar-menu  -->
                <div class=" sidebar-item sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                                <span class="badge badge-pill badge-warning">New</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="pages/dashboardPastors.php">Pastors</a>
                                    </li>
                                    <li>
                                        <a href="pages/dashboardExecutives.php">Executives</a>
                                    </li>
                                    <li>
                                        <a href="pages/dashboardMembers.php">Members
                                            <span class="badge badge-pill badge-success">Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages/dashboardtights.php">Tights</a>
                                    </li>
                                    <li>
                                        <a href="pages/dashboardwelfareContribution.php">Welfare</a>
                                    </li>
                                    <li>
                                        <a href="pages/dashboardAdmin.php">Administrator</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Offering</span>
                                <span class="badge badge-pill badge-danger">3</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <ul>
                                            <h5 style="color: white;">Tithe</h5>
                                            <li>
                                                <a href="pages/addTight.php">Add tithe</a>
                                                <a href="pages/editTight.php">Edit || Delete</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <h5 style="color: white;">Welfare Contribution</h5>
                                            <li>
                                                <a href="pages/addwelfareContribution.php">Add contribution</a>
                                                <a href="pages/editwelfareContribution.php">Edit || Delete</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="far fa-gem"></i>
                                <span>Components</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <ul>
                                            <h4 style="color: white;">Pastors</h4>
                                            <li>
                                                <a href="pages/addPastors.php">Add Pastors</a>
                                                <a href="pages/editPastors.php">Edit || Delete</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <h4 style="color: white;">Church Executives</h4>
                                            <li>
                                                <a href="pages/addExecutives.php">Add Executives</a>
                                                <a href="pages/editExecutives.php">Edit || Delete</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <h4 style="color: white;">Church Members</h4>
                                            <li>
                                                <a href="pages/addMembers.php">Add Members</a>
                                                <a href="pages/editMembers.php">Edit || Delete</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <h4 style="color: white;">Administrator</h4>
                                            <li>
                                                <a href="pages/addAdministrator.php">Add Admin</a>
                                                <a href="pages/editAdministrator.php">Edit || Delete</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-globe"></i>
                                <span>Maps</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Google maps</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu">
                            <span>Extra</span>
                        </li>
                        <li>
                            <a href="pages/broadcastMessage.php">
                                <i class="fa fa-book"></i>
                                <span>Broadcast Messages</span>
                                <span class="badge badge-pill badge-primary">20</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-folder"></i>
                                <span>Examples</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
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
                        <span class="badge badge-pill badge-success notification">7</span>
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
                                    <img src="img/user.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="message-title">
                                        <strong><?php echo "Administrator " . ucfirst($username)  ?></strong>
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
                        <a class="dropdown-item" href="">My profile</a>
                        <a class="dropdown-item" href="#">Help</a>
                        <a class="dropdown-item" href="pages/editAdministrator.php">Account Settings</a>
                    </div>
                </div>
                <div>
                    <a href="classes/logout.php">
                        <i class="fa fa-power-off">

                        </i>
                    </a>
                </div>
            </div>
        </nav>
        <!-- sidebar-content  -->
        <main class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="form-group col-md-12">
                        <img style="position: absolute" width="250px" height="150px" src="img/logo.png">
                        <h1 style="font-variant: small-caps;color: black; padding-left: 220px; padding-top: 45px">
                            Welcome To The Church Of Pentecost Admin Panel</h1>
                        <p style="color: black; padding-left: 330px; "><i>**Administrator's Only Should Make Changes,
                                Unauthourized Access By Individuals Will Be <strong>Punished</strong>**<i></p>
                    </div>
                </div>
                <hr>
                <br><br>

                <h3 style="color: black; padding-left: 800px">Explore Platform Services</h3>
                <div class="row">
                    <div class="form-group col-md-6">
                        <h3 style="color: black">Themes</h3>
                        <p style="color: black">Here are more themes that you can use</p>
                        <a href="#" data-theme="default-theme" class="theme default-theme selected"></a>
                        <a href="#" data-theme="chiller-theme" class="theme chiller-theme"></a>
                        <a href="#" data-theme="legacy-theme" class="theme legacy-theme"></a>
                        <a href="#" data-theme="ice-theme" class="theme ice-theme"></a>
                        <a href="#" data-theme="cool-theme" class="theme cool-theme"></a>
                        <a href="#" data-theme="light-theme" class="theme light-theme"></a>
                    </div>
                    <div class="form-group col-md-12">
                        <p style="color: white">You can also use background image </p>
                    </div>
                    <div class="form-group col-md-6">
                        <a href="#" data-bg="bg1" class="theme theme-bg selected"></a>
                        <a href="#" data-bg="bg2" class="theme theme-bg"></a>
                        <a href="#" data-bg="bg3" class="theme theme-bg"></a>
                        <a href="#" data-bg="bg4" class="theme theme-bg"></a>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="toggle-bg" checked>
                            <label class="custom-control-label" for="toggle-bg">Background image</label>
                        </div>
                    </div>
                </div>


                <!-- code for platform services -->
                <div class="row" style="float: right; margin-left: 600px; margin-top: -299px">
                    <div class="form-group col-sm-6">
                        <div class="jumbotron"
                            style="background-image: url('img/admin.png'); background-repeat: no-repeat; background-size: cover;">
                            <p><a class="btn btn-primary btn-sm" href="pages/editAdministrator.php"
                                    role="button">Explore</a></p>
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        <div class="jumbotron"
                            style="background-image: url('img/dashboad.png'); background-repeat: no-repeat; background-size: cover;">
                            <p><a class="btn btn-primary btn-sm" href="pages/dashboardMembers.php"
                                    role="button">Explore</a></p>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <div class="jumbotron"
                            style="background-image: url('img/edit.png'); background-repeat: no-repeat; background-size: cover;">
                            <p><a class="btn btn-primary btn-sm" href="pages/editTight.php" role="button">Explore</a>
                            </p>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <div class="jumbotron"
                            style="background-image: url('img/tithe.png'); background-repeat: no-repeat; background-size: cover;">
                            <p><a class="btn btn-primary btn-sm" href="pages/addTight.php" role="button">Explore</a></p>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <div class="jumbotron"
                            style="background-image: url('img/broadcast.png'); background-repeat: no-repeat; background-size: cover;">
                            <p><a class="btn btn-primary btn-sm" href="pages/broadcastMessage.php"
                                    role="button">Explore</a></p>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <div class="jumbotron"
                            style="background-image: url('img/bg-01.jpg'); background-repeat: no-repeat; background-size: cover;">
                            <p><a class="btn btn-primary btn-sm" href="" role="button">Explore</a></p>
                        </div>
                    </div>
                </div>


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
    <script src="js/main.js"></script>
</body>

</html>