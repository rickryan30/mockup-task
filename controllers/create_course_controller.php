<?php 
  include '../model/publicModels.php';
  /*note to dev:  this is for overwriting browser CORS ROLE*/
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Methods: POST");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  /*end of overwriting browser CORS ROLE*/

  date_default_timezone_set('Asia/Manila');
  $course = new Course_Model();
  
	if (isset($_POST['create_course_listing'])) {
    

    $course->type = $_POST['type'];
    $course->title = $_POST['title'];
    $course->author = $_POST['author'];
    $course->content = $_POST['content'];
    $course->created = date('Y-m-d H:i:s');

    echo $course->save() ? json_encode(array("success" => true)) : json_encode(array("success" => false));
 }
?>
