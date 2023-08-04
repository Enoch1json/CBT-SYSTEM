
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Jetbrain academy online examination registration</title>
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
              <h2 style="font-family: vandana;" class="mb-0">Student Registration</h2>
            
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        
        
      </div>
    </div>
                 <form method="POST" id="register_form">
                     <div class="site-section">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                       <div class="col-md-12 form-group">
                            <label style="font-family: vandana;" for="Firstname">Firstname</label>
                            <input type="email" id="firstname" class="form-control form-control-lg">
                            <span id="firstname_feedback"></span>
                        </div>

                       <div class="col-md-12 form-group">
                            <label style="font-family: vandana;" for="Firstname">Othername</label>
                            <input type="email" id="othername" class="form-control form-control-lg">
                            <span id="othername_feedback"></span>
                        </div>

                         <div class="col-md-12 form-group">
                            <label style="font-family: vandana;" for="Firstname">Username</label>
                            <input type="email" id="username" class="form-control form-control-lg">
                            <span id="username_feedback"></span>
                        </div>


                      <div class="col-md-12 form-group">
                            <label style="font-family: vandana;" for="Firstname">Email</label>
                            <input type="email" id="email" class="form-control form-control-lg">
                            <span id="email_feedback"></span>
                        </div>

                        <div class="col-md-12 form-group">
                            <label style="font-family: vandana;" for="othername">Password</label>
                            <input type="password" id="password" class="form-control form-control-lg">
                            <span id="password_feedback"></span>
                        </div>


                        <div class="col-md-12 form-group">
                            <label style="font-family: vandana;" for="pword2">Re-type Password</label>
                            <input type="password" id="ver_password" class="form-control form-control-lg">
                            <span id="ver_password_feedback"></span>
                        </div>
                    <div class="row">
                        <div class="col-12">
                            <input style="font-family: vandana;" id="register" type="submit" value="Register" class="btn btn-primary btn-lg px-5">
                            <a style="font-family: vandana; margin-left: 100px" href="user_login.php">Login</a>
                        </div>

                    </div>
                    <span id="process" style="margin-left: 55%; font-size: 20px; font-family: 
                    vandana"></span>
                    <span id="success" style="margin-left: 40%; font-size: 20px; font-family: 
                    vandana; color: green"></span>
                </div>
            </div>
            

          
        </div>
    </div>

                 </form>
  
    

   
      </div>
    </div>
    

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
  <script type="text/javascript" src="script/register.js"></script>
  <script src="js/main.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
            function firstname(name1){
      if (name1.trim() == "") {
          $("#firstname_feedback").text("**Please provide your firstname").css("color","rgb(255,0,0)");
           $("#name1").focus();
           return false;
           }else{
          $("#firstname_feedback").text("");
        }
        if (name1.length < 3) {
           $("#firstname_feedback").text("**Firstname must not be less than *3* characters").css("color","rgb(255,0,0)");
             $("#name1").focus();
           return false;
        }
       }   

   function othername(name2){
    if (name2.trim() == "") {
          $("#othername_feedback").text("**Please provide your othername").css("color","rgb(255,0,0)");
              return false;
         }else{
          $("#othername_feedback").text("");
         }
         if (name2.length < 3) {
          $("#othername_feedback").text("**Othername must not be less than *3* characters").css("color","rgb(255,0,0)");
               return false;
         }
   }

   function username1(username){
        if(username.trim() == ""){
          $("#username_feedback").text("**Please provide your username").css("color","rgb(255,0,0)");
          return false;
        }else{
          $("#username_feedback").text("");
        }
      if(username.length < 6){
          $("#username_feedback").text("**Username must not be less than *6* characters").css("color","rgb(255,0,0)");
          return false;
        }


    
      }


          function mail(email){
          var mailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
          var test_mail = mailReg.test(email);
            if (email.trim() == "") {
              $("#email_feedback").text("**Email must be provided").css("color", "rgb(255,0,0)");
              return false;
            }else{
              $("#email_feedback").text("");
            }
            if (!test_mail) {
              $("#email_feedback").text("**Invalid Email address").css("color","rgb(255,0,0)");
              return false;
            }else{
              $("#email_feedback").text("");
            }
          }
        function password1(password){
             if (password.trim() == "") {
              $("#password_feedback").text("**Enter your password").css("color","rgb(255,0,0)");
              return false;
             }else{
              $("#password_feedback").text("");
             }

             if (password.length < 8) {
               $("#password_feedback").text("**Password is too weak").css("color","rgb(255,0,0)");
               return false;
             }else{
              $("#password_feedback").text("");
             }

        }

          function verify_password(ver_password,password){
                  if (ver_password.trim() == "") {
                    $("#ver_password_feedback").text("**Verify your password").css("color","rgb(255,0,0)");
                    return false;
                  }else{
                    $("#ver_password_feedback").text("");
                  }
                  if (ver_password !== password) {
                   $("#ver_password_feedback").text("**Password does not matched").css("color","rgb(255,0,0)");
                   return false;
                  }else{
                    $("#ver_password_feedback").text("");
                  }
          }

       $("#register").click(function(e){
           e.preventDefault();
          var name1 = $("#firstname").val();
          var name2 = $("#othername").val();
          var username = $("#username").val();
          var email = $("#email").val();
          var password = $("#password").val();
          var ver_password = $("#ver_password").val();

            firstname(name1);
            othername(name2);
            username1(username);
            mail(email);
            password1(password);
            verify_password(ver_password,password);

if (mail(email) != false && password1(password) != false && verify_password(ver_password,password) != false &&  firstname(name1) != false && othername(name2) != false && username1(username) != false  ) {
    $.ajax({
      url : "user_registration_engine.php",
      method : "POST",
      data : {
         "register" : 1,
         "firstname" : name1,
         "othername" : name2,
         "username"  : username,
         "email" : email,
         "password" : password,
         "ver_password" : ver_password
      },
      beforeSend : function(){
        $("#process").text("Processing, please wait...");
        $("#register").attr("disabled", "disabled");
        $("#register").val("Please wait...");
      },
      success : function(data){
        if (data == "2") {
          $("#success").html("Registration successful. " + "<a href='login.php'>Login now </a>" ).delay(3000).fadeOut();
          $("#process").hide();
          $("#register_form")[0].reset();
          $("#register").attr("disabled",false);
          $("#register").val("Register");
        }else if (data == "1") {
         $("#email_feedback").text("**Email already exist").css("color","rgb(255,0,0)");
          $("#process").hide();
          $("#register").attr("disabled",false);
          $("#register").val("Register");
        }else if (data == "3"){
          $("#username_feedback").text("**Username already exist").css("color", "rgb(255,0,0)");
          $("#process").hide();
          $("#register").attr("disabled",false);
          $("#register").val("Register");
        }else{
           $("#success").text("**An error occur, pleae retry").css("color","rgb(255,0,0)");
          $("#process").hide();
           $("#register").attr("disabled",false);
            $("#register").val("Register");
           alert(data);
          //$("#register_form")[0].reset();
        }
      }

    });
 }
    });
    });



  </script>

</body>

</html>