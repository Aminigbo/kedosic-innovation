<?php include 'config/db/db.php';  ?>

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
    <title>Kedosic | Verify OTP</title>




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
        
        <?php
            $otp = $_GET['user_k_code'] ;
            $sql = "SELECT * FROM kedosic_users WHERE k_code='$otp' "; 
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)) {
                while ($row=mysqli_fetch_assoc($result)) {
                    $id=$row['id'];
                    $firstname=$row['firstname'];
                    $lastname=$row['lastname'];
                    $email=$row['email'];
                    $phone=$row['phone'];
                    $k_code=$row['k_code'];
                    $date=$row['date'];
                    $verified=$row['verified'];

                    if (strlen($phone)==10) {
                        $first_three=substr($phone, 0,3);
                        $last_two=substr($phone, 7,10);
                    }else{
                        $first_three="";
                        $last_two="";
                    }
                    
                }
            }
        ?>


        <section class="form-container">
            <div class="title">Please Enter OTP code <i class="fa fa-question-circle"></i></div>
            <div class="sub-title">A verification code has been sent to 0<?php echo $first_three ?>xxxxx<?php echo $last_two ?></div>
            <div class="field-container">
                <input type="text" class="field">
                <input type="text" class="field">
                <input type="text" class="field">
                <input type="text" class="field">
            </div>
            <div class="centered-div">
                <button class="verify-btn">Verify</button>
            </div>
            <div class="resend">Didn't get the code? <a href="#" class="resend-btn">Resend code</a></div>
            <div class="wrong-number">Entered a wrong number? <a href="#" class="wrong-number-btn">Go back</a></div>

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
        $('.verify-btn').click(function(){
            
            window.location="select-category.php"
        })
    })
</script>