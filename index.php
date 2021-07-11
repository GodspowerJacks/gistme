<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <title>Gistme</title>
</head>
<body>
    <div id="main">
        <div id="info" class="col-md-12 d-flex-column justify-content-center align-items-center">

            <form action="login.php" method="post" class="col-md-6 d-flex row text-center mt-5 border rounded p-3">
            <h2>Login Here</h2>

                <div class="form-group p-2">
                    <input type="text" name="uname" class="form control p-2 col-md-6 border rounded col-12" placeholder="Username">
                </div>
                <div class="form-group p-2">
                    <input type="password" name="pass" class="form control p-2 col-md-6 border rounded col-12" placeholder="Password">
                </div>
                <div class="form-group p-2">
                    <button type="submit"class="btn btn-info col-12 col-md-6">Login</button>
                </div>
            </form>

            <form action="signup.php" method="post" class="col-md-6 d-flex row text-center mt-5 border rounded p-3">
                <h5>Don't have an account please sign up here</h5>
                <div class="form-group p-2">
                    <input type="text" name="uname" class="form control p-2 col-md-6 col-12 border rounded " placeholder="Username">
                </div>
                <div class="form-group p-2">
                    <input type="email" name="email" class="form control p-2 col-md-6 col-12 border rounded " placeholder="Email Address">
                </div>
                <div class="form-group p-2">
                    <input type="password" name="pass" class="form control p-2 col-md-6 col-12 border rounded " placeholder="Password">
                </div>
                <div class="form-group p-2">
                    <button type="submit"class="btn btn-info col-md-6 col-12">Signup</button>
                </div>  
            </form>

        </div>
    </div>
</body>
</html>