<!DOCTYPE html>
<html>
    <head>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!--Custom styles-->
        <link rel="stylesheet" type="text/css" href="../styles/signup.css">
        
        <title>Zomato Signip</title>
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign Up</h3>
                    </div>
                    <div class="card-body">
                        <form action="./signup.php" method="post">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="username" required placeholder="username">
                                
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" name="password" required placeholder="password">
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" name="confirmpassword" required placeholder="confirm password">
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="password" class="form-control" name="firstname" required placeholder="First Name">
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="password" class="form-control" name="lastname" required placeholder="Last Name">
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Sign up" class="btn float-right login_btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <?php
             $name= $password= $confirmpassword= $firstname= $lastname= '';
             if(isset($_POST['username'])){
                $name = $_POST['username'];
             } else{
                 $name ="Username is not entered";
             }
             if(isset($_POST['password'])){
                 $password = $_POST['password'];
             } else{
                 $password = "";
             }
             if(isset($_POST['confirmpassword'])){
                $confirmpassword = $_POST['confirmpassword'];
            } else{
                $confirmpassword = "";
            }
            if(isset($_POST['firstname'])){
                $firstname = $_POST['firstname'];
            } else{
                $firstname = "";
            }
            if(isset($_POST['lastname'])){
                $lastname = $_POST['lastname'];
            } else{
                $lastname = "";
            }

            function verifyDetails($name, $password, $confirmpassword, $firstname, $lastname){
                    if($password === $confirmpassword &&isset($_POST['password']) && isset($_POST['confirmpassword'])){
                        header("Location: home.php"); 
                        exit;
                     } else{
                         echo "password and Confirm password does not match";
                     }
            }
            verifyDetails($name, $password, $confirmpassword, $firstname, $lastname);
        
        ?>
    </body>
</html>