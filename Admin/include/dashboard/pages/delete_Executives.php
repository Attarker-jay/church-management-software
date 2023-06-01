<?php
$details_id = $_GET['id'];

        //Instantiate Database object
$database = new Database;

$database->query('DELETE FROM executives WHERE tel = :tel');
$database->bind(':tel',$details_id);
        //Execute
$database->execute();

if($database->rowCount() > 0){
    echo '<div class="alert alert-success" role="alert">
    <p class="error">Executives details has been deleted successfully!</p>
    </div>';
}
?>