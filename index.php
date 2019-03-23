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
                        First Name: <input type="text" name="FirstName" /><br/>
                        Do you like movies? <input type="radio" name="LikesMovies" value="Yes"> Yes <br/>
                        Do you like movies? <input type="radio" name="LikesMovies" value="No"> No <br/>
                        Do you like movies? <input type="radio" name="LikesMovies" value="Maybe"> I dunno...maybe <br/>
                        Favorite Sundae Toppings:<br />
                        <input type="radio" name="Toppings" value="Nuts"> Nuts <br/>
                        <input type="radio" name="Toppings" value="Fran\'s chocolate syrup"> Fran\'s chocolate syrup <br/>
                        <input type="radio" name="Toppings" value="Cherries"> Cherries <br/>
                        <input type="radio" name="Toppings" value="Rainbow Sprinkles"> Rainbow Sprinkles <br/>
                        <input type="radio" name="Toppings" value="Chocolate Sprinkles"> Chocolate Sprinkles <br/>
                        <input type="submit" />
                        </form>
                    ';
                }
            ?>
            
            
        <footer>
            <p>
                <small>
                    &copy;2019, E. Boyd, all rights reserved.
                </small>
            </p>
        </footer>
    </body>
</html>