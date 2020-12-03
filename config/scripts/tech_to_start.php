<?php include '../db/db.php';



// users first registeration
if (isset($_POST['done'])) {
    
    $start_up_ideas = mysqli_real_escape_string($conn, $_POST['start_up_ideas']);
    $product_features = mysqli_real_escape_string($conn, $_POST['product_features']);
    $develop_stage = mysqli_real_escape_string($conn, $_POST['develop_stage']);
    $bus_name = mysqli_real_escape_string($conn, $_POST['bus_name']);
    $headquatered = mysqli_real_escape_string($conn, $_POST['headquatered']);
    $product_kind = mysqli_real_escape_string($conn, $_POST['product_kind']);
    $targeting = mysqli_real_escape_string($conn, $_POST['targeting']);
    $team_no = mysqli_real_escape_string($conn, $_POST['team_no']);
    $challenges = mysqli_real_escape_string($conn, $_POST['challenges']);
    $partner_consent = mysqli_real_escape_string($conn, $_POST['partner_consent']);
    $experience = mysqli_real_escape_string($conn, $_POST['experience']);
    $working_hours = mysqli_real_escape_string($conn, $_POST['working_hours']);
    $user = mysqli_real_escape_string($conn, $_POST['user']);


    if (empty($start_up_ideas) ||empty($product_features) || empty($develop_stage)|| empty($bus_name)
        ||empty($headquatered)||empty($product_kind)||empty($targeting)||empty($team_no)
        ||empty($challenges)||empty($partner_consent)||empty($experience)||empty($working_hours)
        ||empty($user)){
        ?><script>
            $('.loader').fadeOut()
            $(".cb").html("<span style='color:crimson;'>You missed a field</span>")
            $('.step2').hide()
            $('.step2').hide()
            $('.step1').fadeIn()
        </script><?php
    }else{

        $date = date("Y-m-d");
        $query = "INSERT INTO tech_to_start (user,start_up_ideas,product_features,develop_stage,bus_name,headquatered,product_kind,`targeting`,team_no,challenges,partner_consent,experience,working_hours,`date`) 
        VALUES('$user','$start_up_ideas','$product_features','$develop_stage','$bus_name','$headquatered','$product_kind','$targeting','$team_no','$challenges','$partner_consent','$experience','$working_hours','$date')";
        $success= mysqli_query($conn, $query);

        $query2 = "UPDATE kedosic_users SET tech_to_start='1' WHERE k_code = '$user'";
        $success2 = mysqli_query($conn, $query2);

        if ($success && $success2) {
            ?><script>
                $('.loader').fadeOut() 
                window.location="account"
            </script><?php
        }else{
            ?><script>
                $('.loader').hide()
                alert("An error occured")
            </script><?php
        }

    }
}