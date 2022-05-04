<?php require_once ('./admin/init.php');?>

<?php if(isset($_GET['code'])){
    $affiliate_id = $_GET['code'] ;
}
?>

<?php 
$message='';

if(isset($_POST['register']))
{


    $Client= new Client();

    $Client->full_name = trim($_POST['full_name']);
    $Client->phone_number = trim($_POST['phone_number']);
    $Client->personal_email = trim($_POST['personal_email']);
    $Client->date = date('d.m.y');
    $Client->business_name = trim($_POST['business_name']);
    $Client->page_number = trim($_POST['page_number']);
    $Client->partner_refferal_id = trim($_POST['partner_refferal_id']);
    
    $Client->business_industry = empty( $Client->business_industry)? trim($_POST['business_industry']) : trim($_POST['user_specify']);
    $Client->site_type = trim($_POST['site_type']);
    $Client->site_package = trim($_POST['site_package']);

    $Client->business_summary ='business_summary';
    $Client->logo ='logo';
    // $Client->business_summary = $_FILES['image']['name'];
    // $Client_image_temp = $_FILES['image']['tmp_name'];

    // move_uploaded_file($Client_image_temp, "./Assets/img/$Client->image");
    // echo "<prev>";

    // var_dump($Client);
    // echo "</prev>";

   $Client->save();
   redirect("index.php");
   $message = "Account created successfully ";
}

?>










<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content=" Eureka Cyberspace serves clients in producing attractive designs, websites and prints.">
    <meta name="keywords"
        content="website, Programming, Web developers, seo, wordpress, HTML, CSS, JS, React, UI, UX, Branding, Javascript, HTML, CSS, Frontend, Backend">
    <meta name="author" content="Eureka Cyberspace">
    <title>Customer--Registeration--Eureka Cyberspace | Web &amp; Mobile Developer In Nigeria </title>

    <!-- Styles -->
    <link href="Assets/css/page.min.css" rel="stylesheet">
    <link href="Assets/css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="../Assets/img/eureka fav.png" type="image/x-icon">
</head>

