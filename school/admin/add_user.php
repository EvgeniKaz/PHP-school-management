<?php include("includes/header.php"); ?>

    <?php 

    if (!$session->is_signed_in()) {
        redirect("login.php");
    }

        $user = new User();
        if (isset($_POST['create'])) {
        
            if ($user) {
                $user->email = $_POST['email'];
                $user->first_name = $_POST['first_name'];
                $user->last_name = $_POST['last_name'];
                $user->password = $_POST['password'];

                $user->save();
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
                            Add New User
                        </h1>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control">
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