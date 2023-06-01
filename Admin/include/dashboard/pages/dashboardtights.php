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
$database = new Database;
//Query
$database->query('SELECT * FROM tight');
$rows = $database->resultset();
?>

<?php
if(isset($_POST['submitSearch'])){
    $search = $_POST['search'];

//Instantiate Database object
    $database = new Database;
//Query
    $database->query('SELECT * FROM tight WHERE last_name = :last_name');
    $database->bind(':last_name',$search);
    $SearchRows = $database->resultset();
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
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/sidebar-themes.css">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png" />
    <style type="text/css">
    .table-info {
        color: black;
    }
    </style>
</head>

<body style="background-image: url('../img/bg-01.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="page-wrapper default-theme sidebar-bg bg1 toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <!-- sidebar-brand  -->
                <div class="sidebar-item sidebar-brand">
                    <a href="logout.php">Logout</a>
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
                        <a class="dropdown-item" href="editAdministrator.php">Account Settings</a>
                    </div>
                </div>
                <div>
                    <a href="../../login.php">
                        <i class="fa fa-power-off">

                        </i>
                    </a>
                </div>
            </div>
        </nav>
        <!-- sidebar-content  -->
        <main class="page-content">
            <div class="container-fluid">
                <!-- sidebar-search  -->
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="sidebar-item sidebar-search" style="width: 390px; margin-left: 900px">
                        <div>
                            <div class="input-group">
                                <input type="text" class="form-control search-menu" name="search"
                                    placeholder="Search Using Last-Name">
                                <div class="input-group-append">
                                    <input type="submit" name="submitSearch" value="     Search      " />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- sidebar-menu  -->

                <h3 style="font-variant: small-caps;font-size:40px; padding-left:160px"><strong>Analyzing Tithe
                        Offered</strong></h3>
                <hr>
                <p></p>

                <!-- search details -->
                <?php
          if($SearchRows){
            foreach( $SearchRows as $SearchRowsGet){
           echo '<div class="alert alert-success" role="alert">
           <p class="error">Tithe Details Found!</p>
           </div>';

           echo "  <table class='table table-striped table-dark'>
           <thead>
           <tr>
           <th scope='col'>*</th>
           <th scope='col'>First-Name</th>
           <th scope='col'>Last-Name</th>
           <th scope='col'>Email</th>
           <th scope='col'>Location</th>
           <th scope='col'>Amount</th>
           <th scope='col'>contact</th>
           <th scope='col'>Prayer</th> 
           <th scope='col'>Registered Date</th> 
           </tr>
           </thead>
           <tbody>
           <tr class='table-info'><td>{$SearchRowsGet['id']}</td><td>{$SearchRowsGet['first_name']}</td><td>{$SearchRowsGet['last_name']}</td><td>{$SearchRowsGet['email']}</td><td>{$SearchRowsGet['location']}</td><td>{$SearchRowsGet['amount']}</td><td>{$SearchRowsGet['tel']}</td><td>{$SearchRowsGet['prayer']}</td><td>{$SearchRowsGet['registered_date']}</td></tr>\n";
       }
       }elseif(!empty($search)){
         echo '<div class="alert alert-warning" role="alert">
         <p class="error">Searched Details Not Found! *search using members last-name*</p>
         </div>';
     }
     ?>
                </tbody>
                </table>

                <!-- main table -->
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">*</th>
                            <th scope="col">First-Name</th>
                            <th scope="col">Last-Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Location</th>
                            <th scope="col">Amount</th>
                            <th scope="col">contact</th>
                            <th scope="col">Prayer</th>
                            <th scope="col">Registered Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
   if($rows){
    foreach( $rows as $row){
      echo "<tr><td>{$row['id']}</td><td>{$row['first_name']}</td><td>{$row['last_name']}</td><td>{$row['email']}</td><td>{$row['location']}</td><td>{$row['amount']}</td><td>{$row['tel']}</td><td>{$row['prayer']}</td><td>{$row['registered_date']}</td></tr>\n";
  }
}else{
 echo '<div class="alert alert-danger" role="alert">
 <p class="error">No Offered Tithe Available *Use offering section to add one* !</p>
 </div>';
}
?>
                    </tbody>
                </table>
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