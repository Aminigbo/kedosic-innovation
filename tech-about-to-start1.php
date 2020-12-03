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
    <title>Kedosic | About</title>




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
        <div action="tech-about-to-start2">
            <div class="form">

                <div class="row1">
                    <div class="centered-div">
                        <img src="assets/images/3.svg" alt="">
                    </div>
                </div>

                <div class="row2 step1" >
                    <div class="title">TECH BASED - About to start business</div>
                    <div class="steps">Step 1 of 3</div>
                    <div class="cb1"></div>

                    <label for="">What is Your business or Product name?</label>
                    <input type="text" class="field bus_name">

                    <label for="">Where will your business be headquatered?</label>
                    <input type="text" class="field headquatered">

                    <label for="">What kind of product is it?</label>
                    <select name="" id="" class="field product_kind">
                        <option value="">[Select type]</option>
                        <option value="Tech">Tech</option>
                    </select>

                    <label for="">Select the area you are targeting?</label>
                    <select name="" id="" class="field targeting">
                        <option  value="">[Select region]</option>
                        <option value="Tech">Tech</option>
                    </select>

                    <!-- <label for="">Message?</label>
                    <textarea name="" id="" class="textarea-field"></textarea> -->

                    <div class="btns-container">
                        <button class="next-btn next_to_two">Next</button>
                        <!-- <a href="" class="cancel-btn">Cancel</a> -->
                    </div>

                </div>


                <div class="row2 step2" style="display:none;">
                <div class="title">TECH BASED - About to start business</div>
                    <div class="steps">Step 2 of 3</div>
                    <div class="cb2"></div>

                    <label for="">Tell us about your start up ideas?</label>
                    <textarea name="" id="" class="textarea-field start_up_ideas"></textarea>

                    <label for="">State and describe your product's features and services?</label>
                    <textarea name="" id="" class="textarea-field product_features"></textarea>

                    <label for="">What stage of development are you?</label>
                    <select name="" id="" class="field develop_stage">
                        <option value="">[Select stage]</option>
                        <option value="bus_plan">Business Plan</option>
                    </select>  

                    <div class="btns-container">
                        <button class="next-btn next_to_three">Next</button>
                        <a style="cursor:pointer;margin:7px;" class="cancel-btn back_to_one">Back</a>
                    </div>
                </div>




                <div class="row2 step3" style="display:none;">
                <div class="title">TECH BASED - About to start business</div>
                    <div class="steps">Step 3 of 3</div> 
                    <div class="cb3"></div>

                    <label for="">How many persons are in your team?</label>
                    <select name="" id="" class="field team_no">
                        <option>[1 - 5]</option>
                    </select>

                    <label for="">What are your challenges?</label>
                    <input type="text" class="field  challenges">

                    <label for="">Do you have your partner's consent to partake in this program?</label>
                    <input type="text" class="field partner_consent">

                    <label for="">Is this idea in your field of experience?</label>
                    <input type="text" class="field experience">

                    <label for="">How many hours are you currently working on your idea per week?</label>
                    <input type="text" class="field working_hours"> 

                    <div class="btns-container">
                        <button class="next-btn done" id="done" data-user="K556K7L">Done</button>
                        <a style="cursor:pointer;margin:7px;" class="cancel-btn back_to_two">Back</a>
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
<!-- <script src="assets/js/jquery-2.1.4.min.js"></script> -->
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/utilities.js"></script>
<script src="jquery.min.js"></script>
<script>



$(document).ready(function(){
    $('.next_to_two').click(function(){
        let bus_name = $(".bus_name").val()
        let headquatered = $(".headquatered").val()
        let product_kind = $(".product_kind").val()
        let targeting = $(".targeting").val()

        if (bus_name.length < 1 || headquatered.length < 1 || product_kind.length < 1 || targeting.length < 1) {
            // alert("")
            $('.cb1').html("<span style='color:crimson;'>Fill out all forms</span>")
        }else{
            $('.cb1').html("")
            $('.step1').hide()
            $('.step2').fadeIn()
        }

         
    })

    



    $('.next_to_three').click(function(){
        let start_up_ideas = $(".start_up_ideas").val()
        let product_features = $(".product_features").val()
        let develop_stage = $(".develop_stage").val()

        if (start_up_ideas.length < 1 || product_features.length < 1 || develop_stage.length < 1 ) {
            // alert("")
            $('.cb2').html("<span style='color:crimson;'>Fill out all forms</span>")
        }else{
            $('.cb2').html("")
            $('.step2').hide()
            $('.step3').fadeIn()
        }
        
    })

    $('.back_to_one').click(function(){
        // alert("")
        $('.step2').hide()
        $('.step1').fadeIn()
    })

    $('.back_to_two').click(function(){
        // alert("")
        $('.step3').hide()
        $('.step2').fadeIn()
    })


//  done
 
    $('.done').click(function(){
        let done = $(this).attr("id");
        let user = $(this).data("user")
        let start_up_ideas = $(".start_up_ideas").val()
        let product_features = $(".product_features").val()
        let develop_stage = $(".develop_stage").val()

        let bus_name = $(".bus_name").val()
        let headquatered = $(".headquatered").val()
        let product_kind = $(".product_kind").val()
        let targeting = $(".targeting").val()

        let team_no = $(".team_no").val()
        let challenges = $(".challenges").val()
        let partner_consent = $(".partner_consent").val()
        let experience = $(".experience").val()
        let working_hours = $(".working_hours").val()

        if (team_no.length < 1 || challenges.length < 1 || partner_consent.length < 1|| experience.length < 1|| working_hours.length < 1 ) {
            // alert("")
            $('.cb3').html("<span style='color:crimson;'>Fill out all forms</span>")
        }else{
            
            $('.cb3').html("")
            
            $.ajax({
                url:"config/scripts/tech_to_start.php",
                method:"POST",
                async:true,
                data:{
                    "done":done,
                    "start_up_ideas":start_up_ideas,
                    "product_features":product_features,
                    "develop_stage":develop_stage,
                    "bus_name":bus_name,
                    "headquatered":headquatered,
                    "product_kind":product_kind,
                    "targeting":targeting,
                    "team_no":team_no,
                    "challenges":challenges,
                    "partner_consent":partner_consent,
                    "experience":experience,
                    "working_hours":working_hours,
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