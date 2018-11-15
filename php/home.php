<!DOCTYPE html>
<html>
    <head>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!--Custom styles-->
        <link rel="stylesheet" type="text/css" href="../styles/home.css">
        
        <title>Zomato Login</title>
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Log In</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="./home.php">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="username" placeholder="username" required>
                                
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="password" required>
                            </div>
                            <div class="row align-items-center remember">
                                <input type="checkbox" name="remember">Remember Me
                            </div>
                            <div class="form-group">                
                                    <input type="submit" value="Login" class="btn float-right login_btn">                                
                                <!-- <a class="btn float-right login_btn" href="./food-items-list.php" role="button">Login</a> -->
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Don't have an account? <a href="./signup.php">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#">Forgot your password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
            //  print_r($_POST);
            
             $name= $password='';
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

            //  echo "<h2>The Details you have given are </h2>"."<br>";
            //  echo $name." is the username"."<br>";
            //  echo $password." is the username"."<br>";

             function authentication($name, $password){
                if($name == 'user' && $password = "test"){
                    echo "The user is a valid user";
                    header("Location: food-items-list.php"); 
                    exit;
                }
             }

             authentication($name, $password);
        
        ?>
    </body>
</html>








