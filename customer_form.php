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

    /*
     use the first select option or the the text box if the 
     user choose to specifices
     */

    if(empty(trim($_POST['business_industry']))){
     $Client->business_industry = trim($_POST['user_specify']);
    }else{  $Client->business_industry = trim($_POST['user_specify']); }
 
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
  if(!empty($affiliate_id)){
    redirect( strval("payment.php?id={$affiliate_id}"));
  }else{   redirect('payment.php?id=00');}
  
  // $message = "Account created successfully ";

}

?>
<!-- header start -->
<?php include('includes/customer_header.php');?>
<!-- header end -->


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
            
            <div class="bg-danger"> <?php echo $message?></div>

     <form action="" method="post" enctype="multipart/form-data">
            <div class="row gap-y">

                <div class="col-md-6">
                    <h5>Personal Details</h5><br>

                    <div id="formid" class="form-group">
                        <label>Full Name</label>
                        <input  name='full_name' required class="form-control" type="text" placeholder="Enter Full Name">
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input class="form-control form-control-lg" required name='phone_number' maxlength=12 type="text" placeholder="Enter Phone Number">
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>
                        <input class="form-control form-control-lg" required name='personal_email' type="text" placeholder="Enter Email address">
                    </div> 
                  
                    <div class="form-group">
                <label for="affiliate_code"> Refferal ID</label> 
                  <input name="partner_refferal_id" value="<?php  if(empty($affiliate_id)){ echo '00'; }else{  echo $affiliate_id;}
                     ?>" class="form-control" type="text" readonly >
                    </div>

                </div>

                <div class="col-md-6 ">
                    <h5 class="my-5">Business Information (<small>tell us about the website you want</small>)</h5>

               
                     <div class="form-group">
                        <label>Business Name</label>
                        <input class="form-control form-control-sm" name='business_name' type="text"
                            placeholder="Enter Business Email address">
                    </div> 

                    <div class="form-group">
                        <label>Website package</label>
                        <select class="form-control form-control-sm" required name="site_package">
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
                        <select class="form-control form-control-sm" required name="page_number">
                            <option selected disabled>---Select---</option>
                            <option value="Standard Price">One Page</option>
                            <option>Multi Paged</option>
                            <option>Decide for me</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Nature of Business</label>
                        <select class="form-control form-control-sm"  name="business_industry">
                        
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
                            <input class="form-control form-control-sm" name="user_specify" type="text"
                                placeholder="Specify Nature of Business">
                        </div>
                    </div>

                    <h5 class="pt-5">Document Upload</h5><br>

                    <div class="form-group">
                        <label>Upload Logo</label>

                        <div class="custom-file">
                            <input type="file" name="logo"class="custom-file-input" accept=".png, .jpg, .jpeg">
                            <label class="custom-file-label" for="logo">Choose file</label>
                        </div>
                    </div> 

                    <div class="form-group">
                        <label>Upload Business Profile</label>

                        <div class="custom-file"  >
                            <input type="file" class="custom-file-input"  name="business_summary"  accept=".png, .jpg, .jpeg">
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



<!-- footer start -->
<?php include('includes/footer.php');?>
<!-- footer end -->


   


    <script src="Assets/Js/page.min.js"></script>
    <script src="Assets/Js/script.js"></script>

</body>

</html>