<!-- header  start-->
<?php include "includes/admin_header.php" ?>
<!-- header end -->
<?php if (!$session->is_signed_in()) {
  redirect("login.php");
} ?>

<?php
 $clients = Client::find_all(); 
// $affiliate_count = Client::find_client_clients(0);
// $affiliate_client_count= count(Client::find_partner_clients(111));
// echo $affiliate_client_count;


//  ?>

<body class="dark-edition">
  <div class="wrapper ">
    <!-- Sidebar  -->
    <?php include "includes/sidebar.php" ?>

    <!--End  Sidebar  -->
    <div class="main-panel">

      <!-- Navbar -->
      <?php include "includes/admin_navbar.php" ?>
      <!-- End Navbar -->
     
      <div class="content mx-4">
      <div class="row mx-4">
      <button class=" btn btn-success"> <a href="clients_list.php"  class="text-white"> 
       Client table</a> </button >
    
      </div>

        <div class="container-fluid mt-5">
          <div class="row">

             <?php
           foreach ($clients as $client) : ?>
           
              <div class="col-md-4">
                <div class="card card-profile">
                  <div class="card-avatar">
                    <a href="#pablo">
                      <img class="img" src="assets/img/faces/marc.jpg" />
                    </a>
                  </div>
                  <div class="card-body">
                    <h6 class="card-category"><?php echo $client->personal_email;?></h6>
                    <h4 class="card-title"><?php echo $client->full_name;?></h4>
                    <p class="card-description">  
                    Phone Number: <?php echo $client->phone_number;?> <br>
                   Partner Affiliate code: <?php echo $client->partner_refferal_id;?><br>
                   <span class="text-white"> Business Name: <?php echo $client->business_name;?></span> <br>
                    Business Industry: <?php echo $client->business_industry;?> 
                  
                    </p>
                    <a href="#pablo" class="btn btn-primary btn-round btn-sm">View Refree</a>
                    <a href="delete.php?id=<?php echo $client->id ?>&class=Client&link=view_client.php" class="btn btn-danger btn-round btn-sm">Delete</a>
                  </div>
                </div>
              </div>
            <?php endforeach ?> 


           </div>
        </div>
      </div> 




      <!-- a template for clients profile view -->
      
      <!-- <div class="content">
        <div class="container-fluid">
          <div class="row">
           
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

       -->


      <!--   footer  start-->
      <?php include "includes/admin_footer.php" ?>

      <!--   footer  end-->

</body>

</html>