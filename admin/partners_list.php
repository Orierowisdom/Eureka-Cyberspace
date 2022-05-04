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

            $partners = Partner::find_all();
            ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!--                        Add new button-->
                            <a href="add_partner.php"> <button class="btn btn-success"> ADD NEW</button></a>

                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-tabs card-header-warning">
                                        <div class="nav-tabs-navigation">
                                            <div class="nav-tabs-wrapper">
                                                <span class="nav-tabs-title">Manage partner:</span>
                                                <ul class="nav nav-tabs" data-tabs="tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#profile" data-toggle="tab">
                                                            <i class="material-icons">format_list_bulleted</i> Partners
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li>
                                                    <!-- <li class="nav-item">
                                                <a class="nav-link" href="#messages" data-toggle="tab">
                                                    <i class="material-icons">format_list_bulleted</i> NCE
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li> -->

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
                                                            <th> Image</th>
                                                            <th>ID</th>
                                                            <th> Name</th>
                                                            <th> Gender</th>
                                                            <th> Email </th>
                                                            <th> Country</th>
                                                            <th> State</th>
                                                            <th> Date</th>
                                                            <th> Code</th>
                                                            <th> Bank Name</th>
                                                            <th> Account Number</th>
                                                            <th> Phone Number</th>

                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($partners as $partner) : ?>
                                                                <tr>
                                                                    <td><img src="<?php echo $partner->image ?>" alt="img" /> <br>
                                                                        <div>
                                                                            <a class="text-primary" href="delete.php?id=<?php echo $partner->id ?>&class=Partner&link=partners_list.php">Delete</a>
                                                                            <a class="text-primary" href="edit_partner.php?&id=<?php echo $partner->id ?>">Edit</a>
                                                                            <!--      <a class="text-primary" href=".php?id=--><?php //echo $partner->id
                                                                                                                                ?>
                                                                            <!--">View</a>-->
                                                                        </div>
                                                                    </td>

                                                                    <td><?php echo $partner->id ?></td>
                                                                    <td><?php echo $partner->full_name ?></td>
                                                                    <td><?php echo $partner->gender ?></td>
                                                                    <td><?php echo $partner->partner_email ?></td>
                                                                    <td><?php echo $partner->country ?></td>
                                                                    <td><?php echo $partner->state ?></td>
                                                                    <td><?php echo $partner->date_time ?></td>
                                                                    <td><?php echo $partner->affiliate_code ?></td>
                                                                    <td><?php echo $partner->bank_name ?></td>
                                                                    <td><?php echo $partner->fone_number   ?></td>
                                                                    <td><?php echo $partner->account_number ?></td>

                                                                </tr>
                                                            <?php endforeach; ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!--   footer  start-->

                                    <?php include "includes/admin_footer.php" ?>

                                    <!--   footer  end-->
</body>

</html>