<?php require_once ('./admin/init.php');?>

<?php if(isset($_GET['code'])){  
     $affiliate_id = $_GET['code']; 
     $package = $_GET['package'] ;}
    
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

     <div style="margin-top:7%;">
     .
    </div>

    <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | sucess box
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
    <div class="container my-5">
      <div class="row">
       
        <div class="col-md-3"></div>
            <!-- Promotion 3 -->
 <div  class=" bg-img text-white border-0 col-auto col-md-6 p-6" data-position="top-center"
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
    <div class="col-md-3 mb-5"></div>
        </div>
    </div>


<!-- footer start -->
<?php include('includes/footer.php');?>
<!-- footer end -->

    <!-- Payment modal -->
    <div id="offcanvas-slide-left" class="offcanvas" data-animation="slide-left">
        <button type="button" class="close btn" data-dismiss="offcanvas" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        <section class="section text-center">
            <div class="container">

                <header class="section-header">


                    <div class="row">

                        <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay" id="formonline" class="col-md-4 col-xl-4 mx-auto input-border">
                            
                            <p class="fw-600">You selected the Basic Promo Package</p>
                            <small class="fw-200">Your expected bill is <b> N<?php echo $package ?> </b></small>

                            <div id="formid" class="form-group">
                                <label>Full Name</label>
                                <input name="customer[name]" class="form-control form-control-sm"
                                    type="text" placeholder="Enter Full Name">
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input name="customer[email]" class="form-control form-control-lg" type="text"
                                    placeholder="Enter Email address">
                            </div>
                        <!--     
                            this part ae hiden form client and value are automatically generated from previous form input   
                              id= affiliate code   amount= from amount selected
                                                         -->
                          <input type="hidden" name="public_key" value="FLWPUBK_TEST-SANDBOXDEMOKEY-X" />
                        <input type="hidden" name="customizations[title]" value="Eureka Cyberspace" />
                        <input type="hidden" name="customizations[description]" value="Web design package paymment " />
                        <input type="hidden" name="customizations[logo]" value="https://eurekacyberspace.com.ng/affiliate/Assets/img/eureka%20logo.png" />
                       
                        <input type="hidden" name="tx_ref" value="titanic-48981487343MDI0NzMx" />
                        <input type="hidden" name="amount" value="<?php echo $package ?>"/>
                        <input type="hidden" name="currency" value="NGN" />

                        
                         <input type="hidden" name="meta[token]" value="54" /> 
                        <input type="hidden" name="meta[consumer_id]" value="<?php echo $affiliate_id;?>" />
                        <input type="hidden" name="redirect_url" value="https://eurekacyberspace.com.ng/" />
                       
                            <button type="submit" class="btn  btn-xl btn-success" >Pay Now</button>

                        </form>

                    </div>

            </div>
        </section>
    </div>
    </div>

    <!-- Scripts -->


    <!-- <script>
        document.getElementById("payonline").addEventListener("click", () => {
       //  alert("clicked");
            const onlineform = document.getElementById("formonline").elements;
         
            //declaring variable to get personal info data from input
            var a = onlineform.namedItem("clientsname").value;
            var b = onlineform.namedItem("payemail").value;
            var c = onlineform.namedItem("clientsid").value;
            var d = onlineform.namedItem("clientsamount").value;

            clientsnamee.value = a;
            clientsemaill.value = b;
            clientsid.value = c;
            clientsamount.value = d;

            makePayment(id,amount)
        });
        const clientsnamee = document.getElementById("clientsname"); //remember to add .value method
        const clientsemaill = document.getElementById("payemail");//remember to add .value method
        const clientsid = document.getElementById("clientsid");//remember to add .value method
        const clientsamount = document.getElementById("clientsamount");//remember to add .value method


        function makePayment(id,amount) {

            FlutterwaveCheckout({
                public_key: "FLWPUBK_TEST-SANDBOXDEMOKEY-X",
                tx_ref: "titanic-48981487343MDI0NzMx",
                amount: document.getElementById("clientsamount").value,
                currency: "NGN",
                payment_options: "card, banktransfer, ussd",
                redirect_url: "https://eureka.gwlservices.com.ng/",
                meta: {
                    consumer_id: document.getElementById("clientsid").value,
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
    </script> -->

    <script src="https://checkout.flutterwave.com/v3.js"></script>
    <script src="Assets/Js/page.min.js"></script>
    <script src="Assets/Js/script.js"></script>

</body>

</html>