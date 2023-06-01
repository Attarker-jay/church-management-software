<?php
$details_id = $_GET['id'];

        //Instantiate Database object
$database = new Database;

$database->query('DELETE FROM users WHERE last_name = :last_name');
$database->bind(':last_name',$details_id);
        //Execute
$database->execute();

if($database->rowCount() > 0){
    echo '<div class="alert alert-success" role="alert">
    <p class="error">Administrator details has been deleted successfully!</p>
    </div>';
}
?>