<body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" data-navbar="fixed">
        <div class="container">

            <div class="navbar-left">
                <button class="navbar-toggler" type="button">&#9776;</button>
                <a class="navbar-brand" href="./index.php">
                    <img class="logo-dark" src="./Assets/img/eureka logo.png" alt="logo">
                    <!-- <img class="logo-light" src="./Assets/img/eureka logo.png" alt="logo"> -->
                </a>
            </div>

            <section class="navbar-mobile">
                <nav class="nav nav-navbar ml-auto">
                    <a class=" btn  btn-round btn-warning mw-150" href="./index.php">Back to Home</a>
                </nav>
            </section>

        </div>
    </nav><!-- /.navbar -->

    <!-- Header -->
    <header class="header pb-9 pt-10"
        style="background: url(https://media.istockphoto.com/photos/making-her-mark-picture-id889512880?k=20&m=889512880&s=612x612&w=0&h=WACp5-j3wiUxlznlx8P1L2WE-o4qzS2lxninoNR9AbQ=)  no-repeat rgb(133, 92, 5) ; background-blend-mode: multiply; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-white">
                    <h1 class="fw-200 mb-6">You Are One Step Away!</h1>
                    <p class="lead-2">Great Move. one more step to go! <br> Kindly fill out
                        the provided form below. </p>



                </div>
            </div>
        </div>
    </header><!-- /.header -->

    <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Inputs
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
    <section class="section bg-darkh">
        <div class="container">
            <header class="section-header">
                <h2>Register your new Website</h2>
                <p class="lead">Please fill out all fields with accurate details for easy communications and set up!</p>
            </header>

     <form action="" method="post" enctype="multipart/form-data">
            <div class="row gap-y">

                <div class="col-md-6">
                    <h5>Personal Details</h5><br>

                    <div id="formid" class="form-group">
                        <label>Full Name</label>
                        <input  name='full_name' required class="form-control form-control-sm" type="text"
                            placeholder="Enter Full Name" value="">
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input class="form-control form-control-lg" required name='phone_number' type="text" placeholder="Enter Phone Number">
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>
                        <input class="form-control form-control-lg" required name='personal_email' type="text" placeholder="Enter Email address">
                    </div> 
                  
                    <div class="form-group">
                <label for="affiliate_code"> Refferal ID</label> 
                  <input name="partner_refferal_id" value="<?php echo $affiliate_id?>" class="form-control" type="text" readonly >
                    </div>

                </div>

                <div class="col-md-6 ">
                    <h5 class="my-5">Business Information (<small>tell us about the website you want</small>)</h5>

               
                     <div class="form-group">
                        <label>Business Name</label>
                        <input class="form-control form-control-lg" name='business_name' type="text"
                            placeholder="Enter Business Email address">
                    </div> 

                    <div class="form-group">
                        <label>Website package</label>
                        <select class="form-control" required name="site_package">
                            <option selected disabled>---Select---</option>
                            <optgroup label="Basic Package">
                                <option value="Basic Promo">Basic Promo price</option>
                                <option value="Basic Standard">Basic Standard price</option>
                            <optgroup label="Standard Package">
                                <option value="Standard Promo">Standard Promo price</option>
                                <option value="Standard Price">Standard price</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Type of website</label>
                        <select class="form-control form-control-sm"  required name="site_type">
                            <option selected disabled>---Select---</option>
                            <option value="Personal"> Personal</option>
                            <option value="Business">Business</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Number of Pages</label>
                        <select class="form-control" required name="page_number">
                            <option selected disabled>---Select---</option>
                            <option value="Standard Price">One Page</option>
                            <option>Multi Paged</option>
                            <option>Decide for me</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Nature of Business</label>
                        <select class="form-control"  name="business_industry">
                        
                        <option selected disabled>-- select one --</option>
                            <optgroup label="Healthcare Practitioners and Technical Occupations:">                           
                            <option value=""></option>
                                <option value="Dentist"> -Dentist</option>
                                <option value="Dietitian"> -Dietitian </option>
                                <option value="Optometrist">-Optometrist</option>
                                <option value="Pharmacy">-Pharmacy</option>
                                <option value="Physician">-Physician</option>
                                <option value="Therapist">-Therapist</option>
                                <option value="Veterinarian">-Veterinarian</option>
                                <option value=" Health Technologist">-Health Technologist</option>
                                <option value="Nursing">- Nursing</option>
                            </optgroup>
                           
                            <optgroup label="Business, Executive, Management, and Financial Occupations:">
                                <option value="Operations Manager">-Operations Manager</option>
                                <option value="Advertising">-Advertising</option>
                                <option value=" HR Manage">- HR Manager</option>
                                <option value="Construction Manager">-Construction Manager</option>
                                <option value="Engineering Manager">-Engineering Manager</option>
                                <option value="Accountant">-Accountant</option>
                                <option value="Business Operations">-Business Operations </option>
                                <option value=" Business Owner">-Business Owner</option>
                                </option>
                            </optgroup>
                            <optgroup label="Architecture and Engineering Occupations:">
                                <option value="Architect">-Architect</option>
                                <option value="Engineer">-Engineer</option>
                            </optgroup>
                           
                            <optgroup label="Other Professional Occupations:">
                                <option value="Entertainment, Sports, ">-Entertainment, Sports</option>
                                <option value="Computer Specialist">- Computer Specialist</option>
                                <option value="Counselor, Social Worker">- Counselor, Social Worker
                                    </option>
                                <option value="Lawyer, Judge">-Lawyer, Judge</option>
                                <option value="Life Scientist">- Life Scientist (e.g., Animal, Food, Soil, or Biological Scientist,
                                    Zoologist)</option>
                                <option value="Physical Scientist">- Physical Scientist (e.g., Astronomer, Physicist, Chemist,
                                    Hydrologist)</option>
                                <option value=" Religious Worker">- Religious Worker (e.g., Clergy, Director of Religious Activities or
                                    Education)</option>
                            </optgroup>
                          
                            <optgroup label="Services Occupations:">
                                
                                <option value="Building and Grounds">- Building and Grounds Cleaning and Maintenance</option>
                                <option value=" Personal Care and Service ">- Personal Care and Service (e.g., Hairdresser, Flight Attendant,
                                    Concierge)</option>
                                <option value=" Retail Sales Worker">- Retail Sales Worker</option>
                                <option value="Insurance Sales Agent">- Insurance Sales Agent</option>
                                <option value="Sales Representative">-Sales Representative</option>
                                <option value="Real Estate Sales Agent">- Real Estate Sales Agent</option>
                            </optgroup>
                            <optgroup label="Agriculture, Maintenance, Repair, and Skilled Crafts Occupations:">
                                <option value="Construction and Extraction ">- Construction and Extraction (e.g., Construction Laborer,
                                    Electrician)</option>
                                <option value="Farming, Fishing, and Forestry">- Farming, Fishing, and Forestry</option>
                                <option value="Installation, Maintenance">- Installation, Maintenance, and Repair</option>
                                <option value="Production Occupations">- Production Occupations</option>
                                    Occupation</option>
                            </optgroup>
                            <optgroup label="Transportation Occupations:">
                                <option value="Aircraft Pilot or Flight Engineer">- Aircraft Pilot or Flight Engineer</option>
                                <option value="Motor Vehicle Operator">- Motor Vehicle Operator (e.g., Ambulance, Bus, Taxi, or Truck
                                    Driver)</option>
                            </optgroup>
                            <optgroup label="Other Occupations:">
                                <option value="Military">- Military</option>
                                <option value="Homemaker">- Homemaker</option>
                                <option value="Not Applicable">- Not Applicable</option>
                            </optgroup>
                        </select>

                        <div class="form-group">
                            <label>Business not Listed? Specify</label>
                            <input class="form-control " name="user_specify" type="text"
                                placeholder="Specify Nature of Business">
                        </div>
                    </div>

                    <h5 class="pt-5">Document Upload</h5><br>

                    <div class="form-group">
                        <label>Upload Logo</label>

                        <div class="custom-file">
                            <input type="file" name="logo"class="custom-file-input" id="customFile" accept=".png, .jpg, .jpeg">
                            <label class="custom-file-label" for="logo">Choose file</label>
                        </div>
                    </div> 

                    <div class="form-group">
                        <label>Upload Business Profile</label>

                        <div class="custom-file"  >
                            <input type="file" class="custom-file-input"  name="business_summary" id="customFile" accept=".png, .jpg, .jpeg">
                            <label class="custom-file-label" for="business_summary">Choose file</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-lg btn-success"  type="submit" name="register"
                          >Register</button>
                    </div>

                    <!-- <div class="form-group">
                        <button id="paybtn" class="btn btn-lg btn-success" href="#success" type="button" name="register"
                            data-toggle="popup" data-target="#success">Register Now</button>
                    </div> -->


                </div>



            </div>
     </form>


        </div>
    </section>





    <!-- Footer -->
    <footer class="footer bg-gray py-7">
        <div class="container">
            <div class="row gap-y">

                <div class="col-md-6 col-xl-4">
                    <p><a href="./index.php"><img src="./Assets/img/eureka logo.png" alt="logo"></a></p>
                    <!-- <p>We strongly believe in the power of team work for a business to posses a functional and
                        high-performing structure.</p> -->
                </div>

                <div class="col-6 col-md-3 col-xl-2">
                    <h6 class="mb-4 mt-1"><strong>Company</strong></h6>
                    <div class="nav flex-column">
                        <a class="nav-link" href="https://eureka.gwlservices.com.ng/#features">Features</a>
                        <a class="nav-link" href="https://eureka.gwlservices.com.ng/#footer">Contact</a>
                    </div>
                </div>

                <div class="col-6 col-md-3 col-xl-2">
                    <h6 class="mb-4 mt-1"><strong>Product</strong></h6>
                    <div class="nav flex-column">
                        <a class="nav-link" href="https://eureka.gwlservices.com.ng/#pricing">Pricing</a>
                        <a class="nav-link" href="https://eureka.gwlservices.com.ng/#customers">Customers</a>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-xl-2">
                    <h6 class="mb-4 mt-1"><strong>Support</strong></h6>
                    <div class="nav flex-column">
                        <a class="nav-link" href="#">Developers</a>
                        <a class="nav-link" href="./affiliate/index.php">Become am affiliate</a>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-xl-2 text-center">
                    <p><a class="btn btn-block btn-round btn-success"
                            href="https://wa.me/message/57I4SOE3TTGZH1">Whatsapp</a></p>
                    <p><a class="btn btn-block btn-round btn-primary" href="tel:+2348081742583">Call Us</a></p>
                    <br>
                    <div class="social social-bordered">
                        <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="social-youtube" href="#"><i class="fa fa-youtube"></i></a>
                        <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </footer><!-- /.footer -->






    <!-- Promotion 3 -->
    <div id="success" class="popup bg-img text-white border-0 col-10 col-md-4 p-6" data-position="top-center"
        data-animation="slide-down"
        style="background: url(https://media.istockphoto.com/photos/making-her-mark-picture-id889512880?k=20&m=889512880&s=612x612&w=0&h=WACp5-j3wiUxlznlx8P1L2WE-o4qzS2lxninoNR9AbQ=)  no-repeat rgb(133, 92, 5) ; background-blend-mode: multiply; background-size: cover;"
        data-overlay="1">
        <!-- <button type="button" class="close" data-dismiss="popup" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button> -->

        <div class="text-center position-relative">
            <h3>Great Job <b class="fw-600" id="clientnameview"></b></h3>
            <h3 class="fw-600">Your Registration Was Successful</h3>
            <p class="lead-1">You can proceed to Payment</p>
            <br>
            <a href="#" aria-label="Close" class="btn btn-lg btn-danger px-7" data-toggle="offcanvas"
                data-target="#offcanvas-slide-left" data-dismiss="popup">Proceed to Payment</a>

        </div>
    </div>



    <!-- Payment modal -->
    <div id="offcanvas-slide-left" class="offcanvas" data-animation="slide-left">
        <button type="button" class="close btn" data-dismiss="offcanvas" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        <section class="section text-center">
            <div class="container">

                <header class="section-header">


                    <div class="row">

                        <form id="formonline" class="col-md-4 col-xl-4 mx-auto input-border">
                            <p class="fw-600">You selected the Basic Promo Package</p>
                            <small class="fw-200">Your expected bill is <b> NGN25,000</b></small>

                            <div id="formid" class="form-group">
                                <label>Full Name</label>
                                <input id="clientsname" name="clientsname" class="form-control form-control-sm"
                                    type="text" placeholder="Enter Full Name">
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input id="payemail" name="payemail" class="form-control form-control-lg" type="text"
                                    placeholder="Enter Email address">
                            </div>
                            <button type="button" class="btn  btn-xl btn-success" id="payonline">Pay Now</button>

                        </form>

                    </div>

            </div>
        </section>
    </div>
    </div>

    <!-- Scripts -->


    <script>
        document.getElementById("payonline").addEventListener("click", () => {
         alert("clicked");
            const onlineform = document.getElementById("formonline").elements;
         
            //declaring variable to get personal info data from input
            var a = onlineform.namedItem("clientsname").value;
            var b = onlineform.namedItem("payemail").value;

            clientsnamee.value = a;
            clientsemaill.value = b;
            makePayment()
        });
        const clientsnamee = document.getElementById("clientsname");
        const clientsemaill = document.getElementById("payemail");


        function makePayment() {

            FlutterwaveCheckout({
                public_key: "FLWPUBK_TEST-SANDBOXDEMOKEY-X",
                tx_ref: "titanic-48981487343MDI0NzMx",
                amount: 25000,
                currency: "NGN",
                payment_options: "card, banktransfer, ussd",
                redirect_url: "https://eureka.gwlservices.com.ng/",
                meta: {
                    consumer_id: 23,
                    consumer_mac: "92a3-912ba-1192a",
                },
                customer: {
                    email: document.getElementById("payemail").value,
                    phone_number: "08102909304",
                    name: document.getElementById("clientsname").value,
                },
                customizations: {
                    title: "Eureka Cyberspace",
                    description: "Webdesign Promo package paymment",
                    logo: "https://eureka.gwlservices.com.ng/affiliate/Assets/img/eureka%20logo.png",
                },
            });
        }
    </script>

    <script src="https://checkout.flutterwave.com/v3.js"></script>
    <script src="Assets/Js/page.min.js"></script>
    <script src="Assets/Js/script.js"></script>

</body>

</html>