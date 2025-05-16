<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login..</title>
    <link rel="stylesheet" href="../Styles/bootstrap.min.css" />
    <script src="../Scripts/jquery-3.4.1.min.js"></script>
    <script src="../Scripts/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
</head>
<div class="container">
    <div class="col-10 offset-1">
        <h1 class="text-center">Nanosoft System</h1>
        <hr>
        <h6 class="text-center">An all in one solution for inventory on web</h6>
        <div class="col-8 offset-2" style="margin-top: 30px;">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <div class="form-group">
                    <label for="">Username : </label>
                    <input type="text" name="userTxt" placeholder="Nanosoft name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">Password : </label>
                    <input type="password" name="passwordTxt" placeholder="Min 6 Characters" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit" name="submitBtn" value="LOGIN" class="btn btn-dark col-12" />
                    <label><?php if (isset($error)) {
                                echo $error;
                            } ?></label>
                            <a href="#">Register</a><a href="#"> Forget</a>
                </div>
            </form>
            
        </div>
        
    </div>
</div>

<body>
</body>

</html>

<?php
include "validate.php";
include "connection.php";
$error = "";
if (isset($_POST["submitBtn"])) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = validate($_POST["userTxt"]);
        $pass = validate($_POST["passwordTxt"]);
        if (!empty($username) && !empty($pass)) {
           
            global $con;
            $query = "SELECT * FROM userlogin WHERE username = '$username' and password = '$pass'";
            
            $result = mysqli_query($con, $query);
            
            if (mysqli_num_rows($result) > 0) {
             
                $row = mysqli_fetch_row($result);
                session_start();
                $roleID = $row[0];
                $username = $row[1];
                $password = $row[2];
                $phone = $row[3];
                $userdetails= $row[4];
                $loginip = $row[5];
                $blockactivtiy = $row[6];
                $action = $row[7];
                $postdate = $row[8];
               
                if($action=="Admin"){
                    $_SESSION["name"]=$username;
                   header("location:admin.php");
                }
            } else {
               echo "Invalid username password";
            }
        } else {
           $error = "Ener username or password.";
        }
    }
}
?>