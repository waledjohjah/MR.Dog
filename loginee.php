
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/includes/js/scripts.js"></script>
    <link rel="stylesheet" href="includes/css/style.css"/>

</head>
<body>
   
    <div id="logreg-forms">
      <section><img src="./images/logo.png"></section>
      <p class="mr.dog-login"> MR.DOG</p>
        <form class="form-signin" action="#" method="POST">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
            </div>
            <p style="text-align:center"> OR  </p>
            <div class="input-group">
              <input type="email" id="inputEmail" name="loginMail" value="" class="form-control"  placeholder="Email address" required autofocus="">
            </div>
            <div class="input-group">
              <input type="password" id="inputPassword" name="loginPass" class="form-control" value="" placeholder="Password" required autofocus>
            </div>
            <div class="input-group">
              <button class="btn btn-md btn-rounded btn-block form-control submit" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            </div>
            <a href="#" id="forgot_pswd">Forgot password?</a>
            <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>  
            <hr>
            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button>
            </form>
            <form action="#" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            <form action="#" class="form-signup" method="POST">
                <div class="social-login">
                    <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign up with Facebook</span> </button>
                  </div>
                  <div class="social-login">
                    <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign up with Google+</span> </button>
                </div>
                <p style="text-align:center">OR</p>
                <input type="text" id="user-name" class="form-control" name="username" placeholder="Full name" value="" required>
                <input type="email" id="user-email" class="form-control" name="email" placeholder="Email address" value="" required>
                <input type="password" id="user-pass" class="form-control" name="password" placeholder="Password" value="" required >
                <input type="password" id="user-repeatpass" class="form-control" name="cpassword" placeholder="Confirm Password" value="" required >
                <div class="input-group">
                <button class="btn btn-md btn-block submit" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
                </div>
                <a href="#" id="cancel_signup"><i class="fa fa-angle-left"></i> Back</a>
            </form>
            <br>
    </div>
  
</body>
</html>

