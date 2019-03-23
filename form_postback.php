<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>E. Boyd | ITC134 | Winter 2019 | Assignment 8 | Lamp Stack Script | Form Postback Page</title>
        <link rel="stylesheet" href="css/main.css" type="text/css" />
    </head>
    <body>
        <h1>Random PHP Form -- Postback Example</h1>
            <p class="formPost">
                Hello, <?php echo $_POST["FirstName"]; ?>
            </p>
            <p class="formPost">
                We asked you if you like movies and your response was: <?php echo $_POST["LikesMovies"]; ?>
            </p>
            <p class="formPost">
                We asked you what your all-time favorite sundae topping is and your response was: <?php echo $_POST["Toppings"]; ?>
            </p>
        <footer>
            <p>
                <small>
                    &copy;2019, E. Boyd, all rights reserved.
                </small>
            </p>
        </footer>
    </body>
</html>