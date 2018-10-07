<?php include("includes/header.php"); ?>

    <?php 

    if (!$session->is_signed_in()) {
        redirect("login.php");
    }

    if (empty($_GET['id'])) {
        redirect("courses.php");
    }

    $course = Course::find_by_id($_GET['id']);

    if (isset($_POST['update'])) {
    
        if ($course) {
            $course->course_name = $_POST['course_name'];
            $course->description = $_POST['description'];

            $course->save();

        }
    }


      

     ?>

           
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
                            Update Course
                        </h1>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="course_name">Course Name</label>
                                    <input type="text" name="course_name" class="form-control" value="<?php echo $course->course_name ?>">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" class="form-control" value="<?php echo $course->description ?>">
                                </div>
                                <div class="info-box-delete pull-left">
                                        <a  href="delete_course.php?id=<?php echo $course->id; ?>" class="btn btn-danger btn">Delete</a>   
                                    </div>
                                <div class="form-group">
                                    <input type="submit" name="update" class="btn btn-primary pull-right" value="Update">
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