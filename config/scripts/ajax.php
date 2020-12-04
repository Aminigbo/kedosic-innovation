<?php include '../db/db.php';



// users first registeration
if (isset($_POST['register'])) {
    $firstname  = mysqli_real_escape_string($conn, $_POST['firstname']) ;
    $lastname  = mysqli_real_escape_string($conn, $_POST['lastname']) ;
    $email  = mysqli_real_escape_string($conn, $_POST['email']) ;
    $phone  = mysqli_real_escape_string($conn, $_POST['phone']) ;

     // GENERATE A UNIQUE USERNAME FOR EVERY user
     function checkKeys($conn, $randStr){
        $sql = "SELECT * FROM kedosic_users"; 
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)) {

            while ($row=mysqli_fetch_assoc($result)) {
            if ($row['k_code']== $randStr) { 
                $keyExist = true;
                break;

            }else{  
                $keyExist = false; 
            }
            }
            return $keyExist;
        }
         
    }

    function generateKey($conn){
        $keyLenght = 7;
        $str = "J5K4H55B6LE5L7K6";
        $randStr =substr(str_shuffle($str), 0, $keyLenght);

        $checkKey =checkKeys($conn, $randStr); 

        while ( $checkKey==true) {
        $randStr =substr(str_shuffle($str), 0, $keyLenght);
        $checkKey =checkKeys($conn, $randStr);
        }

        return $randStr;

    }
    $k_code=generateKey($conn);

    
    
    if (empty($firstname) ||empty($lastname) || empty($email)|| empty($phone)) {
        ?><script>
            $('.loader').fadeOut()
                $(".cb").html("<span style='color:crimson;'>You missed a field</span>")
        </script><?php
    }else{
        // check if email exists
        $sql = "SELECT * FROM kedosic_users WHERE email='$email' "; 
        $result = mysqli_query($conn, $sql);
        
        // check if phone exists
        $sql2 = "SELECT * FROM kedosic_users WHERE phone='$phone' "; 
        $result2 = mysqli_query($conn, $sql2);

        if (mysqli_num_rows($result)) {
            ?><script>
            
            $('.loader').fadeOut()
                $(".cb").html("<span style='color:crimson;'>Email already taken</span>")
            </script><?php

        }elseif (mysqli_num_rows($result2)){
            ?><script>
            $('.loader').fadeOut()
                $(".cb").html("<span style='color:crimson;'>Phone number already taken</span>")
            </script><?php
        }else{

            ?><script>
                let k_code = "<?php echo $k_code ?>"
                $('.loader').fadeOut()
                // window.location="verify-otp.php?user_k_code="+k_code
                window.location="select-category";
            </script><?php

            $date = date("Y-m-d");
            $query = "INSERT INTO kedosic_users (firstname,lastname,email,phone,k_code,`date`,verified,tech_already_exist,tech_to_start,nontech_to_start,nontech_already_exist	) 
            VALUES('$firstname','$lastname','$email','$phone','$k_code','$date','0','0','0','0','0')";
            $success= mysqli_query($conn, $query);


            $query2 = "SELECT * FROM kedosic_users WHERE  k_code='$k_code' ";
            $results2 = mysqli_query($conn, $query2);
            
            if (mysqli_num_rows($results2)) { // user found
                $logged_in_user = mysqli_fetch_assoc($results2);
                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success']  = "You are now logged in";

                $firstname= $_SESSION['user']['firstname'];

                echo $firstname;

                // if ($type== "GURUADMIN@") {
                //     // header("location:admin");
                // }else{
                //     header("location:account");
                // }
                
            
            }


        }
    }

    

    

    
    

    
}