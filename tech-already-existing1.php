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
                    <div class="title">TECH BASED - Already Existing</div>
                    <div class="steps">Step 1 of 4</div>
                    <div class="cb1"></div>

                    <label for="">Do you have any business startup experience( if yes, how many years)?</label>
                    <input type="text" class="field start_up_experience">

                    <label for="">What is your product or business name</label>
                    <input type="text" class="field bus_name">

                    <label for="">Where is your business currently headquatered or located?</label>
                    <select name="" id="" class="field headquatered">
                        <option>Abuja</option>
                    </select>

                    <label for="">How old is your business in months</label>
                    <input type="text" class="field bus_age">


                    <div class="btns-container">
                        <button class="next-btn go_to_two">Next</button>
                        <a href="select-category" class="cancel-btn">Cancel</a>
                    </div>

                </div>





                <div class="row2 step2" style="display:none;">
                    <div class="title">TECH BASED - Already Existing</div>
                    <div class="steps">Step 2 of 4</div>
                    <div class="cb2"></div> 

                <label for="">State and describe your product's features and services?</label>
                    <textarea name="" id="" class="textarea-field prod_features"></textarea>

                    <label for="">Mention at least 3 competitors?</label>
                    <input type="text" class="field competitors">

                    <label for="">What stage of development are you?</label>
                    <select name="" id="" class="field stage_dev">
                        <option>Final stage</option>
                    </select>

                    <label for="">Is this business or product in your field of experience?</label>
                    <input type="text" class="field field_of_expe">

                    <label for="">What marketing channel is your business or product currently using?</label>
                    <select name="" id="" class="field marketing_channel">
                        <option>Social Media</option>
                    </select>

                    
                    
                    <div class="btns-container">
                        <button class="next-btn go_to_three">Next</button>
                        <a href="" class="cancel-btn back_to_one">Back</a>
                    </div>

                </div>




                <div class="row2 step3"  style="display:none;">
                <div class="title">TECH BASED - Already Existing</div>
                    <div class="steps">Step 3 of 4</div>
                    <div class="cb3"></div>

                    <label for="">What kind of product is it?</label>
                    <select name="" id="" class="field product_kind">
                        <option>Mobile App</option>
                    </select>


                    <label for="">Select the area you are targeting?</label>
                    <select name="" id="" class="field target">
                        <option>Lagos</option>
                    </select>


                    <label for="">Tell us about your product's idea or concept?</label>
                    <textarea name="" id="" class="textarea-field idea_concept"></textarea>

                    <label for="">Out line your value proposition( why your product is better)?</label>
                    <textarea name="" id="" class="textarea-field value_prop"></textarea>
                    
                    <div class="btns-container">
                        <button class="next-btn go_to_four">Next</button>
                        <a href="" class="cancel-btn back_to_two">Back</a>
                    </div>

                </div>





                <div class="row2 step4"  style="display:none;">
                    <div class="title">TECH BASED - Already Existing</div>
                    <div class="steps">Step 4 of 4</div>
                    <div class="cb4"></div>

                    <label for="">Is you product or business currently making some money (if yes, how much)?</label>
                    <input type="text" class="field making_money">

                    <label for="">How many persons are in your team</label>
                    <select name="" id="" class="field team_no">
                        <option>1 - 5</option>
                    </select>

                    <label for="">Do you have your partner's consent to be part of this program?</label>
                    <input type="text" class="field partner_consent">
                    
                    <label for="">Have you ever received an investment on your product on business</label>
                    <input type="text" class="field investment">

                    <label for="">How many hours are you currently working on your product per week?</label>
                    <input type="text" class="field working_hours">

                    <div class="btns-container">
                        <button class="submit-btn done" id="done" data-user="<?php echo $_SESSION['user']['k_code'] ?>">Done</button>
                        <a href="" class="cancel-btn back_to_three">Back</a>
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

    $('.back_to_three').click(function(){
        // alert("")
        $('.step4').hide()
        $('.step3').fadeIn()
        $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
    })

    $('.back_to_two').click(function(){
        // alert("")
        $('.step3').hide()
        $('.step2').fadeIn()
        $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
    })

    $('.back_to_one').click(function(){
        // alert("")
        $('.step2').hide()
        $('.step1').fadeIn()
        $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
    })





    $('.go_to_two').click(function(){
        let start_up_experience = $(".start_up_experience").val()
        let bus_name = $(".bus_name").val()
        let headquatered = $(".headquatered").val()
        let bus_age = $(".bus_age").val()
        


        if (start_up_experience.length < 1 || bus_name.length < 1 || headquatered.length < 1|| bus_age.length < 1 ) {
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



    $('.go_to_three').click(function(){
        let prod_features = $(".prod_features").val()
        let competitors = $(".competitors").val()
        let stage_dev = $(".stage_dev").val()
        let field_of_expe = $(".field_of_expe").val()
        let marketing_channel = $(".marketing_channel").val()
        


        if (prod_features.length < 1 || competitors.length < 1 || stage_dev.length < 1 || field_of_expe.length < 1  || marketing_channel.length < 1 ) {
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


    $('.go_to_four').click(function(){
        let product_kind = $(".product_kind").val()
        let target = $(".target").val()
        let idea_concept = $(".idea_concept").val()
        let value_prop = $(".value_prop").val()
        


        if (product_kind.length < 1 || target.length < 1 || idea_concept.length < 1|| value_prop.length < 1 ) {
            // alert("")
            $('.cb3').html("<span style='color:crimson;'>Fill out all forms</span>")
            $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
        }else{
            $('.cb3').html("")
            $('.step3').hide()
            $('.step4').fadeIn()
            $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
        }
        
    })
    

    $('.done').click(function(){
        let done = $(this).attr("id");
        let user = $(this).data("user")

        let making_money = $(".making_money").val()
        let team_no = $(".team_no").val()
        let partner_consent = $(".partner_consent").val()
        let investment = $(".investment").val()
        let working_hours = $(".working_hours").val()

        let start_up_experience = $(".start_up_experience").val()
        let bus_name = $(".bus_name").val()
        let headquatered = $(".headquatered").val()
        let bus_age = $(".bus_age").val()

        let prod_features = $(".prod_features").val()
        let competitors = $(".competitors").val()
        let stage_dev = $(".stage_dev").val()
        let field_of_expe = $(".field_of_expe").val()
        let marketing_channel = $(".marketing_channel").val()

        let product_kind = $(".product_kind").val()
        let target = $(".target").val()
        let idea_concept = $(".idea_concept").val()
        let value_prop = $(".value_prop").val()
        
        


        if (making_money.length < 1 || team_no.length < 1 || partner_consent.length < 1 || investment.length < 1  || working_hours.length < 1 ) {
            // alert("")
            $('.cb4').html("<span style='color:crimson;'>Fill out all forms</span>")
            $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
        }else{
            $('.cb4').html("")

            $.ajax({
                url:"config/scripts/tech_already_exist.php",
                method:"POST",
                async:true,
                data:{
                    "done":done,
                    "making_money":making_money,
                    "team_no":team_no,
                    "partner_consent":partner_consent,
                    "investment":investment,
                    "working_hours":working_hours,
                    "start_up_experience":start_up_experience,
                    "bus_name":bus_name,
                    "headquatered":headquatered,
                    "bus_age":bus_age,
                    "prod_features":prod_features,
                    "competitors":competitors,
                    "stage_dev":stage_dev,
                    "field_of_expe":field_of_expe,
                    "marketing_channel":marketing_channel,
                    "product_kind":product_kind,
                    "target":target,
                    "idea_concept":idea_concept,
                    "value_prop":value_prop, 
                    "user":user,
                },
                success:function(data){ 
                    $('.cb4').html(data)
                    $('.loader').show(); 
                        
                },
            })
            
        }
        
    })

})

</script>