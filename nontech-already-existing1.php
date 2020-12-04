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


    
    <div class="formtop">
        <!-- header start --->
        <?php include 'header.php'; ?>
        <!-- header end --->
    </div>
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
                    <div class="title">NON-TECH BASED - Already existing </div>
                    <div class="steps">Step 1 of 3</div>
                    <div class="cb1"></div>

                    <label for="">Do you have any business startup experience(if yes, how many?)</label>
                    <input type="text" class="field startup_experience">



                    <label for="">What is your business or product name?</label>
                    <input type="text" class="field prod_name">

                    <label for="">DO you have a business plan or model?</label>
                    <input type="text" class="field bus_plan">

                    <label for="">Where is your business headquatered or located?</label>
                    <input type="text" class="field headquatered">

                    <label for="">How old is you business in month?</label>
                    <input type="text" class="field bus_age">

                    <label for="">Which sub industry is your business?</label>
                    <select name="" id="" class="field bus_industry">
                    <option>Medicine</option>
                        <option>Education</option>
                        <option>Technology</option>
                        <option>Agriculture</option>
                        <option>Transportation</option>
                        <option>Food</option>
                        <option>Commerce</option>
                        <option>Environment and Health</option>
                        <option>Manufacturing</option>
                        <option>Engineering</option>
                        <option>Oil and Gas</option>
                        <option>Marketing</option>
                        <option>Banking</option>
                        <option>Logistics</option>
                        <option>Training</option>
                        <option>Entertainment</option>
                    </select>
                    
                    <div class="btns-container">
                        <button class="next-btn next_to_two">Next</button>
                        <a href="select-category" class="cancel-btn">Cancel</a>
                    </div>

                </div>



                <div class="row2 step2" style="display:none;">
                    <div class="title">NON-TECH BASED - Already existing </div>
                    <div class="steps">Step 2 of 3</div>
                    <div class="cb2"></div>

                    <label for="">Tell us about your startup idea?</label>
                    <textarea name="" id="" class="textarea-field strtup_idea"></textarea>

                    <label for="">Outline your value proposition?</label>
                    <textarea name="" id="" class="textarea-field proposition"></textarea>

                    <label for="">State and describe your product's features and services</label>
                    <textarea name="" id="" class="textarea-field prod_feature"></textarea>

                    <label for="">Mention at least 3 competitiors?</label>
                    <input type="text" class="field competitiors">

                    <label for="">What stage of development are you?</label>
                    <select name="" id="" class="field dev_stage">
                        <option>Market survey and analysis</option>
                        <option>Business development</option>
                        <option>Idea Testing</option>
                        <option>Branding</option>
                        <option>Scouting for Investment</option>
                        <option>Beta Testing</option>
                        <option>About to Launch</option>
                    </select>

                    <label for="">Is your business or product currently making revenue(if yes, how much)?</label>
                    <input type="text" class="field revenue">

                    <label for="">How many persons are in your team?</label>
                    <input type="text" class="field team_no"> 
                    
                     <div class="btns-container">
                        <button class="next-btn next_to_three">Next</button>
                        <a style="cursor:pointer;" class="cancel-btn back_to_1">Cancel</a>
                    </div>

                </div>

                




                <div class="row2 step3"  style="display:none;">
                    <div class="title">NON-TECH BASED - Already existing </div>
                    <div class="steps">Step 3 of 3</div>
                    <div class="cb3"></div>

                    <label for="">Do you have a business plan or model?</label>
                    <input type="text" class="field bus_plan">

                    <label for="">What are you major challenges?</label>
                    <textarea name="" id="" class="textarea-field challenges"></textarea>

                    <label for="">Do you have your partner's consent to take part in this program?</label>
                    <input type="text" class="field partners_consent">

                    <label for="">Is this idea in your field of experience?</label>
                    <input type="text" class="field field_of_experience">

                    <label for="">What marketing channel is your product currently using?</label>
                    <select name="" id="" class="field marketing_channel">
                        <option>Social media</option>
                        <option>Affiliate marketing</option>
                        <option>Direct offline</option>
                        <option>Content marketing</option>
                        <option>Digital marketing</option> 
                    </select>

                    <label for="">Have you ever received an investment in your business?</label>
                    <input type="text" class="field received_investment">

                    <label for="">How many hours are you currently working on your ideas per week?</label>
                    <input type="text" class="field working_hours">
                    
                    <div class="btns-container">
                        <button class="submit-btn done" id="done" data-user="<?php echo $_SESSION['user']['k_code'] ?>">Done</button>
                        <a style="cursor:pointer;"   class="cancel-btn back_to_2">Cancel</a>
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

        
        $('.back_to_1').click(function(){
            $('.step2').hide()
            $('.step1').fadeIn()
            $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
        })


        $('.back_to_2').click(function(){
            $('.step3').hide()
            $('.step2').fadeIn()
            $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
        })

        $('.next_to_two').click(function(){
            let startup_experience = $(".startup_experience").val()
            let prod_name = $(".prod_name").val()
            let bus_plan = $(".bus_plan").val()
            let headquatered = $(".headquatered").val()
            let bus_age = $(".bus_age").val()
            let bus_industry = $(".bus_industry").val() 

            if (startup_experience.length < 1 || prod_name.length < 1 || bus_plan.length < 1 || headquatered.length < 1 || bus_age.length < 1 || bus_industry.length < 1) {
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



        $('.next_to_three').click(function(){ 
            let strtup_idea = $(".strtup_idea").val()
            let proposition = $(".proposition").val()
            let prod_feature = $(".prod_feature").val()
            let competitiors = $(".competitiors").val()
            let dev_stage = $(".dev_stage").val()
            let revenue = $(".revenue").val() 
            let team_no = $(".team_no").val()  


            if (strtup_idea.length < 1 || proposition.length < 1 || prod_feature.length < 1 || competitiors.length < 1 || dev_stage.length < 1 || revenue.length < 1|| team_no.length < 1) {
                // alert("")
                $('.cb2').html("<span style='color:crimson;'>Fill out all forms</span>")
                $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
            }else{
                $('.cb2').html("")
                $('.step2').hide()
                $('.step3').fadeIn()
                $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
            }

            
        })


        $('.done').click(function(){ 
            let done = $(this).attr("id");
            let user = $(this).data("user")

            let startup_experience = $(".startup_experience").val()
            let prod_name = $(".prod_name").val()
            let bus_plan = $(".bus_plan").val()
            let headquatered = $(".headquatered").val()
            let bus_age = $(".bus_age").val()
            let bus_industry = $(".bus_industry").val()


             
            let challenges = $(".challenges").val()
            let partners_consent = $(".partners_consent").val()
            let field_of_experience = $(".field_of_experience").val()
            let marketing_channel = $(".marketing_channel").val()
            let received_investment = $(".received_investment").val() 
            let working_hours = $(".working_hours").val()

            let strtup_idea = $(".strtup_idea").val()
            let proposition = $(".proposition").val()
            let prod_feature = $(".prod_feature").val()
            let competitiors = $(".competitiors").val()
            let dev_stage = $(".dev_stage").val()
            let revenue = $(".revenue").val() 
            let team_no = $(".team_no").val() 


            if (bus_plan.length < 1 || challenges.length < 1 || partners_consent.length < 1 || field_of_experience.length < 1 || marketing_channel.length < 1 || received_investment.length < 1|| working_hours.length < 1) {
                // alert("")
                $('.cb3').html("<span style='color:crimson;'>Fill out all forms</span>")
                $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
            }else{
                $('.cb3').html("")
                
                $.ajax({
                    url:"config/scripts/nontech_already_exist.php",
                    method:"POST",
                    async:true,
                    data:{
                        "done":done,
                        "startup_experience":startup_experience,
                        "prod_name":prod_name,
                        "bus_plan":bus_plan,
                        "headquatered":headquatered,
                        "bus_age":bus_age,
                        "bus_industry":bus_industry,  

                        "challenges":challenges,
                        "partners_consent":partners_consent,
                        "field_of_experience":field_of_experience,
                        "marketing_channel":marketing_channel,
                        "received_investment":received_investment,
                        "working_hours":working_hours,

                        "strtup_idea":strtup_idea,
                        "proposition":proposition,
                        "prod_feature":prod_feature,
                        "competitiors":competitiors,
                        "dev_stage":dev_stage,
                        "revenue":revenue,
                        "team_no":team_no,

                        "user":user,
                    },
                    success:function(data){ 
                        $('.cb3').html(data)
                        $('.loader').show(); 
                            
                    },
                })
            }

            
        })
    })
</script>