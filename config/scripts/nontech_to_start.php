<?php include '../db/db.php';



// users first registeration
if (isset($_POST['done'])) { 

    $user = mysqli_real_escape_string($conn, $_POST['user']);

    $dev_stage = mysqli_real_escape_string($conn, $_POST['dev_stage']);
    $team_no = mysqli_real_escape_string($conn, $_POST['team_no']);
    $bus_plan = mysqli_real_escape_string($conn, $_POST['bus_plan']);
    $challenges = mysqli_real_escape_string($conn, $_POST['challenges']);
    $partners_consent = mysqli_real_escape_string($conn, $_POST['partners_consent']);
    $field_of_experience = mysqli_real_escape_string($conn, $_POST['field_of_experience']);
    $working_hours = mysqli_real_escape_string($conn, $_POST['working_hours']);
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $headquatered = mysqli_real_escape_string($conn, $_POST['headquatered']);
    $sub_business = mysqli_real_escape_string($conn, $_POST['sub_business']);
    $startup_idea = mysqli_real_escape_string($conn, $_POST['startup_idea']);
    $product_feature = mysqli_real_escape_string($conn, $_POST['product_feature']);
    $competitors = mysqli_real_escape_string($conn, $_POST['competitors']);

    if (empty($dev_stage) ||empty($team_no) || empty($bus_plan)|| empty($challenges)
        ||empty($partners_consent)||empty($field_of_experience)||empty($working_hours)||empty($product_name)
        ||empty($headquatered)||empty($sub_business)||empty($startup_idea)||empty($product_feature)
        ||empty($competitors)){
        ?><script>
            $('.loader').fadeOut()
            $(".cb1").html("<span style='color:crimson;'>You missed a field</span>")
            $('.step2').hide() 
            $('.step1').fadeIn()
            alert("You missed a field")
        </script><?php
    }else{

        $date = date("Y-m-d");
        $query = "INSERT INTO nontech_to_start (date,user,dev_stage,team_no,bus_plan,challenges,partners_consent,field_of_experience,working_hours,product_name,headquatered,sub_business,startup_idea,product_feature,competitors) 
        VALUES('$date','$user','$dev_stage','$team_no','$bus_plan','$challenges','$partners_consent','$field_of_experience','$working_hours','$product_name','$headquatered','$sub_business','$startup_idea','$product_feature','$competitors')";
        $success= mysqli_query($conn, $query);

        $query2 = "UPDATE kedosic_users SET nontech_to_start='1' WHERE k_code = '$user'";
        $success2 = mysqli_query($conn, $query2);

        if ($success && $success2) {
            ?><script>
                $('.loader').fadeOut() 
                window.location="account/"
            </script><?php
        }else{
            ?><script>
                $('.loader').hide()
                alert("An error occured")
            </script><?php
        }

    }


}