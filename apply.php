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

                return false;
                
            }else if(lastname.length < 3 ){ 
                $(".cb").html("<span style='color:crimson;'>Lastname too short</span>")
                return false;

            }else if(IsEmail(email)==false){ 
                $(".cb").html("<span style='color:crimson;'>Invalid email</span>")
                return false;

            }else if (phone.length != 10) {
                $(".cb").html("<span style='color:crimson;'>Invalid phone</span>")
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