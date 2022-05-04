<?php include "includes/admin_header.php" ?>
<!-- header end -->

<body class="dark-edition">
<div class="wrapper ">
    <!-- Sidebar  -->
    <?php include "includes/sidebar.php" ?>

    <?php
    $department = Degree_Department::find_all();
   $nce_department = Nce_Department::find_all();

    if (isset($_POST['degree'])) {
        $dept_title = trim($_POST['dept_title']);
        $new_dept = Degree_Department::create_department( $dept_title);
        if ($new_dept && $new_dept->save()) {
            redirect("department.php");
        } else {

            $message = "there was a problem saving ";
        }
   }
    if (isset($_POST['nce'])) {
        $dept_title = trim($_POST['dept_title']);
        $new_dept = Nce_Department::create_department( $dept_title);
        if ($new_dept && $new_dept->save()) {
            redirect("department.php");
        } else {

            $message = "there was a problem saving ";
        }
    }

    ?>
    <!--End  Sidebar  -->
    <div class="main-panel">

        <!-- Navbar -->
        <?php include "includes/admin_navbar.php" ?>
        <!-- End Navbar -->
        <div class="container">
                <!-- Page Heading -->
            <h1 >Department</h1>
                    <div class="row">
                            <div class="col-md-6 mt-5">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="cat_title">Add degree Department</label><br>
                                        <input class="form-control" type="text" name="dept_title">
                                    </div>
                                    <div class="form-group">
                                        <input class="btn-success" type="submit" name="degree" value="Add Department">
                                    </div>
                                </form>
                            </div> <!-- add dept form -->


                        <div class="col-md-6 mt-5">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat_title">Add nce Department</label><br>
                                    <input class="form-control" type="text" name="dept_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn-success" type="submit" name="nce" value="Add Department">
                                </div>
                            </form>
                        </div> <!-- add  nce dept form -->
                    </div>
                    <!-- /.row --><

            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-header card-header-tabs card-header-warning">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <span class="nav-tabs-title">Department:</span>
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#profile" data-toggle="tab">
                                            <i class="material-icons">format_list_bulleted</i> Degree
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#messages" data-toggle="tab">
                                            <i class="material-icons">format_list_bulleted</i> NCE
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Department Title</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($department as $dept):?>
                                        <tr>
                                            <td><?php echo $dept->id?></td>
                                            <td><?php echo $dept->dept_title?>
                                                <div class="actions_link">
                                                    <a class="text-primary" href="delete.php?id=<?php echo $dept->id?>&class=Department&link=department.php">Delete</a>
                                                    <a class="text-primary" href="edit_department.php?id=<?php echo $dept->id?>">Edit</a>

                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane" id="messages">
<!--                                <table class="table">-->
<!--                                    <tbody>-->
<!--                                   -->
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Department Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($nce_department as $dept):?>
                                                <tr>
                                                    <td><?php echo $dept->id?></td>
                                                    <td><?php echo $dept->dept_title?>
                                                        <div class="actions_link">
                                                            <a class="text-primary" href="delete.php?id=<?php echo $dept->id?>&class=Department&link=department.php">Delete</a>
                                                            <a class="text-primary" href="edit_department.php?id=<?php echo $dept->id?>">Edit</a>

                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
<!--                                -->
<!--                                    </tbody>-->
<!--                                </table>-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
                </div>

        <!--   footer  start-->

        <?php include "includes/admin_footer.php" ?>

        <!--   footer  end-->
</body>

</html>