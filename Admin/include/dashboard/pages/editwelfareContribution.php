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
if ($_POST['register_submit']) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $location = $_POST['location'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $amount = $_POST['amount'];

    //Instantiate Database object
    $database = new Database;

    $database->query('UPDATE welfarecontribution SET first_name=:first_name,last_name=:last_name,email=:email,location=:location,tel=:tel,amount=:amount WHERE last_name=:last_name');
    $database->bind(':first_name', $first_name);
    $database->bind(':last_name', $last_name);
    $database->bind(':email', $email);
    $database->bind(':location', $location);
    $database->bind(':tel', $tel);
    $database->bind(':amount', $amount);
        //Execute
    $database->execute();
        //If row was inserted
    if ($database->rowCount()) {
        $checkSuccess = 1;
    } else {

    }  
}
?>

<?php
if(isset($_POST['submitSearch'])){
    $search = $_POST['search'];

//Instantiate Database object
    $database = new Database;
//Query
    $database->query('SELECT * FROM welfarecontribution WHERE last_name = :last_name');
    $database->bind(':last_name',$search);
    $row = $database->single();
}else{

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Church Of Pentecost Panel</title>

    <!-- using online links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- using local links -->
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"> -->

    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/sidebar-themes.css">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png" />
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

               <!-- sidebar-search  -->
               <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                   <div class="sidebar-item sidebar-search" style="width: 390px; margin-left: 900px">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" name="search" placeholder="Search Using Last-Name">
                            <div class="input-group-append">
                              <input type="submit" name="submitSearch" value="     Search      " />
                          </div>
                      </div>
                  </div>
              </div>
          </form>
          <!-- sidebar-menu  -->

          <h3 style="font-variant: small-caps;font-variant: small-caps;font-size: 40px; padding-left: 150px"><strong>Edite || Delete Contributor's Details</strong></h3><hr>
          <p style="font-size: 20px"><b>Please use the form below to change Details<b></p>
              <?php
              if($_GET['page'] == 'deletewelfareContributionDetails'){
                  include 'deletewelfareContributionDetails.php';
              } elseif($_GET['page'] == 'list'){

              }
              ?>

              <!-- checking if detailsa are available -->
              <?php 
              if($row){
               echo '<div class="alert alert-success" role="alert">
               <p class="error">Contributor ' . ucfirst($search) . ' Details found</p>
               </div>';
           }elseif(!empty($search)){
              echo '<div class="alert alert-warning" role="alert">
              <p class="error">Searched Details Not Found! *search using contributors last-name*</p>
              </div>';
          }
          ?>

          <!-- eror checking -->
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
            <p class="error">Contributor  ' . $last_name . ' details has been updated!</p>
            </div>';

        }
        ?>

        <form class="form-horizontal" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form">
             <div class="form-group">
                <label class="control-label col-sm-2" for="first_name">First Name:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="first_name" value="<?php echo $row["first_name"]; ?>" placeholder="enter first name"><br />
                </div>
            </div>

            <div class="form">
             <div class="form-group">
                <label class="control-label col-sm-2" for="last_name">Last Name:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name']; ?>" placeholder="enter last name"><br />
                </div>
            </div>

            <div class="form">
             <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-2">
                    <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" placeholder="enter email Address"><br />
                </div>
            </div>    




            <div class="form">
             <div class="form-group">
                <label class="control-label col-sm-2" for="location">Location:</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="location" value="<?php echo $row['location']; ?>" placeholder=""><br />
                </div>
            </div>  


            <div class="form">
             <div class="form-group">
                <label class="control-label col-sm-2" for="tel">Telephone:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="tel"  value="<?php echo $row['tel']; ?>" placeholder="enter Contributor's telephone"><br />
                </div>
            </div>  




            <div class="form">
             <div class="form-group">
                <label class="control-label col-sm-2" for="amount">Amount</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" name="amount"  value="<?php echo $row['amount']; ?>" placeholder="enter amount"><br />
                </div>
            </div>  

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input style="margin-top:50px;font-weight: bold;margin-left: 300px;background-color: #4CAF50;font-size: 20px;padding: 12px 35px;color: white;border-radius: 15px" type="submit" value="Edite Details" name="register_submit" />
                  <?php echo '<a href="?page=deletewelfareContributionDetails&id='.$row['registered_date'].'"><span style="background-color: #f44336;font-size: 20px;padding: 12px 35px;color: white;border-radius: 15px">|  Delete Details</span></a>'; ?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
crossorigin="anonymous"></script>
<script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- using local scripts -->
    <!-- <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->
    <script src="../js/main.js"></script>

</body>

</html>
