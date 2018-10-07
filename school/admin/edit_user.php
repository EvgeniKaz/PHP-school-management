<?php include("includes/header.php"); ?>

    <?php 

    if (!$session->is_signed_in()) {
        redirect("login.php");
    }

    if (empty($_GET['id'])) {
        redirect("users.php");
    }

    $user = User::find_by_id($_GET['id']);

    if (isset($_POST['update'])) {
    
        if ($user) {
            $user->email = $_POST['email'];
            $user->first_name = $_POST['first_name'];
            $user->last_name = $_POST['last_name'];
            $user->password = $_POST['password'];

            $user->save();

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
                            UPDATE USER
                        </h1>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="text" name="email" class="form-control" value="<?php echo $user->email ?>">
                                </div>
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" class="form-control" value="<?php echo $user->first_name ?>">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" value="<?php echo $user->last_name ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" value="<?php echo $user->password ?>">
                                </div>
                                <div class="info-box-delete pull-left">
                                        <a  href="delete_user.php?id=<?php echo $user->id; ?>" class="btn btn-danger btn">Delete User</a>   
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