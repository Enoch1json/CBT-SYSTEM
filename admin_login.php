
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Admin Login</h2>
              
            </div>
          </div>
        </div>
      </div> 
    

    
<form method="POST" id="login_form">
    <div class="site-section">
        <div class="container">

                                       
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                          <div id="feedback" style="font-size: 22px; color: rgb(255,0,0); font-family: vandana "></div>
                            <label for="username">Username</label>
                            <input type="text" id="username" class="form-control form-control-lg">
                            <span id="username_feedback"></span>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="password" id="password" class="form-control form-control-lg">
                            <span id="password_feedback"></span>
                        </div>
                         <div >
                        <img id ="loading_image" src="images/loading.gif" style="width: 50%; height: 50%; display: none">
                        <span id="process" style="margin-left: 0%; padding-left: 0px; font-size: 20px; font-family: vandana"></span>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input id="login" type="submit" value="Log In" class="btn btn-primary btn-lg px-5">
                            <span style="margin-left: 30%"><a style="color: rgb(255,0,0);" href="#">Forget password</a></span>

                        </div>
                        </div>
                </div>
            </div>
            

          
        </div>
    </div>

    </form>

       

  </div>
  <!-- .site-wrap -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <script type="text/javascript" src="script/login.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
  $("#login").click(function(e){
    e.preventDefault();
   var username = $("#username").val();
   var password = $("#password").val();


function username1(username){
        if(username == ""){
          $("#username_feedback").text("**Please enter username").css("color","rgb(255,0,0)").hide().fadeIn(1000);
          $("#username").focus();
          return false;
        }else{
          $("#username_feedback").text("");
        }
      }

   function password1(password){
      if (password == "") {
        $("#password_feedback").text("**Please enter password").css("color","rgb(255,0,0)").hide().fadeIn(1000);
         $("#password").focus();
         return false;
      }else{
        $("#password_feedback").text("");
      }
     }

      username1(username);
      password1(password);

      if (username1(username) !== false && password1(password) !== false ) {

      $.ajax({
            url : "admin_login_engine.php",
            method : "POST",
            data : {
              "login" : 1,
              "username" : username,
              "password" : password
            },
            beforeSend : function(){
            $("#loading_image").show();
                $("#process").text("Please wait...");
          },
         success : function(data){
          if (data == "1") {
            window.location = "admin_dashboard.php"; 
          }else{
            $("#feedback").html(data).hide().fadeIn(1000);
               $("#loading_image").hide();
                $("#process").hide(); 
                //$("#login_form")[0].reset();
         
          }
          }
            

      });

 }




});
});
  </script>

</body>

</html>