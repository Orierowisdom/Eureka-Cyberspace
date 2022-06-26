
<?php include "includes/admin_header.php" ?>
<!-- header end -->
<?php
if(!$session->is_signed_in()){
    redirect("login.php");
}
?>
<?php

if(isset($_POST['Register']))
{

    $Partner= new Partner();
    if($Partner)
    {
    $Partner->full_name = trim($_POST['full_name']);
    $Partner->country = trim($_POST['country']);
    $Partner->gender = trim($_POST['gender']);
    $Partner->state = trim($_POST['state']);
    $Partner->affiliate_code = trim($_POST['affiliate_code']);
    $Partner->bank_name = trim($_POST['bank_name']);
    $Partner->account_number = trim($_POST['account_number']);
    $Partner->image ="image";
    
    // $Partner->image = $_FILES['image']['name'];
    // $Partner_image_temp = $_FILES['image']['tmp_name'];

    $Partner->partner_email = trim($_POST['partner_email']);
    $Partner->fone_number = trim($_POST['fone_number']);
    }
    // move_uploaded_file($Partner_image_temp, "./Assets/img/$Partner->image");

    $Partner->save();
    return redirect("partners_list.php");
 //  $message = "Account created successfully ";
}


?>


<body class="dark-edition">
<div class="wrapper ">
    <!-- Sidebar  -->
    <?php include "includes/sidebar.php" ?>

    <!--End  Sidebar  -->

    <div class="main-panel">

        <!-- Navbar -->

        <?php include "includes/admin_navbar.php" ?>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="">
                            ADD
                            <small>PARTNER</small>
                        </h1>

                        
                    <!-- FORM -->
  <form  method="post" class="input-glass" enctype="multipart/form-data">

 <!-- <h5>Upload Photo</h5>
 <div class="custom-file mb-3">
 <input name="MAX_FILE_SIZE" type="hidden" required value="1000000">
 <input name="image" type="file" required  id="customFile" accept=".png, .jpg, .jpeg">
 </div>   -->


<h5>Personal Details</h5>
<div class="form-group">
    <label for="full_name"> Full Name <small>(first name first)</label>
    <input name="full_name"required class="form-control" type="text" >
</div>


<div class="form-group">
<label for="gender">Gender</label>
    <select class="form-control" required name='gender'  >
    <option value="">Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
</div>

<div class="form-group">
<label for="full_name"> Phone Number</label>
    <input name="fone_number" required class="form-control" type="text"  >
</div>

<label for="full_name">Email Address </label>
<div class="form-group input-group">
    <input type="email" name="partner_email" required  class="form-control"  >
    <div class="input-group-append">
        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
    </div>
</div>


<div class="form-group ">
<label for="country"> Country</label>
    <select class="form-control" required name="country"  >
        <option value="" > --Select Country--</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Benin">Benin</option>
        <option value="Egypt">Egypt</option>
        <option value="Ghana">Ghana</option>
        <option value="South-africa">South Africa</option>
        <option value="Tanzania">Tanzania</option>
    </select>
</div>

<div class="form-group ">
<label for="state"> State</label>
    <select class="form-control" required name="state" >
        <option value="" > --Select state-- </option>
        <option value="ABUJA FCT" >ABUJA FCT</option>
        <option value="ABIA" >ABIA</option>
        <option value="ADAMAWA" >ADAMAWA</option>
        <option value="AKWA_IBOM" >AKWA IBOM</option>
        <option value="ANAMBRA" >ANAMBRA</option>
        <option value="BAUCHI" >BAUCHI</option>
        <option value="BAYELSA" >BAYELSA</option>
        <option value="BENUE" >BENUE</option>
        <option value="BORNO" >BORNO</option>
        <option value="CROSS_RIVER" >CROSS RIVER</option>
        <option value="DELTA" >DELTA</option>
        <option value="EBONYI" >EBONYI</option>
        <option value="EDO" >EDO</option>
        <option value="EKITI" >EKITI</option>
        <option value="ENUGU" >ENUGU</option>
        <option value="GOMBE" >GOMBE</option>
        <option value="IMO" >IMO</option>
        <option value="JIGAWA" >JIGAWA</option>
        <option value="KADUNA" >KADUNA</option>
        <option value="KANO" >KANO</option>
        <option value="KATSINA" >KATSINA</option>
        <option value="KEBBI" >KEBBI</option>
        <option value="KOGI" >KOGI</option>
        <option value="KWARA" >KWARA</option>
        <option value="LAGOS" >LAGOS</option>
        <option value="NASSARAWA" >NASSARAWA</option>
        <option value="NIGER" >NIGER</option>
        <option value="OGUN" >OGUN</option>
        <option value="ONDO" >ONDO</option>
        <option value="OSUN" >OSUN</option>
        <option value="OYO" >OYO</option>
        <option value="PLATEAU" >PLATEAU</option>
        <option value="RIVERS" >RIVERS</option>
        <option value="SOKOTO" >SOKOTO</option>
        <option value="TARABA" >TARABA</option>
        <option value="YOBE">YOBE</option>
        <option value="ZAMFARA" >ZAMFARA</option>
    </select>
</div>

<br>
<h5>Bank Details</h5>
<label for="full_name"> Bank Name</label>
<div class="form-group">
    <select class="form-control" required name="bank_name"  >
        <option value=""> --Select Bank-- </option>
        <option value="access">Access Bank</option>
        <option value="citibank">Citibank</option>
        <option value="diamond">Diamond Bank</option>
        <option value="ecobank">Ecobank</option>
        <option value="fidelity">Fidelity Bank</option>
        <option value="firstbank">First Bank</option>
        <option value="fcmb">First City Monument Bank (FCMB)</option>
        <option value="gtb">Guaranty Trust Bank (GTB)</option>
        <option value="heritage">Heritage Bank</option>
        <option value="keystone">Keystone Bank</option>
        <option value="polaris">Polaris Bank</option>
        <option value="providus">Providus Bank</option>
        <option value="stanbic">Stanbic IBTC Bank</option>
        <option value="standard">Standard Chartered Bank</option>
        <option value="sterling">Sterling Bank</option>
        <option value="suntrust">Suntrust Bank</option>
        <option value="union">Union Bank</option>
        <option value="uba">United Bank for Africa (UBA)</option>
        <option value="unity">Unity Bank</option>
        <option value="wema">Wema Bank</option>
        <option value="zenith">Zenith Bank</option>
    </select>
</div>



<div class="form-group">
<label for="account_number"> Acccount Number</label>
    <input name="account_number" required class="form-control" type="text" >
</div>
<div class="form-group">
<label for="affiliate_code"> Affiliate Code</label>
    <input name="affiliate_code"  required class="form-control" type="text"  >
</div>
<!-- <div class="form-group">
    <input name="subaccountid" class="form-control" type="text" placeholder="Subaccount ID">
</div> -->
<button class="btn btn-lg btn-danger" name="Register" type="submit">Register</button>

</form>

                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>


        <!--   footer  start-->

        <?php include "includes/admin_footer.php" ?>

        <!--   footer  end-->
</body>

</html>