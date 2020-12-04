<button class="hamburger dashboard-expand-btn hide-on-desktop"><i class="fa fa-bars"></i></button>

<div class="mobile-details dashboard-mobile-details" style="display:;">

    <a href="" class="detail">
        <i class="fa fa-user"></i>
        <span><?php echo $firstname ?></span>
    </a>

    <a href="" class="detail">
        <i class="fa fa-check-circle"></i>
        <span>Status</span>
    </a>

    <a href="" class="detail">
        <i class="fa fa-star"></i> 
        <span>Progress</span>
    </a>

    <a href="" class="detail">
        <i class="fa fa-users"></i>
        <span>Team</span>
    </a>

    <?php
        
        if (empty($tech_already_exist) || empty($tech_to_start) || empty($nontech_to_start) || empty($nontech_already_exist)) {
            ?> 
            <a href="../select-category" class="detail">
                <i class="fa fa-folder"></i>
                <span>Business</span>
            </a> 
             <?php
        } ?>

    <a href="./?logout" class="detail">
        <i class="fa fa-lock"></i>
        <span>Sign Out</span>
    </a> <br><br><br>

    <div style="color:white;text-align:center;background-color:grey;border-radius:5px;"><b><?php echo $k_code?></b></div>

</div>

<div class="desktop-details dashboard-desktop-details" style="display:;">
    <div class="detail">
        <img src="../assets/images/t3.jpg" style="width:50%;border-radius:50%">

        <!-- <div class="sub-title">Welcome</div> --> <br> <br>
        <div class="title"><?php echo $firstname ?></div>
        <div class="sub-title"><?php echo $k_code?></div>
    </div>

    <div class="detail">
        <div class="title">Investment status</div>
        <div class="sub-title">Pending <i class="fa fa-check" style="color:green;opacity:1;"></i></div>
    </div>

    <div class="detail">
        <div class="title">Business Launch progress</div>
        <div class="progress-bar-container mt-1 mb-1">
            <div class="progress-bar"></div>
        </div>
        <div class="sub-title">40%</div> <br><br>

        <?php
        
        if (empty($tech_already_exist) || empty($tech_to_start) || empty($nontech_to_start) || empty($nontech_already_exist)) {
            ?> <a href="../select-category">Business Upload</a> <br> <br>
             <?php
        } ?>

        <a href="../">Back To Home</a> <br><br>

        <a href="./?logout" class="detail">
        <i class="fa fa-lock"></i>
        <span>Sign Out</span>
    </a> <br><br><br>

    <div style="color:white;text-align:center;background-color:grey;border-radius:5px;"><b><?php echo $k_code?></b></div>

    </div>


    <!-- <div class="detail">
        <div class="title mb-2">Team members</div>
        <div class="team-container">
            <div class="box">
                <img src="../assets/images/t3.jpg" alt="">
                <span class="name">Aminogbo Paul</span>
            </div>

            <div class="box">
                <img src="../assets/images/t3.jpg" alt="">
                <span class="name">Aminogbo Paul</span>
            </div> 
        </div>

    </div> -->


</div>