<?php include 'config/db/db.php'; 

function isLoggedIn() 
  {
    if (isset($_SESSION['user'])) {
      return true;
    }else{
      return false;
    }
  }

  if (isLoggedIn()) {
    header("location:account/"); 
  }
  
  ?>

<!-- main blue color: #1D76BC --->
<!-- homepage grey background-color: #E8E8E8 --->
<!-- apply now green color btn: #009345 --->
<!-- site orange color : #FF8D41 --->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Kedosic | Check Status</title>




    <!-- Template CSS -->

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/style1.css" />
    <link rel="stylesheet" href="assets/css/utilities.css" />


    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet" />
    <!-- Template CSS -->



    <!-- og graph start -->
    <meta property="og:url" content="https://" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="https://" />
    <!-- og graph end -->

    <style>
        .site-header {
            background-color: white;
            box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.1);
        }
    </style>

</head>



<body>


    <!-- header start --->
    <?php include 'header.php'; ?>
    <!-- header end --->


    <!--- VERIFY OTP PAGE START --->
    <main class="verify-otp-page">
        
         


        <section class="form-container">
            <div class="title">Please Enter your k-pin <i style="cursor:pointer;" class="fa fa-question-circle what_is_k_pin"></i></div>
            <!-- <div class="sub-title">A verification code has been sent to </div> -->
            <div class="field-container">
                <input type="text" placeholder="ABC1234" class="field k_pin" style="width:100%;text-transform: uppercase;"> 
            </div>
            <div class="centered-div">
                <button class="verify-btn checkPin" id="done">Check Status</button>
            </div>
            <div class="cb"></div>
            <div class="resend">Didn't have a pin? <a href="apply" class="resend-btn">Apply Now</a></div>  

        </section>





    </main>
    <!--- VERIFY OTP PAGE END --->

    <!-- footer start ---->
    <?php include 'footer.php'; ?>
    <!--- footer end --->
</body>

</html>

<!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
<!-- <script src="assets/js/jquery-2.1.4.min.js"></script> -->
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/utilities.js"></script>
<script src="jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".what_is_k_pin").click(function(){
            alert("This is what k-pin is all about.")
        })
        
        $('.checkPin').click(function(){
            let done = $(this).attr("id");
            let k_pin = $(".k_pin").val()
            if (k_pin.length < 1) {
                alert("Field is empty")
            }else{
                $.ajax({
                url:"config/scripts/ajax.php",
                method:"POST",
                async:true,
                data:{
                    "check_status":done,
                    "k_pin":k_pin, 
                },
                success:function(data){ 
                    $('.cb').html(data)
                    $('.loader').show(); 
                     
                            
                },
            })
            }
            
            
        })
    })
</script>