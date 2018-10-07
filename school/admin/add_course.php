<?php include("includes/header.php"); ?>

    <?php 

    if (!$session->is_signed_in()) {
        redirect("login.php");
    }

        $course = new Course();
        if (isset($_POST['create'])) {
        
            if ($course) {
                $course->course_name = $_POST['course_name'];
                $course->description = $_POST['description'];

                $course->save();
            }
        }

     ?>

        <!-- Navigation -->
  
            <?php 

                include('includes/nav.php')

             ?>
  



        <!-- /#page-wrapper -->

        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add New Course
                        </h1>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label for="course_name">Course Name</label>
                                    <input type="text" name="course_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" class="form-control">
                                </div>                                               
                                <div class="form-group">
                                    <input type="submit" name="create" class="btn btn-primary pull-right" value="Add">
                                </div>
                          
                     
                    </form>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>

        

        <!-- footer -->

  <?php include("includes/footer.php"); ?>