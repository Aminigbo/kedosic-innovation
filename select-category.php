<?php include 'config/db/db.php';

function isLoggedIn() 
  {
    if (isset($_SESSION['user'])) {
      return true;
    }else{
      return false;
    }
  }

  if (!isLoggedIn()) {
    header("location:apply"); 
  }
?>

<!DOCTYPE html>
<html lang="zxx"> 

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Kedosic | Select Category</title>




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


    <!--- SELECT CATEGORY PAGE START --->
    <main class="select-category-page">


        <section class="form-container">

            <!-- select container start --->
            <div class="select-container none-selected" style="display:;">
                <div class="title" style="text-align:left">
                Hi <?php echo $_SESSION['user']['firstname'] ?>, <br>
                    <span style="font-weight:lighter">
                    Please select your idea categosry
                    </span>
                </div>

                

                <div class="box tech-based-box">
                    <button class="icon" style="background-color:royalblue;color:white;">T</button> <span>Tech based</span> <i class="fa fa-angle-right right-icon"></i>
                </div>

                <div class="box non-tech-based-box">
                    <button class="icon" style="background-color:crimson;color:white;">N</button> <span>Non-Tech based</span> <i class="fa fa-angle-right right-icon"></i>
                </div>

            </div>
            <!-- select container end  -->



            <!-- tech based container container start --->
            <div class="select-container tech-based" style="display:none;">
                <button class="go-back"><i class="fa fa-angle-left"></i> go back</button>
                <div class="title">TECH BASED - choose type</div>

                <a href="tech-about-to-start1" class="box">
                    <button class="icon" style="background-color:royalblue;color:white;">N</button> <span>About to start</span> <i class="fa fa-angle-right right-icon"></i>
                </a>

                <a href="tech-already-existing1" class="box">
                    <button class="icon" style="background-color:crimson;color:white;">A</button> <span>Already-Existing</span> <i class="fa fa-angle-right right-icon"></i>
                </a>

            </div>
            <!-- tech based container end  -->


            <!-- Non-tech based container container start --->
            <div class="select-container non-tech-based" style="display:none;">
                <button class="go-back"><i class="fa fa-angle-left"></i> go back</button>
                <div class="title">NON-TECH BASED - choose type</div>

                <a href="nontech-about-to-start1" class="box">
                    <button class="icon" style="background-color:royalblue;color:white;">N</button> <span>About to start</span> <i class="fa fa-angle-right right-icon"></i>
                </a>

                <a href="nontech-already-existing1" class="box">
                    <button class="icon" style="background-color:crimson;color:white;">A</button> <span>Already-Existing</span> <i class="fa fa-angle-right right-icon"></i>
                </a>

            </div>
            <!-- None tech based container end  -->

            <!-- loader start--->
            <div class="loader" style="display:none;">
                <img src="assets/images/icons/loader1.gif" alt="">
            </div>
            <!-- loader end --->

        </section>


    </main>
    <!--- SELECT CATEGORY PAGE END --->

    <!-- footer start ---->
    <?php include 'footer.php'; ?>
    <!--- footer end --->
</body>

</html>

<!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/utilities.js"></script>

<script>
    $(".tech-based-box").click(function() {
        $(".none-selected").hide();
        $(".loader").show();
        setTimeout(function() {
            $(".loader").hide();
            $(".tech-based").show();
        }, 2000)
    })

    $(".non-tech-based-box").click(function() {
        $(".none-selected").hide();
        $(".loader").show();
        setTimeout(function() {
            $(".loader").hide();
            $(".non-tech-based").show();
        }, 2000)
    })


    $(".go-back").click(function() {
        $(".tech-based").hide();
        $(".non-tech-based").hide();
        $(".loader").show();
        setTimeout(function() {
            $(".loader").hide();
            $(".none-selected").show();
        }, 1000)
    })
</script>