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
           
            $clients = Client::find_all();
            ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!--                        Add new button-->

                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-tabs card-header-warning">
                                        <div class="nav-tabs-navigation">
                                            <div class="nav-tabs-wrapper">
                                                <span class="nav-tabs-title">Manage Clients:</span>
                                                <ul class="nav nav-tabs" data-tabs="tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#profile" data-toggle="tab">
                                                            <i class="material-icons">format_list_bulleted</i> Clients
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
                                                            <th>Image</th>
                                                            <th>ID</th>
                                                            <th>  Name</th>
                                                            <th> Business Name</th>
                                                            <th> Email </th>
                                                            <th> Site Type</th>
                                                            <th> Package</th>
                                                            <th> Page No</th>
                                                            <th> Date</th>
                                                            <th> industry</th>
                                                            <th> Refferal ID</th>
                                                            <th> Bus file</th>
                                                            

                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($clients as $client) : ?>
                                                                <tr>
                                                                    <td><img src="<?php echo $client->logo ?>" alt="img" /> <br>
                                                                        <div>
                                                                            <a class="text-primary" href="delete.php?id=<?php echo $client->id ?>&class=Client&link=clients_list.php">Delete</a>
                                                                            <!--
                                                                                 <a class="text-primary" href="edit_partner.php?&id=<?php //echo $partner->id ?>">Edit</a> -->
                                                                            <!--      <a class="text-primary" href=".php?id=--><?php //echo $partner->id  ?>  <!--">View</a>-->
                                                                        </div>
                                                                    </td>

                                                                    <td><?php echo $client->id ?></td>
                                                                    <td><?php echo $client->full_name ?></td>
                                                                    <td><?php echo $client->business_name ?></td>
                                                                    <td><?php echo $client->personal_email ?></td>
                                                                    <td><?php echo $client->site_type ?></td>
                                                                    <td><?php echo $client->site_package ?></td>
                                                                    <td><?php echo $client->page_number ?></td>
                                                                    <td><?php echo $client->date_time ?></td>
                                                                    <td><?php echo $client->business_industry ?></td>
                                                                    <td><?php echo $client->partner_refferal_id   ?></td>
                                                                    <td><?php echo $client->business_summary ?></td>

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