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
    <title>Kedosic | Home</title>




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


    <!--- FAQ PAGE START --->
    <main class="faq-page">

        <div class="title">FREQUENTLY ASKED QUESTIONS</div>
        <div class="sub-title">We have the answers to some of your questions</div>

        <div class="faq-container">

            <div class="box">
                <div class="box">
                    <div class="faq-title" faq_id="1"> <i class="fa fa-question-circle"></i> <span>Do i need a team</span> <i id="angle_1" class="fa fa-angle-down angle"></i> </div>
                    <div class="faq-content" id="1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box">
                    <div class="faq-title" faq_id="2"> <i class="fa fa-question-circle"></i> <span>Do i need a team</span> <i id="angle_2" class="fa fa-angle-down angle"></i> </div>
                    <div class="faq-content" id="2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
            </div>


            <div class="box">
                <div class="box">
                    <div class="faq-title" faq_id="3"> <i class="fa fa-question-circle"></i> <span>Do i need a team</span> <i id="angle_3" class="fa fa-angle-down angle"></i> </div>
                    <div class="faq-content" id="3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box">
                    <div class="faq-title" faq_id="4"> <i class="fa fa-question-circle"></i> <span>Do i need a team</span> <i id="angle_4" class="fa fa-angle-down angle"></i> </div>
                    <div class="faq-content" id="4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box">
                    <div class="faq-title" faq_id="5"> <i class="fa fa-question-circle"></i> <span>Do i need a team</span> <i id="angle_5" class="fa fa-angle-down angle"></i> </div>
                    <div class="faq-content" id="5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
            </div>


        </div>




    </main>
    <!--- FAQ PAGE END --->

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
    // var is_down = false;
    // var prev_id;
    // $(".faq-title").click(function() {
    //     prev_id = $(this).attr("id");
    //     if (is_down && prev_id == ) {
    //         var faq_id = $(this).attr("id");
    //         $("#faq-content" + faq_id).slideDown();
    //     }


    // })













    var faq_id;
    var is_down = false;
    $(".faq-title").click(function() {

        $(".faq-content").slideUp();
        $("#angle_" + faq_id).removeClass("fa-angle-up");
        $("#angle_" + faq_id).addClass("fa-angle-down");

        if (faq_id == $(this).attr("faq_id") && is_down) {
            faq_id = $(this).attr("faq_id")
            $("#" + faq_id).slideUp();
            is_down = false;
            $("#angle_" + faq_id).removeClass("fa-angle-up");
            $("#angle_" + faq_id).addClass("fa-angle-down");

        } else if (faq_id == $(this).attr("faq_id") && !is_down) {
            faq_id = $(this).attr("faq_id")
            $("#" + faq_id).slideDown();
            is_down = true;
            $("#angle_" + faq_id).removeClass("fa-angle-down");
            $("#angle_" + faq_id).addClass("fa-angle-up");

        } else if (faq_id != $(this).attr("faq_id")) {
            faq_id = $(this).attr("faq_id")
            $("#" + faq_id).slideDown();
            is_down = true;
            $("#angle_" + faq_id).removeClass("fa-angle-down");
            $("#angle_" + faq_id).addClass("fa-angle-up");
        }



    })
</script>