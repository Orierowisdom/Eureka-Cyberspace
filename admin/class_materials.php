<!-- header  start-->

<?php include "includes/admin_header.php" ?>
<!-- header end -->

<body class="dark-edition">
    <div class="wrapper ">
        <!-- Sidebar  -->

        <?php include "includes/sidebar.php" ?>

        <!--End  Sidebar  -->

        <div class="main-panel">

            <!-- Navbar -->

            <?php include "includes/admin_navbar.php" ?>

            <?php
            $Nce_school = 'Nce';
            $Degree_school = 'Degree';
            $materials = Material::find_all();
            $degree_materials = Material::find_degree_school($Degree_school);
            $nce_materials =   Material::find_nce_school($Nce_school);
            ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!--                        Add new button-->
                            <a href="add_material.php"><button class="btn btn-success"> ADD NEW</button></a>


                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-tabs card-header-warning">
                                        <div class="nav-tabs-navigation">
                                            <div class="nav-tabs-wrapper">
                                                <span class="nav-tabs-title">Manage Department:</span>
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
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class=" text-primary">
                                                            <th>Material image</th>
                                                            <th>ID</th>
                                                            <th>Material Title</th>
                                                            <th>Material Link</th>
                                                            <th>Material Dept</th>
                                                            <th>Material Semester</th>
                                                            <th>Material Level</th>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($degree_materials as $material) : ?>
                                                                <tr>
                                                                    <td>image
                                                                        <div>
                                                                            <a class="text-primary" href="delete.php?id=<?php echo $material->id ?>&class=Material&link=class_materials.php">Delete</a>
                                                                            <a class="text-primary" href="edit_material.php?id=<?php echo $material->id ?>">Edit</a>
                                                                             <a class="text-primary" href=".php?id=--><?php //echo $material->id
                                                                                                                                                                                                ?>
                                                                            <!--">View</a>-->
                                                                        </div>
                                                                    </td>
                                                                    <td><?php echo $material->id ?></td>
                                                                    <td><?php echo $material->material_title ?></td>
                                                                    <td><?php echo $material->material_link ?></td>
                                                                    <td><?php echo $material->material_dept_id ?></td>
                                                                    <td><?php echo $material->material_semester ?></td>
                                                                    <td><?php echo $material->material_level ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="messages">

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class=" text-primary">
                                                            <th>Material image</th>
                                                            <th>ID</th>
                                                            <th>Material Title</th>
                                                            <th>Material Link</th>
                                                            <th>Material Dept</th>
                                                            <th>Material Semester</th>
                                                            <th>Material Level</th>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($nce_materials as $material) : ?>
                                                                <tr>
                                                                    <td>image
                                                                        <div>
                                                                            <a class="text-primary" href="delete.php?id=<?php echo $material->id ?>&class=Material&link=class_materials.php">Delete</a>
                                                                            <a class="text-primary" href="edit_material.php?id=<?php echo $material->id ?>">Edit</a>
                                                                            <!--                                                                    <a class="text-primary" href=".php?id=--><?php //echo $material->id
                                                                                                                                                                                                ?>
                                                                            <!--">View</a>-->
                                                                        </div>
                                                                    </td>
                                                                    <td><?php echo $material->id ?></td>
                                                                    <td><?php echo $material->material_title ?></td>
                                                                    <td><?php echo $material->material_link ?></td>
                                                                    <td><?php echo $material->material_dept_id ?></td>
                                                                    <td><?php echo $material->material_semester ?></td>
                                                                    <td><?php echo $material->material_level ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>

                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>

                                        </div>
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