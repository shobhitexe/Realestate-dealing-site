<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in or Sign up</title>
    <link rel="stylesheet" href="../css/login.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet"/>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
   <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="loginpage.php"  class="sign-in-form" method="post">
              <div class="logo">
                <img src="../images/head-logo.png" alt="" />
                <h4>Real Estate Dealer</h4>
              </div>
              <?php include '../php/login.php';?>
              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    name ="user"
                    minlength="4"
                    class="input-field"
                    required
                  />
                  <label>UserName</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    name = "passcheck"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />

                  <label>Password</label>

                </div>
                <div class="input-wrap">
                <div class="checkbx">
                <div class="checkbxtxt">
                <label for="check"><br> Remember Me </label>
                </div>
                <div class="checkbxtxt">
                 <input type="checkbox"  name="check" value="Remember Me">
                </div>
                   </div>
                   </div>

                
                <input type="submit" value="Sign in" name ="logbutton" class="sign-btn" />
                <!----
                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>  -->
              </div>
            </form>
            <form action="" name="signupform" class="sign-up-form" method="post">
              <div class="logo">
                <img src="./img/logo.png" alt="" />
                <h4>Real Estate Dealer</h4>
              </div>
              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?
                </h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    name="username"
                    minlength="4"
                    class="input-field"
                    required
                  />
                  <label>Username</label>
                </div>

                <div class="input-wrap">
                    <input
                      type="text"
                      minlength="4"
                      name="names"
                      class="input-field"
                      required
                    />
                    <label>Name</label>
                  </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    name="email"
                    class="input-field"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    name="pass"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign Up" name ="submit" class="sign-btn" />
                     <!--
                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p> -->
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="../images/card1.jpg" class="image img-1 show" alt="" />
              <img src="../images/card2.jpg" class="image img-2" alt="" />
              <img src="../images/card3.jpg" class="image img-3" alt="" />
            </div>
               
            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Explore More Real estates</h2>
                  <h2>Sell Your properties</h2>
                  <h2>Rent a House/apartment</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
                <p><?php include '../php/signup.php';?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    

    <script src="../js/app.js"></script>
  </body>
</html>



