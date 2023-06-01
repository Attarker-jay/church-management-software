<?php
$details_id = $_GET['id'];

		//Instantiate Database object
$database = new Database;

$database->query('DELETE FROM pastors WHERE DOB = :DOB');
$database->bind(':DOB',$details_id);
		//Execute
$database->execute();

if($database->rowCount() > 0){
	echo '<div class="alert alert-success" role="alert">
	<p class="error">Pastors details has been deleted succesfully!</p>
	</div>';
}
?>