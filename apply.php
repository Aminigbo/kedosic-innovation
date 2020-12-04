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

  if (isLoggedIn()) {
    header("location:account"); 
  }
?>
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

        /* small screen */
        @media only screen and (max-width: 690px) {
            .div{
                width:90%;
                height:50%;
                background-color:white;
                margin-left:5%;
                margin-top:40%;
                border-radius:10px;;
                position:relative;
            }
        }

        /* large screen */
        @media only screen and (min-width: 690px) {
            .div{
                border-radius:10px;;
                width:30%;
                height:40%;
                background-color:white;
                margin-left:35%;
                margin-top:10%;
                position:relative;
            }
        }
    </style>

</head>



<body>


<div class="formtop">
        <!-- header start --->
        <?php include 'header.php'; ?>
        <!-- header end --->
    </div>


    <!--- APPLY PAGE START --->
    <main class="apply-page">


        <section class="form-container">
            <div class="centered-div">
                <img src="assets/images/icons/kedosic.svg" alt="">
            </div>
            <div class="title">Apply</div>

            <div style="text-align:center;" class="cb"></div> 

            <label for="">Firstname </label>
            <input type="text" class="field firstname">

            <label for="">Lastname </label>
            <input type="text" class="field lastname">

            <label for="">Email</label> 
            <input type="text" class="field email">

            <label for="">Phone number</label>
            <div class="field-container">
                <div class="row1">+234</div>
                <input type="text" class="row2 phone" placeholder="80xxxxxxxx">
            </div>

            <div class="apply-btn-container">
                <button class="apply-btn continue" id="reg">Continue</button>
            </div>

        </section>





    </main>
    <!--- APPLY PAGE END --->

    <!-- footer start ---->
    <?php include 'footer.php'; ?>
    <!--- footer end --->
    
    <div class="loader" style="width:100%;height:100%;position:fixed;background-color:rgb(0,0,0,0.7);top:0px;
    left:0px;z-index:10000;display:none;">
    <!-- <img src="assets/loader/785.gif" alt="assets/loader/832.gif"> -->
    </div>

    <div class="success" style="width:100%;height:100%;position:fixed;background-color:rgb(0,0,0,0.7);top:0px;
    left:0px;z-index:10000;display:none ;">
    <div class="div" >
        <b class=" " style="position:absolute;right:20px;bottom:10px;font-size:20px;
        background-color:grey;color:white;padding:1px 10px;border-radius:7px;cursor:pointer;"
        onclick="window.location='select-category'">
        close
        </b>

        <div style="color: #354168;text-align:center;"> <br>
        <h2 style="color: #354168;text-align:center;">SUCCESSFUL</h2>
        </div> 
        <div style="padding:10px 25px;font-size:20px;text-align:left;"> 
        

        <span style="color: #354168;">Your registeration with kedosic innovation was successful. <br>
            <span style="color: #354168;">Your K-Code 
            <b><h class="k_code"></h></b>
             has been sent to your email</span>, <br>
            Keep it safe.
        </span>

        

        <div style="text-align:center;font-size:18px;font-weight:lighter;">
        <br>  <br>
        
        </div>
        </div>
        
    </div>
    </div>
</body>

</html>

<!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
<script src="jquery.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/utilities.js"></script>

<script>
    $(document).ready(function() {

        function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
      }
        
        $(".continue").click(function(){
            let reg =  $(this).attr('id');
            let firstname = $(".firstname").val()
            let lastname = $(".lastname").val()
            let email = $(".email").val()
            let phone = $(".phone").val()
            
            if (firstname.length < 3 ) {
                // ||
                $(".cb").html("<span style='color:crimson;'>Firstname too short</span>")
                $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
                return false;
                
            }else if(lastname.length < 3 ){ 
                $(".cb").html("<span style='color:crimson;'>Lastname too short</span>")
                $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
                return false;

            }else if(IsEmail(email)==false){ 
                $(".cb").html("<span style='color:crimson;'>Invalid email</span>")
                $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
                return false;

            }else if (phone.length != 10) {
                $(".cb").html("<span style='color:crimson;'>Invalid phone</span>")
                $('html,body').animate({ scrollTop: $(".formtop").offset().top}, 400);
                return false;

            }else{ 
                $(".loader").show()
                 
                $.ajax({
                    url:"config/scripts/ajax.php",
                    method:"POST",
                    async:true,
                    data:{
                        "register":reg,
                        "firstname":firstname, 
                        "lastname":lastname,
                        "email":email,
                        "phone":phone,
                    },
                    success:function(data){ 
                        $('.cb').html(data) 
                        
                    },
                })
            }
        }) 
    })
</script>