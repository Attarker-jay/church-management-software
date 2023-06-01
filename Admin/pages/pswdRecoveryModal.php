<?php 
//Config File
include '../conf/config.php';
//Database Class
include '../classes/database.php';

$database = new Database;
?>

<?php
if (isset($_POST['Modal_submit'])) {
  $username = $_POST['username'];
  $security_key = $_POST['security_key'];
  $errors = array();

  if (empty($username)) {
    $login_msgs[] = "username required";
  }
    //Check first name
  if (empty($security_key)) {
    $login_msgs[] = "security_key required";
  }


    //Instantiate Database object
  $database = new Database;

  //Query
  $database->query("SELECT password FROM users WHERE username = :username AND security_key = :security_key");
  $database->bind(':username',$username);
  $database->bind(':security_key',$security_key);
  $SearchRows = $database->single();
}
?> 

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 style="margin-left: 136px;font-variant: small-caps;" class="modal-title" id="myModalLabel">Password Recovery</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <?php 
      if ($SearchRows) {
        echo '<div class="alert alert-success" role="alert">
        <p class="error">Copy And Past the colored text**<span style="color:red">' . $SearchRows['password'] . '</span>** as your password</p><br>
        Make Sure To Reset Password!
        </div>';
      }
      ?>
      <!-- error messaging -->
      <?php 
      foreach($login_msgs as $msg){
        echo '<div class="alert alert-danger" role="alert">
        <p class="error"> ' . $msg . '</p>
        </div>';
      } 
      ?>
      <div class="modal-body">
       <form class="form-horizontal" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form">
          <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
            <span class="label-input100">Username</span>
            <input class="input100" type="text" name="username" placeholder="Type your username">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-23" data-validate = "security-key is reauired">
            <span class="label-input100">Secrete Question</span>
            <input class="input100" type="password" name="security_key" placeholder="What Is The Name Of Your Dream Island">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
          </div>
        </div>
        <div class="modal-footer">

          <!-- <button type="button" class="btn btn-primary">Recover Password</button> -->
          <input style=" font-weight: bold;margin-right: 136px;background-color: #4CAF50;font-size: 14px;padding: 12px 20px;color: white;border-radius: 15px" type="submit" value="Recover Password" name="Modal_submit" />
        </div>
      </form>
    </div>
  </div>
</div>
