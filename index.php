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
    /* .site-header {
      background-color: white;
    } */
  </style>

</head>



<body>


  <!-- header start --->
  <?php include 'header.php'; ?>
  <!-- header end --->


  <!--- HOME PAGE START ---> 
  <main class="home-page">



    <!--- hero start --->
    <section class="hero">
      <div class="row1">
        <div class="box">
          <div class="title">Do you have an idea?</div>
          <div class="list-container"><button><i class="fa fa-check"></i></button> <span>Do you think it will work?</span></div>
          <div class="list-container"><button><i class="fa fa-check"></i></button> <span>Do you think it's profitable?</span></div>
          <div class="list-container"><button><i class="fa fa-check"></i></button> <span>Do you think it can scale?</span></div>
          <div class="apply-now-btn-container">
            <a href="apply" class="apply-now-btn">Apply Now</a>
          </div>

        </div>
      </div>
      <div class="row2">
        <img src="assets/images/6.svg" alt="" class="hero-img">
        <img src="assets/images/8.svg" alt="" class="circle-shape">
        <img src="assets/images/8.svg" alt="" class="zigzag-shape1">
        <img src="assets/images/8.svg" alt="" class="zigzag-shape2">
        <img src="assets/images/8.svg" alt="" class="triangle-shape">
      </div>
    </section>
    <!--- hero end --->
    <div class="triangle-container">
      <div class="triangle">
      </div>
      <img src="assets/images/5.svg" class="triangle-pin" alt="">
    </div>

    <!--- Tips start ---->
    <section class="tips-container">

      <div class="tips tip1">
        <div class="row1">
        
        As the world evolve and change, so is our ability to make it better. 
        Through our innovative ideas we can transform every industry. 
        We incorporate and work with great and creative minded entrepreneurs and
         innovators to change the future. With idea consumption, we help develop
          and train talented individuals to build their companies and brands..
          
          </div>
        <div class="row2">
          <div class="centered-div">
            <img src="assets/images/2.svg" alt="">
          </div>
        </div>
      </div>




      <div class="tips tip2">
        <div class="row1">

          <div class="centered-div">
            <img src="assets/images/3.svg" alt="">
          </div>

        </div>
        <div class="row2">
        Now than ever is the time to rethink what we do with our time, our raw 
        talents and our intellectual abilities. It is on us to develop and
         strategically change our world. We are committed to reduce the
          limitations that has held us back from our goals. We offer the
           opportunity for everyone to kick start their ideas and create
            a reputable company in every industry, especially in technological 
            advancements.

        

        </div>
      </div>



      <div class="tips tip3">
        <div class="row1">
        Innovation is a real challenge that is faced in every industry and in our 
      everyday lives. However, with the right tools and support, complex issues
       can be made simple and that is what we do. We want to take the next step 
       and move forward through a continuous brainstorming and solving the world 
       problems that we are faced with. We let you innovate with us through learning
        by doing. Innovative idea makes you lead the profits of tomorrow. It is less 
        risky to do something than do nothing.

        
        
        </div>
        <div class="row2">
          <div class="centered-div">
            <img src="assets/images/4.svg" alt="">
          </div>
        </div>
      </div>

    </section>
    <!--- Tips end --->


    <!--- partners start --->
    <section class="partners">

      <div class="title">Our <span>Part</span>ners</div>
      <div class="subtitle">Here are some of our Top-notch partners who came together to support this platform</div>


      <div class="partners-carousel owl-carousel owl-theme">

        <div class="box"><img src="assets/images/icons/f1.jpg" alt=""></div>
        <div class="box"><img src="assets/images/icons/f2.jpg" alt=""></div>
        <div class="box"><img src="assets/images/icons/f3.jpg" alt=""></div>
        <div class="box"><img src="assets/images/icons/f4.jpg" alt=""></div>
        <div class="box"><img src="assets/images/icons/f5.jpg" alt=""></div>
        <div class="box"><img src="assets/images/icons/f6.jpg" alt=""></div>
        <div class="box"><img src="assets/images/icons/f7.jpg" alt=""></div>
        <div class="box"><img src="assets/images/icons/f8.jpg" alt=""></div>
        <div class="box"><img src="assets/images/icons/f1.jpg" alt=""></div>

      </div>
    </section>
    <!--- partners end --->


    <!--- news start --->
    <section class="news">
      <div class="title">News</div>

      <div class="row1">
        <div class="box">
          <img src="assets/images/t3.jpg" alt="">
          <div class="overlay"></div>
          <div class="details">
            <div class="news-title">Trend Tag</div>
            <div class="news-description">An interactive new platform</div>
            <div class="news-date">12-06-2020</div>
          </div>

        </div>
      </div>

      <div class="row2">
        <div class="row1">
          <div class="box">
            <img src="assets/images/t3.jpg" alt="">
            <div class="overlay"></div>
            <div class="details">
              <div class="news-title">Trend Tag</div>
              <div class="news-description">An interactive new platform</div>
              <div class="news-date">12-06-2020</div>
            </div>
          </div>
        </div>

        <div class="row2 news-carousel owl-carousel owl-theme">

          <div class="box">
            <img src="assets/images/t3.jpg" alt="">
            <div class="overlay"></div>
            <div class="details">
              <div class="news-title">Trend Tag</div>
              <div class="news-description">An interactive new platform</div>
              <div class="news-date">12-06-2020</div>
            </div>
          </div>


          <div class="box">
            <img src="assets/images/t3.jpg" alt="">
            <div class="overlay"></div>
            <div class="details">
              <div class="news-title">Trend Tag</div>
              <div class="news-description">An interactive new platform</div>
              <div class="news-date">12-06-2020</div>
            </div>
          </div>


          <div class="box">
            <img src="assets/images/t3.jpg" alt="">
            <div class="overlay"></div>
            <div class="details">
              <div class="news-title">Trend Tag</div>
              <div class="news-description">An interactive new platform</div>
              <div class="news-date">12-06-2020</div>
            </div>
          </div>


          <div class="box">
            <img src="assets/images/t3.jpg" alt="">
            <div class="overlay"></div>
            <div class="details">
              <div class="news-title">Trend Tag</div>
              <div class="news-description">An interactive new platform</div>
              <div class="news-date">12-06-2020</div>
            </div>
          </div>


          <div class="box">
            <img src="assets/images/t3.jpg" alt="">
            <div class="overlay"></div>
            <div class="details">
              <div class="news-title">Trend Tag</div>
              <div class="news-description">An interactive new platform</div>
              <div class="news-date">12-06-2020</div>
            </div>
          </div>





        </div>
      </div>
    </section>
    <!--- news end --->




    <!-- testimonials start ---->
    <section class="testimonials">

      <div class="title">Testimonials</div>
      <div class="testimonials-carousel owl-carousel owl-theme">

        <div class="box">
          <div class="row1"><i class="fa fa-quote-left"></i></div>
          <div class="row2">An interactive new platform where people can read news</div>
          <div class="row3">- Tech Geek</div>
        </div>

        <div class="box">
          <div class="row1"><i class="fa fa-quote-left"></i></div>
          <div class="row2">An interactive new platform where people can read news</div>
          <div class="row3">- Tech Geek</div>
        </div>

        <div class="box">
          <div class="row1"><i class="fa fa-quote-left"></i></div>
          <div class="row2">An interactive new platform where people can read news</div>
          <div class="row3">- Tech Geek</div>
        </div>

        <div class="box">
          <div class="row1"><i class="fa fa-quote-left"></i></div>
          <div class="row2">An interactive new platform where people can read news</div>
          <div class="row3">- Tech Geek</div>
        </div>

        <div class="box">
          <div class="row1"><i class="fa fa-quote-left"></i></div>
          <div class="row2">An interactive new platform where people can read news</div>
          <div class="row3">- Tech Geek</div>
        </div>

        <div class="box">
          <div class="row1"><i class="fa fa-quote-left"></i></div>
          <div class="row2">An interactive new platform where people can read news</div>
          <div class="row3">- Tech Geek</div>
        </div>

      </div>
    </section>
    <!-- testimonials end --->


    <!--- footer start ---->
    <?php include 'footer.php'; ?>
    <!--- footer end --->




  </main>
  <!--- HOME PAGE END --->
</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- <script src="assets/js/jquery-2.1.4.min.js"></script> -->
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/utilities.js"></script>

<script>
  $('.partners-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    // animateIn: 'fadeIn',
    // animateOut: 'fadeOut',
    mouseDrag: true,
    margin: 0,
    nav: true,
    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  })


  $('.news-carousel').owlCarousel({
    // loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    dots: true,
    mouseDrag: true,
    margin: 30,
    // nav: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  })


  $('.testimonials-carousel').owlCarousel({
    // loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    dots: true,
    mouseDrag: true,
    margin: 30,
    // nav: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  })
</script>