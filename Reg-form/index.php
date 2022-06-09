    <?php
    include_once('config.php');
    if(isset($_POST['submit']))
    {
    $fname=$_POST['fullname'];
    $mnumber=$_POST['mobilenumber'];
    $emailid=$_POST['emailid'];
    $password=$_POST['password'];
    $cpassword=$_POST['confirmpassword'];
    //Serverside Validation
    if(empty($fname))
    {
    $error = "Enter your fullname !";
    $code = 1;
    }

    if(empty($fname))
    {
    $error = "Enter your fullname !";
    $code = 1;
    }
    else if(empty($mnumber))
    {
    $error = "Enter your mobile number !";
    $code = 2;
    }
    else if(!is_numeric($mnumber))
    {
    $error = "Mobile number must be numeric only!";
    $code = 2;
    }
    else if(strlen($mnumber)!=10)
    {
    $error = "Mobile nuber should be 10 digit only!";
    $code = 2;
    }
    else if(empty($emailid))
    {
    $error = "Enter your email !";
    $code = 3;
    }
    else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $emailid))
    {
    $error = "Enter valid email id !";
    $code = 3;
    }
    else if(empty($password))
    {
    $error = "Enter your password";
    $code = 4;
    }
    else if(strlen($password) < 6 )
    {
    $error = "Password must be 6 characters long !";
    $code = 4;
    }

    else if(empty($cpassword))
    {
    $error = "Enter your confirm password";
    $code = 5;
    }
    else if(strlen($cpassword) < 6 )
    {
    $error = "Confirm Password must be 6 characters long !";
    $code = 5;
    }
    else if($cpassword!=$password)
    {
    $error = "Password and Confirm Password doesnot match";
    $code = 5;
    }

    else{
    //Checking emailid and mobile number if already registered

    $ret=mysqli_query($con, "select id from tblregistration where EmailId='$emailid' || MobileNumber='$mnumber'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
    echo "<script>alert('This email already associated with another account');</script>";
    }
    else{
        header("location:registration.php?uid=$emailid");

    $query=mysqli_query($con,"insert into tblregistration(FullName,MobileNumber,EmailId,Password) values('$fname','$mnumber','$emailid','$password')");
    if($query){
    echo "<script>alert('Data submitted')</script>";
    echo "<script>window.location.href='registration.php';</script>";
    } else {
    echo "<script>alert('Something went wrong. Please try again.')</script>";
    echo "<script>window.location.href='registration.php';</script>";
    }
    }
    }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Colorlib Templates">
        <meta name="author" content="PHPGurukul">
        <meta name="keywords" content="PHPGurukul Scripts">

        <!-- Title Page-->
        <title>User Registration</title>

        <!-- Font special for pages-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

        <link href="css/main.css" rel="stylesheet" media="all">
    </head>

    <body>
        <div class="page-wrapper bg-dark p-t-10 p-b-50">
            <div class="wrapper wrapper--w900">
                <form method="post">
                <div class="card card-6">
                    <div class="card-heading">
                        <h2 class="title">User Registration</h2>
                    </div>
                    <div class="card-body">
    <p style="color:red;" align="center"><?php if(isset($error)) { echo $error; }?> </p>                
                            
    <div class="form-row">
    <div class="name">Full name</div>
    <div class="value">
    <input type="text" name="fullname" class="input--style-6" value="<?php if(isset($fname)){echo $fname;} ?>"  <?php if(isset($code) && $code == 1){ echo "autofocus"; }  ?> />
    </div>
    </div>
                            
    <div class="form-row">
    <div class="name">Mobile Number</div>
    <div class="value">
    <div class="input-group">
    <input type="text" name="mobilenumber" class="input--style-6" value="<?php if(isset($mnumber)){echo $mnumber;} ?>"  <?php if(isset($code) && $code == 2){ echo "autofocus"; } ?> />
    </div>
    </div>
    </div>
                        
    <div class="form-row">
    <div class="name">Email id</div>
    <div class="value">
    <div class="input-group">
    <input type="text" name="emailid" class="input--style-6" value="<?php if(isset($emailid)){echo $emailid;} ?>"  <?php if(isset($code) && $code ==3){ echo "autofocus"; } ?> />
    </div>
    </div>
    </div>
                        
    <div class="form-row">
    <div class="name">Password</div>
    <div class="value">
    <div class="input-group">
    <input type="password" name="password" class="input--style-6" value="<?php if(isset($password)){echo $password;} ?>"  <?php if(isset($code) && $code ==4){ echo "autofocus"; } ?> />
    </div>
    </div>
    </div>

    <div class="form-row">
    <div class="name">Confirm Password</div>
    <div class="value">
    <div class="input-group">
    <input type="text" name="confirmpassword" class="input--style-6" value="<?php if(isset($cpassword)){echo $cpassword;} ?>" <?php if(isset($code) && $code ==5){ echo "autofocus"; } ?> />
    </div>
    </div>
    </div>

    </div>

    <div class="card-footer">
    <button class="btn btn--radius-2 btn--blue-2" type="submit" name="submit">Submit</button>
    </div>
    </div>
    </form>

            </div>
        </div>
        <script src="vendor/jquery/jquery.min.js"></script>
    </body>
    </html>
