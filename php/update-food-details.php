<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <title>Zomato - Update</title>
        <link rel="stylesheet" href="../styles/food-details.css">
        <link rel="stylesheet" href="../styles/styles.css">
    </head>

    <body>
        <!-- <header>
            <a href="./food-items-list.php" id="deleteMovieBtn" class="btn btn-primary">Delete food details</a>
        </header> -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                        <a class="navbar-brand" href="./food-items-list.php">Zomato</a>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="./food-items-list.php" class="nav-link">Delete Food Details</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="form" action="./food-items-list.php">
                        <span class="form-title">
                            Update food item
                        </span>
            
                        <div class="div-input">
                            <span class="label-input100">Food Type</span>
                            <input class="input100" type="text" name="type" value="Indian">
                        </div>
                        <div class="div-input">
                            <span class="label-input100">Description</span>
                            <input class="input100" type="text" name="description" value="Spicy food">
                        </div>
                        <div class="div-input">
                            <span class="label-input100">Ingredients</span>
                            <textarea class="input100" name="ingredients">
                                Mushrooms, Olives, Onions, Green  bell peppers and Fresh tomatoes.
                            </textarea>
                        </div>
            
                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>


</html>
