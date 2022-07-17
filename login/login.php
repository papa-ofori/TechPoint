<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="../css/sign.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css ">
    <title>Responsive Contact Form HTML | CSS</title>
</head>

<body style="background-image:url('../images/wallpaper.jpg');">
    <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h2>Login</h2>
            </div>
            <div class="row clearfix">
                <div class="">
                    <form action="loginproc.php" method="POST" >

                        <!-- customer email -->
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="email" name="uemail" id="uemail" placeholder="Enter your Email" required />
                        </div>

                        <!-- customer password -->
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="upass1" id="upass" placeholder="Enter your Password" required />
                        </div>
                            <p class="credit"><a href="registration.php" target="_blank">Don't have an account?</a></p>
                  
                        <input class="button" type="submit" name="logBtn" value="Login" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>