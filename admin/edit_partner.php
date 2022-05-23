<?php include "includes/admin_header.php" ?>

<!-- header end -->
<?php
if (!$session->is_signed_in()) { redirect("login.php");} ?>

<?php
if (empty($_GET['id'])) {  redirect("partners_list.php");}

$Partner =  Partner::find_by_id($_GET['id']);
$message = '';



if (isset($_POST['Update'])) {

//     echo"<pre>";
//     print_r( $_FILES['image']);
//     echo"</pre>";
//    $Partner_image_temp = $_FILES['image']['tmp_name'];

//    $data = file_get_contents( $_FILES['image']['tmp_name']);
//    echo nl2br($data);


  
}



if (isset($_POST['Update'])) {


    if ($Partner) {
        $Partner->full_name = trim($_POST['full_name']);
        $Partner->country = trim($_POST['country']);
        $Partner->gender = trim($_POST['gender']);
        $Partner->state = trim($_POST['state']);
        $Partner->date_time = date('d.m.y');
        $Partner->affiliate_code = trim($_POST['affiliate_code']);
        $Partner->bank_name = trim($_POST['bank_name']);
        $Partner->account_number = trim($_POST['account_number']);
        // $Partner->image = 'image';

        $Partner->partner_email = trim($_POST['partner_email']);
        $Partner->fone_number = trim($_POST['fone_number']);

        $Partner->image = $_FILES['image']['name'];

        $Partner->set_file($_FILES['image']);
     
   

        // $Partner->save();
    }

    // redirect("partners_list.php");
    $message = " ";
}else{
    echo"filed";
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
                                EDIT
                                <small>PARTNER</small>
                            </h1>


                            <!-- FORM -->


                            <form action="" method="post" class="input-glass" enctype="multipart/form-data">

                                 <h5>Upload Photo</h5>
                                <div class="custom-file mb-3">
                                <input name="MAX_FILE_SIZE" type="hidden" required value="1000000">
                                <input name="image" type="file" required  id="customFile" accept=".png, .jpg, .jpeg">
                                <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
                                </div>  

                                


                                <h5>Personal Details</h5>
                                <div class="form-group">
                                    <input name="full_name" required class="form-control" type="text" value="<?php echo $Partner->full_name ?>" placeholder="Full Name">
                                </div>


                                <div class="form-group">
                                    <select class="form-control" required name='gender' value="<?php echo $Partner->gender ?>" placeholder="Gender">
                                        <option selected>Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input name="fone_number" required class="form-control" value="<?php echo $Partner->fone_number ?>" type="text" placeholder="Phone Number">
                                </div>


                                <div class="form-group input-group">
                                    <input name="partner_email" required type="email" class="form-control" value="<?php echo $Partner->partner_email ?>" placeholder="Email address">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                </div>


                                <div class="form-group input-group">
                                    <select class="form-control" required name="country" value="<?php echo $Partner->counter ?>" placeholder="Country ">
                                        <option selected>Select Country</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="South-africa">South Africa</option>
                                        <option value="Tanzania">Tanzania</option>
                                    </select>
                                </div>

                                <div class="form-group input-group">
                                    <select class="form-control" required name="state" value="<?php echo $Partner->state ?>" placeholder="States">
                                        <option selected>Select state</option>
                                        <option value="ABUJA FCT">ABUJA FCT</option>
                                        <option value="ABIA">ABIA</option>
                                        <option value="ADAMAWA">ADAMAWA</option>
                                        <option value="AKWA_IBOM">AKWA IBOM</option>
                                        <option value="ANAMBRA">ANAMBRA</option>
                                        <option value="BAUCHI">BAUCHI</option>
                                        <option value="BAYELSA">BAYELSA</option>
                                        <option value="BENUE">BENUE</option>
                                        <option value="BORNO">BORNO</option>
                                        <option value="CROSS_RIVER">CROSS RIVER</option>
                                        <option value="DELTA">DELTA</option>
                                        <option value="EBONYI">EBONYI</option>
                                        <option value="EDO">EDO</option>
                                        <option value="EKITI">EKITI</option>
                                        <option value="ENUGU">ENUGU</option>
                                        <option value="GOMBE">GOMBE</option>
                                        <option value="IMO">IMO</option>
                                        <option value="JIGAWA">JIGAWA</option>
                                        <option value="KADUNA">KADUNA</option>
                                        <option value="KANO">KANO</option>
                                        <option value="KATSINA">KATSINA</option>
                                        <option value="KEBBI">KEBBI</option>
                                        <option value="KOGI">KOGI</option>
                                        <option value="KWARA">KWARA</option>
                                        <option value="LAGOS">LAGOS</option>
                                        <option value="NASSARAWA">NASSARAWA</option>
                                        <option value="NIGER">NIGER</option>
                                        <option value="OGUN">OGUN</option>
                                        <option value="ONDO">ONDO</option>
                                        <option value="OSUN">OSUN</option>
                                        <option value="OYO">OYO</option>
                                        <option value="PLATEAU">PLATEAU</option>
                                        <option value="RIVERS">RIVERS</option>
                                        <option value="SOKOTO">SOKOTO</option>
                                        <option value="TARABA">TARABA</option>
                                        <option value="YOBE">YOBE</option>
                                        <option value="ZAMFARA">ZAMFARA</option>
                                    </select>
                                </div>

                                <br>
                                <h5>Bank Details</h5>
                                <div class="form-group">
                                    <select class="form-control" required name="bank_name" value="<?php echo $Partner->bank_name ?>" placeholder="Bank Name">
                                        <option selected>Select Bank</option>
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
                                    <input name="account_number" required class="form-control" type="text" value="<?php echo $Partner->account_number ?>" placeholder="Account Number">
                                </div>
                                <div class="form-group">
                                    <input name="affiliate_code" required class="form-control" type="text" value="<?php echo $Partner->affiliate_code ?>" placeholder="Referal Number">
                                </div>
                                <!-- <div class="form-group">
    <input name="subaccountid" class="form-control" type="text" placeholder="Subaccount ID">
</div> -->
                                <button class="btn btn-lg btn-danger" name="Update" type="submit">Update</button>

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