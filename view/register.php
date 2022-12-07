<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title> 

    <!-- Font Icon -->
    <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/register.css">
</head>


<body class="body">

    <div class="main">

        <section class="signup">
             <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="../actions/registerprocess.php" >
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="hidden" class="form-input" name="amount" id="amount" value="0.01" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="fullname" id="fullname" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-input" name="country" id="country" placeholder="Your Country"/>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-input" name="city" id="city" placeholder="Your City"/>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-input" name="org" id="org" placeholder="Business name"/>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-input" name="number" id="number" placeholder="Your Phone Number"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="save" id="save" class="form-submit" value="Sign up"> Submit </button>
                        </div>
                    </form>
                    
                    <p class="loginhere">
                        Have already an account ? <a href="login.php" class="loginhere-link"  >Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/js/main.js"></script>
    

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>



<!-- <button type="submit" name ="save"  onclick="checkExpression(document.form1.number)" > Register </button> -->

