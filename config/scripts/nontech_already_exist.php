<?php include '../db/db.php';



// users first registeration
if (isset($_POST['done'])) { 

    $user = mysqli_real_escape_string($conn, $_POST['user']);

    $startup_experience = mysqli_real_escape_string($conn, $_POST['startup_experience']);
    $prod_name = mysqli_real_escape_string($conn, $_POST['prod_name']);
    $bus_plan = mysqli_real_escape_string($conn, $_POST['bus_plan']);
    $headquatered = mysqli_real_escape_string($conn, $_POST['headquatered']);
    $bus_age = mysqli_real_escape_string($conn, $_POST['bus_age']);
    $bus_industry = mysqli_real_escape_string($conn, $_POST['bus_industry']);
    $challenges = mysqli_real_escape_string($conn, $_POST['challenges']);
    $partners_consent = mysqli_real_escape_string($conn, $_POST['partners_consent']);
    $field_of_experience = mysqli_real_escape_string($conn, $_POST['field_of_experience']);
    $marketing_channel = mysqli_real_escape_string($conn, $_POST['marketing_channel']);
    $received_investment = mysqli_real_escape_string($conn, $_POST['received_investment']);
    $working_hours = mysqli_real_escape_string($conn, $_POST['working_hours']);
    $strtup_idea = mysqli_real_escape_string($conn, $_POST['strtup_idea']);
    $proposition = mysqli_real_escape_string($conn, $_POST['proposition']);
    $prod_feature = mysqli_real_escape_string($conn, $_POST['prod_feature']);
    $competitiors = mysqli_real_escape_string($conn, $_POST['competitiors']);
    $dev_stage = mysqli_real_escape_string($conn, $_POST['dev_stage']);
    $revenue = mysqli_real_escape_string($conn, $_POST['revenue']);
    $team_no = mysqli_real_escape_string($conn, $_POST['team_no']);

    if (empty($startup_experience) ||empty($prod_name) || empty($bus_plan)|| empty($headquatered)
        ||empty($bus_age)||empty($bus_industry)||empty($challenges)||empty($partners_consent)
        ||empty($field_of_experience)||empty($marketing_channel)||empty($received_investment)||empty($working_hours)
        ||empty($strtup_idea)||empty($proposition)||empty($prod_feature)||empty($competitiors)
        ||empty($dev_stage)||empty($revenue)||empty($team_no)){
        ?><script>
            $('.loader').fadeOut()
            $(".cb1").html("<span style='color:crimson;'>You missed a field</span>")
            $('.step2').hide() 
            $('.step1').fadeIn()
            alert("You missed a field")
        </script><?php
    }else{

        $date = date("Y-m-d");
        $query = "INSERT INTO nontech_already_exist (date,user,startup_experience,prod_name,bus_plan,headquatered,bus_age,bus_industry,challenges,partners_consent,field_of_experience,marketing_channel,received_investment,working_hours,strtup_idea,proposition,prod_feature,competitiors,dev_stage,revenue,team_no) 
        VALUES('$date','$user','$startup_experience','$prod_name','$bus_plan','$headquatered','$bus_age','$bus_industry','$challenges','$partners_consent','$field_of_experience','$marketing_channel','$received_investment','$working_hours','$strtup_idea','$proposition','$prod_feature','$competitiors','$dev_stage','$revenue','$team_no')";
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