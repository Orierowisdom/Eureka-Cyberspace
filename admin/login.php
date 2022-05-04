<?php include "includes/admin_header.php" ?>
<!-- header end -->
<body class="dark-edition">
<div class="container wrapper ">
    <!-- Sidebar  -->
    <!--End  Sidebar  -->
    <div class="main-panel">
        <!-- Navbar -->
        <?php

        if($session->is_signed_in()){
            redirect("index.php");
        }

        if (isset($_POST['submit'])) {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            //method to check database user
            $user_found = User::verify_user($username, $password);


            if ($user_found) {
                $session->login($user_found);
                redirect('index.php');
                echo "<h3> welcow Admin</h3>";
            } else {
                $the_message = "your password or user name is incorrect";
            }
        } else {
            $username = "";
            $password = "";
            $the_message = "";
        }
        ?>


        <!-- End Navbar -->
        <div class="container m-5">
            <div class="row">
            <div class="col-md-6 mt-5 col-md-offset-3 ">

<h4 class="bg-danger"><?php echo $the_message; ?></h4>

<form id="login-id" action="" method="post">

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" value="<?php echo htmlentities($username)?>">

    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" value="<?php echo htmlentities($password)?>">

    </div>

    <div class="form-group">
        <input type="submit" name="submit" value="log in" class="btn btn-primary">

    </div>

</form>
</div>


            </div>
         

        </div>

    </div>      
    
    <!--   footer  start-->


        <!--   footer  end-->


</body>

</html>