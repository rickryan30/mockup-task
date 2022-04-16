<?php
	include '../model/publicModels.php';
    /*note to dev:  this is for overwriting browser CORS ROLE*/
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    /*end of overwriting browser CORS ROLE*/
 
	$course = new Course_Model();

	if (isset($_POST['delete_course_listing'])) {
			
		$course->id = $_POST['btnDelete'];

		echo($course->delete()) ? json_encode(array("success" => true)) : json_encode(array("success" => false));
	}
?>
