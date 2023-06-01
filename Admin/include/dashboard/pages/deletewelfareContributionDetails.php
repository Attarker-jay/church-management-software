<?php
$details_id = $_GET['id'];

        //Instantiate Database object
$database = new Database;

$database->query('DELETE FROM welfarecontribution WHERE registered_date = :registered_date');
$database->bind(':registered_date',$details_id);
        //Execute
$database->execute();

if($database->rowCount() > 0){
    echo '<div class="alert alert-success" role="alert">
    <p class="error">contributors details has been deleted succesfully!</p>
    </div>';
}
?>