<?php include '../db/db.php';



// users first registeration
if (isset($_POST['done'])) {
    
    $making_money = mysqli_real_escape_string($conn, $_POST['making_money']);
    $team_no = mysqli_real_escape_string($conn, $_POST['team_no']);
    $partner_consent = mysqli_real_escape_string($conn, $_POST['partner_consent']);
    $investment = mysqli_real_escape_string($conn, $_POST['investment']);
    $working_hours = mysqli_real_escape_string($conn, $_POST['working_hours']);
    $start_up_experience = mysqli_real_escape_string($conn, $_POST['start_up_experience']);
    $bus_name = mysqli_real_escape_string($conn, $_POST['bus_name']);
    $headquatered = mysqli_real_escape_string($conn, $_POST['headquatered']);
    $bus_age = mysqli_real_escape_string($conn, $_POST['bus_age']);
    $prod_features = mysqli_real_escape_string($conn, $_POST['prod_features']);
    $competitors = mysqli_real_escape_string($conn, $_POST['competitors']);
    $stage_dev = mysqli_real_escape_string($conn, $_POST['stage_dev']);
    $field_of_expe = mysqli_real_escape_string($conn, $_POST['field_of_expe']);
    $marketing_channel = mysqli_real_escape_string($conn, $_POST['marketing_channel']);
    $product_kind = mysqli_real_escape_string($conn, $_POST['product_kind']);
    $target = mysqli_real_escape_string($conn, $_POST['target']);
    $idea_concept = mysqli_real_escape_string($conn, $_POST['idea_concept']);
    $value_prop = mysqli_real_escape_string($conn, $_POST['value_prop']);
    $user = mysqli_real_escape_string($conn, $_POST['user']);

    if (empty($making_money) ||empty($team_no) || empty($partner_consent)|| empty($investment)
        ||empty($working_hours)||empty($start_up_experience)||empty($bus_name)||empty($headquatered)
        ||empty($bus_age)||empty($prod_features)||empty($competitors)||empty($stage_dev)
        ||empty($field_of_expe)||empty($marketing_channel)||empty($product_kind)||empty($target)||empty($idea_concept)
        ||empty($value_prop)){
        ?><script>
            $('.loader').fadeOut()
            $(".cb1").html("<span style='color:crimson;'>You missed a field</span>")
            $('.step2').hide()
            $('.step3').hide()
            $('.step4').hide()
            $('.step1').fadeIn()
        </script><?php
    }else{

        $date = date("Y-m-d");
        $query = "INSERT INTO tech_already_exist (user,date,making_money,team_no,partner_consent,investment,working_hours,start_up_experience,`bus_name`,headquatered,bus_age,prod_features,competitors,stage_dev,field_of_expe,marketing_channel,product_kind,`target`,idea_concept,value_prop) 
        VALUES('$user','$date','$making_money', '$team_no','$partner_consent','$investment','$working_hours','$start_up_experience','$bus_name','$headquatered','$bus_age','$prod_features','$competitors','$stage_dev','$field_of_expe','$marketing_channel','$product_kind','$target','$idea_concept','$value_prop')";
        $success= mysqli_query($conn, $query);

        $query2 = "UPDATE kedosic_users SET tech_already_exist='1' WHERE k_code = '$user'";
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