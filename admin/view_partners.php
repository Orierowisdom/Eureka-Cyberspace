<!-- header  start-->
<?php include "includes/admin_header.php" ?>
<!-- header end -->
<?php if (!$session->is_signed_in()) {
  redirect("login.php");
} ?>

<?php
 $partners = Partner::find_all(); 
// $affiliate_count = Client::find_partner_clients(0);
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

      <button class=" btn btn-success"> <a href="partners_list.php"  class="text-white"> partners table</a> </button class=" btn btn-secondary"> <a href="add_partner.php"> <button class="btn btn-success"> ADD NEW</button></a>

    
      </div>


  <h1 clalss="text-white text-center my-4"> Partners</h1>
        <div class="container-fluid mt-5">
          <div class="row">

            <?php
            foreach ($partners as $partner) : ?>
           
              <div class="col-md-4 ">
                <div class="card card-profile">
                <div class="card-avatar">
                   <img src="./assets/img/affiliate/<?php echo $partner->image?>" width="100%" height="100%" alt="img"/>
                 </div>
                <div class="card-body">
                    <h6 class="card-category"><?php echo $partner->partner_email;?></h6>
                    <h4 class="card-title"><?php echo $partner->full_name;?></h4>
                    <p class="card-description">  
                    Phone NO: <?php echo $partner->fone_number;?> <br>
                    Refree Count:<?php 
                   $affiliate_client_count= count(Client::find_partner_clients($partner->affiliate_code));
                   echo $affiliate_client_count;
                   ?><br>&nbsp;&nbsp;
                   Partners Affil code: <?php echo $partner->affiliate_code;?><br>
                    Acxt Name: <?php echo $partner->bank_name;?> <br>
                    Acct NO: <?php echo $partner->account_number;?> 
                  
                    </p>
                    <a href="#" class="btn btn-primary btn-round btn-sm">View Refree</a>
                    <a href="delete.php?id=<?php echo $partner->id ?>&class=Partner&link=view_partners.php" class="btn btn-danger btn-round btn-sm">Delete</a>
                </div>

                </div>
              </div>
              
            <?php endforeach ?>


          </div>
        </div>
      </div>




      <!-- a template for clients profile view -->
      <!-- 
      <div class="content">
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
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens??? bed design but the back is...
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->


      <!--   footer  start-->
      <?php include "includes/admin_footer.php" ?>

      <!--   footer  end-->

</body>

</html>