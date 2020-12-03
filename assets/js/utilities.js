window.onscroll = function() {
    //console.log("scrolling: " + window.pageYOffset)
    if (window.pageYOffset >= 70) {
     $(".site-header").addClass("sticky-top")
     $(".site-header").addClass("is-showing")
     //alert("class added")
    }else{
        $(".site-header").removeClass("sticky-top")
     $(".site-header").removeClass("is-showing")
    }
  }

  var sidebar_is_open = false;
  $(".side-bar-btn").click(function(){

    if(sidebar_is_open){
        $(".site-sidebar").removeClass("sidebaropen")
        $(".site-sidebar").addClass("sidebarclose")
        $(".site-sidebar").css("right", "-100%")
        
        sidebar_is_open = false;
    }else{
        $(".site-sidebar").removeClass("sidebarclose")
        $(".site-sidebar").addClass("sidebaropen")
        $(".site-sidebar").css("right", "0%")
        sidebar_is_open = true;
    }
  })