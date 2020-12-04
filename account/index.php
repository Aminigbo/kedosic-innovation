<?php include '../config/db/db.php';

function isLoggedIn() 
  {
    if (isset($_SESSION['user'])) {
      return true;
    }else{
      return false;
    }
  }

  if (!isLoggedIn()) {
    header("location:../"); 
  }

  if (isset($_GET['logout'])) {
      session_unset();
      session_destroy();
      header("location:../");
  }
  $session_user = $_SESSION['user']['k_code'];
  $sql = "SELECT * FROM kedosic_users WHERE `k_code` = '$session_user' ";
  $result = mysqli_query($conn, $sql); 
    if (mysqli_num_rows($result)) { 
        while ($row=mysqli_fetch_assoc($result)) {
            $tech_already_exist=$row['tech_already_exist'];
            $tech_to_start=$row['tech_to_start'];
            $nontech_to_start=$row['nontech_to_start'];
            $nontech_already_exist=$row['nontech_already_exist'];
            $firstname=$row['firstname'];
            $k_code=$row['k_code'];
        }
    }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Kedosic | <?php echo $_SESSION['user']['firstname'] ?></title>




    <!-- Template CSS -->

    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/style2.css" />
    <link rel="stylesheet" href="../assets/css/utilities.css" />


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

    </style>

</head>



<body>


    <!--- HOME PAGE START --->
    <main class="main-area">


        <div class="left dashboard-sidebar">
            <?php include 'sidebar.php'; ?>
        </div>


        <div class="right dashboard-main-area">

            <div class="page-title"><?php echo $_SESSION['user']['firstname']." ".$_SESSION['user']['lastname'] ?></div>

            <div class="page-subtitle"><span>My Courses</span></div>

            <!--=== HOME PAGE START ===--->
            <section class="home-page">


                <!-- cards container start --->
                <section class="cards-container">
                    <div class="card">
                        <div class="title">BUSINESS MANAGEMENT CRASH COURSE</div>
                        <div class="subtitle">Getting started by</div>
                        <div class="detail">Paul John</div>
                    </div>

                    <div class="card">
                        <div class="title">BUSINESS MANAGEMENT CRASH COURSE</div>
                        <div class="subtitle">Getting started by</div>
                        <div class="detail">Paul John</div>
                    </div>

                    <div class="card">
                        <div class="title">BUSINESS MANAGEMENT CRASH COURSE</div>
                        <div class="subtitle">Getting started by</div>
                        <div class="detail">Paul John</div>
                    </div>

                    <div class="card">
                        <div class="title">BUSINESS MANAGEMENT CRASH COURSE</div>
                        <div class="subtitle">Getting started by</div>
                        <div class="detail">Paul John</div>
                    </div>

                    <div class="card">
                        <div class="title">BUSINESS MANAGEMENT CRASH COURSE</div>
                        <div class="subtitle">Getting started by</div>
                        <div class="detail">Paul John</div>
                    </div>

                    <div class="card">
                        <div class="title">BUSINESS MANAGEMENT CRASH COURSE</div>
                        <div class="subtitle">Getting started by</div>
                        <div class="detail">Paul John</div>
                    </div>
                </section>
                <!-- cards container end --->



            </section>
            <!--=== home page end ===--->
        </div>





    </main>
    <!--- HOME PAGE END --->
</body>

</html>

<script src="../assets/js/jquery-3.3.1.min.js"></script>
<!-- <script src="assets/js/jquery-2.1.4.min.js"></script> -->
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/utilities.js"></script>

<script>

</script>