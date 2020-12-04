<!-- main blue color: #1D76BC --->
<!-- homepage grey background-color: #E8E8E8 --->
<!-- apply now green color btn: #009345 --->
<!-- site orange color : #FF8D41 --->
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
    <title>Kedosic | Apply</title>




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

    <!-- form component start --->
    <section class="form-component">
        <div>
            <div class="form">

                <div class="row1">
                    <div class="centered-div">
                        <img src="assets/images/3.svg" alt="">
                    </div>
                </div>

                <div class="row2 step1">
                    <div class="title">NON-TECH BASED - About to start </div> 
                    <div class="steps">Step 1 of 2</div>
                    <div class="cb1"></div>

                    <label for="">What is your business/product name?</label>
                    <input type="text" class="field product_name">

                    <label for="">Where will your business be headquatered or located?</label>
                    <input type="text" class="field headquatered headquatered">


                    <label for="">Which Sub industry is your business?</label>
                    <select name="" id="" class="field sub_business">
                        <option>Entertainment</option>
                    </select>


                    <label for="">Tell us about your startup idea?</label>
                    <textarea name="" id="" class="textarea-field startup_idea"></textarea>


                    <label for="">State and describe your product's features and services?</label>
                    <textarea name="" id="" class="textarea-field product_feature"></textarea>

                    <label for="">Mention at least 3 competitors</label>
                    <input type="text" class="field competitors">
                    
                    
                    <div class="btns-container">
                        <button class="submit-btn to_step_two">Next</button>
                        <a href="select-category" class="cancel-btn">Cancel</a>
                    </div>

                </div>


                <div class="row2 step2" style="display:none">
                    <div class="title">NON-TECH BASED - About to start </div>
                    <div class="steps">Step 2 of 2</div>
                    <div class="cb2"></div>
                    
                    
                    <label for="">What stage of development are you?</label>
                    <select name="" id="" class="field dev_stage">
                        <option>Entertainment</option>
                    </select>

                    <label for="">How many persons are in your team?</label>
                    <input type="text" class="field team_no">

                    <label for="">DO you have a business plan or model?</label>
                    <input type="text" class="field bus_plan">

                    <label for="">What are your major challenges?</label>
                    <input type="text" class="field challenges">

                    <label for="">Do you have your partner's consent to take part in this program?</label>
                    <input type="text" class="field partners_consent">

                    <label for="">Is this idea in your field of experience?</label>
                    <input type="text" class="field field_of_experience">

                    <label for="">How many hours are you currently working on your idea per week?</label>
                    <input type="text" class="field working_hours">
                    
                    <div class="btns-container">
                        <button class="submit-btn done" id="done" data-user="<?php echo $_SESSION['user']['k_code'] ?>">Done</button>
                        <a style="cursor:pointer;" class="cancel-btn back_to_one">Back</a>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!-- form component end ---->


    <!-- footer start ---->
    <?php include 'footer.php'; ?>
    <!--- footer end --->

    <div class="loader" style="width:100%;height:100%;position:fixed;background-color:rgb(0,0,0,0.7);top:0px;
    left:0px;z-index:10000;display:none;">
    <!-- <img src="assets/loader/785.gif" alt="assets/loader/832.gif"> -->
    </div>
</body>

</html>

<!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/utilities.js"></script>

<script>
    $(document).ready(function(){
        $('.to_step_two').click(function(){
            let product_name = $(".product_name").val()
            let headquatered = $(".headquatered").val()
            let sub_business = $(".sub_business").val()
            let startup_idea = $(".startup_idea").val()
            let product_feature = $(".product_feature").val()
            let competitors = $(".competitors").val() 

            if (product_name.length < 1 || headquatered.length < 1 || sub_business.length < 1 || startup_idea.length < 1 || product_feature.length < 1 || competitors.length < 1) {
                // alert("")
                $('.cb1').html("<span style='color:crimson;'>Fill out all forms</span>")
                $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
            }else{
                $('.cb1').html("")
                $('.step1').hide()
                $('.step2').fadeIn()
                $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
            }

            
        })


        $('.done').click(function(){
            let done = $(this).attr("id");
            let user = $(this).data("user")

            let product_name = $(".product_name").val()
            let headquatered = $(".headquatered").val()
            let sub_business = $(".sub_business").val()
            let startup_idea = $(".startup_idea").val()
            let product_feature = $(".product_feature").val()
            let competitors = $(".competitors").val()

            let dev_stage = $(".dev_stage").val()
            let team_no = $(".team_no").val()
            let bus_plan = $(".bus_plan").val()
            let challenges = $(".challenges").val()
            let partners_consent = $(".partners_consent").val()
            let field_of_experience = $(".field_of_experience").val() 
            let working_hours = $(".working_hours").val()


            if (dev_stage.length < 1 || team_no.length < 1 || bus_plan.length < 1 || challenges.length < 1 || partners_consent.length < 1 || field_of_experience.length < 1 || working_hours.length < 1) {
                // alert("")
                $('.cb2').html("<span style='color:crimson;'>Fill out all forms</span>")
                $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
            }else{
                $('.cb2').html("")
                $.ajax({
                url:"config/scripts/nontech_to_start.php",
                method:"POST",
                async:true,
                data:{
                    "done":done,
                    "dev_stage":dev_stage,
                    "team_no":team_no,
                    "bus_plan":bus_plan,
                    "challenges":challenges,
                    "partners_consent":partners_consent,
                    "field_of_experience":field_of_experience,
                    "working_hours":working_hours, 

                    "product_name":product_name,
                    "headquatered":headquatered,
                    "sub_business":sub_business,
                    "startup_idea":startup_idea,
                    "product_feature":product_feature,
                    "competitors":competitors,

                    "user":user,
                },
                success:function(data){ 
                    $('.cb2').html(data)
                    $('.loader').show(); 
                        
                },
            })
            }

            
        })



    })
</script>