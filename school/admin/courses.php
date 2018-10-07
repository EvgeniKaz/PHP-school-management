<?php include("includes/header.php"); ?>

    <?php 

    if (!$session->is_signed_in()) {
        redirect("login.php");
    }

        $courses = Course::find_all();
     ?>

        <!-- Navigation -->
        <?php include('includes/nav.php') ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Courses
                        </h1>
                        <a href="add_course.php" class="btn btn-primary">Add Course</a>

                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>                                        
                                        <th>Course Name</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($courses as $course) : {
                                        
                                    } ?>
                                    <tr>
                                        <td><?php echo $course->id; ?></td>                                        
                                        <td>
                                            <?php echo $course->course_name; ?>
                                            <div class="action_link">
                                                <a href="delete_course.php?id=<?php echo $course->id; ?>">Delete</a>
                                                <a href="edit_course.php?id=<?php echo $course->id; ?>">Edit</a>
                                            </div>
                                        </td>
                                        <td><?php echo $course->description; ?></td>
                                    </tr>

                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>