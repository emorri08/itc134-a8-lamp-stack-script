<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>E.Boyd | ITC134 | Winter 2019 | Assignment 8 | Lamp Stack Script | Main/Home page with php form example</title>
        <link rel="stylesheet" href="css/main.css" type="text/css" />
    </head>
    <body>
        <div id="container">
            <h1>Random PHP form</h1>
            
            
                <?php
                    /*
                        if data is submitted, show it
                
                        if no data is submitted, show the form
                    */
                
                    if(isset($_POST["FirstName"])){//if data is submitted, show it
                        //echo $_POST["FirstName"];
                    
                        //best way to troubleshoot a form that is misbehaving
                        echo '<pre>';
                            var_dump($_POST);
                        echo '</pre>';
                    
                    }else{//show the form
                        echo '
                            <form action="form_postback.php" method="post">
                                <p id="name">
                                    First Name: <input type="text" name="FirstName" />
                                </p>
                                <p id="movies">
                                    Do you like movies?  
                                <p>
                                <p class="form">
                                    <input type="radio" name="LikesMovies" value="Yes"> Yes
                                <p class="form">
                                    <input type="radio" name="LikesMovies" value="No"> No
                                </p>
                                <p class="form">
                                    <input type="radio" name="LikesMovies" value="Maybe"> I dunno...maybe
                                </p>
                                <p id="toppings">
                                    Favorite Sundae Toppings:
                                </p>
                                <p class="form">
                                    <input type="radio" name="Toppings" value="Nuts"> Nuts
                                </p>
                                <p class="form">
                                    <input type="radio" name="Toppings" value="Fran\'s chocolate syrup"> Fran\'s chocolate syrup
                                    </p>
                                <p class="form">
                                    <input type="radio" name="Toppings" value="Cherries"> Cherries
                                    </p>
                                <p class="form">
                                    <input type="radio" name="Toppings" value="Rainbow Sprinkles"> Rainbow Sprinkles
                                    </p>
                                <p class="form">
                                    <input type="radio" name="Toppings" value="Chocolate Sprinkles"> Chocolate Sprinkles
                                    </p>
                                <p id="submit">
                                    <input type="submit" />
                                </p>
                            </form>
                        ';
                    }
                ?>
                
               
            <footer>
                <p class="footTxt">
                    <small>
                        &copy;2019, E. Boyd, all rights reserved.
                    </small>
                </p>
            </footer>
        </div>
    </body>
</html>