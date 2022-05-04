<?php require_once ('../admin/init.php');?>

<?php 
$message='';

if(isset($_POST['Register']))
{


    // $Partner= new Partner();

    // $Partner->full_name = trim($_POST['full_name']);
    // $Partner->country = trim($_POST['country']);
    // $Partner->gender = trim($_POST['gender']);
    // $Partner->state = trim($_POST['state']);
    // $Partner->date_time = date('d.m.y');
    // $Partner->affiliate_code = trim($_POST['affiliate_code']);
    // $Partner->bank_name = trim($_POST['bank_name']);
    // $Partner->account_number = trim($_POST['account_number']);
    // $Partner->image ='image';
    
    // $Partner->image = $_FILES['image']['name'];
    // $Partner_image_temp = $_FILES['image']['tmp_name'];

    // $Partner->partners_email = trim($_POST['partner_email']);
    // $Partner->fone_number = trim($_POST['fone_number']);

    // move_uploaded_file($Partner_image_temp, "./Assets/img/$Partner->image");

//    $Partner->save();
//    redirect("form.php");
//    $message = "Account created successfully ";

   /***********************************
alternative way with inpute validation
*************************************/

    $full_name = trim($_POST['full_name']);
    $country = trim($_POST['country']);
    $gender = trim($_POST['gender']);
    $state = trim($_POST['state']);
    $date_time = date('d.m.y');
    $affiliate_code = trim($_POST['affiliate_code']);
    $bank_name = trim($_POST['bank_name']);
    $account_number = trim($_POST['account_number']);
    $image = 'image';
    
    // $image = $_FILES['image']['name'];
    // $Partner_image_temp = $_FILES['image']['tmp_name'];

    $partners_email = trim($_POST['partner_email']);
    $fone_number = trim($_POST['fone_number']);


    $new_partner = Partner::create_partner($full_name, $gender, $country, $state,$date_time,$affiliate_code,$bank_name,$account_number,$image,$partners_email,$fone_number);
    
    
    if ($new_partner && $new_partner->save()) {
        redirect("form.php");
        $message = "Account created successfully ";
      
    } else {
        $message = "pls enter all form field ";
    }
    
 }
else {
    $full_name='';
    $gender='';
    $country='';
    $state='';
    $date_time='';
    $affiliate_code='';
    $bank_name='';
    $account_number='';
    $image='';
    $partners_email='';
    $fone_number='';
    

}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Affiliates--Eureka Cyberspace. We strongly believe in the power of team work for a business to posses a functional and high-performing structure.">
    <meta name="keywords"
        content="website, Programming, Web developers, seo, wordpress, HTML, CSS, JS, React, UI, UX, Branding, Javascript, HTML, CSS, Frontend, Backend">
    <meta name="author" content="Eureka Cyberspace">
    <title>Register--Affiliates--Eureka Cyberspace | Affiliate system for Web &amp; Mobile Developer In Nigeria </title>


    <!-- Styles -->
    <link href="../Assets/css/page.min.css" rel="stylesheet">
    <link href="../Assets/css/style.css" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="../Assets/img/eureka fav.png" type="image/x-icon">
</head>

<body id="home">

    <!-- Navbar -->

  <?php require_once('includes/nav.php'); ?>

      <!-- /Navbar -->

    <!-- Header -->
    <header class="header pb-9 pt-10"
        style="background: url(https://thumbs.dreamstime.com/b/affiliate-marketing-clipboard-d-business-concept-composition-office-supplies-desk-rendering-blurred-toned-image-77653856.jpg) no-repeat blue ; background-blend-mode: multiply; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-white">
                    <h1 class="fw-200 mb-6">Register Now!</h1>
                    <p class="lead-2">Great Choice! one more step to join our team of affiliates. Register using the
                        provided form below. </p>


                    <hr class="w-50px ml-0">

                    <a class="text-warning  " href="./form.php">Also, visit our terms and condition
                        page
                        for
                        an excellent time with us.</a>
                </div>
            </div>
        </div>
    </header><!-- /.header -->

   
    <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Glass Inputs
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
    <section class="section text-white"
        style="background: url(https://media.istockphoto.com/photos/people-crowd-texture-background-bird-eye-view-toned-picture-id1179870100?k=20&m=1179870100&s=612x612&w=0&h=7ncUt-rcxxx_llFkWiZctC0y3E_22zO_cAatLkkpjMs=) no-repeat blue ; background-blend-mode: multiply; background-size: cover;"
        data-overlay="7">
        <div class="container">
            <header class="section-header">
                <h2>Register</h2>
                <p class="text-danger"> <?php echo $message ?> </p>
                <p class="lead">Join over 100 affiliates and start your journey with us!</p>
            </header>


            <div class="row">
                <div class="col-md-4 mx-auto">




                    <!-- FORM -->


     <form action="form.php" method="post" class="input-glass" enctype="multipart/form-data">

                       
<!-- <h5>Upload Photo</h5>
<div class="custom-file mb-3">
    <input name="image" type="file" required class="custom-file-input" id="customFile"
        accept=".png, .jpg, .jpeg">
    <label class="custom-file-label" for="customFile">Choose file</label>
</div>  -->


<h5>Personal Details</h5>
<div class="form-group">
    <label for="full_name"> Full Name <small>(first name first)</small></label>
    <input name="full_name"required class="form-control" type="text" >
</div>


<div class="form-group">
<label for="gender">Gender</label>
    <select class="form-control" required name='gender'  >
    <option ></option>
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
        <option selected="selected" disabled='disabled'> --Select Country--</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Benin">Benin</option>
        <option value="Egypt">Egypt</option>
        <option value="Ghana">Ghana</option>
        <option value="South-africa">South Africa</option>
        <option value="Tanzania">Tanzania</option>
    </select>
</div>

<div class="form-group ">
<label for="state" > State</label>
    <select class="form-control" required name="state" >
        <option selected="selected" disabled='disabled'> --Select state-- </option>
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


<h5>Bank Details</h5>

<div class="form-group mt-4">
<label for="bank_name"> Bank Name</label>
    <select class="form-control" required name="bank_name" >
        <option selected='selected' disabled="disabled"> --Select Bank-- </option>
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
<!-- <label for="affiliate_code"> Affiliate Code</label> -->
    <input name="affiliate_code"  hidden ='hidden' value='000' class="form-control" type="number"  >
</div>
<!-- <div class="form-group">
    <input name="subaccountid" class="form-control" type="text" placeholder="Subaccount ID">
</div> -->
<button class="btn btn-lg btn-danger" name="Register" type="submit">Register</button>

</form> <!-- -->
                </div>
            </div>


        </div>
    </section>



    <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | FAQ
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
   



      <?php require_once("includes/faq.php") ?>


<!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | FOOTER
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->

<?php require_once("includes/footer.php") ?>