<?php include("includes/init.php"); ?>

    <?php 

    if (!$session->is_signed_in()) {
        redirect("login.php");
    }

     ?>
     
<?php 

   if (empty($_GET['id'])) {
   		redirect("courses.php");
   }

   $course = Course::find_by_id($_GET['id']);

   if ($course) {
   		$course->delete();
   		redirect("courses.php");
   } else {

   		redirect("courses.php");
   }

 ?>